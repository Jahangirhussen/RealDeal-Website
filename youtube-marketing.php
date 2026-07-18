<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YouTube Marketing | RealDeal IT Center</title>
<meta name="description" content="YouTube marketing services covering channel branding, SEO video optimization, thumbnail design and subscriber growth strategy to build a real audience.">
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
.service-hero { padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("images/seo-image.jpg") center/cover; color:#fff; }
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
.benefit-icon { width:40px; height:40px; border-radius:8px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; background:rgba(255,74,28,.12); color:var(--rd-orange); }
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
</style>
<link rel="stylesheet" href="assets/site-nav.css?v=3">
</head>
<body>
<?php $active_nav = 'home'; $header_mode = 'hero'; include 'header.php'; ?>

<main>
	<section class="service-hero">
		<div class="container">
			<nav class="breadcrumb" aria-label="Breadcrumb">
				<a href="index.php">Home</a><span>/</span>
				<a href="services.php">Services</a><span>/</span>
				<a href="digital-marketing.php">Digital Marketing</a><span>/</span>
				<span>YouTube Marketing</span>
			</nav>
			<div class="hero-badge"><i class="fa-solid fa-hashtag"></i> Digital Marketing</div>
			<h1>YouTube Marketing</h1>
			<p class="lead">Channel branding, SEO video optimization and subscriber growth strategy that turn YouTube into a lasting audience channel.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="contact.php"><i class="fa-solid fa-paper-plane"></i> Request Proposal</a>
				<a class="btn btn-outline" href="digital-marketing.php" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.3);">All Digital Marketing Services</a>
			</div>
		</div>
	</section>
	<section class="detail-section">
		<div class="container">
			<div class="detail-grid">
				<div>
					<span class="section-kicker">Overview</span>
					<h2 class="section-title">What is YouTube Marketing?</h2>
					<p>YouTube is a search engine as much as a social platform. We build out your channel branding, optimize video titles, descriptions and tags for search, design thumbnails that earn clicks, and apply growth strategies that steadily build a subscriber base that keeps coming back.</p>
					<div class="benefit-grid"><article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-check"></i></div><h3>Professional channel branding</h3><p>A channel banner, icon and layout that look established and credible.</p></article><article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-check"></i></div><h3>Search-optimized videos</h3><p>Titles, descriptions and tags built to surface in YouTube and Google search.</p></article><article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-check"></i></div><h3>High-click thumbnails</h3><p>Thumbnail design built to earn clicks without misleading viewers.</p></article><article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-check"></i></div><h3>Sustainable subscriber growth</h3><p>A growth plan that builds a real, returning audience over time.</p></article></div>
				</div>
				<aside class="sidebar">
					<div class="sidebar-card">
						<h3>Service snapshot</h3>
						<div class="sidebar-stat"><span>Category</span><strong>Digital Marketing</strong></div>
						<div class="sidebar-stat"><span>Best for</span><strong>Brands investing in long-form video</strong></div>
						<div class="sidebar-stat"><span>Posting cadence</span><strong>2-4 videos per month</strong></div>
						<div class="sidebar-stat" style="border:0;"><span>Support</span><strong>Dedicated team</strong></div>
						<a class="btn btn-primary" href="contact.php" style="width:100%;margin-top:16px;">Start This Service</a>
					</div>
					<div class="sidebar-card">
						<h3>Related services</h3>
						<a class="related-link" href="instagram-marketing.php"><i class="fa-brands fa-instagram"></i> Instagram Marketing</a>
						<a class="related-link" href="facebook-marketing.php"><i class="fa-brands fa-facebook-f"></i> Facebook Marketing</a>
						<a class="related-link" href="pinterest-marketing.php"><i class="fa-brands fa-pinterest-p"></i> Pinterest Marketing</a>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section class="detail-section alt">
		<div class="container">
			<span class="section-kicker">Deliverables</span>
			<h2 class="section-title">What's included</h2>
			<ul class="include-list"><li><i class="fa-solid fa-circle-check"></i> Channel branding and optimization</li><li><i class="fa-solid fa-circle-check"></i> SEO video optimization (titles, tags, descriptions)</li><li><i class="fa-solid fa-circle-check"></i> Thumbnail design</li><li><i class="fa-solid fa-circle-check"></i> Subscriber growth plan</li><li><i class="fa-solid fa-circle-check"></i> Upload scheduling and playlist organization</li><li><i class="fa-solid fa-circle-check"></i> Monthly views and subscriber report</li></ul>
		</div>
	</section>
	<section class="detail-section">
		<div class="container">
			<span class="section-kicker">How we work</span>
			<h2 class="section-title">Our process</h2>
			<div class="process-grid"><article class="process-card"><span class="step-num">01</span><h3>Channel setup</h3><p>We build out branding and optimize your channel layout.</p></article><article class="process-card"><span class="step-num">02</span><h3>Video SEO</h3><p>We optimize titles, tags and descriptions for search visibility.</p></article><article class="process-card"><span class="step-num">03</span><h3>Thumbnails</h3><p>We design thumbnails built to earn clicks in search and suggested feeds.</p></article><article class="process-card"><span class="step-num">04</span><h3>Grow</h3><p>We apply the subscriber growth plan and report on results monthly.</p></article></div>
		</div>
	</section>
	<section class="detail-section alt">
		<div class="container" style="max-width:800px;">
			<span class="section-kicker">FAQ</span>
			<h2 class="section-title">Common questions</h2>
			<details class="faq-item"><summary>Do you produce the videos or just optimize them?</summary><p>This service focuses on channel branding, SEO, thumbnails and growth strategy; video production can be scoped separately.</p></details><details class="faq-item"><summary>How does SEO video optimization work?</summary><p>We research keywords and optimize titles, descriptions and tags so your videos surface in relevant searches.</p></details><details class="faq-item"><summary>Do you design thumbnails for every video?</summary><p>Yes, thumbnail design is included for each video you publish through the service.</p></details><details class="faq-item"><summary>How do you grow subscribers without buying followers?</summary><p>The subscriber growth plan relies on consistent, optimized uploads and audience retention tactics, never purchased followers.</p></details><details class="faq-item"><summary>How long before we see channel growth?</summary><p>Meaningful growth in views and subscribers typically builds over three to six months of consistent optimization.</p></details><details class="faq-item"><summary>Can you help rebrand an existing channel?</summary><p>Yes, channel branding and optimization applies whether you're starting fresh or refreshing an established channel.</p></details><details class="faq-item"><summary>What do you need from us to get started?</summary><p>Channel access, existing video files if any, and details on your target audience and goals.</p></details>
		</div>
	</section>
	<section class="cta-band">
		<div class="container">
			<h2>Ready to start with YouTube Marketing?</h2>
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