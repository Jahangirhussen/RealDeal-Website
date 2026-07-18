<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TRB Home Decor Case Study | RealDeal IT Center</title>
<meta name="description" content="How we grew social media presence and engagement for TRB Home Decor, a home decor retail brand.">
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
	--accent: var(--rd-blue);
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
.service-hero { padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("../images/trb-home-decor-social-media-growth-cover.jpg") center/cover; color:#fff; }
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
</style>
<link rel="stylesheet" href="../assets/site-nav.css?v=5">
</head>
<body>
<?php $active_nav = 'home'; $header_mode = 'hero'; include '../header.php'; ?>

<main>
	<section class="service-hero">
		<div class="container">
			<nav class="breadcrumb" aria-label="Breadcrumb">
				<a href="../index.php">Home</a><span>/</span>
				<a href="index.php">Portfolio</a><span>/</span>
				<span>TRB Home Decor</span>
			</nav>
			<div class="hero-badge"><i class="fa-solid fa-star"></i> Case Study</div>
			<h1>TRB Home Decor — Social Media Growth</h1>
			<p class="lead">Building a consistent, on-brand social media presence for TRB Home Decor to showcase products and reach new customers.</p>
			<div class="hero-meta">
				<div>Client<strong>TRB Home Decor</strong></div>
				<div>Industry<strong>Home Decor / Retail</strong></div>
				<div>Category<strong>Digital Marketing</strong></div>
				<div>Country<strong>Bangladesh</strong></div>
				<div>Year<strong>2022</strong></div>
			</div>
			<div class="hero-actions">
				<a class="btn btn-primary" href="../contact.php"><i class="fa-solid fa-paper-plane"></i> Start a Similar Project</a>
				<a class="btn btn-outline" href="index.php" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.3);">Back to Portfolio</a>
			</div>
		</div>
	</section>
	<section class="detail-section">
		<div class="container">
			<div class="detail-grid">
				<div class="article-body">
					<span class="section-kicker">The Challenge</span>
					<h2 class="section-title">Where things stood</h2>
					<p>TRB Home Decor had a strong product range but an inconsistent social media presence — irregular posting and no structured way to showcase products or reach shoppers actively browsing for home decor inspiration.</p>
					<h3>Our Approach</h3>
					<p>We built a structured social media plan around Facebook and Instagram, covering a consistent content calendar, product-focused visual content, and community engagement to turn followers into shoppers.</p>
					<h3>The Results</h3>
					<ul class="result-list">
						<li><i class="fa-solid fa-circle-check"></i> Consistent posting schedule replacing ad-hoc updates</li>
						<li><i class="fa-solid fa-circle-check"></i> Stronger product visibility across social channels</li>
						<li><i class="fa-solid fa-circle-check"></i> A repeatable content system the brand can keep running</li>
						<li><i class="fa-solid fa-circle-check"></i> Clearer brand presence supporting customer enquiries</li>
					</ul>
				</div>
				<aside class="sidebar">
					<div class="sidebar-card">
						<h3>Project snapshot</h3>
						<div class="sidebar-stat"><span>Client</span><strong>TRB Home Decor</strong></div>
						<div class="sidebar-stat"><span>Industry</span><strong>Home Decor / Retail</strong></div>
						<div class="sidebar-stat"><span>Category</span><strong>Digital Marketing</strong></div>
						<div class="sidebar-stat"><span>Country</span><strong>Bangladesh</strong></div>
						<div class="sidebar-stat" style="border:0;"><span>Year</span><strong>2022</strong></div>
						<a class="btn btn-primary" href="../contact.php" style="width:100%;margin-top:16px;">Discuss Your Project</a>
					</div>
					<div class="sidebar-card">
						<h3>Services provided</h3>
						<div class="sidebar-tags"><span>Facebook Marketing</span><span>Instagram Marketing</span><span>Content Strategy</span></div>
					</div>
					<div class="sidebar-card">
						<h3>Client profile</h3>
						<a class="related-link" href="https://www.facebook.com/trbhomedecor" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i> Facebook Page</a>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section class="cta-band">
		<div class="container">
			<h2>Want results like this for your business?</h2>
			<p>Book a free strategy call. We'll review your goals and outline a clear plan — no pressure.</p>
			<a class="btn btn-dark" href="../contact.php"><i class="fa-solid fa-calendar-check"></i> Book Free Consultation</a>
		</div>
	</section>
</main>
<?php include '../footer.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "TRB Home Decor — Social Media Growth",
  "description": "How we grew social media presence and engagement for TRB Home Decor, a home decor retail brand.",
  "about": "TRB Home Decor"
}
</script>
<script src="../assets/site-nav.js?v=5" defer></script>
</body>
</html>
