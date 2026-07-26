<?php
$rd_dir    = strtr(dirname($_SERVER['SCRIPT_NAME']), '\\', '/');
$rd_folder = basename($rd_dir);
$rd_base   = in_array($rd_folder, ['blogs', 'portfolio'], true) ? '../' : '';
$rd_portfolio = $rd_base . 'portfolio';
$rd_blog      = $rd_base . 'blogs';
$rd_home      = $rd_base !== '' ? $rd_base : '/';
if (!isset($active_nav))  { $active_nav = 'home'; }
if (!isset($header_mode)) { $header_mode = 'hero'; }
$rd_is = function ($key) use ($active_nav) { return $active_nav === $key ? ' class="is-active" aria-current="page"' : ''; };
?>
<script src="<?php echo $rd_base; ?>assets/whatsapp-config.js" defer></script>
<header class="site-header<?php echo $header_mode !== 'hero' ? ' header-solid' : ''; ?>" id="siteHeader">
	<div class="header-inner">
		<a class="brand brand-logo" href="<?php echo $rd_home; ?>#top" aria-label="RealDeal IT Center home">
			<img src="https://realdealitcenter.com/wp-content/uploads/2026/07/logo-dark-navy.webp" alt="RealDeal IT Center" class="brand-logo-img">
		</a>
		<nav class="main-nav" id="mainNav" aria-label="Primary navigation"><ul>
			<li><a href="<?php echo $rd_home; ?>"<?php echo $rd_is('home'); ?>>Home</a></li>
			<li class="nav-dropdown" id="servicesDropdown">
				<a class="nav-dropdown-toggle<?php echo $active_nav === 'services' ? ' is-active' : ''; ?>" href="<?php echo $rd_base; ?>services.php" aria-haspopup="true" aria-expanded="false" id="servicesDropdownToggle"<?php echo $active_nav === 'services' ? ' aria-current="page"' : ''; ?>>
					Services<i class="fa-solid fa-chevron-down nav-chevron" aria-hidden="true"></i>
				</a><div class="nav-mega-menu" id="servicesMegaMenu" role="region" aria-label="Services submenu">
					<div class="mega-menu-top">
						<div><span class="section-kicker">Our Services</span><h3>Four core service pillars</h3></div>
						<a class="mega-view-all" href="<?php echo $rd_base; ?>services.php">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="mega-menu-body"><div class="mega-menu-grid">
						<div class="mega-col" style="--col-accent: var(--rd-teal);">
							<div class="mega-col-head"><a href="<?php echo $rd_base; ?>bookkeeping.php"><span class="mega-col-icon"><i class="fa-solid fa-calculator"></i></span><span class="mega-col-title">Accounting and Bookkeeping</span></a></div>
							<div class="mega-service-list">
								<a class="mega-service-link" href="<?php echo $rd_base; ?>financial-record-keeping.php">Financial Record Keeping</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>accounts-payable.php">Accounts Payable</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>accounts-receivable.php">Accounts Receivable</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>bank-reconciliation.php">Bank Reconciliation</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>financial-reporting.php">Financial Reporting</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>tax-preparation-support.php">Tax Preparation Support</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>payroll-management.php">Payroll Management</a>
							</div>
						</div>
						<div class="mega-col" style="--col-accent: var(--rd-orange);">
							<div class="mega-col-head"><a href="<?php echo $rd_base; ?>web-design-development.php"><span class="mega-col-icon"><i class="fa-solid fa-laptop-code"></i></span><span class="mega-col-title">Web Design &amp; Development</span></a></div>
							<div class="mega-service-list">
								<a class="mega-service-link" href="<?php echo $rd_base; ?>website-design.php">Website Design</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>website-development.php">Website Development</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>ecommerce-website-development.php">Ecommerce Website Development</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>woocommerce-development.php">WooCommerce Development</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>shopify-development.php">Shopify Development</a>
							</div>
						</div>
						<div class="mega-col" style="--col-accent: var(--rd-blue);">
							<div class="mega-col-head"><a href="<?php echo $rd_base; ?>digital-marketing.php"><span class="mega-col-icon"><i class="fa-solid fa-bullhorn"></i></span><span class="mega-col-title">Digital Marketing</span></a></div>
							<div class="mega-service-list">
								<a class="mega-service-link" href="<?php echo $rd_base; ?>facebook-marketing.php">Facebook Marketing</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>instagram-marketing.php">Instagram Marketing</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>linkedin-marketing.php">LinkedIn Marketing</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>twitter-x-marketing.php">Twitter (X) Marketing</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>pinterest-marketing.php">Pinterest Marketing</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>youtube-marketing.php">YouTube Marketing</a>
							</div>
						</div>
						<div class="mega-col" style="--col-accent: var(--rd-green);">
							<div class="mega-col-head"><a href="<?php echo $rd_base; ?>seo.php"><span class="mega-col-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span><span class="mega-col-title">Search Engine Optimization (SEO)</span></a></div>
							<div class="mega-service-list">
								<a class="mega-service-link" href="<?php echo $rd_base; ?>on-page-seo.php">On-Page SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>off-page-seo.php">Off-Page SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>technical-seo.php">Technical SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>local-seo.php">Local SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>ecommerce-seo.php">Ecommerce SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>wordpress-seo.php">WordPress SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>woocommerce-seo.php">WooCommerce SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>shopify-seo.php">Shopify SEO</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>seo-audit.php">SEO Audit</a>
								<a class="mega-service-link" href="<?php echo $rd_base; ?>link-building.php">Link Building</a>
							</div>
						</div>
					</div></div>
					<div class="mega-menu-foot">
						<p><span>28 services</span> — combine any into one custom growth package.</p>
						<a class="mega-view-all" href="<?php echo $rd_base; ?>services.php">View Full Services Catalog <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div></li>
			<li><a href="<?php echo $rd_base; ?>packages.php"<?php echo $rd_is('packages'); ?>>Packages</a></li>
			<li><a href="<?php echo $rd_portfolio; ?>"<?php echo $rd_is('portfolio'); ?>>Portfolio</a></li>
			<li><a href="<?php echo $rd_blog; ?>"<?php echo $rd_is('blog'); ?>>Blog</a></li>
			<li><a href="<?php echo $rd_base; ?>about.php"<?php echo $rd_is('about'); ?>>About us</a></li>
			<li><a href="<?php echo $rd_base; ?>careers.php"<?php echo $rd_is('career'); ?>>Career</a></li>
			<li><a href="<?php echo $rd_base; ?>contact.php"<?php echo $rd_is('contact'); ?>>Contact us</a></li>
		</ul></nav>
		<div class="header-actions">
			<a class="btn btn-primary" href="<?php echo $rd_base; ?>contact.php"><i class="fa-solid fa-calendar-check"></i> Book Strategy Call</a>
			<button class="icon-btn menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mainNav"><i class="fa-solid fa-bars"></i></button>
		</div>
	</div>
</header>
