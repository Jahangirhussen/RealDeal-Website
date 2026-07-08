# -*- coding: utf-8 -*-
"""
Re-bakes header.html and footer.html into every realdeal-*.html page.

Header/footer are NOT included via JS fetch (that breaks when pages are
opened directly via file://). Instead each page gets a static copy of
header.html/footer.html baked into its <body>, kept in sync by this script.

Run this any time you edit header.html or footer.html:
    python scripts/sync_header_footer.py

It detects each page's current active nav item and header mode (hero vs
solid) from the ALREADY-baked header in that page, then re-bakes fresh
markup from header.html/footer.html preserving that same active/mode state.
"""
import re
import glob
import os

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

with open(os.path.join(ROOT, "header.html"), encoding="utf-8") as f:
    HEADER_SRC = f.read()

with open(os.path.join(ROOT, "footer.html"), encoding="utf-8") as f:
    FOOTER_SRC = f.read()

# key -> regex matching the *baked* nav link/toggle for that page, used to
# detect which page we're on and to re-apply the active state.
NAV_LINKS = {
    "home": ('a', 'realdeal-home-white.html', "Home"),
    "services": ('dropdown', 'realdeal-services-white.html', None),
    "packages": ('a', 'realdeal-packages-white.html', "Packages"),
    "portfolio": ('a', 'realdeal-portfolio-white.html', "Portfolio"),
    "blog": ('a', 'realdeal-blog-white.html', "Blog"),
    "about": ('a', 'realdeal-about-white.html', "About us"),
    "career": ('a', 'realdeal-career-white.html', "Career"),
    "contact": ('a', 'realdeal-contact-white.html', "Contact us"),
}

HEADER_BLOCK_RE = re.compile(r'<header class="site-header[^"]*" id="siteHeader">.*?</header>\n?', re.DOTALL)
FOOTER_BLOCK_RE = re.compile(r'<footer class="site-footer">.*?</footer>\n?', re.DOTALL)


def detect_state(header_block):
    mode = "solid" if "header-solid" in header_block[:120] else "hero"
    active = "home"
    for key, (kind, href, label) in NAV_LINKS.items():
        if kind == "a":
            pat = re.compile(
                r'<a href="' + re.escape(href) + r'" class="is-active"[^>]*>' + re.escape(label) + r'</a>'
            )
        else:
            pat = re.compile(
                r'<a class="nav-dropdown-toggle is-active"[^>]*href="' + re.escape(href) + r'"'
            )
        if pat.search(header_block):
            active = key
            break
    return active, mode


def build_header(active, mode):
    header = HEADER_SRC
    if mode != "hero":
        header = header.replace(
            '<header class="site-header" id="siteHeader">',
            '<header class="site-header header-solid" id="siteHeader">',
            1,
        )
    kind, href, label = NAV_LINKS[active]
    if kind == "a":
        header = header.replace(
            f'<a href="{href}">{label}</a>',
            f'<a href="{href}" class="is-active" aria-current="page">{label}</a>',
            1,
        )
    else:
        header = header.replace(
            f'<a class="nav-dropdown-toggle" href="{href}"',
            f'<a class="nav-dropdown-toggle is-active" aria-current="page" href="{href}"',
            1,
        )
    return header


def main():
    files = sorted(glob.glob(os.path.join(ROOT, "*.html")))
    changed = 0
    skipped = []
    for fn in files:
        base = os.path.basename(fn)
        if base in ("header.html", "footer.html", "index.html"):
            continue
        with open(fn, encoding="utf-8") as f:
            s = f.read()

        header_match = HEADER_BLOCK_RE.search(s)
        if not header_match:
            skipped.append(base)
            continue

        active, mode = detect_state(header_match.group(0))
        new_header = build_header(active, mode)

        s2 = HEADER_BLOCK_RE.sub(lambda m: new_header, s, count=1)
        s2 = FOOTER_BLOCK_RE.sub(lambda m: FOOTER_SRC, s2, count=1)

        if s2 != s:
            with open(fn, "w", encoding="utf-8") as f:
                f.write(s2)
            changed += 1

    print("changed:", changed)
    if skipped:
        print("skipped (no baked header found):", skipped)


if __name__ == "__main__":
    main()
