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

		function setHeaderState() {
			if (heroMode) {
				header.classList.toggle("scrolled", window.scrollY > 24);
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

	function applyContactConfig() {
		const c = window.RD_CONTACT;
		if (!c) return;
		document.querySelectorAll('[data-rd-contact="whatsapp"]').forEach((el) => {
			el.href = "https://wa.me/" + c.whatsappNumber.replace(/[^0-9]/g, "") + (c.whatsappMessage ? "?text=" + encodeURIComponent(c.whatsappMessage) : "");
			el.target = "_blank";
			el.rel = "noopener";
		});
		document.querySelectorAll('[data-rd-contact="phone"]').forEach((el) => {
			el.href = "tel:" + c.phoneHref;
			if (el.dataset.rdContactText !== "false") el.textContent = c.phoneDisplay;
		});
		document.querySelectorAll('[data-rd-contact="email"]').forEach((el) => {
			el.href = "mailto:" + c.email;
			if (el.dataset.rdContactText !== "false") el.textContent = c.email;
		});
		document.querySelectorAll('[data-rd-contact="facebook"]').forEach((el) => {
			el.href = c.facebook;
			el.target = "_blank";
			el.rel = "noopener";
		});
		document.querySelectorAll('[data-rd-contact="instagram"]').forEach((el) => {
			el.href = c.instagram;
			el.target = "_blank";
			el.rel = "noopener";
		});
	}

	function initWhatsAppButton() {
		if (document.getElementById("rdWhatsAppBtn")) return;
		const number = (window.RD_WHATSAPP_NUMBER || "").replace(/[^0-9]/g, "");
		if (!number) return;
		const message = window.RD_WHATSAPP_MESSAGE || "";
		const url = "https://wa.me/" + number + (message ? "?text=" + encodeURIComponent(message) : "");

		const link = document.createElement("a");
		link.id = "rdWhatsAppBtn";
		link.className = "rd-whatsapp-btn";
		link.href = url;
		link.target = "_blank";
		link.rel = "noopener";
		link.setAttribute("aria-label", "Chat with us on WhatsApp");
		link.innerHTML =
			'<svg viewBox="0 0 32 32" width="30" height="30" aria-hidden="true" focusable="false">' +
			'<path fill="currentColor" d="M16.004 3C9.376 3 4 8.373 4 15c0 2.34.677 4.522 1.85 6.362L4 29l7.86-1.813A11.94 11.94 0 0 0 16.004 27C22.63 27 28 21.627 28 15S22.63 3 16.004 3Zm0 21.7c-1.98 0-3.86-.55-5.47-1.51l-.393-.233-4.664 1.076 1.06-4.542-.257-.404A9.63 9.63 0 0 1 4.87 15c0-5.61 4.57-10.17 11.134-10.17 5.61 0 10.17 4.56 10.17 10.17 0 5.61-4.56 10.17-10.17 10.17Zm5.6-7.62c-.307-.153-1.816-.897-2.098-1-.28-.103-.485-.153-.69.154-.204.307-.79 1-.97 1.205-.178.204-.357.23-.663.077-.307-.154-1.296-.478-2.47-1.526-.913-.814-1.53-1.82-1.71-2.127-.178-.307-.02-.473.135-.626.138-.138.307-.358.46-.537.154-.18.205-.307.307-.512.103-.204.052-.383-.026-.537-.077-.154-.69-1.665-.945-2.28-.25-.598-.503-.517-.69-.527l-.588-.01c-.204 0-.537.077-.818.384-.28.307-1.07 1.045-1.07 2.55 0 1.505 1.096 2.958 1.25 3.163.153.204 2.156 3.293 5.226 4.617.73.315 1.3.503 1.744.644.733.233 1.4.2 1.927.122.588-.088 1.816-.742 2.072-1.46.256-.716.256-1.33.18-1.46-.077-.128-.28-.204-.588-.358Z"/>' +
			'</svg>';

		document.body.appendChild(link);

		if ("IntersectionObserver" in window) {
			requestAnimationFrame(() => link.classList.add("is-visible"));
		} else {
			link.classList.add("is-visible");
		}
	}

	initSiteNav();
	applyContactConfig();
	initWhatsAppButton();
})();
