<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/gtm-head.php'; ?>
<?php include __DIR__ . '/gtag.php'; ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Packages | RealDeal IT Center</title>
<meta name="description" content="Growth packages built for your stage — clear deliverables, pricing and a dedicated team.">
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
.section-copy { max-width:640px; font-size:16px; color:var(--rd-muted); }
.btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; min-height:48px; padding:0 20px; border-radius:6px; font-size:14px; font-weight:800; border:1px solid transparent; transition:transform .18s ease, box-shadow .18s ease; }
.btn:hover { transform:translateY(-3px); }
.btn-primary { background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; box-shadow:0 16px 34px rgba(255,74,28,.25); }
.btn-dark { background:var(--rd-ink); color:#fff; }
.btn-outline { background:#fff; color:var(--rd-ink); border-color:var(--rd-line); }
.service-hero { padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("images/about-banner.jpg") center/cover; color:#fff; }
.breadcrumb { display:flex; flex-wrap:wrap; gap:8px; margin-bottom:20px; font-size:13px; font-weight:600; color:rgba(255,255,255,.6); }
.breadcrumb a { color:rgba(255,255,255,.88); } .breadcrumb a:hover { color:var(--rd-orange-2); }
.hero-badge { display:inline-flex; align-items:center; gap:10px; padding:8px 14px; margin-bottom:20px; border:1px solid rgba(255,255,255,.2); border-radius:6px; background:rgba(255,255,255,.08); font-size:13px; font-weight:800; }
.hero-badge i { color:var(--rd-orange-2); }
.service-hero h1 { color:#fff; font-size:clamp(36px,5vw,58px); margin-bottom:16px; max-width:800px; }
.service-hero .lead { max-width:680px; font-size:18px; color:rgba(255,255,255,.82); margin-bottom:28px; }
.hero-actions { display:flex; flex-wrap:wrap; gap:14px; }
.detail-section { padding:80px 0; }
.detail-section.alt { background:linear-gradient(180deg,#fff,var(--rd-soft)); }
.section-head { text-align:center; max-width:680px; margin:0 auto 48px; }
.section-head .section-kicker { justify-content:center; }
.section-head .section-copy { margin:0 auto; }

/* Pricing cards */
.pricing-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:22px; align-items:stretch; }
.pricing-card { position:relative; display:flex; flex-direction:column; padding:32px 26px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; transition:transform 220ms ease, box-shadow 220ms ease; }
.pricing-card:hover { transform:translateY(-6px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.pricing-card.is-popular { border-color:var(--rd-orange); box-shadow:0 22px 50px rgba(255,74,28,.18); }
.pricing-badge { position:absolute; top:-13px; left:50%; transform:translateX(-50%); padding:6px 16px; border-radius:99px; background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; font-size:11px; font-weight:800; letter-spacing:.5px; text-transform:uppercase; white-space:nowrap; }
.pricing-name { font-size:13px; font-weight:800; letter-spacing:1px; text-transform:uppercase; color:var(--rd-orange); margin-bottom:10px; }
.pricing-card h3 { font-size:24px; margin-bottom:8px; }
.pricing-card > p { font-size:14px; margin-bottom:20px; }
.pricing-price { display:flex; align-items:baseline; gap:6px; margin-bottom:22px; padding-bottom:22px; border-bottom:1px solid var(--rd-line); }
.pricing-price strong { font-family:var(--font-heading); font-size:34px; color:var(--rd-ink); }
.pricing-price span { font-size:13px; font-weight:700; color:var(--rd-muted); }
.pricing-features { flex:1; margin-bottom:24px; }
.pricing-features li { display:flex; align-items:flex-start; gap:10px; margin:12px 0; font-size:14px; font-weight:700; color:var(--rd-ink); }
.pricing-features li i { margin-top:3px; color:var(--rd-orange); font-size:12px; }
.pricing-card .btn { width:100%; }

/* Comparison / includes */
.include-list li { display:flex; gap:10px; margin:12px 0; font-weight:700; color:var(--rd-ink); font-size:15px; }
.include-list i { color:var(--rd-orange); margin-top:4px; }
.include-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:6px 40px; margin-top:32px; }

.process-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-top:32px; }
.process-card { padding:22px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; border-top:3px solid var(--rd-orange); transition:transform 220ms ease, box-shadow 220ms ease; }
.process-card:hover { transform:translateY(-4px); box-shadow:0 16px 36px rgba(255,74,28,.16); }
.step-num { display:inline-flex; width:36px; height:36px; align-items:center; justify-content:center; margin-bottom:14px; border-radius:8px; background:rgba(255,74,28,.12); color:var(--rd-orange); font-weight:900; font-size:13px; }
.process-card h3 { font-size:17px; margin-bottom:8px; }
.process-card p { font-size:14px; }

.faq-item { border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; margin-bottom:10px; overflow:hidden; }
.faq-item summary { padding:16px 18px; cursor:pointer; font-weight:800; color:var(--rd-ink); list-style:none; display:flex; align-items:center; justify-content:space-between; gap:12px; }
.faq-item summary::-webkit-details-marker { display:none; }
.faq-item summary::after { content:"\f078"; font:900 13px "Font Awesome 6 Free"; color:var(--rd-orange); flex-shrink:0; transition:transform 200ms ease; }
.faq-item[open] summary::after { transform:rotate(180deg); }
.faq-item p { padding:0 18px 16px; font-size:14px; }

.cta-band { padding:72px 0; background:linear-gradient(110deg,rgba(255,74,28,.92),rgba(255,122,53,.88)); color:#fff; text-align:center; }
.cta-band h2 { color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:14px; }
.cta-band p { max-width:560px; margin:0 auto 24px; color:rgba(255,255,255,.9); }

.site-footer { padding:56px 0 24px; background:var(--rd-ink); color:rgba(255,255,255,.65); }
.footer-grid { display:grid; grid-template-columns:1.4fr repeat(3,1fr); gap:32px; margin-bottom:32px; }
.footer-col h4 { color:#fff; margin-bottom:14px; font-size:14px; }
.footer-col a { font-size:14px; } .footer-col a:hover { color:var(--rd-orange-2); }
.footer-bottom { display:flex; justify-content:space-between; padding-top:20px; border-top:1px solid rgba(255,255,255,.12); font-size:13px; }

@media(max-width:960px) { .pricing-grid,.include-grid,.process-grid,.footer-grid { grid-template-columns:1fr; } }
</style>
<link rel="stylesheet" href="assets/site-nav.css?v=13">
</head>
<body>
<?php include __DIR__ . '/gtm-body.php'; ?>
<?php $active_nav = 'home'; $header_mode = 'hero'; include 'header.php'; ?>


<main>
	<section class="service-hero">
		<div class="container">
			<nav class="breadcrumb" aria-label="Breadcrumb">
				<a href="index.php">Home</a><span>/</span>
				<span>Packages</span>
			</nav>
			<div class="hero-badge"><i class="fa-solid fa-layer-group"></i> Growth Packages</div>
			<h1>Growth packages built for your stage</h1>
			<p class="lead">Choose a focused package or combine services into one custom plan with clear deliverables, timeline and pricing.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="contact.php"><i class="fa-solid fa-paper-plane"></i> Get a Custom Quote</a>
				<a class="btn btn-outline" href="services.php" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.3);">Browse All Services</a>
			</div>
		</div>
	</section>

	<section class="detail-section">
		<div class="container">
			<div class="section-head">
				<span class="section-kicker">Choose Your Plan</span>
				<h2 class="section-title">Three ways to work with us</h2>
				<p class="section-copy">Start focused, grow into full-service — every package is built around clear deliverables and monthly reporting, not vague retainers.</p>
			</div>
			<div class="pricing-grid">
				<article class="pricing-card">
					<span class="pricing-name">Starter</span>
					<h3>Foundation</h3>
					<p>For new or local businesses building their first real online presence.</p>
					<div class="pricing-price"><strong>$799</strong><span>/ month</span></div>
					<ul class="pricing-features">
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Local SEO &amp; Google Business Profile</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> On-page SEO for up to 10 pages</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Monthly bookkeeping &amp; financial reporting</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Facebook &amp; Instagram marketing</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Monthly performance report</li>
					</ul>
					<a class="btn btn-outline" href="contact.php">Start With Foundation</a>
				</article>
				<article class="pricing-card is-popular">
					<span class="pricing-badge">Most Popular</span>
					<span class="pricing-name">Growth</span>
					<h3>Accelerate</h3>
					<p>For businesses ready to combine SEO, web development and marketing into one plan.</p>
					<div class="pricing-price"><strong>$1,899</strong><span>/ month</span></div>
					<ul class="pricing-features">
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Full on-page, off-page &amp; technical SEO</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Website design &amp; development</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Multi-platform digital marketing</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Accounts payable &amp; receivable management</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Payroll management</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Dedicated account manager</li>
					</ul>
					<a class="btn btn-primary" href="contact.php">Start With Accelerate</a>
				</article>
				<article class="pricing-card">
					<span class="pricing-name">Enterprise</span>
					<h3>Custom</h3>
					<p>For multi-location or ecommerce brands needing full coverage across bookkeeping, web, marketing and SEO.</p>
					<div class="pricing-price"><strong>Custom</strong><span>quote</span></div>
					<ul class="pricing-features">
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Every service in our catalog, combined</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Ecommerce website development (WooCommerce &amp; Shopify)</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Full bookkeeping &amp; tax preparation support</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Multi-channel digital marketing</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Custom reporting dashboards</li>
						<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Priority support &amp; strategy calls</li>
					</ul>
					<a class="btn btn-outline" href="contact.php">Request Custom Quote</a>
				</article>
			</div>
		</div>
	</section>

	<section class="detail-section alt">
		<div class="container">
			<span class="section-kicker">Every Package</span>
			<h2 class="section-title">What's included no matter which plan you choose</h2>
			<div class="include-grid">
				<ul class="include-list">
					<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> One accountable team across every channel</li>
					<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Transparent monthly reporting</li>
					<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> No long-term lock-in contracts</li>
				</ul>
				<ul class="include-list">
					<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Direct access to your account team</li>
					<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Clear scope and deliverables upfront</li>
					<li><img class="fa-icon-img" src="assets/icons-animated/check.gif" alt="Check"> Room to scale up as you grow</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="detail-section">
		<div class="container">
			<span class="section-kicker">How We Work</span>
			<h2 class="section-title">Getting started is simple</h2>
			<div class="process-grid">
				<article class="process-card"><span class="step-num">01</span><h3>Consult</h3><p>We learn your goals, budget and current channels on a free strategy call.</p></article>
				<article class="process-card"><span class="step-num">02</span><h3>Recommend</h3><p>We match you to a package, or build a custom mix from our full catalog.</p></article>
				<article class="process-card"><span class="step-num">03</span><h3>Onboard</h3><p>We set up tracking, access and a clear 90-day plan before work begins.</p></article>
				<article class="process-card"><span class="step-num">04</span><h3>Report</h3><p>We deliver monthly reporting tied to real leads, traffic and revenue.</p></article>
			</div>
		</div>
	</section>

	<section class="detail-section alt">
		<div class="container" style="max-width:800px;">
			<span class="section-kicker">FAQ</span>
			<h2 class="section-title">Common questions</h2>
			<details class="faq-item"><summary>Can we switch packages later?</summary><p>Yes, you can move up or down as your needs and budget change — no penalty for adjusting.</p></details>
			<details class="faq-item"><summary>Is there a minimum contract length?</summary><p>No long-term lock-in is required; most clients stay month-to-month based on results.</p></details>
			<details class="faq-item"><summary>Can you build a custom package outside these three?</summary><p>Yes, any service in our catalog can be combined into a custom plan with its own pricing.</p></details>
			<details class="faq-item"><summary>What's not included that we might need to pay for separately?</summary><p>Ad spend, third-party software licenses and premium stock or licensed assets are billed separately from the management fee.</p></details>
			<details class="faq-item"><summary>How is billing handled?</summary><p>Packages are billed monthly in advance, with an itemized breakdown of what was delivered each cycle.</p></details>
			<details class="faq-item"><summary>How soon can we get started?</summary><p>Most engagements kick off within 3–5 business days of signing, after a short onboarding call to confirm scope and access.</p></details>
			<details class="faq-item"><summary>What happens if we want to cancel?</summary><p>Give us 30 days' notice — there's no cancellation fee since there's no long-term contract.</p></details>
		</div>
	</section>

	<section class="cta-band">
		<div class="container">
			<h2>Not sure which package fits?</h2>
			<p>Book a free strategy call. We'll review your goals and recommend the right package or custom mix — no pressure.</p>
			<a class="btn btn-dark" href="contact.php"><i class="fa-solid fa-calendar-check"></i> Book Free Consultation</a>
		</div>
	</section>
</main>
<?php include 'footer.php'; ?>


<script>
</script>
<script src="assets/site-nav.js?v=3" defer></script>
</body>
</html>
