const fs = require('fs');
const path = require('path');
const ROOT = require('path').join(__dirname, '..');

const HEADER_SRC = fs.readFileSync(path.join(ROOT, 'header.html'), 'utf-8');
const FOOTER_SRC = fs.readFileSync(path.join(ROOT, 'footer.html'), 'utf-8');
const HEADER_BLOCK_RE = /<header class="site-header[^"]*" id="siteHeader">[\s\S]*?<\/header>\n?/;
const FOOTER_BLOCK_RE = /<footer class="site-footer">[\s\S]*?<\/footer>\n?/;

const NAV_LINKS = {
  home: ['a', 'realdeal-home-white.html', 'Home'],
  services: ['dropdown', 'realdeal-services-white.html', null],
  packages: ['a', 'realdeal-packages-white.html', 'Packages'],
  portfolio: ['a', '__PORTFOLIO__', 'Portfolio'],
  blog: ['a', '__BLOG__', 'Blog'],
  about: ['a', 'realdeal-about-white.html', 'About us'],
  career: ['a', 'realdeal-career-white.html', 'Career'],
  contact: ['a', 'realdeal-contact-white.html', 'Contact us'],
};

function detectState(headerBlock) {
  const mode = headerBlock.slice(0, 120).includes('header-solid') ? 'solid' : 'hero';
  let active = 'home';
  // detect via title text since href is now a token; fall back scanning is-active near labels
  for (const [key, [kind, href, label]] of Object.entries(NAV_LINKS)) {
    if (kind === 'a') {
      const re = new RegExp(`<a href="[^"]*" class="is-active"[^>]*>${label}</a>`);
      if (re.test(headerBlock)) { active = key; break; }
    } else {
      if (/<a class="nav-dropdown-toggle is-active"/.test(headerBlock)) { active = key; break; }
    }
  }
  return { active, mode };
}

function buildHeader(active, mode) {
  let header = HEADER_SRC;
  if (mode !== 'hero') {
    header = header.replace(
      '<header class="site-header" id="siteHeader">',
      '<header class="site-header header-solid" id="siteHeader">'
    );
  }
  const [kind, href, label] = NAV_LINKS[active];
  if (kind === 'a') {
    header = header.replace(
      `<a href="${href}">${label}</a>`,
      `<a href="${href}" class="is-active" aria-current="page">${label}</a>`
    );
  } else {
    header = header.replace(
      `<a class="nav-dropdown-toggle" href="${href}"`,
      `<a class="nav-dropdown-toggle is-active" aria-current="page" href="${href}"`
    );
  }
  return header;
}

// depth: 0 = root, 1 = inside portfolio/ or blogs/
function rewrite(html, depth, folder) {
  const prefix = depth === 0 ? '' : '../';
  html = html.replace(/(href|src)="(realdeal-[a-zA-Z0-9\-]+\.html)((?:[#?][^"]*)?)"/g, (m, attr, fname, frag) => {
    return `${attr}="${prefix}${fname}${frag}"`;
  });
  html = html.replace(/(href|src)="assets\//g, (m, attr) => `${attr}="${prefix}assets/`);
  const portfolioTarget = depth === 0 ? 'portfolio/index.html' : (folder === 'portfolio' ? 'index.html' : '../portfolio/index.html');
  const blogTarget = depth === 0 ? 'blogs/index.html' : (folder === 'blogs' ? 'index.html' : '../blogs/index.html');
  html = html.split('__PORTFOLIO__').join(portfolioTarget);
  html = html.split('__BLOG__').join(blogTarget);
  return html;
}

function bakeInto(fullPath, depth, folder) {
  let content = fs.readFileSync(fullPath, 'utf-8');
  const headerMatch = content.match(HEADER_BLOCK_RE);
  if (!headerMatch) { console.log('SKIP (no header):', fullPath); return; }
  const { active, mode } = detectState(headerMatch[0]);
  let newHeader = rewrite(buildHeader(active, mode), depth, folder);
  let newFooter = rewrite(FOOTER_SRC, depth, folder);
  content = content.replace(HEADER_BLOCK_RE, () => newHeader);
  content = content.replace(FOOTER_BLOCK_RE, () => newFooter);
  fs.writeFileSync(fullPath, content, 'utf-8');
}

// root files
for (const f of fs.readdirSync(ROOT)) {
  if (f.endsWith('.html') && !['header.html', 'footer.html'].includes(f)) {
    if (f === 'index.html') continue; // redirect stub, no header/footer
    bakeInto(path.join(ROOT, f), 0, null);
  }
}
// portfolio/, blogs/
for (const folder of ['portfolio', 'blogs']) {
  const dir = path.join(ROOT, folder);
  if (!fs.existsSync(dir)) continue;
  for (const f of fs.readdirSync(dir)) {
    if (f.endsWith('.html')) bakeInto(path.join(dir, f), 1, folder);
  }
}
console.log('bake complete');
