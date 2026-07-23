<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact us | RealDeal IT Center</title>
<meta name="description" content="Contact RealDeal IT Center — send a message, call us, or get customer support. We respond within one business day.">
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
html { scroll-behavior:smooth; color-scheme:light; }
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
.contact-hero { padding:138px 0 64px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("images/about-banner.jpg") center/cover; color:#fff; text-align:center; }
.contact-hero .inner { max-width:820px; margin:0 auto; padding:44px 40px; border:1px solid rgba(255,255,255,.14); border-radius:16px; background:rgba(255,255,255,.05); backdrop-filter:blur(10px); }
.contact-hero h1 { color:#fff; font-size:clamp(32px,4.6vw,46px); margin-bottom:18px; }
.contact-hero p { color:rgba(255,255,255,.78); font-size:16px; max-width:680px; margin:0 auto; }

/* Info cards */
.info-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-top:-64px; position:relative; z-index:2; }
.info-card { padding:32px 28px; border:1px solid var(--rd-line); border-radius:14px; background:#fff; box-shadow:var(--shadow); display:flex; flex-direction:column; transition:transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease; }
.info-card:hover { transform:translateY(-4px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.info-icon { width:56px; height:56px; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:18px; background:rgba(255,74,28,.1); color:var(--rd-orange); font-size:22px; }
.info-card h3 { font-size:19px; margin-bottom:10px; }
.info-card p { font-size:14px; margin-bottom:22px; }
.info-card .btn { margin-top:auto; width:100%; }

/* Contact form section */
.contact-grid { display:grid; grid-template-columns:0.9fr 1.1fr; gap:0; border-radius:16px; overflow:hidden; box-shadow:var(--shadow); }
.contact-visual { position:relative; padding:48px 40px; background:linear-gradient(150deg,var(--rd-ink),var(--rd-ink-2,#142533)); color:#fff; display:flex; flex-direction:column; justify-content:center; overflow:hidden; }
.contact-visual::before { content:""; position:absolute; inset:0; background:radial-gradient(600px 400px at 20% 20%, rgba(255,74,28,.22), transparent 60%); pointer-events:none; }
.contact-visual-icons { position:relative; z-index:1; display:flex; flex-direction:column; gap:16px; margin-bottom:28px; }
.contact-visual-icons span { display:inline-flex; align-items:center; gap:14px; padding:14px 18px; border-radius:12px; background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.12); font-weight:700; font-size:14px; width:fit-content; }
.contact-visual-icons span i { width:34px; height:34px; border-radius:8px; display:inline-flex; align-items:center; justify-content:center; background:var(--rd-orange); color:#fff; font-size:14px; }
.contact-visual h3 { position:relative; z-index:1; color:#fff; font-size:22px; margin-bottom:10px; }
.contact-visual p { position:relative; z-index:1; color:rgba(255,255,255,.68); font-size:14px; }

.contact-form-wrap { padding:48px 44px; background:#fff; }
.contact-form-wrap h2 { font-size:clamp(24px,3vw,32px); margin-bottom:10px; }
.contact-form-wrap > p { font-size:14.5px; margin-bottom:26px; }
.field { display:grid; gap:7px; margin-bottom:20px; }
.field label { color:var(--rd-ink); font-size:13px; font-weight:800; }
.field label .req { color:var(--rd-orange); }
.field input, .field textarea { width:100%; min-height:48px; padding:12px 13px; border:1px solid var(--rd-line); border-radius:8px; background:#fff; color:var(--rd-ink); font:inherit; outline:none; transition:border-color 160ms ease, box-shadow 160ms ease; }
.field textarea { min-height:110px; resize:vertical; }
.field input:not([type="checkbox"]):focus, .field textarea:focus { border-color:var(--rd-orange); box-shadow:0 0 0 3px rgba(255,74,28,.14); }
.service-check-grid { display:grid; grid-template-columns:1fr 1fr; gap:10px 18px; margin-bottom:22px; }
.service-check-grid label { display:flex; align-items:center; gap:9px; font-size:13.5px; font-weight:600; color:var(--rd-ink); cursor:pointer; }
.service-check-grid input { width:16px; height:16px; margin:0; flex-shrink:0; accent-color:var(--rd-orange); outline:none; }
.service-check-grid input:focus-visible { outline:2px solid var(--rd-orange); outline-offset:2px; }
.contact-form-wrap .btn { width:100%; border:0; }

/* Map */
.map-wrap { border-radius:16px; overflow:hidden; border:1px solid var(--rd-line); box-shadow:var(--shadow); }
.map-wrap iframe { display:block; width:100%; height:380px; border:0; }

.cta-band { padding:72px 0; background:linear-gradient(110deg,rgba(255,74,28,.92),rgba(255,122,53,.88)); color:#fff; text-align:center; }
.cta-band h2 { color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:14px; }
.cta-band p { max-width:560px; margin:0 auto 24px; color:rgba(255,255,255,.9); }

.site-footer { padding:56px 0 24px; background:var(--rd-ink); color:rgba(255,255,255,.65); }
.footer-grid { display:grid; grid-template-columns:1.4fr repeat(3,1fr); gap:32px; margin-bottom:32px; }
.footer-col h4 { color:#fff; margin-bottom:14px; font-size:14px; }
.footer-col a { font-size:14px; } .footer-col a:hover { color:var(--rd-orange-2); }
.footer-bottom { display:flex; justify-content:space-between; padding-top:20px; border-top:1px solid rgba(255,255,255,.12); font-size:13px; }

@media(max-width:960px) { .info-grid { grid-template-columns:1fr; margin-top:32px; } .contact-grid { grid-template-columns:1fr; } .service-check-grid { grid-template-columns:1fr; } .footer-grid { grid-template-columns:1fr 1fr; } }
</style>
<link rel="stylesheet" href="assets/site-nav.css?v=3">
</head>
<body>
<?php $active_nav = 'home'; $header_mode = 'hero'; include 'header.php'; ?>


<main>
	<section class="contact-hero">
		<div class="container">
			<div class="inner">
				<h1>Contact Us</h1>
				<p>Sending a message is a convenient and effective way to contact RealDeal IT Center. Whether you have a question about our services, want to discuss a potential project, or just want to say hello, our team is here to help. By filling out our contact form or emailing, you can expect a timely response from one of our experienced professionals. We are committed to delivering exceptional service and support to our clients, and we look forward to hearing from you soon.</p>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="info-grid">
			<article class="info-card">
				<div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
				<h3>Head Office</h3>
				<p>103, Hossain's Tower, 2nd floor<br>Sector 07, Uttara Model Town<br>Dhaka-1230</p>
				<a class="btn btn-outline" href="#map">Find Us</a>
			</article>
			<article class="info-card">
				<div class="info-icon"><i class="fa-solid fa-headset"></i></div>
				<h3>Contact Us</h3>
				<p>Email Us: contactrealdealteam@gmail.com<br>Call Us: <a href="tel:+8801733162490">01733162490</a></p>
				<a class="btn btn-outline" href="tel:+8801733162490">Talk To Us</a>
			</article>
			<article class="info-card">
				<div class="info-icon"><i class="fa-solid fa-life-ring"></i></div>
				<h3>Customer Support</h3>
				<p>By filling out our contact form or emailing, you can expect a timely response from one of our experienced professionals.</p>
				<a class="btn btn-outline" href="mailto:contactrealdealteam@gmail.com">Contact Support</a>
			</article>
		</div>
	</div>

	<section class="detail-section">
		<div class="container">
			<div class="contact-grid">
				<div class="contact-visual">
					<div class="contact-visual-icons">
						<span><i class="fa-solid fa-phone"></i> 01733162490</span>
						<span><i class="fa-solid fa-envelope"></i> contactrealdealteam@gmail.com</span>
						<span><i class="fa-solid fa-comments"></i> Live chat &amp; 24h response</span>
					</div>
					<h3>Let Us Hear From You!</h3>
					<p>Our team is full of creative problem-solvers who are eager to hear your thoughts and contribute their own expertise.</p>
				</div>
				<div class="contact-form-wrap">
					<h2>Send us a message</h2>
					<p>Fill in the form below and we'll get back to you within one business day.</p>
					<form id="contactForm">
						<div class="field"><label>Name</label><input type="text" placeholder="Name"></div>
						<div class="field"><label>Email <span class="req">*</span></label><input type="email" placeholder="Email" required></div>
						<div class="field">
							<label>What Service we can Provide you?</label>
							<div class="service-check-grid">
								<label><input type="checkbox"> Full Package: Growth Accelerate</label>
								<label><input type="checkbox"> Full Package: Enterprise Custom</label>
								<label><input type="checkbox"> Financial Record Keeping</label>
								<label><input type="checkbox"> Accounts Payable</label>
								<label><input type="checkbox"> Accounts Receivable</label>
								<label><input type="checkbox"> Bank Reconciliation</label>
								<label><input type="checkbox"> Financial Reporting</label>
								<label><input type="checkbox"> Tax Preparation Support</label>
								<label><input type="checkbox"> Payroll Management</label>
								<label><input type="checkbox"> Website Design</label>
								<label><input type="checkbox"> Website Development</label>
								<label><input type="checkbox"> Ecommerce Website Development</label>
								<label><input type="checkbox"> Facebook Marketing</label>
								<label><input type="checkbox"> Instagram Marketing</label>
								<label><input type="checkbox"> LinkedIn Marketing</label>
								<label><input type="checkbox"> Twitter (X) Marketing</label>
								<label><input type="checkbox"> Pinterest Marketing</label>
								<label><input type="checkbox"> YouTube Marketing</label>
								<label><input type="checkbox"> On-Page SEO</label>
								<label><input type="checkbox"> Off-Page SEO</label>
								<label><input type="checkbox"> Local SEO</label>
								<label><input type="checkbox"> Technical SEO</label>
							</div>
						</div>
						<div class="field"><label>Write Your Message</label><textarea placeholder="Write..."></textarea></div>
						<button type="submit" class="btn btn-primary">Send Message</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="detail-section alt" id="map">
		<div class="container">
			<span class="section-kicker">Find Us</span>
			<h2 class="section-title">Our head office</h2>
			<div class="map-wrap">
				<iframe src="https://www.google.com/maps?q=103+Hossain%27s+Tower%2C+Sector+07%2C+Uttara+Model+Town%2C+Dhaka+1230&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="RealDeal IT Center head office"></iframe>
			</div>
		</div>
	</section>

	<section class="cta-band">
		<div class="container">
			<h2>Expand your business with the help of RealDeal IT Center</h2>
			<p>Ready to grow your business? RealDeal creates customised strategies that align with your goals and deliver proven results. Contact us today to get started.</p>
			<div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;">
				<a class="btn btn-dark" href="services.php"><i class="fa-solid fa-magnifying-glass-chart"></i> Free Audit Website</a>
				<a class="btn btn-outline" href="tel:+8801733162490" style="background:rgba(255,255,255,.14);color:#fff;border-color:rgba(255,255,255,.4);"><i class="fa-solid fa-calendar-check"></i> Book Free Consultation</a>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php'; ?>


<script>
const contactForm = document.getElementById("contactForm");
if (contactForm) {
	contactForm.addEventListener("submit", (event) => {
		event.preventDefault();
		if (!contactForm.reportValidity()) return;
		const btn = contactForm.querySelector("button[type=submit]");
		const original = btn.innerHTML;
		btn.innerHTML = '<i class="fa-solid fa-check"></i> Message Sent';
		btn.disabled = true;
		setTimeout(() => {
			contactForm.reset();
			btn.innerHTML = original;
			btn.disabled = false;
		}, 2600);
	});
}
</script>
<script src="assets/site-nav.js?v=3" defer></script>
</body>
</html>
