<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Design & Development | RealDeal IT Center</title>
<meta name="description" content="Conversion-focused websites, custom builds, WooCommerce and Shopify stores engineered for speed and results.">
<link rel="canonical" href="https://jahangirhussen.github.io/RealDeal_Home/web-design-development.php">
<meta property="og:type" content="article">
<meta property="og:title" content="Web Design & Development | RealDeal IT Center">
<meta property="og:description" content="Conversion-focused websites, custom builds, WooCommerce and Shopify stores engineered for speed and results.">
<meta property="og:url" content="https://jahangirhussen.github.io/RealDeal_Home/web-design-development.php">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=Poppins:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
:root {
	--rd-orange: #ff4a1c; --rd-orange-2: #ff7a35; --rd-ink: #0e1a24; --rd-teal: #0f8f88;
	--rd-blue: #2764e6; --rd-green: #13a76f; --rd-soft: #f6f8fb; --rd-line: rgba(14, 26, 36, 0.12);
	--rd-muted: #63717d; --font-heading: "Poppins", sans-serif; --font-body: "Inter", sans-serif;
	--container: 1180px; --radius: 8px; --shadow: 0 22px 60px rgba(14, 26, 36, 0.12);
	--accent: var(--rd-orange);
}
*,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }
html { scroll-behavior:smooth; }
body { font-family:var(--font-body); background:#fff; color:var(--rd-muted); font-size:16px; line-height:1.65; overflow-x:hidden; }
a { color:inherit; text-decoration:none; } ul { list-style:none; }
h1,h2,h3,h4 { font-family:var(--font-heading); color:var(--rd-ink); font-weight:800; line-height:1.1; }
.container { width:min(100% - 48px, var(--container)); margin:0 auto; padding:0 25px; }
.section-kicker { display:inline-flex; align-items:center; gap:10px; margin-bottom:14px; color:var(--rd-orange); font-size:12px; font-weight:800; letter-spacing:1.5px; text-transform:uppercase; }
.section-kicker::before { content:""; width:26px; height:2px; background:currentColor; }
.section-title { font-size:clamp(28px,4vw,42px); margin-bottom:16px; }
.btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; min-height:48px; padding:0 20px; border-radius:6px; font-size:14px; font-weight:800; border:1px solid transparent; transition:transform .18s ease, box-shadow .18s ease; cursor:pointer; }
.btn:hover { transform:translateY(-3px); }
.btn-primary { background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; box-shadow:0 16px 34px rgba(255,74,28,.25); }
.btn-dark { background:var(--rd-ink); color:#fff; }
.btn-outline { background:#fff; color:var(--rd-ink); border-color:var(--rd-line); }
.service-hero { padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("HERO_IMG") center/cover; color:#fff; }
.breadcrumb { display:flex; flex-wrap:wrap; gap:8px; margin-bottom:20px; font-size:13px; font-weight:600; color:rgba(255,255,255,.6); }
.breadcrumb a { color:rgba(255,255,255,.88); } .breadcrumb a:hover { color:var(--rd-orange-2); }
.hero-badge { display:inline-flex; align-items:center; gap:10px; padding:8px 14px; margin-bottom:20px; border:1px solid rgba(255,255,255,.2); border-radius:6px; background:rgba(255,255,255,.08); font-size:13px; font-weight:800; }
.hero-badge i { color:var(--rd-orange-2); }
.service-hero h1 { color:#fff; font-size:clamp(32px,4.6vw,50px); margin-bottom:16px; max-width:820px; }
.service-hero .lead { max-width:680px; font-size:17px; color:rgba(255,255,255,.82); margin-bottom:22px; }
.hero-meta { display:flex; flex-wrap:wrap; gap:24px; }
.hero-meta div { font-size:12px; color:rgba(255,255,255,.6); font-weight:700; text-transform:uppercase; letter-spacing:.4px; }
.hero-meta strong { display:block; font-size:15px; color:#fff; font-family:var(--font-heading); text-transform:none; letter-spacing:0; margin-top:4px; }
.hero-actions { display:flex; flex-wrap:wrap; gap:14px; margin-top:26px; }
.detail-section { padding:72px 0; }
.detail-section.alt { background:linear-gradient(180deg,#fff,var(--rd-soft)); }
.detail-grid { display:grid; grid-template-columns:1.2fr .8fr; gap:40px; align-items:start; }
.article-body p { margin-bottom:18px; font-size:15.5px; }
.article-body h3 { margin:28px 0 12px; font-size:21px; }
.result-list li { display:flex; gap:10px; margin:12px 0; font-weight:700; color:var(--rd-ink); font-size:15px; }
.result-list i { color:var(--rd-orange); margin-top:4px; }
.sidebar { position:sticky; top:100px; display:grid; gap:16px; }
.sidebar-card { padding:24px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; box-shadow:var(--shadow); transition:border-color 220ms ease, box-shadow 220ms ease; }
.sidebar-card:hover { border-color:var(--rd-orange); box-shadow:0 16px 36px rgba(255,74,28,.16); }
.sidebar-card h3 { font-size:18px; margin-bottom:14px; }
.sidebar-stat { display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid var(--rd-line); font-size:14px; font-weight:700; gap:12px; }
.sidebar-stat span { color:var(--rd-muted); font-weight:600; }
.sidebar-tags { display:flex; flex-wrap:wrap; gap:6px; }
.sidebar-tags span { padding:5px 11px; border-radius:99px; background:var(--rd-soft); border:1px solid var(--rd-line); font-size:12px; font-weight:700; color:var(--rd-ink); }
.related-link { display:flex; align-items:center; gap:10px; padding:10px 12px; margin:6px 0; border-radius:6px; font-size:13px; font-weight:700; color:var(--rd-ink); transition:background .18s ease; }
.related-link:hover { background:rgba(255,74,28,.08); color:var(--rd-orange); }
.related-link i { width:28px; height:28px; display:flex; align-items:center; justify-content:center; border-radius:6px; background:rgba(255,74,28,.12); color:var(--rd-orange); font-size:12px; }
.cta-band { padding:72px 0; background:linear-gradient(110deg,rgba(255,74,28,.92),rgba(255,122,53,.88)); color:#fff; text-align:center; }
.cta-band h2 { color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:14px; }
.cta-band p { max-width:560px; margin:0 auto 24px; color:rgba(255,255,255,.9); }
.site-footer { padding:56px 0 24px; background:var(--rd-ink); color:rgba(255,255,255,.65); }
.footer-grid { display:grid; grid-template-columns:1.4fr repeat(3,1fr); gap:32px; margin-bottom:32px; }
.footer-col h4 { color:#fff; margin-bottom:14px; font-size:14px; }
.footer-col a { font-size:14px; } .footer-col a:hover { color:var(--rd-orange-2); }
.footer-bottom { display:flex; justify-content:space-between; padding-top:20px; border-top:1px solid rgba(255,255,255,.12); font-size:13px; }
@media(max-width:960px) { .detail-grid,.footer-grid { grid-template-columns:1fr; } .sidebar { position:static; } }
.fa-icon-img { width:16px; height:16px; object-fit:contain; vertical-align:-2px; display:inline-block; }
</style>
<link rel="stylesheet" href="assets/site-nav.css?v=13">
</head>
<body>
<?php $active_nav = 'home'; $header_mode = 'hero'; include 'header.php'; ?>
<main>
	<section class="service-hero" style="background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url('https://realdealitcenter.com/wp-content/uploads/2026/07/seo-image.webp') center/cover;">
		<div class="container">
			<nav class="breadcrumb" aria-label="Breadcrumb">
				<a href="index.php">Home</a><span>/</span>
				<a href="services.php">Services</a><span>/</span>
				<span>Web Design & Development</span>
			</nav>
			<div class="hero-badge"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/computer.gif" alt="Web design and development icon"> Service Category</div>
			<h1>Web Design & Development</h1>
			<p class="lead">Conversion-focused websites, custom builds, WooCommerce and Shopify stores engineered for speed and results.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="contact.php"><i class="fa-solid fa-paper-plane"></i> Request Proposal</a>
				<a class="btn btn-outline" href="services.php" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.3);">All Services</a>
			</div>
		</div>
	</section>
	<style>
	.category-header { display:flex; align-items:center; gap:20px; margin-bottom:32px; flex-wrap:wrap; }
	.category-badge { width:110px; height:110px; border-radius:14px; display:flex; align-items:center; justify-content:center; background:transparent; color:var(--accent); font-size:22px; flex-shrink:0; }
	.category-badge .fa-icon-img { width:90px; height:90px; object-fit:contain; margin:auto; }
	.category-count { margin-left:auto; padding:6px 14px; border-radius:99px; background:var(--rd-soft); font-size:13px; font-weight:800; color:var(--rd-ink); }
	.service-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
	.service-item { position:relative; padding:24px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; transition:transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease; }
	.service-item:hover { transform:translateY(-4px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.14); }
	.service-item-icon { width:90px; height:90px; border-radius:8px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; background:transparent; color:var(--accent, var(--rd-orange)); font-size:18px; align-self:center; }
	.service-item-icon .fa-icon-img { width:72px; height:72px; object-fit:contain; margin:auto; }
	.service-item h3 { font-size:17px; margin-bottom:8px; }
	.service-item p { font-size:14px; margin-bottom:12px; }
	.service-item ul { margin-bottom:14px; }
	.service-item li { display:flex; gap:8px; font-size:13px; color:var(--rd-ink); font-weight:600; margin:6px 0; }
	.service-item li i { color:var(--rd-orange); margin-top:3px; }
	.service-link { display:inline-flex; align-items:center; gap:8px; font-size:13.5px; font-weight:800; color:var(--rd-orange); }
	@media(max-width:960px) { .service-grid { grid-template-columns:repeat(2,1fr); } }
	@media(max-width:640px) { .service-grid { grid-template-columns:1fr; } }
	</style>
	<section class="detail-section">
		<div class="container">
			<div class="category-header" data-reveal>
				<div class="category-badge"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/computer.gif" alt="Web Development"></div>
				<div>
					<span class="section-kicker">Category 02</span>
					<h2>Web Design &amp; Development</h2>
					<p>Conversion-focused design, custom development and ecommerce builds on WooCommerce and Shopify.</p>
				</div>
				<span class="category-count">3 services</span>
			</div>
			<div class="service-grid">
				<article class="service-item" data-reveal>
					<div class="service-item-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/design.gif" alt="Website design"></div>
					<h3>Website Design</h3>
					<p>UI/UX design, responsive layouts and landing pages built to build trust and guide visitors to action.</p>
					<ul>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Wireframe &amp; prototype design</li>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Mobile-friendly, sales &amp; lead-gen landing pages</li>
					</ul>
					<a class="service-link" href="website-design.php">Get a quote <i class="fa-solid fa-arrow-right"></i></a>
				</article>
				<article class="service-item" data-reveal>
					<div class="service-item-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/browser.gif" alt="Website development"></div>
					<h3>Website Development</h3>
					<p>Custom, WordPress, front-end and back-end development for business and portfolio sites.</p>
					<ul>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Custom &amp; WordPress development, theme &amp; plugin builds</li>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> HTML/CSS/JS front-end, PHP/Node.js back-end &amp; database integration</li>
					</ul>
					<a class="service-link" href="website-development.php">Get a quote <i class="fa-solid fa-arrow-right"></i></a>
				</article>
				<article class="service-item" data-reveal>
					<div class="service-item-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/cart.gif" alt="Ecommerce"></div>
					<h3>Ecommerce Website Development</h3>
					<p>WooCommerce and Shopify stores built to showcase products and reduce checkout friction.</p>
					<ul>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> WooCommerce store setup, product upload, payment &amp; shipping</li>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Shopify setup, app integration, SEO/speed optimization, migration</li>
					</ul>
					<a class="service-link" href="ecommerce-website-development.php">Get a quote <i class="fa-solid fa-arrow-right"></i></a>
				</article>
				<article class="service-item" data-reveal>
					<div class="service-item-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/wordpress-icon.png" alt="WordPress"></div>
					<h3>WooCommerce Development</h3>
					<p>WordPress stores built and configured on WooCommerce, from catalog to checkout.</p>
					<ul>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> WordPress store setup, product upload &amp; catalog organization</li>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Payment gateway integration &amp; shipping configuration</li>
					</ul>
					<a class="service-link" href="woocommerce-development.php">Get a quote <i class="fa-solid fa-arrow-right"></i></a>
				</article>
				<article class="service-item" data-reveal>
					<div class="service-item-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/shopify-icon.png" alt="Shopify"></div>
					<h3>Shopify Development</h3>
					<p>Shopify stores set up, themed and configured end to end for a smooth checkout.</p>
					<ul>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Store setup, theme customization &amp; product management</li>
						<li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> App integration, payments/shipping, SEO &amp; speed optimization</li>
					</ul>
					<a class="service-link" href="shopify-development.php">Get a quote <i class="fa-solid fa-arrow-right"></i></a>
				</article>
			</div>
		</div>
	</section>
	<section class="cta-band">
		<div class="container">
			<h2>Ready to start with Web Design & Development?</h2>
			<p>Book a free strategy call. We'll review your goals and outline a clear plan — no pressure.</p>
			<a class="btn btn-dark" href="contact.php"><i class="fa-solid fa-calendar-check"></i> Book Free Consultation</a>
		</div>
	</section>
</main>
<?php include 'footer.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Web Design & Development",
  "description": "Conversion-focused websites, custom builds, WooCommerce and Shopify stores engineered for speed and results.",
  "url": "https://jahangirhussen.github.io/RealDeal_Home/web-design-development.php"
}
</script>
<script></script>
<script src="assets/site-nav.js?v=3" defer></script>
</body>
</html>
