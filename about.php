<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About us | RealDeal IT Center</title>
<meta name="description" content="RealDeal IT Center is a full-service digital marketing agency — one accountable team behind SEO, ads, creative, web and marketplace growth.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=Poppins:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
:root {
	--rd-orange: #ff4a1c; --rd-orange-2: #ff7a35; --rd-ink: #0e1a24; --rd-ink-2: #142533; --rd-teal: #0f8f88;
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
.detail-section { padding:80px 0; }
.detail-section.alt { background:linear-gradient(180deg,#fff,var(--rd-soft)); }

/* Hero */
.about-hero { padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("images/about-banner.jpg") center/cover; color:#fff; }
.about-hero .inner { max-width:920px; margin:0 auto; padding:44px 48px; border:1px solid rgba(255,255,255,.14); border-radius:16px; background:rgba(255,255,255,.05); backdrop-filter:blur(10px); }
.about-hero h1 { color:#fff; font-size:clamp(30px,4.4vw,44px); margin-bottom:22px; }
.about-hero p { color:rgba(255,255,255,.78); font-size:15.5px; margin-bottom:16px; }
.about-hero p:last-child { margin-bottom:0; }
.about-hero strong, .about-hero a { color:#fff; text-decoration:underline; }

/* Vision / Mission / Motto */
.vmm-head { text-align:center; max-width:680px; margin:0 auto 40px; }
.vmm-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
.vmm-card { padding:32px 26px; border:1px solid var(--rd-line); border-radius:14px; background:#fff; text-align:center; transition:transform 220ms ease, box-shadow 220ms ease; }
.vmm-card:hover { transform:translateY(-6px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.vmm-icon { width:64px; height:64px; margin:0 auto 20px; border-radius:16px; display:flex; align-items:center; justify-content:center; background:rgba(255,74,28,.1); color:var(--rd-orange); font-size:26px; }
.vmm-card h3 { font-size:19px; margin-bottom:10px; }
.vmm-card p { font-size:14px; }

/* Who we are */
.who-grid { display:grid; grid-template-columns:0.95fr 1.05fr; gap:48px; align-items:center; }
.who-grid h2 { font-size:clamp(26px,3.4vw,36px); margin-bottom:16px; }
.who-grid > div > p { font-size:15px; margin-bottom:24px; }
.who-media { position:relative; border-radius:16px; overflow:hidden; box-shadow:var(--shadow); aspect-ratio:4/3; }
.who-media img { width:100%; height:100%; object-fit:cover; }
.who-media::after { content:""; position:absolute; inset:0; background:linear-gradient(0deg, rgba(14,26,36,.75), transparent 55%); }
.who-badge { position:absolute; top:18px; right:18px; width:92px; height:92px; border-radius:50%; background:#fff; display:flex; flex-direction:column; align-items:center; justify-content:center; box-shadow:var(--shadow); font-size:11px; font-weight:800; color:var(--rd-muted); text-transform:uppercase; letter-spacing:.5px; }
.who-badge strong { font-family:var(--font-heading); font-size:20px; color:var(--rd-orange); text-transform:none; letter-spacing:0; }
.who-caption { position:absolute; left:20px; right:20px; bottom:20px; color:#fff; }
.who-caption h4 { color:#fff; font-size:18px; margin-bottom:6px; }
.who-caption p { font-size:13px; color:rgba(255,255,255,.8); }

/* Services grid */
.svc-head { text-align:center; max-width:720px; margin:0 auto 40px; }
.svc-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:18px; margin-bottom:32px; }
.svc-card { display:flex; gap:20px; padding:26px; border:1px solid var(--rd-line); border-radius:14px; background:#fff; transition:transform 220ms ease, box-shadow 220ms ease; }
.svc-card:hover { transform:translateY(-4px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.svc-icon { flex-shrink:0; width:52px; height:52px; border-radius:12px; display:flex; align-items:center; justify-content:center; background:rgba(255,74,28,.1); color:var(--rd-orange); font-size:20px; }
.svc-card h3 { font-size:18px; margin-bottom:8px; }
.svc-card p { font-size:14px; }
.svc-more { text-align:center; }

/* Approach / Partners */
.approach-grid { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:56px; }
.approach-col { padding:32px 28px; border:1px solid var(--rd-line); border-radius:14px; background:#fff; transition:transform 220ms ease, box-shadow 220ms ease; }
.approach-col:hover { transform:translateY(-6px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.approach-col h3 { font-size:20px; margin-bottom:12px; }
.approach-col p { font-size:14.5px; margin-bottom:14px; }
.approach-col p:last-child { margin-bottom:0; }

/* Client logo strip (scrolling marquee) */
.logo-strip { position:relative; overflow:hidden; margin-top:48px; padding:28px 0; border:1px solid var(--rd-line); border-radius:14px; background:var(--rd-soft); mask-image:linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); }
.logo-strip-track { display:flex; align-items:center; gap:56px; width:max-content; animation:logoMarquee 22s linear infinite; }
.logo-strip:hover .logo-strip-track { animation-play-state:paused; }
.logo-strip-track span { font-family:var(--font-heading); font-weight:800; font-size:19px; color:var(--rd-ink); opacity:.55; letter-spacing:.3px; white-space:nowrap; transition:opacity 180ms ease; }
.logo-strip-track span:hover { opacity:1; color:var(--rd-orange); }
@keyframes logoMarquee { from { transform:translateX(0); } to { transform:translateX(-50%); } }

.cta-band { padding:72px 0; background:linear-gradient(110deg,rgba(255,74,28,.92),rgba(255,122,53,.88)); color:#fff; text-align:center; }
.cta-band h2 { color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:14px; }
.cta-band p { max-width:560px; margin:0 auto 24px; color:rgba(255,255,255,.9); }
.cta-actions { display:flex; flex-wrap:wrap; justify-content:center; gap:14px; }

.site-footer { padding:56px 0 24px; background:var(--rd-ink); color:rgba(255,255,255,.65); }
.footer-grid { display:grid; grid-template-columns:1.4fr repeat(3,1fr); gap:32px; margin-bottom:32px; }
.footer-col h4 { color:#fff; margin-bottom:14px; font-size:14px; }
.footer-col a { font-size:14px; } .footer-col a:hover { color:var(--rd-orange-2); }
.footer-bottom { display:flex; justify-content:space-between; padding-top:20px; border-top:1px solid rgba(255,255,255,.12); font-size:13px; }

@media(max-width:960px) { .vmm-grid,.svc-grid,.approach-grid,.footer-grid { grid-template-columns:1fr 1fr; } .who-grid { grid-template-columns:1fr; } }
@media(max-width:640px) { .vmm-grid,.svc-grid,.approach-grid { grid-template-columns:1fr; } .about-hero .inner { padding:28px 24px; } }
@keyframes marquee {
	from { transform: translateX(0); }
	to { transform: translateX(-50%); }
}

.testimonial .section-head {
	flex-direction: column;
	align-items: center;
	text-align: center;
	gap: 14px;
}
.testimonial .section-copy {
	max-width: 560px;
	margin: 0 auto;
	text-align: center;
}
.quote-marquee {
	position: relative;
	overflow: hidden;
	margin-top: 40px;
}
.quote-track {
	display: flex;
	gap: 20px;
	width: max-content;
	animation: marquee 220s linear infinite;
}
.quote-marquee:hover .quote-track {
	animation-play-state: paused;
}
.quote-card-mini {
	position: relative;
	flex-shrink: 0;
	width: 320px;
	padding: 20px;
	border-radius: 14px;
	background: #1a2733;
	box-shadow: 0 12px 30px rgba(0,0,0,.2);
}
.quote-card-mini .gr-head { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 10px; }
.quote-card-mini .avatar {
	width: 42px; height: 42px; border-radius: 50%;
	display: flex; align-items: center; justify-content: center;
	font-family: var(--font-heading); font-weight: 800; font-size: 15px; color: #fff;
	flex-shrink: 0;
}
.quote-card-mini .gr-head-info { flex: 1; min-width: 0; }
.quote-card-mini .gr-head-info strong { display: flex; align-items: center; gap: 6px; font-size: 14px; color: #fff; }
.quote-card-mini .gr-head-info strong .google-badge { width: 15px; height: 15px; border-radius: 50%; background: #fff; display: inline-flex; align-items: center; justify-content: center; font-size: 9px; color: #4285F4; flex-shrink: 0; }
.quote-card-mini .gr-meta { font-size: 11.5px; color: rgba(255,255,255,.5); margin-top: 2px; }
.quote-card-mini .gr-dots { color: rgba(255,255,255,.4); font-size: 16px; line-height: 1; }
.quote-card-mini .stars { display: flex; gap: 2px; margin-bottom: 4px; }
.quote-card-mini .stars i { color: #fbbc04; font-size: 12px; }
.quote-card-mini .gr-time { font-size: 11.5px; color: rgba(255,255,255,.45); margin-bottom: 10px; display: block; }
.quote-card-mini p { font-size: 13px; line-height: 1.55; color: rgba(255,255,255,.82); margin-bottom: 0; }
.quote-card-mini p .more-link { color: #8ab4f8; font-weight: 700; }
</style>
<link rel="stylesheet" href="assets/site-nav.css?v=3">
</head>
<body>
<?php $active_nav = 'home'; $header_mode = 'hero'; include 'header.php'; ?>


<main>
	<section class="about-hero">
		<div class="container">
			<div class="inner">
				<h1>RealDeal IT Center: A Full-Service Digital Growth Partner</h1>
				<p>Welcome to <strong>RealDeal IT Center</strong>, a full-service digital marketing agency built around one idea: growth should be measurable, and one team should be accountable for it. Our passion for execution and commitment to exceptional results set us apart.</p>
				<p>We're proud of our track record helping businesses across industries succeed in the digital space.</p>
				<p>We believe in the uniqueness of every business, which is why we tailor our services to meet your specific needs. Whether it's raising brand awareness, generating leads, improving conversions, or enhancing customer engagement, our comprehensive range of digital marketing services can be customized to align with your objectives. From SEO and social media marketing to content creation and online advertising, we have the expertise to drive measurable results and maximize your ROI.</p>
				<p>What sets us apart is our unwavering commitment to delivering excellence. We take the time to understand your business, industry and target market, enabling us to develop strategies that resonate with your audience and deliver meaningful outcomes. Our data-driven approach ensures every decision is backed by insights, allowing us to optimize campaigns, track performance and continuously refine our strategies for optimal results.</p>
				<p>Experience the power of digital marketing with RealDeal, your trusted partner for comprehensive and results-driven solutions. <a href="contact.php">Contact us</a> today to elevate your online presence to new heights.</p>
			</div>
		</div>
	</section>

	<section class="detail-section">
		<div class="container">
			<div class="vmm-head">
				<span class="section-kicker" style="justify-content:center;">Why RealDeal</span>
				<h2 class="section-title">Empowering Businesses for Digital Success</h2>
				<p>We believe every business deserves the opportunity to thrive online, and we're committed to providing the tools and expertise necessary to make that happen.</p>
			</div>
			<div class="vmm-grid">
				<article class="vmm-card">
					<div class="vmm-icon"><i class="fa-solid fa-rocket"></i></div>
					<h3>Our Vision</h3>
					<p>Our vision at RealDeal IT Center is to be the leading digital growth partner known for innovative, effective solutions that help businesses thrive. We aim to exceed client expectations and be recognized as a trusted partner in their success.</p>
				</article>
				<article class="vmm-card">
					<div class="vmm-icon"><i class="fa-solid fa-bullseye"></i></div>
					<h3>Our Mission</h3>
					<p>Our mission is to empower businesses with the tools and expertise they need to succeed in the ever-changing world of digital marketing — delivering high-quality, results-driven solutions that help clients grow.</p>
				</article>
				<article class="vmm-card">
					<div class="vmm-icon"><i class="fa-solid fa-quote-left"></i></div>
					<h3>Our Motto</h3>
					<p>"Measurable Growth, One Accountable Team." We provide businesses with the right tools and expertise, and help you achieve your goals and reach new heights of success.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="detail-section alt">
		<div class="container">
			<div class="who-grid">
				<div>
					<span class="section-kicker">Who We Are</span>
					<h2>RealDeal IT Center: Your Partner for Digital Success</h2>
					<p>Choosing RealDeal as your digital growth partner means transparency, professionalism and a collaborative approach. We believe in building strong relationships with our clients, working closely to understand their vision and objectives. Our team becomes an extension of your business, dedicated to achieving your digital marketing goals and surpassing your expectations.</p>
					<a class="btn btn-primary" href="contact.php">Get a Free Consultation</a>
				</div>
				<div class="who-media">
					<img src="images/about-realdeal-team-collaborating.jpg" alt="RealDeal team collaborating">
					<div class="who-badge"><span>EST.</span><strong>2018</strong></div>
					<div class="who-caption">
						<h4>Together, We'll Grow Your Business</h4>
						<p>Our team of experts collaborates with you on a customized strategy that aligns with your unique goals — built for long-term success.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="detail-section">
		<div class="container">
			<div class="svc-head">
				<span class="section-kicker" style="justify-content:center;">Our Services</span>
				<h2 class="section-title">Supporting Business Growth Through Digital Innovation</h2>
			</div>
			<div class="svc-grid">
				<article class="svc-card">
					<div class="svc-icon"><i class="fa-solid fa-calculator"></i></div>
					<div><h3>Accounting and Bookkeeping</h3><p>Accurate books, payables, receivables, reconciliation, reporting and payroll handled by one dedicated team.</p></div>
				</article>
				<article class="svc-card">
					<div class="svc-icon"><i class="fa-solid fa-laptop-code"></i></div>
					<div><h3>Web Design &amp; Development</h3><p>Conversion-focused design, custom development and ecommerce builds on WooCommerce and Shopify.</p></div>
				</article>
				<article class="svc-card">
					<div class="svc-icon"><i class="fa-solid fa-bullhorn"></i></div>
					<div><h3>Digital Marketing</h3><p>Platform-specific strategy, content and growth campaigns across Facebook, Instagram, LinkedIn, Twitter (X), Pinterest and YouTube.</p></div>
				</article>
				<article class="svc-card">
					<div class="svc-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
					<div><h3>Search Engine Optimization (SEO)</h3><p>On-page, off-page, local and technical SEO that builds lasting organic visibility and rankings.</p></div>
				</article>
			</div>
			<div class="svc-more"><a class="btn btn-primary" href="services.php">More Services</a></div>
		</div>
	</section>

	<section class="detail-section alt" style="padding-top:0;">
		<div class="container">
			<div class="approach-grid">
				<div class="approach-col">
					<h3>Our Unique Approach</h3>
					<p>We start by thoroughly analyzing each client's business, industry and target audience. Then we develop a comprehensive marketing strategy based on our findings, with specific goals, tactics and metrics for success.</p>
					<p>We track and analyze data throughout the implementation process to ensure our strategies achieve the desired results, and provide regular reports so clients can see progress and make informed decisions about future marketing efforts.</p>
				</div>
				<div class="approach-col">
					<h3>Our Valued Partners</h3>
					<p>We work with businesses of all sizes and industries, from startups to established enterprises. Our clients come from various industries, including hospitality, healthcare, technology, retail and more.</p>
					<p>We believe in building long-term relationships with our clients and strive to become a trusted partner in their success. We're proud of our work and look forward to helping even more businesses achieve their goals through effective marketing strategies.</p>
				</div>
			</div>
			<div class="logo-strip">
				<div class="logo-strip-track">
					<span>BrightPeak</span>
					<span>Cedar &amp; Co</span>
					<span>NovaRetail</span>
					<span>Urban Bloom</span>
					<span>BrightPeak</span>
					<span>Cedar &amp; Co</span>
					<span>NovaRetail</span>
					<span>Urban Bloom</span>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial">
		<div class="container">
			<div class="section-head">
				<div data-reveal="left">
					<span class="section-kicker">Client Words</span>
					<h2 class="section-title">Trusted for responsive service and clean delivery.</h2>
				</div>
				<p class="section-copy" data-reveal="right">A few of the businesses we've worked with, across accounting, web, marketing and SEO.</p>
			</div>

			<div class="quote-marquee" aria-label="Client testimonials, auto-scrolling">
				<div class="quote-track">
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">A</span>
							<div class="gr-head-info">
								<strong>Al Haayaat Limited <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Website, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">Z</span>
							<div class="gr-head-info">
								<strong>Zaam Zaam Limited <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Website, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">B</span>
							<div class="gr-head-info">
								<strong>Bros Slice &amp; Grill <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Website, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">M</span>
							<div class="gr-head-info">
								<strong>Miranda's English Club <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Digital Marketing</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">T</span>
							<div class="gr-head-info">
								<strong>TRB Home Decor <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Digital Marketing</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">T</span>
							<div class="gr-head-info">
								<strong>TRB Fashion <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Digital Marketing</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">A</span>
							<div class="gr-head-info">
								<strong>AAHM <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">A</span>
							<div class="gr-head-info">
								<strong>Ahmed Hassan <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">M</span>
							<div class="gr-head-info">
								<strong>Muhammad Imran <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Abdullah Al Noman <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 5 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">O</span>
							<div class="gr-head-info">
								<strong>Omar Farooq <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">Y</span>
							<div class="gr-head-info">
								<strong>Yusuf Ibrahim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">J</span>
							<div class="gr-head-info">
								<strong>John Smith <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 18 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">M</span>
							<div class="gr-head-info">
								<strong>Michael Johnson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">D</span>
							<div class="gr-head-info">
								<strong>David Wilson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">D</span>
							<div class="gr-head-info">
								<strong>Daniel Brown <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 47 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">C</span>
							<div class="gr-head-info">
								<strong>Christopher Miller <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">R</span>
							<div class="gr-head-info">
								<strong>Rajesh Kumar <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">A</span>
							<div class="gr-head-info">
								<strong>Amit Sharma <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 8 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Arjun Patel <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">S</span>
							<div class="gr-head-info">
								<strong>Suresh Reddy <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">V</span>
							<div class="gr-head-info">
								<strong>Vivek Mishra <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 24 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">G</span>
							<div class="gr-head-info">
								<strong>Gurpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">H</span>
							<div class="gr-head-info">
								<strong>Harpreet Kaur <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">M</span>
							<div class="gr-head-info">
								<strong>Manpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 3 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">T</span>
							<div class="gr-head-info">
								<strong>Tenzin Dorje <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">S</span>
							<div class="gr-head-info">
								<strong>Sonam Wangchuk <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">K</span>
							<div class="gr-head-info">
								<strong>Karma Tshering <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 12 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">L</span>
							<div class="gr-head-info">
								<strong>Li Wei <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">Z</span>
							<div class="gr-head-info">
								<strong>Zhang Hao <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">K</span>
							<div class="gr-head-info">
								<strong>Kenji Tanaka <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 33 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">H</span>
							<div class="gr-head-info">
								<strong>Hiroshi Sato <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">M</span>
							<div class="gr-head-info">
								<strong>Min-Jun Kim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">N</span>
							<div class="gr-head-info">
								<strong>Nguyen Van An <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 5 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">I</span>
							<div class="gr-head-info">
								<strong>Ivan Petrov <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">C</span>
							<div class="gr-head-info">
								<strong>Carlos Rodriguez <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">J</span>
							<div class="gr-head-info">
								<strong>Jean Dupont <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 18 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">A</span>
							<div class="gr-head-info">
								<strong>Ahmed Hassan <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">M</span>
							<div class="gr-head-info">
								<strong>Muhammad Imran <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Abdullah Al Noman <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 47 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">O</span>
							<div class="gr-head-info">
								<strong>Omar Farooq <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">Y</span>
							<div class="gr-head-info">
								<strong>Yusuf Ibrahim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">J</span>
							<div class="gr-head-info">
								<strong>John Smith <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 8 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">M</span>
							<div class="gr-head-info">
								<strong>Michael Johnson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">D</span>
							<div class="gr-head-info">
								<strong>David Wilson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">D</span>
							<div class="gr-head-info">
								<strong>Daniel Brown <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 24 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">C</span>
							<div class="gr-head-info">
								<strong>Christopher Miller <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">R</span>
							<div class="gr-head-info">
								<strong>Rajesh Kumar <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">A</span>
							<div class="gr-head-info">
								<strong>Amit Sharma <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 3 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Arjun Patel <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">S</span>
							<div class="gr-head-info">
								<strong>Suresh Reddy <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">V</span>
							<div class="gr-head-info">
								<strong>Vivek Mishra <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 12 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">G</span>
							<div class="gr-head-info">
								<strong>Gurpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">H</span>
							<div class="gr-head-info">
								<strong>Harpreet Kaur <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">M</span>
							<div class="gr-head-info">
								<strong>Manpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 33 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">T</span>
							<div class="gr-head-info">
								<strong>Tenzin Dorje <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">S</span>
							<div class="gr-head-info">
								<strong>Sonam Wangchuk <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">K</span>
							<div class="gr-head-info">
								<strong>Karma Tshering <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 5 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">L</span>
							<div class="gr-head-info">
								<strong>Li Wei <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">Z</span>
							<div class="gr-head-info">
								<strong>Zhang Hao <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">K</span>
							<div class="gr-head-info">
								<strong>Kenji Tanaka <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 18 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">H</span>
							<div class="gr-head-info">
								<strong>Hiroshi Sato <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">M</span>
							<div class="gr-head-info">
								<strong>Min-Jun Kim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">N</span>
							<div class="gr-head-info">
								<strong>Nguyen Van An <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 47 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">I</span>
							<div class="gr-head-info">
								<strong>Ivan Petrov <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">C</span>
							<div class="gr-head-info">
								<strong>Carlos Rodriguez <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">J</span>
							<div class="gr-head-info">
								<strong>Jean Dupont <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 8 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">A</span>
							<div class="gr-head-info">
								<strong>Ahmed Hassan <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">M</span>
							<div class="gr-head-info">
								<strong>Muhammad Imran <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Abdullah Al Noman <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 24 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<!-- duplicate set for seamless loop -->
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">A</span>
							<div class="gr-head-info">
								<strong>Al Haayaat Limited <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Website, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">Z</span>
							<div class="gr-head-info">
								<strong>Zaam Zaam Limited <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Website, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">B</span>
							<div class="gr-head-info">
								<strong>Bros Slice &amp; Grill <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Website, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">M</span>
							<div class="gr-head-info">
								<strong>Miranda's English Club <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Digital Marketing</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">T</span>
							<div class="gr-head-info">
								<strong>TRB Home Decor <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Digital Marketing</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">T</span>
							<div class="gr-head-info">
								<strong>TRB Fashion <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Digital Marketing</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">A</span>
							<div class="gr-head-info">
								<strong>AAHM <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Accounting, Marketing &amp; SEO</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">A</span>
							<div class="gr-head-info">
								<strong>Ahmed Hassan <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">M</span>
							<div class="gr-head-info">
								<strong>Muhammad Imran <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Abdullah Al Noman <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 5 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">O</span>
							<div class="gr-head-info">
								<strong>Omar Farooq <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">Y</span>
							<div class="gr-head-info">
								<strong>Yusuf Ibrahim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">J</span>
							<div class="gr-head-info">
								<strong>John Smith <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 18 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">M</span>
							<div class="gr-head-info">
								<strong>Michael Johnson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">D</span>
							<div class="gr-head-info">
								<strong>David Wilson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">D</span>
							<div class="gr-head-info">
								<strong>Daniel Brown <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 47 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">C</span>
							<div class="gr-head-info">
								<strong>Christopher Miller <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">R</span>
							<div class="gr-head-info">
								<strong>Rajesh Kumar <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">A</span>
							<div class="gr-head-info">
								<strong>Amit Sharma <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 8 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Arjun Patel <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">S</span>
							<div class="gr-head-info">
								<strong>Suresh Reddy <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">V</span>
							<div class="gr-head-info">
								<strong>Vivek Mishra <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 24 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">G</span>
							<div class="gr-head-info">
								<strong>Gurpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">H</span>
							<div class="gr-head-info">
								<strong>Harpreet Kaur <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">M</span>
							<div class="gr-head-info">
								<strong>Manpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 3 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">T</span>
							<div class="gr-head-info">
								<strong>Tenzin Dorje <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">S</span>
							<div class="gr-head-info">
								<strong>Sonam Wangchuk <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">K</span>
							<div class="gr-head-info">
								<strong>Karma Tshering <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 12 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">L</span>
							<div class="gr-head-info">
								<strong>Li Wei <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">Z</span>
							<div class="gr-head-info">
								<strong>Zhang Hao <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">K</span>
							<div class="gr-head-info">
								<strong>Kenji Tanaka <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 33 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">H</span>
							<div class="gr-head-info">
								<strong>Hiroshi Sato <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">M</span>
							<div class="gr-head-info">
								<strong>Min-Jun Kim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">N</span>
							<div class="gr-head-info">
								<strong>Nguyen Van An <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 5 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">I</span>
							<div class="gr-head-info">
								<strong>Ivan Petrov <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">C</span>
							<div class="gr-head-info">
								<strong>Carlos Rodriguez <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">J</span>
							<div class="gr-head-info">
								<strong>Jean Dupont <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 18 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">A</span>
							<div class="gr-head-info">
								<strong>Ahmed Hassan <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">M</span>
							<div class="gr-head-info">
								<strong>Muhammad Imran <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Abdullah Al Noman <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 47 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">O</span>
							<div class="gr-head-info">
								<strong>Omar Farooq <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">Y</span>
							<div class="gr-head-info">
								<strong>Yusuf Ibrahim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">J</span>
							<div class="gr-head-info">
								<strong>John Smith <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 8 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">M</span>
							<div class="gr-head-info">
								<strong>Michael Johnson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">D</span>
							<div class="gr-head-info">
								<strong>David Wilson <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">D</span>
							<div class="gr-head-info">
								<strong>Daniel Brown <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 24 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">C</span>
							<div class="gr-head-info">
								<strong>Christopher Miller <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">R</span>
							<div class="gr-head-info">
								<strong>Rajesh Kumar <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">A</span>
							<div class="gr-head-info">
								<strong>Amit Sharma <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 3 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Arjun Patel <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">S</span>
							<div class="gr-head-info">
								<strong>Suresh Reddy <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">V</span>
							<div class="gr-head-info">
								<strong>Vivek Mishra <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 12 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">G</span>
							<div class="gr-head-info">
								<strong>Gurpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">H</span>
							<div class="gr-head-info">
								<strong>Harpreet Kaur <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">M</span>
							<div class="gr-head-info">
								<strong>Manpreet Singh <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 33 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>They took the time to understand our business before suggesting anything. Appreciated that. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">T</span>
							<div class="gr-head-info">
								<strong>Tenzin Dorje <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Financial reporting is now something I actually look forward to reviewing. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">S</span>
							<div class="gr-head-info">
								<strong>Sonam Wangchuk <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>The marketing content they put together for us feels on-brand and consistent. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">K</span>
							<div class="gr-head-info">
								<strong>Karma Tshering <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 5 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Quick to respond, clear about timelines, and delivered what was promised. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">L</span>
							<div class="gr-head-info">
								<strong>Li Wei <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Our online presence looks completely different now — in a good way. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">Z</span>
							<div class="gr-head-info">
								<strong>Zhang Hao <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>Bank reconciliation used to take us days. Now it is handled without us thinking about it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff4a1c;">K</span>
							<div class="gr-head-info">
								<strong>Kenji Tanaka <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 18 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>The team explained everything in plain language, no jargon, easy to follow. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#2764e6;">H</span>
							<div class="gr-head-info">
								<strong>Hiroshi Sato <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>Search visibility improved within a couple of months of working together. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#13a76f;">M</span>
							<div class="gr-head-info">
								<strong>Min-Jun Kim <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Reliable support whenever we had questions about our accounts. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#0f8f88;">N</span>
							<div class="gr-head-info">
								<strong>Nguyen Van An <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 47 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 weeks ago</span>
						<p>The website redesign brought in more enquiries than we expected. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#8e44ad;">I</span>
							<div class="gr-head-info">
								<strong>Ivan Petrov <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a month ago</span>
						<p>Great experience working with the team — clear communication and solid results. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e67e22;">C</span>
							<div class="gr-head-info">
								<strong>Carlos Rodriguez <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 months ago</span>
						<p>Our books have never been this organised. The accounting team is thorough and quick to respond. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#e91e63;">J</span>
							<div class="gr-head-info">
								<strong>Jean Dupont <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 8 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">6 months ago</span>
						<p>The new website looks professional and loads fast. Exactly what we needed. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#00acc1;">A</span>
							<div class="gr-head-info">
								<strong>Ahmed Hassan <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Business Owner</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">a year ago</span>
						<p>Our social media finally has a consistent look and posting schedule. Really happy with it. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#ff7a35;">M</span>
							<div class="gr-head-info">
								<strong>Muhammad Imran <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Verified Customer</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">2 years ago</span>
						<p>We started ranking for keywords we could never reach before. Solid SEO work. <span class="more-link">&hellip;More</span></p>
					</article>
					<article class="quote-card-mini" aria-hidden="true">
						<div class="gr-head">
							<span class="avatar" style="background:#5b8bff;">A</span>
							<div class="gr-head-info">
								<strong>Abdullah Al Noman <span class="google-badge" title="Google Review"><svg viewBox="0 0 48 48" width="12" height="12"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span></strong>
								<div class="gr-meta">Local Guide &middot; 24 reviews</div>
							</div>
							<span class="gr-dots">&#8942;</span>
						</div>
						<div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
						<span class="gr-time">3 years ago</span>
						<p>Payroll used to be a headache every month — not anymore. Smooth and on time. <span class="more-link">&hellip;More</span></p>
					</article>
				</div>
			</div>		</div>
	</section>	<section class="cta-band">
		<div class="container">
			<h2>Expand your business with the help of RealDeal IT Center</h2>
			<p>Ready to grow your business? RealDeal creates customized strategies that align with your goals and deliver proven results. Contact us today to get started.</p>
			<div class="cta-actions">
				<a class="btn btn-outline" href="services.php" style="background:rgba(255,255,255,.14);color:#fff;border-color:rgba(255,255,255,.4);">Free Audit Website</a>
				<a class="btn btn-dark" href="contact.php">Book Free Consultation</a>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php'; ?>


<script>
</script>
<script src="assets/site-nav.js?v=3" defer></script>
</body>
</html>
