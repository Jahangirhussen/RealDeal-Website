/**
 * RealDeal shared site navigation — inject into #rd-header-root
 * Usage: <div id="rd-header-root" data-active="home" data-mode="hero"></div>
 * data-active: home | services | packages | about | career | contact
 * data-mode: hero (transparent over hero) | solid (white header)
 */
(function () {
	const MEGA_MENU_HTML = `<div class="nav-mega-menu" id="servicesMegaMenu" role="region" aria-label="Services submenu">
		<div class="mega-menu-top">
			<div><span class="section-kicker">Our Services</span><h3>40+ digital services for growth</h3></div>
			<a class="mega-view-all" href="realdeal-services-white.html">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
		</div>
		<div class="mega-menu-body"><div class="mega-menu-grid">
			<div class="mega-col" style="--col-accent: var(--rd-orange);">
				<div class="mega-col-head"><a href="realdeal-services-white.html#seo-marketing"><span class="mega-col-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span><span class="mega-col-title">Digital Marketing &amp; SEO</span></a></div>
				<div class="mega-service-list">
					<a class="mega-service-link" href="realdeal-service-digital-marketing.html">Digital Marketing</a>
					<a class="mega-service-link" href="realdeal-service-seo.html">Search Engine Optimization (SEO)</a>
					<a class="mega-service-link" href="realdeal-service-local-seo.html">Local SEO</a>
					<a class="mega-service-link" href="realdeal-service-technical-seo.html">Technical SEO</a>
					<a class="mega-service-link" href="realdeal-service-digital-marketing-strategy.html">Digital Marketing Strategy</a>
					<a class="mega-service-link" href="realdeal-service-franchise-seo.html">Franchise SEO</a>
					<a class="mega-service-link" href="realdeal-service-google-analytics.html">Google Analytics Service</a>
					<a class="mega-service-link" href="realdeal-service-seo-content-writing.html">SEO Content Writing Services</a>
				</div>
			</div>
			<div class="mega-col" style="--col-accent: var(--rd-blue);">
				<div class="mega-col-head"><a href="realdeal-services-white.html#ads-leads"><span class="mega-col-icon"><i class="fa-solid fa-bullseye"></i></span><span class="mega-col-title">Ads, Leads &amp; Conversion</span></a></div>
				<div class="mega-service-list">
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Pay Per Click (PPC) Marketing</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Search Engine Marketing (SEM)</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Lead Generation Service</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Conversion Rate Optimization</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Link Building Services</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">HARO Link Building Services</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">White Label Services</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Video Production</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">Email Marketing Services</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ads-leads">SMS Marketing Services</a>
				</div>
			</div>
			<div class="mega-col" style="--col-accent: var(--rd-teal);">
				<div class="mega-col-head"><a href="realdeal-services-white.html#social-reputation"><span class="mega-col-icon"><i class="fa-solid fa-share-nodes"></i></span><span class="mega-col-title">Social Media &amp; Reputation</span></a></div>
				<div class="mega-service-list">
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Social Media Marketing</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Social Media Management</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Social Media Advertising</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Social Media Brand Management</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Reputation Management</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Reputation Management Software</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Online Reputation Repair</a>
					<a class="mega-service-link" href="realdeal-services-white.html#social-reputation">Franchise Reputation Management</a>
				</div>
			</div>
			<div class="mega-col" style="--col-accent: var(--rd-green);">
				<div class="mega-col-head"><a href="realdeal-services-white.html#graphics-creative"><span class="mega-col-icon"><i class="fa-solid fa-pen-nib"></i></span><span class="mega-col-title">Graphics Design &amp; Creative</span></a></div>
				<div class="mega-service-list">
					<a class="mega-service-link" href="realdeal-services-white.html#graphics-creative">Graphics Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#graphics-creative">Brand Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#graphics-creative">Illustration Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#graphics-creative">Motion Graphics</a>
					<a class="mega-service-link" href="realdeal-services-white.html#graphics-creative">Social Media Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#graphics-creative">Advertisement Design</a>
				</div>
			</div>
			<div class="mega-col" style="--col-accent: var(--rd-orange);">
				<div class="mega-col-head"><a href="realdeal-services-white.html#web-development"><span class="mega-col-icon"><i class="fa-solid fa-laptop-code"></i></span><span class="mega-col-title">Web Design &amp; Development</span></a></div>
				<div class="mega-service-list">
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">Web Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">Custom Website Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">WordPress Website Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">WordPress Development</a>
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">eCommerce Web Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">ADA Compliance Services</a>
					<a class="mega-service-link" href="realdeal-services-white.html#web-development">Website Hosting</a>
				</div>
			</div>
			<div class="mega-col" style="--col-accent: var(--rd-blue);">
				<div class="mega-col-head"><a href="realdeal-services-white.html#ecommerce-marketplace"><span class="mega-col-icon"><i class="fa-solid fa-store"></i></span><span class="mega-col-title">eCommerce &amp; Marketplace</span></a></div>
				<div class="mega-service-list">
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">eCommerce Marketing</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">eCommerce Optimization</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">eCommerce SEO</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">eCommerce PPC</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">eCommerce Web Design</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Shopify SEO</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Walmart Marketplace</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Target Plus Marketplace</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon Marketing</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon SEO</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon Advertising/PPC</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon Storefront &amp; Branding</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon Seller Consulting</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon Post Management</a>
					<a class="mega-service-link" href="realdeal-services-white.html#ecommerce-marketplace">Amazon DSP Advertising Management</a>
				</div>
			</div>
		</div></div>
		<div class="mega-menu-foot">
			<p><span>40+ services</span> — combine any into one custom growth package.</p>
			<a class="mega-view-all" href="realdeal-services-white.html">View Full Services Catalog <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>`;

	const NAV_ITEMS = [
		{ id: "home", label: "Home", href: "realdeal-home-white.html" },
		{ id: "services", label: "Services", href: "realdeal-services-white.html", mega: true },
		{ id: "packages", label: "Packages", href: "realdeal-packages-white.html" },
		{ id: "about", label: "About us", href: "realdeal-about-white.html" },
		{ id: "career", label: "Career", href: "realdeal-career-white.html" },
		{ id: "contact", label: "Contact us", href: "realdeal-contact-white.html" }
	];

	function buildNavList(active) {
		return NAV_ITEMS.map((item) => {
			if (item.mega) {
				const activeClass = active === "services" ? " is-active" : "";
				const aria = active === "services" ? ' aria-current="page"' : "";
				return `<li class="nav-dropdown" id="servicesDropdown">
					<a class="nav-dropdown-toggle${activeClass}" href="${item.href}" aria-haspopup="true" aria-expanded="false" id="servicesDropdownToggle"${aria}>
						${item.label}<i class="fa-solid fa-chevron-down nav-chevron" aria-hidden="true"></i>
					</a>${MEGA_MENU_HTML}</li>`;
			}
			const activeClass = active === item.id ? " class=\"is-active\"" : "";
			const aria = active === item.id ? " aria-current=\"page\"" : "";
			return `<li><a href="${item.href}"${activeClass}${aria}>${item.label}</a></li>`;
		}).join("");
	}

	function renderHeader(root) {
		const active = root.dataset.active || "home";
		const mode = root.dataset.mode || "solid";
		const headerClass = mode === "hero" ? "site-header" : "site-header header-solid";
		root.outerHTML = `<header class="${headerClass}" id="siteHeader">
			<div class="header-inner">
				<a class="brand" href="realdeal-home-white.html#top" aria-label="RealDeal IT Center home">
					<span class="brand-mark" aria-hidden="true"><span class="brand-letter">R</span><span class="brand-letter">D</span></span>
					<span class="brand-text"><strong>RealDeal</strong><span>IT Center</span></span>
				</a>
				<nav class="main-nav" id="mainNav" aria-label="Primary navigation"><ul>${buildNavList(active)}</ul></nav>
				<div class="header-actions">
					<a class="btn btn-primary" href="realdeal-contact-white.html"><i class="fa-solid fa-calendar-check"></i> Book Strategy Call</a>
					<button class="icon-btn menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mainNav"><i class="fa-solid fa-bars"></i></button>
				</div>
			</div>
		</header>`;
	}

	function isMobileNav() {
		return window.matchMedia("(max-width: 840px)").matches;
	}

	function initSiteNav() {
		const header = document.getElementById("siteHeader");
		const menuToggle = document.getElementById("menuToggle");
		const mainNav = document.getElementById("mainNav");
		const servicesDropdown = document.getElementById("servicesDropdown");
		const servicesDropdownToggle = document.getElementById("servicesDropdownToggle");
		const servicesMegaMenu = document.getElementById("servicesMegaMenu");
		if (!header || !menuToggle || !mainNav) return;

		const heroMode = !header.classList.contains("header-solid");
		let megaCloseTimer;
		let megaHoverBound = false;

		function openMegaMenu() {
			clearTimeout(megaCloseTimer);
			servicesDropdown?.classList.add("is-open");
			servicesDropdownToggle?.setAttribute("aria-expanded", "true");
		}

		function closeMegaMenu() {
			servicesDropdown?.classList.remove("is-open");
			servicesDropdownToggle?.setAttribute("aria-expanded", "false");
		}

		function setHeaderState() {
			if (heroMode) {
				header.classList.toggle("scrolled", window.scrollY > 24);
			}
			if (!isMobileNav() && servicesDropdown?.classList.contains("is-open")) {
				closeMegaMenu();
			}
		}

		function bindMegaHover() {
			if (megaHoverBound || isMobileNav() || !servicesDropdown || !servicesMegaMenu) return;
			[servicesDropdown, servicesMegaMenu].forEach((target) => {
				target.addEventListener("mouseenter", openMegaMenu);
				target.addEventListener("mouseleave", () => {
					megaCloseTimer = setTimeout(closeMegaMenu, 140);
				});
			});
			megaHoverBound = true;
		}

		setHeaderState();
		bindMegaHover();
		window.addEventListener("scroll", setHeaderState, { passive: true });
		window.addEventListener("resize", () => {
			if (isMobileNav()) closeMegaMenu();
			else bindMegaHover();
		});

		menuToggle.addEventListener("click", () => {
			const isOpen = mainNav.classList.toggle("is-open");
			document.body.classList.toggle("menu-open", isOpen);
			menuToggle.setAttribute("aria-expanded", String(isOpen));
			menuToggle.innerHTML = isOpen ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
			if (!isOpen) closeMegaMenu();
		});

		servicesDropdownToggle?.addEventListener("click", (event) => {
			if (!isMobileNav()) return;
			event.preventDefault();
			const isOpen = servicesDropdown.classList.toggle("is-open");
			servicesDropdownToggle.setAttribute("aria-expanded", String(isOpen));
		});

		document.addEventListener("keydown", (event) => {
			if (event.key === "Escape") closeMegaMenu();
		});

		mainNav.querySelectorAll("a").forEach((link) => {
			link.addEventListener("click", (event) => {
				if (link === servicesDropdownToggle && isMobileNav()) return;
				mainNav.classList.remove("is-open");
				document.body.classList.remove("menu-open");
				menuToggle.setAttribute("aria-expanded", "false");
				menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
				closeMegaMenu();
			});
		});
	}

	const root = document.getElementById("rd-header-root");
	if (root) {
		renderHeader(root);
		initSiteNav();
	}
})();
