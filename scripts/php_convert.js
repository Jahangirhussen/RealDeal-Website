const fs = require('fs');
const path = require('path');
const ROOT = path.join(__dirname, '..');

const WHATSAPP_SCRIPT_RE = /<script src="[^"]*assets\/whatsapp-config\.js"><\/script>\n?/g;
const HEADER_BLOCK_RE = /<header class="site-header[^"]*" id="siteHeader">[\s\S]*?<\/header>\n?/;
const FOOTER_BLOCK_RE = /<footer class="site-footer">[\s\S]*?<\/footer>\n?/;

const NAV_LABELS = {
  home: 'Home', packages: 'Packages', portfolio: 'Portfolio', blog: 'Blog',
  about: 'About us', career: 'Career', contact: 'Contact us',
};

function detectActive(headerBlock) {
  const mode = headerBlock.slice(0, 140).includes('header-solid') ? 'solid' : 'hero';
  if (/nav-dropdown-toggle is-active/.test(headerBlock)) return { active: 'services', mode };
  for (const [key, label] of Object.entries(NAV_LABELS)) {
    const re = new RegExp(`class="is-active"[^>]*>${label}</a>`);
    if (re.test(headerBlock)) return { active: key, mode };
  }
  return { active: 'home', mode };
}

function convertFile(fullPath, depth) {
  let content = fs.readFileSync(fullPath, 'utf-8');
  const headerMatch = content.match(HEADER_BLOCK_RE);
  if (!headerMatch) { console.log('SKIP (no header):', fullPath); return; }
  const { active, mode } = detectActive(headerMatch[0]);
  const inc = depth === 0 ? '' : '../';
  const headerInclude = `<?php $active_nav = '${active}'; $header_mode = '${mode}'; include '${inc}header.php'; ?>\n`;
  const footerInclude = `<?php include '${inc}footer.php'; ?>\n`;
  content = content.replace(WHATSAPP_SCRIPT_RE, '');
  content = content.replace(HEADER_BLOCK_RE, () => headerInclude);
  content = content.replace(FOOTER_BLOCK_RE, () => footerInclude);
  fs.writeFileSync(fullPath, content, 'utf-8');
}

let count = 0;
for (const f of fs.readdirSync(ROOT)) {
  if (f.endsWith('.php') && !['header.php', 'footer.php'].includes(f)) {
    convertFile(path.join(ROOT, f), 0);
    count++;
  }
}
for (const folder of ['portfolio', 'blogs']) {
  const dir = path.join(ROOT, folder);
  if (!fs.existsSync(dir)) continue;
  for (const f of fs.readdirSync(dir)) {
    if (f.endsWith('.php')) { convertFile(path.join(dir, f), 1); count++; }
  }
}
console.log(`converted ${count} files`);
