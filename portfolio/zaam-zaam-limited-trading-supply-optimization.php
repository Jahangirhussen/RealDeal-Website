<?php
// Conditional sections — set true only when real data/assets exist for this project.
$cs_has_before_after = false;
$cs_has_testimonial  = false;
$cs_has_live_url     = false;
$cs_live_url         = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../gtm-head.php'; ?>
<?php include __DIR__ . '/../gtag.php'; ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zaam Zaam Limited Case Study | RealDeal IT Center</title>
<meta name="description" content="How we helped Zaam Zaam Limited, a UK retail business, replace scattered spreadsheets with a structured accounting, website, marketing and SEO setup.">
<link rel="canonical" href="https://jahangirhussen.github.io/RealDeal_Home/portfolio/zaam-zaam-limited-trading-supply-optimization/">
<meta property="og:type" content="article">
<meta property="og:title" content="Zaam Zaam Limited Case Study | RealDeal IT Center">
<meta property="og:description" content="How we helped Zaam Zaam Limited, a UK retail business, replace scattered spreadsheets with a structured accounting, website, marketing and SEO setup.">
<meta property="og:url" content="https://jahangirhussen.github.io/RealDeal_Home/portfolio/zaam-zaam-limited-trading-supply-optimization/">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=Poppins:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
:root {
	--rd-orange: #ff4a1c; --rd-orange-2: #ff7a35; --rd-ink: #0e1a24; --rd-ink-2: #142533; --rd-teal: #0f8f88;
	--rd-blue: #2764e6; --rd-green: #13a76f; --rd-soft: #f6f8fb; --rd-line: rgba(14, 26, 36, 0.1);
	--rd-muted: #63717d; --font-heading: "Poppins", sans-serif; --font-body: "Inter", sans-serif;
	--container: 1180px; --radius: 10px; --radius-lg: 18px; --shadow: 0 24px 60px rgba(14, 26, 36, 0.1);
	--accent: var(--rd-orange);
}
*,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }
html { scroll-behavior:smooth; }
body { font-family:var(--font-body); background:#fff; color:var(--rd-muted); font-size:16px; line-height:1.7; overflow-x:hidden; -webkit-font-smoothing:antialiased; }
a { color:inherit; text-decoration:none; } ul { list-style:none; }
h1,h2,h3,h4 { font-family:var(--font-heading); color:var(--rd-ink); font-weight:800; line-height:1.15; letter-spacing:-.01em; }
.container { width:min(100% - 48px, var(--container)); margin:0 auto; padding:0 25px; }
.section-kicker { display:inline-flex; align-items:center; gap:10px; margin-bottom:14px; color:var(--rd-orange); font-size:12px; font-weight:800; letter-spacing:1.6px; text-transform:uppercase; }
.section-kicker::before { content:""; width:26px; height:2px; background:currentColor; }
.section-title { font-size:clamp(26px,3.4vw,36px); margin-bottom:14px; }
.section-copy { max-width:700px; font-size:15.5px; }
.btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; min-height:48px; padding:0 22px; border-radius:8px; font-size:14px; font-weight:800; border:1px solid transparent; transition:transform .18s ease, box-shadow .18s ease; cursor:pointer; }
.btn:hover { transform:translateY(-3px); }
.btn-primary { background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; box-shadow:0 16px 34px rgba(255,74,28,.25); }
.btn-dark { background:var(--rd-ink); color:#fff; }
.btn-outline { background:#fff; color:var(--rd-ink); border-color:var(--rd-line); }
.service-hero { padding:150px 0 70px; background:linear-gradient(135deg,rgba(14,26,36,.96),rgba(20,37,51,.94)),url("../images/zaam-zaam-limited-trading-supply-optimization-cover.jpg") center/cover; color:#fff; }
.breadcrumb { display:flex; flex-wrap:wrap; gap:8px; margin-bottom:22px; font-size:13px; font-weight:600; color:rgba(255,255,255,.55); }
.breadcrumb a { color:rgba(255,255,255,.85); } .breadcrumb a:hover { color:var(--rd-orange-2); }
.hero-badge { display:inline-flex; align-items:center; gap:10px; padding:8px 16px; margin-bottom:22px; border:1px solid rgba(255,255,255,.18); border-radius:99px; background:rgba(255,255,255,.06); font-size:12.5px; font-weight:800; letter-spacing:.3px; }
.hero-badge i { color:var(--rd-orange-2); }
.service-hero h1 { color:#fff; font-size:clamp(32px,4.6vw,52px); margin-bottom:18px; max-width:820px; }
.service-hero .lead { max-width:680px; font-size:17.5px; color:rgba(255,255,255,.78); margin-bottom:32px; }
.hero-meta { display:grid; grid-template-columns:repeat(5,auto); gap:0; border-top:1px solid rgba(255,255,255,.12); padding-top:26px; }
.hero-meta div { padding-right:32px; font-size:11px; color:rgba(255,255,255,.5); font-weight:700; text-transform:uppercase; letter-spacing:.5px; }
.hero-meta strong { display:block; font-size:15px; color:#fff; font-family:var(--font-heading); text-transform:none; letter-spacing:0; margin-top:6px; font-weight:700; }
.hero-actions { display:flex; flex-wrap:wrap; gap:14px; margin-top:30px; }
.hero-service-chips { display:flex; flex-wrap:wrap; gap:8px; margin-top:16px; }
.hero-service-chips span { display:inline-flex; align-items:center; gap:7px; padding:6px 13px; border-radius:99px; background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.16); font-size:12px; font-weight:700; color:#fff; }
.hero-service-chips span::before { content:""; width:8px; height:8px; border-radius:50%; background:var(--chip-color); }
.detail-section { padding:76px 0; }
.detail-section.alt { background:var(--rd-soft); }
.detail-grid { display:grid; grid-template-columns:1.35fr .65fr; gap:56px; align-items:start; }
.detail-grid > * { min-width:0; }
.article-body > * + * { margin-top:64px; }
.article-body p { margin-bottom:16px; font-size:15.5px; }
.article-body h3 { margin:0 0 12px; font-size:20px; }
.result-list li { display:flex; gap:10px; margin:12px 0; font-weight:700; color:var(--rd-ink); font-size:15px; }
.result-list i { color:var(--rd-orange); margin-top:4px; }
.sidebar { position:sticky; top:100px; display:grid; gap:18px; }
.sidebar-card { padding:26px; border:1px solid var(--rd-line); border-radius:var(--radius-lg); background:#fff; box-shadow:var(--shadow); transition:border-color 220ms ease, box-shadow 220ms ease; }
.sidebar-card:hover { border-color:rgba(255,74,28,.35); }
.sidebar-card h3 { font-size:16px; margin-bottom:16px; padding-bottom:14px; border-bottom:1px solid var(--rd-line); display:flex; align-items:center; gap:9px; }
.sidebar-card h3 i { color:var(--rd-orange); font-size:15px; }
.sidebar-tags { display:flex; flex-wrap:wrap; gap:7px; }
.sidebar-tags span, .sidebar-tags a { padding:6px 12px; border-radius:99px; background:var(--rd-soft); border:1px solid var(--rd-line); font-size:12px; font-weight:700; color:var(--rd-ink); transition:background 160ms ease, border-color 160ms ease, color 160ms ease; }
.sidebar-tags a:hover { background:rgba(255,74,28,.1); border-color:rgba(255,74,28,.35); color:var(--rd-orange); }
.cs-info-table { width:100%; border-collapse:collapse; }
.cs-info-table tr { border-bottom:1px solid var(--rd-line); }
.cs-info-table tr:last-child { border-bottom:0; }
.cs-info-table td { padding:11px 0; font-size:13.5px; }
.cs-info-table td:first-child { color:var(--rd-muted); font-weight:600; }
.cs-info-table td:last-child { color:var(--rd-ink); font-weight:800; text-align:right; }

.cs-stats-strip { display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:var(--rd-line); border:1px solid var(--rd-line); border-radius:var(--radius-lg); overflow:hidden; margin-bottom:56px; }
.cs-stat { background:#fff; padding:22px 20px; text-align:center; }
.cs-stat i { font-size:18px; margin-bottom:10px; display:block; }
.cs-stat strong { display:block; font-size:15px; color:var(--rd-ink); font-family:var(--font-heading); }
.cs-stat span { font-size:11px; color:var(--rd-muted); text-transform:uppercase; letter-spacing:.4px; font-weight:700; }

.cs-check-grid { display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:22px; }
.cs-check-card { display:flex; gap:12px; padding:18px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; transition:border-color 200ms ease, transform 200ms ease; }
.cs-check-card:hover { border-color:rgba(19,167,111,.4); transform:translateY(-2px); }
.cs-check-card i { color:var(--rd-green); font-size:17px; flex-shrink:0; margin-top:2px; }
.cs-check-card p { font-size:14.5px; font-weight:700; color:var(--rd-ink); margin:0; }
.cs-challenge-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:16px; margin-top:22px; }
.cs-challenge-card { padding:22px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; transition:border-color 200ms ease, transform 200ms ease; }
.cs-challenge-card:hover { border-color:rgba(255,74,28,.35); transform:translateY(-2px); }
.cs-challenge-card i { color:var(--rd-orange); font-size:19px; margin-bottom:12px; display:block; }
.cs-challenge-card p { font-size:14px; margin:0; }

.cs-steps { display:grid; grid-template-columns:repeat(6,1fr); gap:12px; margin-top:22px; }
.cs-step { padding:20px 12px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; text-align:center; }
.cs-step-num { width:34px; height:34px; margin:0 auto 12px; border-radius:50%; background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; display:flex; align-items:center; justify-content:center; font-family:var(--font-heading); font-weight:800; font-size:13px; }
.cs-step strong { display:block; font-size:12.5px; color:var(--rd-ink); }

.cs-service-list { display:grid; gap:18px; margin-top:22px; }
.cs-service-item { position:relative; display:grid; grid-template-columns:56px 1fr; gap:20px; padding:28px 28px 28px 32px; border:1px solid var(--rd-line); border-radius:var(--radius-lg); background:#fff; overflow:hidden; transition:border-color 200ms ease, box-shadow 200ms ease, transform 200ms ease; }
.cs-service-item::before { content:""; position:absolute; inset:0 auto 0 0; width:5px; background:var(--item-accent, var(--rd-orange)); }
.cs-service-item:hover { border-color:transparent; box-shadow:0 20px 48px rgba(14,26,36,.12); transform:translateY(-3px); }
.cs-service-num { position:absolute; top:20px; right:24px; font-family:var(--font-heading); font-size:34px; font-weight:800; color:var(--rd-line); line-height:1; }
.cs-service-icon { width:56px; height:56px; border-radius:14px; display:flex; align-items:center; justify-content:center; font-size:22px; color:#fff; box-shadow:0 10px 22px -4px var(--item-accent, rgba(255,74,28,.4)); }
.cs-service-item h3 { font-size:18px; margin-bottom:8px; padding-right:40px; }
.cs-service-item .cs-service-desc { font-size:14.5px; margin-bottom:14px; }
.cs-service-benefit { display:flex; gap:10px; padding:14px 16px; border-radius:10px; background:var(--rd-soft); border-left:3px solid var(--item-accent, var(--rd-green)); }
.cs-service-benefit i { color:var(--item-accent, var(--rd-green)); margin-top:2px; flex-shrink:0; }
.cs-service-benefit strong { display:block; font-size:11px; color:var(--rd-muted); text-transform:uppercase; letter-spacing:.4px; font-weight:800; margin-bottom:3px; }
.cs-service-benefit p { font-size:14px; font-weight:700; color:var(--rd-ink); margin:0; }

.cs-before-after { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:22px; }
.cs-ba-card { border-radius:var(--radius); overflow:hidden; border:1px solid var(--rd-line); }
.cs-ba-card img { width:100%; height:260px; object-fit:cover; display:block; }
.cs-ba-label { padding:10px 16px; font-weight:800; font-size:13px; text-transform:uppercase; letter-spacing:.4px; }
.cs-ba-label.before { background:var(--rd-soft); color:var(--rd-muted); }
.cs-ba-label.after { background:var(--rd-orange); color:#fff; }

.cs-gallery { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin-top:22px; }
.cs-gallery img { width:100%; height:190px; object-fit:cover; border-radius:var(--radius); border:1px solid var(--rd-line); }

.cs-results-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:14px; margin-top:22px; }
.cs-result-card { padding:24px 18px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; text-align:center; }
.cs-result-card i { color:var(--rd-orange); font-size:22px; margin-bottom:12px; display:block; }
.cs-result-card strong { display:block; font-size:13.5px; color:var(--rd-ink); }

.cs-tech-grid { display:flex; flex-wrap:wrap; gap:9px; margin-top:20px; }
.cs-tech-grid span { padding:8px 16px; border-radius:99px; background:#fff; border:1px solid var(--rd-line); font-size:12.5px; font-weight:700; color:var(--rd-ink); }

.cs-testimonial { padding:32px; border-radius:var(--radius-lg); background:linear-gradient(150deg,var(--rd-ink),var(--rd-ink-2)); color:#fff; }
.cs-testimonial p { font-size:17px; font-style:italic; color:rgba(255,255,255,.9); margin-bottom:16px; }
.cs-testimonial strong { display:block; color:#fff; font-family:var(--font-heading); }
.cs-testimonial span { font-size:13px; color:rgba(255,255,255,.55); }

.cs-related-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-top:22px; }
.cs-related-card { border:1px solid var(--rd-line); border-radius:var(--radius); overflow:hidden; background:#fff; transition:transform 200ms ease, box-shadow 200ms ease; }
.cs-related-card:hover { transform:translateY(-4px); box-shadow:0 16px 36px rgba(14,26,36,.12); }
.cs-related-card img { width:100%; height:150px; object-fit:cover; display:block; }
.cs-related-card-body { padding:16px; }
.cs-related-card-body span { font-size:11px; font-weight:800; text-transform:uppercase; color:var(--rd-orange); }
.cs-related-card-body h4 { font-size:15px; margin-top:6px; }

.cta-band { padding:76px 0; background:linear-gradient(110deg,rgba(255,74,28,.94),rgba(255,122,53,.9)); color:#fff; text-align:center; }
.cta-band h2 { color:#fff; font-size:clamp(28px,4vw,42px); margin-bottom:14px; }
.cta-band p { max-width:560px; margin:0 auto 26px; color:rgba(255,255,255,.9); }
.site-footer { padding:56px 0 24px; background:var(--rd-ink); color:rgba(255,255,255,.65); }
.footer-grid { display:grid; grid-template-columns:1.4fr repeat(3,1fr); gap:32px; margin-bottom:32px; }
.footer-col h4 { color:#fff; margin-bottom:14px; font-size:14px; }
.footer-col a { font-size:14px; } .footer-col a:hover { color:var(--rd-orange-2); }
.footer-bottom { display:flex; justify-content:space-between; padding-top:20px; border-top:1px solid rgba(255,255,255,.12); font-size:13px; }
@media(max-width:960px) {
	.detail-grid,.footer-grid { grid-template-columns:1fr; } .sidebar { position:static; }
	.cs-check-grid,.cs-before-after,.cs-service-item { grid-template-columns:1fr; }
	.cs-challenge-grid,.cs-results-grid,.cs-gallery,.cs-related-grid { grid-template-columns:repeat(2,1fr); }
	.cs-steps { grid-template-columns:repeat(3,1fr); }
	.cs-stats-strip { grid-template-columns:repeat(2,1fr); }
	.hero-meta { grid-template-columns:repeat(2,1fr); row-gap:18px; }
}
@media(max-width:640px) {
	.cs-challenge-grid,.cs-results-grid,.cs-gallery,.cs-related-grid,.cs-steps { grid-template-columns:1fr; }
	.cs-stats-strip { grid-template-columns:1fr; }
}
</style>
<link rel="stylesheet" href="../assets/site-nav.css?v=5">
</head>
<body>
<?php include __DIR__ . '/../gtm-body.php'; ?>
<?php $active_nav = 'home'; $header_mode = 'hero'; include '../header.php'; ?>

<main>
	<!-- 1. Hero Section -->
	<section class="service-hero">
		<div class="container">
			<nav class="breadcrumb" aria-label="Breadcrumb">
				<a href="../index.php">Home</a><span>/</span>
				<a href="index.php">Portfolio</a><span>/</span>
				<span>Zaam Zaam Limited</span>
			</nav>
			<div class="hero-badge"><i class="fa-solid fa-star"></i> Case Study</div>
			<h1>Zaam Zaam Limited — Retail Business Growth</h1>
			<p class="lead">How we helped Zaam Zaam Limited, a UK retail business, replace scattered spreadsheets and an inconsistent online presence with one structured system.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="../contact.php"><i class="fa-solid fa-paper-plane"></i> Start a Similar Project</a>
				<a class="btn btn-outline" href="index.php" style="background:rgba(255,255,255,.1);color:#fff;border-color:rgba(255,255,255,.25);">Back to Portfolio</a>
				<?php if ($cs_has_live_url): ?>
				<a class="btn btn-outline" href="<?php echo htmlspecialchars($cs_live_url, ENT_QUOTES); ?>" target="_blank" rel="noopener" style="background:rgba(255,255,255,.1);color:#fff;border-color:rgba(255,255,255,.25);"><i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Live Site</a>
				<?php endif; ?>
			</div>
			<div class="hero-meta">
				<div>Client<strong>Zaam Zaam Limited</strong></div>
				<div>Industry<strong>Retail</strong></div>
				<div>Location<strong>United Kingdom</strong></div>
				<div>Working Since<strong>2023</strong></div>
				<div>Services<strong>Accounting, Website, Marketing &amp; SEO</strong></div>
			</div>
			<div class="hero-service-chips">
				<span style="--chip-color:var(--rd-teal);">Accounting &amp; Bookkeeping</span>
				<span style="--chip-color:var(--rd-orange);">Website Development</span>
				<span style="--chip-color:var(--rd-blue);">Digital Marketing</span>
				<span style="--chip-color:var(--rd-green);">SEO</span>
			</div>
		</div>
	</section>

	<!-- Main content + sticky sidebar -->
	<section class="detail-section">
		<div class="container">
			<div class="detail-grid">
				<div class="article-body">

					<!-- 2. Project Overview -->
					<div>
						<span class="section-kicker">Project Overview</span>
						<h2 class="section-title">What we set out to do</h2>
						<p class="section-copy">Zaam Zaam Limited runs a busy UK retail operation, but its back office and online presence hadn't kept pace with the business. The goal was to bring accounting, the website, marketing and search visibility together under one structured, repeatable system.</p>
						<div class="cs-stats-strip">
							<div class="cs-stat"><i class="fa-solid fa-layer-group" style="color:var(--rd-orange);"></i><strong>4</strong><span>Services Delivered</span></div>
							<div class="cs-stat"><i class="fa-solid fa-arrows-rotate" style="color:var(--rd-blue);"></i><strong>2023–Ongoing</strong><span>Engagement</span></div>
							<div class="cs-stat"><i class="fa-solid fa-location-dot" style="color:var(--rd-teal);"></i><strong>United Kingdom</strong><span>Based</span></div>
							<div class="cs-stat"><i class="fa-solid fa-store" style="color:var(--rd-green);"></i><strong>Retail Shop</strong><span>Business Type</span></div>
						</div>
					</div>

					<!-- 3. Client Requirements -->
					<div>
						<span class="section-kicker">Client Requirements</span>
						<h2 class="section-title">What the client needed</h2>
						<div class="cs-check-grid">
							<div class="cs-check-card"><i class="fa-solid fa-circle-check"></i><p>Replace scattered spreadsheets with a structured accounting system</p></div>
							<div class="cs-check-card"><i class="fa-solid fa-circle-check"></i><p>A single source of truth for vendor bills, payments and stock</p></div>
							<div class="cs-check-card"><i class="fa-solid fa-circle-check"></i><p>A website that reflects the retail business properly</p></div>
							<div class="cs-check-card"><i class="fa-solid fa-circle-check"></i><p>Marketing and SEO to bring in more customers online</p></div>
						</div>
					</div>

					<!-- 4. Challenges -->
					<div>
						<span class="section-kicker">Challenges</span>
						<h2 class="section-title">What made this hard</h2>
						<div class="cs-challenge-grid">
							<div class="cs-challenge-card"><i class="fa-solid fa-triangle-exclamation"></i><p>Vendor bills, payments and stock movements tracked across scattered spreadsheets and paper notes</p></div>
							<div class="cs-challenge-card"><i class="fa-solid fa-triangle-exclamation"></i><p>No single source of truth for what was owed or in stock</p></div>
							<div class="cs-challenge-card"><i class="fa-solid fa-triangle-exclamation"></i><p>Little to no consistent online presence to support the shop</p></div>
						</div>
					</div>

					<!-- 5. Services We Delivered -->
					<div>
						<span class="section-kicker">What We Delivered</span>
						<h2 class="section-title">Every service, explained on its own</h2>
						<p class="section-copy">Zaam Zaam Limited is a UK-based retail business, and — just like with Al Haayaat Limited — we ran their whole growth stack. Here's exactly what each of the four services covered and the benefit it delivered.</p>
						<div class="cs-service-list">
							<div class="cs-service-item" style="--item-accent:var(--rd-teal);">
								<span class="cs-service-num">01</span>
								<div class="cs-service-icon" style="background:linear-gradient(135deg,var(--rd-teal),#0bbfb4);"><i class="fa-solid fa-calculator"></i></div>
								<div>
									<h3>Accounting &amp; Bookkeeping</h3>
									<p class="cs-service-desc">We rebuilt the books from the ground up — recording every vendor bill and payment in one structured system and reconciling accounts against bank activity, alongside a consistent inventory tracking process.</p>
									<div class="cs-service-benefit"><i class="fa-solid fa-arrow-trend-up"></i><div><strong>Benefit to the client</strong><p>A single, structured system for vendor bills, payments and stock — accurate inventory counts and clear monthly financial reporting the team can rely on.</p></div></div>
								</div>
							</div>
							<div class="cs-service-item" style="--item-accent:var(--rd-orange);">
								<span class="cs-service-num">02</span>
								<div class="cs-service-icon" style="background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2));"><i class="fa-solid fa-laptop-code"></i></div>
								<div>
									<h3>Website Development</h3>
									<p class="cs-service-desc">We built a proper website for the retail business, giving customers a clear way to see what Zaam Zaam Limited offers and how to get in touch, backed by a professional, on-brand design.</p>
									<div class="cs-service-benefit"><i class="fa-solid fa-arrow-trend-up"></i><div><strong>Benefit to the client</strong><p>A credible online front door for the shop, making it easier for new customers to find and trust the business before visiting.</p></div></div>
								</div>
							</div>
							<div class="cs-service-item" style="--item-accent:var(--rd-blue);">
								<span class="cs-service-num">03</span>
								<div class="cs-service-icon" style="background:linear-gradient(135deg,var(--rd-blue),#5b8bff);"><i class="fa-solid fa-bullhorn"></i></div>
								<div>
									<h3>Digital Marketing</h3>
									<p class="cs-service-desc">We put together a consistent content and social plan to keep the shop visible online, replacing irregular, one-off updates with a repeatable posting rhythm.</p>
									<div class="cs-service-benefit"><i class="fa-solid fa-arrow-trend-up"></i><div><strong>Benefit to the client</strong><p>A steady stream of visibility with local customers, keeping the shop top of mind instead of relying on foot traffic alone.</p></div></div>
								</div>
							</div>
							<div class="cs-service-item" style="--item-accent:var(--rd-green);">
								<span class="cs-service-num">04</span>
								<div class="cs-service-icon" style="background:linear-gradient(135deg,var(--rd-green),#2ad18c);"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
								<div>
									<h3>SEO</h3>
									<p class="cs-service-desc">We optimised the new website for local and organic search, covering technical SEO basics and on-page optimisation so the shop shows up for people searching nearby.</p>
									<div class="cs-service-benefit"><i class="fa-solid fa-arrow-trend-up"></i><div><strong>Benefit to the client</strong><p>Better visibility in local search results, bringing in customers who are already looking for what the shop sells.</p></div></div>
								</div>
							</div>
						</div>
					</div>

					<!-- 5b. Our Approach -->
					<div>
						<span class="section-kicker">Our Approach</span>
						<h2 class="section-title">How we ran the project</h2>
						<div class="cs-steps">
							<div class="cs-step"><div class="cs-step-num">1</div><strong>Planning</strong></div>
							<div class="cs-step"><div class="cs-step-num">2</div><strong>Design</strong></div>
							<div class="cs-step"><div class="cs-step-num">3</div><strong>Development</strong></div>
							<div class="cs-step"><div class="cs-step-num">4</div><strong>SEO / Marketing</strong></div>
							<div class="cs-step"><div class="cs-step-num">5</div><strong>Testing</strong></div>
							<div class="cs-step"><div class="cs-step-num">6</div><strong>Launch</strong></div>
						</div>
					</div>

					<?php if ($cs_has_before_after): ?>
					<div>
						<span class="section-kicker">Before &amp; After</span>
						<h2 class="section-title">The transformation</h2>
						<div class="cs-before-after">
							<div class="cs-ba-card"><div class="cs-ba-label before">Before</div><img src="" alt="Before"></div>
							<div class="cs-ba-card"><div class="cs-ba-label after">After</div><img src="" alt="After"></div>
						</div>
					</div>
					<?php endif; ?>

					<!-- 7. Project Gallery -->
					<div>
						<span class="section-kicker">Project Gallery</span>
						<h2 class="section-title">A look at the final result</h2>
						<div class="cs-gallery">
							<img src="../images/zaam-zaam-limited-trading-supply-optimization-cover.jpg" alt="Retail stock" loading="lazy">
							<img src="../images/zaam-zaam-limited-trading-supply-optimization-shop-counter.jpg" alt="Shop counter" loading="lazy">
							<img src="../images/seo-image.jpg" alt="Reporting view" loading="lazy">
						</div>
					</div>

					<!-- 8. Results -->
					<div>
						<span class="section-kicker">Results</span>
						<h2 class="section-title">What changed</h2>
						<div class="cs-results-grid">
							<div class="cs-result-card"><i class="fa-solid fa-gauge-high"></i><strong>Accurate, structured books</strong></div>
							<div class="cs-result-card"><i class="fa-solid fa-globe"></i><strong>Professional web presence</strong></div>
							<div class="cs-result-card"><i class="fa-solid fa-bullhorn"></i><strong>Consistent marketing rhythm</strong></div>
							<div class="cs-result-card"><i class="fa-solid fa-magnifying-glass-chart"></i><strong>Better local search visibility</strong></div>
						</div>
					</div>

					<!-- 9. Technologies -->
					<div>
						<span class="section-kicker">Technologies Used</span>
						<h2 class="section-title">Tools behind the build</h2>
						<div class="cs-tech-grid">
							<span>WordPress</span><span>Elementor</span><span>PHP</span><span>HTML</span><span>CSS</span><span>JavaScript</span><span>Google Analytics</span><span>Google Search Console</span>
						</div>
					</div>

					<?php if ($cs_has_testimonial): ?>
					<div>
						<span class="section-kicker">Client Testimonial</span>
						<div class="cs-testimonial">
							<p>"Testimonial text goes here once the client provides one."</p>
							<strong>Client Name</strong>
							<span>Role, Zaam Zaam Limited</span>
						</div>
					</div>
					<?php endif; ?>

					<!-- 12. Related Case Studies -->
					<div>
						<span class="section-kicker">Related Work</span>
						<h2 class="section-title">More case studies</h2>
						<div class="cs-related-grid">
							<a class="cs-related-card" href="al-haayaat-limited-business-operations-transformation.php">
								<img src="../images/aahm-import-trading-business-growth-al-haayaat-limited.jpg" alt="Al Haayaat Limited">
								<div class="cs-related-card-body"><span>Accounting, Web, Marketing &amp; SEO</span><h4>Al Haayaat Limited</h4></div>
							</a>
							<a class="cs-related-card" href="bros-slice-grill-restaurant-digital-transformation.php">
								<img src="../images/index-image-18.jpg" alt="Bros Slice & Grill">
								<div class="cs-related-card-body"><span>Accounting and Bookkeeping</span><h4>Bros Slice &amp; Grill</h4></div>
							</a>
							<a class="cs-related-card" href="mirandas-english-club-social-media-growth.php">
								<img src="../images/mirandas-english-club-social-media-growth-cover.jpg" alt="Miranda's English Club">
								<div class="cs-related-card-body"><span>Digital Marketing</span><h4>Miranda's English Club</h4></div>
							</a>
						</div>
					</div>

				</div>

				<!-- 10. Project Information — sticky sidebar -->
				<aside class="sidebar">
					<div class="sidebar-card">
						<h3><i class="fa-solid fa-circle-info"></i> Project Information</h3>
						<table class="cs-info-table">
							<tr><td>Client</td><td>Zaam Zaam Limited</td></tr>
							<tr><td>Industry</td><td>Retail</td></tr>
							<tr><td>Business Type</td><td>Retail Shop</td></tr>
							<tr><td>Country</td><td>United Kingdom</td></tr>
							<tr><td>Duration</td><td>2023 – Ongoing</td></tr>
							<tr><td>Started</td><td>2023</td></tr>
							<tr><td>Services</td><td>Accounting, Website, Marketing, SEO</td></tr>
						</table>
						<a class="btn btn-primary" href="../contact.php" style="width:100%;margin-top:18px;">Discuss Your Project</a>
					</div>
					<div class="sidebar-card">
						<h3><i class="fa-solid fa-list-check"></i> Services provided</h3>
						<div class="sidebar-tags">
							<a href="../financial-record-keeping.php">Financial Record Keeping</a>
							<a href="../accounts-payable.php">Accounts Payable</a>
							<a href="../bank-reconciliation.php">Bank Reconciliation</a>
							<a href="../website-development.php">Website Development</a>
							<a href="../digital-marketing.php">Digital Marketing</a>
							<a href="../seo.php">SEO</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>

	<!-- 13. Call To Action -->
	<section class="cta-band">
		<div class="container">
			<h2>Ready to Start Your Project?</h2>
			<p>Book a free strategy call. We'll review your goals and outline a clear plan — no pressure.</p>
			<a class="btn btn-dark" href="../contact.php"><i class="fa-solid fa-calendar-check"></i> Get a Free Consultation</a>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "Zaam Zaam Limited — Retail Business Growth",
  "description": "How we helped Zaam Zaam Limited, a UK retail business, replace scattered spreadsheets and an inconsistent online presence with one structured system.",
  "image": "../images/zaam-zaam-limited-trading-supply-optimization-cover.jpg",
  "url": "https://jahangirhussen.github.io/RealDeal_Home/portfolio/zaam-zaam-limited-trading-supply-optimization/",
  "about": "Zaam Zaam Limited"
}
</script>
<script src="../assets/site-nav.js?v=5" defer></script>
</body>
</html>
