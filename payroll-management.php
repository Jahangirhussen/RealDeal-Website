<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payroll Management | RealDeal IT Center</title>
<meta name="description" content="Accurate salary calculation, payroll processing and payslip preparation so every employee is paid correctly and on time, every pay cycle.">
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
.btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; min-height:48px; padding:0 20px; border-radius:6px; font-size:14px; font-weight:800; border:1px solid transparent; transition:transform .18s ease, box-shadow .18s ease; }
.btn:hover { transform:translateY(-3px); }
.btn-primary { background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; box-shadow:0 16px 34px rgba(255,74,28,.25); }
.btn-dark { background:var(--rd-ink); color:#fff; }
.btn-outline { background:#fff; color:var(--rd-ink); border-color:var(--rd-line); }
.site-header { position:fixed; inset:0 0 auto; z-index:50; background:var(--rd-ink); border-bottom:1px solid rgba(255,255,255,.12); box-shadow:0 8px 24px rgba(14,26,36,.2); }
.header-inner { width:min(100% - 48px,var(--container)); min-height:78px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:20px; }
.brand { display:inline-flex; align-items:center; gap:12px; }
.brand-mark { position:relative; width:58px; height:44px; display:grid; grid-template-columns:1fr 1fr; }
.brand-mark::after { content:""; position:absolute; right:-10px; bottom:-8px; width:38px; height:22px; border-bottom:5px solid var(--rd-orange); border-right:5px solid var(--rd-orange); transform:skewX(-24deg) rotate(-8deg); }
.brand-letter { height:44px; display:flex; align-items:center; justify-content:center; font-family:var(--font-heading); font-size:28px; font-weight:800; transform:skewX(-10deg); color:#fff; }
.brand-letter:first-child { background:var(--rd-orange); clip-path:polygon(12% 0,100% 0,88% 100%,0 100%); }
.brand-letter:last-child { background:var(--rd-ink); clip-path:polygon(12% 0,100% 0,88% 100%,0 100%); margin-left:-5px; }
.brand-text { display:grid; gap:1px; color:#fff; }
.brand-text strong { font-family:var(--font-heading); font-size:16px; }
.brand-text span { font-size:10px; font-weight:800; letter-spacing:2.3px; text-transform:uppercase; color:rgba(255,255,255,.65); }
.main-nav ul { display:flex; gap:8px; }
.main-nav > ul > li > a { display:inline-flex; align-items:center; height:42px; padding:0 12px; border-radius:6px; color:rgba(255,255,255,.86); font-size:14px; font-weight:700; }
.main-nav > ul > li > a:hover { background:rgba(255,255,255,.1); color:#fff; }
.main-nav > ul > li > a.is-active { background:rgba(255,74,28,.1); color:var(--rd-orange); }
.menu-toggle { display:none; width:44px; height:44px; border:1px solid var(--rd-line); border-radius:6px; background:#fff; cursor:pointer; }
.service-hero { position:relative; padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("https://realdealitcenter.com/wp-content/uploads/2026/07/seo-image.webp") center/cover; color:#fff; }
.breadcrumb { display:flex; flex-wrap:wrap; gap:8px; margin-bottom:20px; font-size:13px; font-weight:600; color:rgba(255,255,255,.6); }
.breadcrumb a { color:rgba(255,255,255,.88); } .breadcrumb a:hover { color:var(--rd-orange-2); }
.hero-badge { display:inline-flex; align-items:center; gap:10px; padding:8px 14px; margin-bottom:20px; border:1px solid rgba(255,255,255,.2); border-radius:6px; background:rgba(255,255,255,.08); font-size:13px; font-weight:800; }
.hero-badge i { color:var(--rd-orange-2); }
.service-hero h1 { color:#fff; font-size:clamp(36px,5vw,58px); margin-bottom:16px; max-width:800px; }
.service-hero .lead { max-width:680px; font-size:18px; color:rgba(255,255,255,.82); margin-bottom:28px; }
.hero-actions { display:flex; flex-wrap:wrap; gap:14px; }
.detail-section { padding:80px 0; }
.detail-section.alt { background:linear-gradient(180deg,#fff,var(--rd-soft)); }
.detail-grid { display:grid; grid-template-columns:1.2fr .8fr; gap:40px; align-items:start; }
.benefit-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:16px; margin-top:32px; }
.benefit-card { padding:22px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; }
.benefit-icon { width:108px; height:108px; border-radius:8px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; background:transparent; color:var(--rd-orange); box-shadow:none; }
.benefit-icon .fa-icon-img { width:84px; height:84px; object-fit:contain; margin:auto; }
.benefit-card h3 { font-size:17px; margin-bottom:8px; }
.benefit-card p { font-size:14px; }
.include-list li { display:flex; gap:10px; margin:12px 0; font-weight:700; color:var(--rd-ink); font-size:15px; }
.include-list i { color:var(--rd-orange); margin-top:4px; }
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
.sidebar { position:sticky; top:100px; display:grid; gap:16px; }
.sidebar-card { padding:24px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; box-shadow:var(--shadow); transition:border-color 220ms ease, box-shadow 220ms ease; }
.sidebar-card:hover { border-color:var(--rd-orange); box-shadow:0 16px 36px rgba(255,74,28,.16); }
.sidebar-card h3 { font-size:18px; margin-bottom:14px; }
.sidebar-stat { display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid var(--rd-line); font-size:14px; font-weight:700; }
.sidebar-stat span { color:var(--rd-muted); font-weight:600; }
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
@media(max-width:960px) { .detail-grid,.benefit-grid,.process-grid,.footer-grid { grid-template-columns:1fr; } .sidebar { position:static; } }
@media(max-width:820px) { .menu-toggle { display:inline-flex; align-items:center; justify-content:center; } .main-nav { display:none; position:fixed; inset:78px 16px auto; padding:14px; background:#fff; border:1px solid var(--rd-line); border-radius:var(--radius); box-shadow:var(--shadow); } .main-nav.is-open { display:block; } .main-nav ul { flex-direction:column; } }
.fa-icon-img { width:16px; height:16px; object-fit:contain; vertical-align:-2px; display:inline-block; }
</style>
<link rel="stylesheet" href="assets/site-nav.css?v=13">
</head>
<body>
<?php $active_nav = 'home'; $header_mode = 'hero'; include 'header.php'; ?>

<main>
	<section class="service-hero">
		<div class="container">
			<nav class="breadcrumb" aria-label="Breadcrumb">
				<a href="index.php">Home</a><span>/</span>
				<a href="services.php">Services</a><span>/</span>
				<a href="bookkeeping.php">Accounting and Bookkeeping</a><span>/</span>
				<span>Payroll Management</span>
			</nav>
			<div class="service-hero-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/salary.gif" alt="Payroll management icon"></div>
			<div class="hero-badge"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/salary.gif" alt="Payroll management icon"> Accounting and Bookkeeping</div>
			<h1>Payroll Management</h1>
			<p class="lead">Accurate salary calculation and payslip preparation so your team always gets paid correctly and on time.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="contact.php"><i class="fa-solid fa-paper-plane"></i> Request Proposal</a>
				<a class="btn btn-outline" href="bookkeeping.php" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.3);">All Accounting and Bookkeeping Services</a>
			</div>
		</div>
	</section>
	<section class="detail-section">
		<div class="container">
			<div class="detail-grid">
				<div>
					<span class="section-kicker">Overview</span>
					<h2 class="section-title">What is Payroll Management?</h2>
					<p>Payroll mistakes damage trust fast. Payroll Management is our disciplined salary calculation process — running employee payroll processing accurately every cycle and preparing clear payslips — so your team gets paid correctly and on time, every single pay period.</p>
					<div class="benefit-grid"><article class="benefit-card"><div class="benefit-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"></div><h3>Employee payroll processing</h3><p>Wages calculated and processed accurately, every pay cycle.</p></article><article class="benefit-card"><div class="benefit-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"></div><h3>Payslip preparation</h3><p>Clear, itemized payslips prepared and delivered on schedule.</p></article><article class="benefit-card"><div class="benefit-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"></div><h3>Accurate deductions</h3><p>Tax, benefits and other withholdings calculated correctly each time.</p></article><article class="benefit-card"><div class="benefit-icon"><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"></div><h3>Reliable pay cycles</h3><p>Payroll that runs on schedule, cycle after cycle, without surprises.</p></article></div>
				</div>
				<aside class="sidebar">
					<div class="sidebar-card">
						<h3>Service snapshot</h3>
						<div class="sidebar-stat"><span>Category</span><strong>Accounting and Bookkeeping</strong></div>
						<div class="sidebar-stat"><span>Best for</span><strong>Businesses with employees on a regular pay cycle</strong></div>
						<div class="sidebar-stat"><span>Reporting</span><strong>Every pay cycle</strong></div>
						<div class="sidebar-stat" style="border:0;"><span>Support</span><strong>Dedicated team</strong></div>
						<a class="btn btn-primary" href="contact.php" style="width:100%;margin-top:16px;">Start This Service</a>
					</div>
					<div class="sidebar-card">
						<h3>Related services</h3>
						<a class="related-link" href="tax-preparation-support.php"><i class="fa-solid fa-receipt"></i> Tax Preparation Support</a>
						<a class="related-link" href="financial-reporting.php"><i class="fa-solid fa-chart-pie"></i> Financial Reporting</a>
						<a class="related-link" href="financial-record-keeping.php"><i class="fa-solid fa-book"></i> Financial Record Keeping</a>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section class="detail-section alt">
		<div class="container">
			<span class="section-kicker">Deliverables</span>
			<h2 class="section-title">What's included</h2>
			<ul class="include-list"><li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Employee payroll processing every pay cycle</li><li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Salary and deduction calculation</li><li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Payslip preparation and delivery</li><li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Direct deposit coordination</li><li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> New hire and termination payroll updates</li><li><img class="fa-icon-img" src="https://realdealitcenter.com/wp-content/uploads/2026/07/check.gif" alt="Check"> Monthly payroll summary reporting</li></ul>
		</div>
	</section>
	<section class="detail-section">
		<div class="container">
			<span class="section-kicker">How we work</span>
			<h2 class="section-title">Our process</h2>
			<div class="process-grid"><article class="process-card"><span class="step-num">01</span><h3>Setup</h3><p>We configure payroll for every employee on your team.</p></article><article class="process-card"><span class="step-num">02</span><h3>Calculate</h3><p>We calculate wages and deductions accurately each cycle.</p></article><article class="process-card"><span class="step-num">03</span><h3>Process</h3><p>We run payroll and prepare payslips on your chosen schedule.</p></article><article class="process-card"><span class="step-num">04</span><h3>Support</h3><p>We manage changes, new hires and updates during the year.</p></article></div>
		</div>
	</section>
	<section class="detail-section alt">
		<div class="container" style="max-width:800px;">
			<span class="section-kicker">FAQ</span>
			<h2 class="section-title">Common questions</h2>
			<details class="faq-item"><summary>How are salaries calculated each cycle?</summary><p>We calculate gross pay, deductions and net pay for every employee based on your pay policies and hours or salary structure.</p></details><details class="faq-item"><summary>What if we switch payroll platforms?</summary><p>We can migrate payroll history and set up a new platform smoothly.</p></details><details class="faq-item"><summary>How are payslips delivered to employees?</summary><p>Payslips are prepared and delivered digitally each pay cycle, ready for employee access.</p></details><details class="faq-item"><summary>How is payroll pricing structured?</summary><p>Pricing is typically based on employee headcount plus pay cycle frequency.</p></details><details class="faq-item"><summary>How long does onboarding take?</summary><p>Most businesses are fully set up and running payroll within one to two pay cycles.</p></details><details class="faq-item"><summary>What do you need from us to get started?</summary><p>Employee information, prior payroll records if switching, and your preferred pay schedule.</p></details><details class="faq-item"><summary>How is this different from Tax Preparation Support?</summary><p>Payroll Management runs the pay cycle itself; Tax Preparation Support organizes the broader tax data your business needs for filing.</p></details>
		</div>
	</section>
	<section class="cta-band">
		<div class="container">
			<h2>Ready to start with Payroll Management?</h2>
			<p>Book a free strategy call. We'll review your goals and outline a clear plan — no pressure.</p>
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