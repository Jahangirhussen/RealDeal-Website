/**
 * RealDeal shared site navigation behavior.
 * Header and footer markup are baked directly into every page (kept in sync
 * from header.html / footer.html via scripts/sync_header_footer.py) so the
 * site works fully offline via file:// with no server needed. This file only
 * wires up interactive behavior: mobile menu, mega-menu dropdowns, scrolled
 * header state.
 */
(function () {
	function isMobileNav() {
		return window.matchMedia("(max-width: 840px)").matches;
	}

	function initSiteNav() {
		const header = document.getElementById("siteHeader");
		const menuToggle = document.getElementById("menuToggle");
		const mainNav = document.getElementById("mainNav");
		if (!header || !menuToggle || !mainNav) return;

		const heroMode = !header.classList.contains("header-solid");

		const dropdowns = Array.from(mainNav.querySelectorAll(".nav-dropdown")).map((dropdown) => ({
			dropdown,
			toggle: dropdown.querySelector(".nav-dropdown-toggle"),
			menu: dropdown.querySelector(".nav-mega-menu"),
			closeTimer: null,
			hoverBound: false
		})).filter((d) => d.toggle && d.menu);

		function openMegaMenu(entry) {
			clearTimeout(entry.closeTimer);
			entry.dropdown.classList.add("is-open");
			entry.toggle.setAttribute("aria-expanded", "true");
		}

		function closeMegaMenu(entry) {
			entry.dropdown.classList.remove("is-open");
			entry.toggle.setAttribute("aria-expanded", "false");
		}

		function closeAllMegaMenus() {
			dropdowns.forEach(closeMegaMenu);
		}

		function anyMegaMenuOpen() {
			return dropdowns.some((d) => d.dropdown.classList.contains("is-open"));
		}

		function setHeaderState() {
			if (heroMode) {
				header.classList.toggle("scrolled", window.scrollY > 24);
			}
			if (!isMobileNav() && anyMegaMenuOpen()) {
				closeAllMegaMenus();
			}
		}

		function bindMegaHover(entry) {
			if (entry.hoverBound || isMobileNav()) return;
			[entry.dropdown, entry.menu].forEach((target) => {
				target.addEventListener("mouseenter", () => openMegaMenu(entry));
				target.addEventListener("mouseleave", () => {
					entry.closeTimer = setTimeout(() => closeMegaMenu(entry), 140);
				});
			});
			entry.hoverBound = true;
		}

		function bindAllMegaHover() {
			dropdowns.forEach(bindMegaHover);
		}

		setHeaderState();
		bindAllMegaHover();
		window.addEventListener("scroll", setHeaderState, { passive: true });
		window.addEventListener("resize", () => {
			if (isMobileNav()) closeAllMegaMenus();
			else bindAllMegaHover();
		});

		menuToggle.addEventListener("click", () => {
			const isOpen = mainNav.classList.toggle("is-open");
			document.body.classList.toggle("menu-open", isOpen);
			menuToggle.setAttribute("aria-expanded", String(isOpen));
			menuToggle.innerHTML = isOpen ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
			if (!isOpen) closeAllMegaMenus();
		});

		dropdowns.forEach((entry) => {
			entry.toggle.addEventListener("click", (event) => {
				if (!isMobileNav()) return;
				event.preventDefault();
				const isOpen = entry.dropdown.classList.toggle("is-open");
				entry.toggle.setAttribute("aria-expanded", String(isOpen));
			});
		});

		document.addEventListener("keydown", (event) => {
			if (event.key === "Escape") closeAllMegaMenus();
		});

		mainNav.querySelectorAll("a").forEach((link) => {
			link.addEventListener("click", () => {
				if (dropdowns.some((d) => d.toggle === link) && isMobileNav()) return;
				mainNav.classList.remove("is-open");
				document.body.classList.remove("menu-open");
				menuToggle.setAttribute("aria-expanded", "false");
				menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
				closeAllMegaMenus();
			});
		});
	}

	initSiteNav();
})();
