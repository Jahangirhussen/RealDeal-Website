const fs = require('fs');
const path = require('path');
const ROOT = path.join(__dirname, '..');

const MAP = JSON.parse(fs.readFileSync(path.join(__dirname, 'file_map.json'), 'utf-8'));

function relPrefix(newPath) {
  const depth = newPath.split('/').length - 1;
  if (depth === 0) return '.';
  return Array(depth).fill('..').join('/');
}

function rewriteContent(html, newPath) {
  const base = relPrefix(newPath);
  html = html.replace(/(href|src)="((?:realdeal-[a-zA-Z0-9\-]+\.html))(#[a-zA-Z0-9\-]*)?"/g, (m, attr, fname, frag) => {
    const target = MAP[fname];
    if (!target) return m;
    const newHref = (base === '.' ? '' : base + '/') + target;
    return `${attr}="${newHref}${frag || ''}"`;
  });
  html = html.replace(/(href|src)="assets\//g, (m, attr) => `${attr}="${base === '.' ? '' : base + '/'}assets/`);
  html = html.replace(/detailUrl:"(realdeal-[a-zA-Z0-9\-]+\.html)"/g, (m, fname) => {
    const target = MAP[fname];
    if (!target) return m;
    const dirTarget = target.endsWith('/index.html') ? target.slice(0, -'index.html'.length) : target;
    return `detailUrl:"${dirTarget}"`;
  });
  html = html.replace(/https:\/\/jahangirhussen\.github\.io\/RealDeal_Home\/(realdeal-[a-zA-Z0-9\-]+\.html)/g, (m, fname) => {
    const target = MAP[fname];
    if (!target) return m;
    const dirTarget = target.endsWith('/index.html') ? target.slice(0, -'index.html'.length) : target;
    return `https://jahangirhussen.github.io/RealDeal_Home/${dirTarget}`;
  });
  return html;
}

const HEADER_SRC = fs.readFileSync(path.join(ROOT, 'header.html'), 'utf-8');
const FOOTER_SRC = fs.readFileSync(path.join(ROOT, 'footer.html'), 'utf-8');

const HEADER_BLOCK_RE = /<header class="site-header[^"]*" id="siteHeader">[\s\S]*?<\/header>\n?/;
const FOOTER_BLOCK_RE = /<footer class="site-footer">[\s\S]*?<\/footer>\n?/;

const NAV_LINKS = {
  home: ['a', 'realdeal-home-white.html', 'Home'],
  services: ['dropdown', 'realdeal-services-white.html', null],
  packages: ['a', 'realdeal-packages-white.html', 'Packages'],
  portfolio: ['a', 'realdeal-portfolio-white.html', 'Portfolio'],
  blog: ['a', 'realdeal-blog-white.html', 'Blog'],
  about: ['a', 'realdeal-about-white.html', 'About us'],
  career: ['a', 'realdeal-career-white.html', 'Career'],
  contact: ['a', 'realdeal-contact-white.html', 'Contact us'],
};

function detectState(headerBlock) {
  const mode = headerBlock.slice(0, 120).includes('header-solid') ? 'solid' : 'hero';
  let active = 'home';
  for (const [key, [kind, href, label]] of Object.entries(NAV_LINKS)) {
    let re;
    if (kind === 'a') {
      re = new RegExp(`<a href="${href.replace(/\./g, '\\.')}" class="is-active"[^>]*>${label}</a>`);
    } else {
      re = new RegExp(`<a class="nav-dropdown-toggle is-active"[^>]*href="${href.replace(/\./g, '\\.')}"`);
    }
    if (re.test(headerBlock)) { active = key; break; }
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

function walk(dir, out = []) {
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const full = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(full, out);
    else if (entry.name.endsWith('.html')) out.push(full);
  }
}

const targets = [];
for (const sub of ['pages', 'portfolio', 'blogs']) {
  const dir = path.join(ROOT, sub);
  if (fs.existsSync(dir)) walk(dir, targets);
}

let changed = 0;
for (const fullPath of targets) {
  const newPath = path.relative(ROOT, fullPath).split(path.sep).join('/');
  let content = fs.readFileSync(fullPath, 'utf-8');

  const headerMatch = content.match(HEADER_BLOCK_RE);
  if (!headerMatch) { console.log('SKIP (no header found):', newPath); continue; }
  const { active, mode } = detectState(headerMatch[0]);

  let newHeader = buildHeader(active, mode);
  newHeader = rewriteContent(newHeader, newPath);
  let newFooter = rewriteContent(FOOTER_SRC, newPath);

  const before = content;
  content = content.replace(HEADER_BLOCK_RE, () => newHeader);
  content = content.replace(FOOTER_BLOCK_RE, () => newFooter);

  if (content !== before) {
    fs.writeFileSync(fullPath, content, 'utf-8');
    changed++;
  }
}

console.log('changed:', changed, '/', targets.length);
