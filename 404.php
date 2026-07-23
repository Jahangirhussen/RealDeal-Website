<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/gtm-head.php'; ?>
<?php include __DIR__ . '/gtag.php'; ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Not Found | RealDeal IT Center</title>
<meta name="robots" content="noindex">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
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
.btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; min-height:48px; padding:0 22px; border-radius:6px; font-size:14px; font-weight:800; border:1px solid transparent; transition:transform .18s ease, box-shadow .18s ease; }
.btn:hover { transform:translateY(-3px); }
.btn-primary { background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; box-shadow:0 16px 34px rgba(255,74,28,.25); }
.btn-outline { background:#fff; color:var(--rd-ink); border-color:var(--rd-line); }

.error-hero { padding:160px 0 120px; text-align:center; background:linear-gradient(180deg,#fff,var(--rd-soft)); }
.error-hero .code { font-family:var(--font-heading); font-size:clamp(90px,16vw,180px); font-weight:800; line-height:1; background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); -webkit-background-clip:text; background-clip:text; color:transparent; }
.error-hero h1 { font-size:clamp(24px,3.2vw,34px); margin:8px 0 14px; }
.error-hero p { max-width:520px; margin:0 auto 32px; }
.error-actions { display:flex; align-items:center; justify-content:center; gap:14px; flex-wrap:wrap; }
.error-links { margin-top:48px; display:flex; align-items:center; justify-content:center; gap:22px; flex-wrap:wrap; font-size:13.5px; font-weight:700; }
.error-links a:hover { color:var(--rd-orange); }
</style>
<link rel="stylesheet" href="/assets/site-nav.css?v=13">
</head>
<body>
<?php include __DIR__ . '/gtm-body.php'; ?>
<?php $active_nav = ''; $header_mode = 'solid'; $rd_force_root = true; include 'header.php'; ?>

<section class="error-hero">
	<div class="container">
		<div class="code">404</div>
		<h1>This page took a wrong turn.</h1>
		<p>The page you're looking for doesn't exist, may have moved, or the link is broken. Let's get you back on track.</p>
		<div class="error-actions">
			<a class="btn btn-primary" href="/"><i class="fa-solid fa-house"></i> Back to Home</a>
			<a class="btn btn-outline" href="/blogs/"><i class="fa-solid fa-newspaper"></i> Visit Blog</a>
		</div>
		<div class="error-links">
			<a href="/services.php">Services</a>
			<a href="/packages.php">Packages</a>
			<a href="/portfolio/index.php">Portfolio</a>
			<a href="/contact.php">Contact us</a>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
