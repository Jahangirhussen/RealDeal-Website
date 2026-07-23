<?php
$rd_apply_success = false;
$rd_apply_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rd_career_apply'])) {
    $full_name = isset($_POST['full_name']) ? sanitize_text_field($_POST['full_name']) : '';
    $applicant_email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $role = isset($_POST['role']) ? sanitize_text_field($_POST['role']) : '';
    $about = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';
    $skills = isset($_POST['skills']) ? sanitize_textarea_field($_POST['skills']) : '';

    if ($full_name !== '' && is_email($applicant_email) && $phone !== '' && $role !== '' && $about !== '' && $skills !== '') {
        $tmp_resume = '';
        $attachments = array();
        if (!empty($_FILES['resume']['tmp_name']) && is_uploaded_file($_FILES['resume']['tmp_name'])) {
            $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
            $tmp_resume = trailingslashit(get_temp_dir()) . 'rd-resume-' . wp_generate_password(10, false) . ($ext ? '.' . $ext : '');
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $tmp_resume)) {
                $attachments[] = $tmp_resume;
            } else {
                $tmp_resume = '';
            }
        }

        $from_header = 'From: RealDeal IT Center <wordpress@realdealitcenter.com>';

        $internal_body  = '<p>New job application received.</p>';
        $internal_body .= '<p><strong>Name:</strong> ' . esc_html($full_name) . '<br>';
        $internal_body .= '<strong>Email:</strong> ' . esc_html($applicant_email) . '<br>';
        $internal_body .= '<strong>Phone:</strong> ' . esc_html($phone) . '<br>';
        $internal_body .= '<strong>Role:</strong> ' . esc_html($role) . '</p>';
        $internal_body .= '<p><strong>About:</strong><br>' . nl2br(esc_html($about)) . '</p>';
        $internal_body .= '<p><strong>Key skills:</strong><br>' . nl2br(esc_html($skills)) . '</p>';

        wp_mail(
            'contactrealdealteam@gmail.com',
            'New Job Application: ' . $role . ' — ' . $full_name,
            $internal_body,
            array('Content-Type: text/html; charset=UTF-8', $from_header, 'Reply-To: ' . $applicant_email),
            $attachments
        );

        $confirm_body  = '<p>Hi ' . esc_html($full_name) . ',</p>';
        $confirm_body .= '<p>Thanks for applying for the <strong>' . esc_html($role) . '</strong> position at RealDeal IT Center. We have received your application and our team will review it shortly. We typically respond within two weeks.</p>';
        $confirm_body .= '<p>Best regards,<br>RealDeal IT Center</p>';

        wp_mail(
            $applicant_email,
            'We received your application — RealDeal IT Center',
            $confirm_body,
            array('Content-Type: text/html; charset=UTF-8', $from_header)
        );

        if ($tmp_resume && file_exists($tmp_resume)) {
            @unlink($tmp_resume);
        }

        $rd_apply_success = true;
    } else {
        $rd_apply_error = 'Please fill in all required fields before submitting.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career | RealDeal IT Center</title>
<meta name="description" content="Build your career with a growth-focused digital marketing agency — SEO, PPC, design and development roles.">
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

.benefit-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:16px; margin-top:32px; }
.benefit-card { padding:22px; border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; transition:transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease; }
.benefit-card:hover { transform:translateY(-4px); border-color:var(--rd-orange); box-shadow:0 16px 36px rgba(255,74,28,.16); }
.benefit-icon { width:40px; height:40px; border-radius:8px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; background:rgba(255,74,28,.12); color:var(--rd-orange); }
.benefit-card h3 { font-size:17px; margin-bottom:8px; }
.benefit-card p { font-size:14px; }

/* Job cards */
.role-list { display:grid; grid-template-columns:repeat(2,1fr); gap:44px 26px; margin-top:56px; }
.role-item { position:relative; display:flex; flex-direction:column; padding:30px 26px 26px; border:1px solid var(--rd-line); border-radius:14px; background:#fff; transition:transform 220ms ease, box-shadow 220ms ease; }
.role-item:hover { transform:translateY(-4px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.role-badge { position:absolute; top:-16px; left:20px; display:inline-flex; align-items:center; gap:8px; padding:9px 16px; border-radius:8px; background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; font-family:var(--font-heading); font-weight:800; font-size:14px; box-shadow:0 10px 22px rgba(255,74,28,.32); white-space:nowrap; }
.role-socials { display:flex; gap:8px; margin:30px 0 18px; }
.role-socials a { width:32px; height:32px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; background:rgba(255,74,28,.1); color:var(--rd-orange); font-size:12.5px; transition:background 160ms ease, color 160ms ease; }
.role-socials a:hover { background:var(--rd-orange); color:#fff; }
.role-desc { font-size:14px; margin-bottom:18px; }
.role-checks { display:flex; flex-direction:column; gap:10px; margin-bottom:22px; }
.role-checks span { display:flex; align-items:flex-start; gap:8px; font-size:13.5px; font-weight:700; color:var(--rd-ink); line-height:1.4; }
.role-checks span i { color:var(--rd-orange); font-size:12px; flex-shrink:0; margin-top:3px; }
.role-item .btn { width:100%; margin-top:auto; }

.faq-item { border:1px solid var(--rd-line); border-radius:var(--radius); background:#fff; margin-bottom:10px; overflow:hidden; }
.faq-item summary { padding:16px 18px; cursor:pointer; font-weight:800; color:var(--rd-ink); list-style:none; display:flex; align-items:center; justify-content:space-between; gap:12px; }
.faq-item summary::-webkit-details-marker { display:none; }
.faq-item summary::after { content:"\f078"; font:900 13px "Font Awesome 6 Free"; color:var(--rd-orange); flex-shrink:0; transition:transform 200ms ease; }
.faq-item[open] summary::after { transform:rotate(180deg); }
.faq-item p { padding:0 18px 16px; font-size:14px; }

/* Application form */
.apply-card { max-width:640px; margin:32px auto 0; padding:36px; border:1px solid var(--rd-line); border-radius:14px; background:#fff; box-shadow:var(--shadow); }
.field { display:grid; gap:7px; margin-bottom:20px; }
.field label { color:var(--rd-ink); font-size:13px; font-weight:800; }
.field label .req { color:var(--rd-orange); }
.field input, .field select, .field textarea { width:100%; min-height:48px; padding:12px 13px; border:1px solid var(--rd-line); border-radius:8px; background:#fff; color:var(--rd-ink); font:inherit; outline:none; transition:border-color 160ms ease, box-shadow 160ms ease; }
.field textarea { min-height:100px; resize:vertical; }
.field input:focus, .field select:focus, .field textarea:focus { border-color:var(--rd-orange); box-shadow:0 0 0 3px rgba(255,74,28,.14); }
.field-file { display:flex; align-items:center; gap:12px; }
.field-check { display:flex; align-items:center; gap:10px; padding:14px 16px; margin-bottom:20px; border:1px solid var(--rd-line); border-radius:8px; background:var(--rd-soft); font-size:13.5px; font-weight:700; color:var(--rd-ink); }
.field-check input { width:18px; height:18px; min-height:auto; }
.apply-card .btn { width:100%; margin-top:6px; border:0; }

.cta-band { padding:72px 0; background:linear-gradient(110deg,rgba(255,74,28,.92),rgba(255,122,53,.88)); color:#fff; text-align:center; }
.cta-band h2 { color:#fff; font-size:clamp(28px,4vw,44px); margin-bottom:14px; }
.cta-band p { max-width:560px; margin:0 auto 24px; color:rgba(255,255,255,.9); }
.cta-actions { display:flex; flex-wrap:wrap; justify-content:center; gap:14px; }

.site-footer { padding:56px 0 24px; background:var(--rd-ink); color:rgba(255,255,255,.65); }
.footer-grid { display:grid; grid-template-columns:1.4fr repeat(3,1fr); gap:32px; margin-bottom:32px; }
.footer-col h4 { color:#fff; margin-bottom:14px; font-size:14px; }
.footer-col a { font-size:14px; } .footer-col a:hover { color:var(--rd-orange-2); }
.footer-bottom { display:flex; justify-content:space-between; padding-top:20px; border-top:1px solid rgba(255,255,255,.12); font-size:13px; }

@media(max-width:960px) { .benefit-grid,.footer-grid,.role-list { grid-template-columns:1fr; } .form-grid { grid-template-columns:1fr; } }
@media(max-width:640px) { .benefit-grid { grid-template-columns:1fr; } .apply-card { padding:24px; } .role-item { padding:26px 20px 20px; } .role-badge { left:14px; padding:8px 14px; font-size:13px; } }
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
				<span>Career</span>
			</nav>
			<div class="hero-badge"><i class="fa-solid fa-briefcase"></i> Careers at RealDeal</div>
			<h1>Build your career with a growth-focused agency</h1>
			<p class="lead">Join a team that values execution, transparency and results. We're always looking for talented marketers, designers and developers.</p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="#apply"><i class="fa-solid fa-paper-plane"></i> Apply Now</a>
				<a class="btn btn-outline" href="#openings" style="background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.3);">View Open Roles</a>
			</div>
		</div>
	</section>

	<section class="detail-section">
		<div class="container">
			<span class="section-kicker">Why RealDeal</span>
			<h2 class="section-title">Why people choose to build their career here</h2>
			<div class="benefit-grid">
				<article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-arrow-trend-up"></i></div><h3>Real ownership</h3><p>Own campaigns and client relationships directly — not buried under layers of approval.</p></article>
				<article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-house-laptop"></i></div><h3>Flexible work</h3><p>Remote-friendly setup built around output, not hours logged at a desk.</p></article>
				<article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-graduation-cap"></i></div><h3>Room to grow</h3><p>Learning support and exposure to every channel, not just one narrow lane.</p></article>
				<article class="benefit-card"><div class="benefit-icon"><i class="fa-solid fa-people-group"></i></div><h3>Collaborative culture</h3><p>Specialists across SEO, PPC, design and dev who actually work together.</p></article>
			</div>
		</div>
	</section>

	<section class="detail-section alt" id="openings">
		<div class="container">
			<span class="section-kicker">Open Roles</span>
			<h2 class="section-title">Current openings</h2>
			<div class="role-list">
				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-users-gear"></i> Administration &amp; HR</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">We are looking for an organised Administration &amp; HR Executive to support office operations, recruitment, employee records, onboarding, and daily administrative tasks while helping maintain a productive and professional workplace.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-calculator"></i> Junior Accountant</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">Are you a detail-oriented accounting professional looking to grow your career? Join RealDeal IT Center as a Junior Accountant and assist with financial reporting, bookkeeping, reconciliations, invoicing, and maintaining accurate financial records while working alongside an experienced finance team.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-book"></i> Bookkeeping Executive</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">RealDeal IT Center is seeking a Bookkeeping Executive to manage day-to-day financial transactions, maintain accurate records, reconcile accounts, and support the finance department in delivering reliable financial information.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-code"></i> Junior Web Developer</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">Are you passionate about web development and eager to build your career? Join RealDeal IT Center as a Junior Web Developer and help develop, maintain, and optimize modern websites using HTML, CSS, JavaScript, WordPress, and other web technologies.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-bullhorn"></i> Digital Marketing Executive</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">RealDeal IT Center is looking for a creative and results-driven Digital Marketing Executive to plan, execute, and optimize online marketing campaigns across SEO, social media, paid advertising, email marketing, and content creation.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-magnifying-glass-chart"></i> SEO Executive</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">Join our growing SEO team as an SEO Executive and help improve website visibility through keyword research, on-page optimisation, technical SEO, link building, and performance reporting for a wide range of clients.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-bullhorn"></i> Digital Marketing Manager</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">Are you an experienced digital marketing professional ready to lead impactful campaigns? Join RealDeal IT Center to manage SEO, PPC, social media, content marketing, and digital strategies that deliver measurable growth for our clients.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>

				<article class="role-item">
					<span class="role-badge"><i class="fa-solid fa-magnifying-glass-chart"></i> SEO Manager</span>
					<div class="role-socials">
						<a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<p class="role-desc">RealDeal IT Center is hiring an SEO Manager to lead our search engine optimisation strategy, improve website rankings, analyse performance data, and drive sustainable organic growth through technical and content-focused SEO initiatives.</p>
					<div class="role-checks">
						<span><i class="fa-solid fa-location-dot"></i> Greater Manchester (Office / Hybrid Options Available)</span>
						<span><i class="fa-solid fa-circle-check"></i> Salary: Negotiable</span>
					</div>
					<a class="btn btn-primary" href="#apply">Apply Now</a>
				</article>
			</div>
		</div>
	</section>

	<section class="detail-section" id="apply">
		<div class="container">
			<span class="section-kicker">Apply Now</span>
			<h2 class="section-title">Send us your application</h2>
			<p class="section-copy">Fill out the form below and attach your resume. We review every application and typically respond within two weeks.</p>
			<form class="apply-card" id="applyForm" method="post" enctype="multipart/form-data" action="careers.php#apply" novalidate>
				<input type="hidden" name="rd_career_apply" value="1">
				<?php if ($rd_apply_success): ?>
				<div id="rdApplySuccessMsg" style="padding:22px 24px;margin-bottom:20px;border-radius:10px;background:#e9f9f1;border:2px solid #13a76f;color:#0e1a24;font-weight:800;font-size:18px;box-shadow:0 10px 30px rgba(19,167,111,.25);"><i class="fa-solid fa-circle-check" style="color:#13a76f;"></i> Application sent successfully. We'll be in touch soon.</div>
				<?php endif; ?>
				<?php if ($rd_apply_error): ?>
				<div id="rdApplyErrorMsg" style="padding:22px 24px;margin-bottom:20px;border-radius:10px;background:#fdeceb;border:2px solid #ff4a1c;color:#0e1a24;font-weight:800;font-size:18px;box-shadow:0 10px 30px rgba(255,74,28,.25);"><i class="fa-solid fa-circle-exclamation" style="color:#ff4a1c;"></i> <?php echo esc_html($rd_apply_error); ?></div>
				<?php endif; ?>
				<div id="rdApplyMissingMsg" style="display:none;padding:22px 24px;margin-bottom:20px;border-radius:10px;background:#fdeceb;border:2px solid #ff4a1c;color:#0e1a24;font-weight:800;font-size:18px;box-shadow:0 10px 30px rgba(255,74,28,.25);"><i class="fa-solid fa-circle-exclamation" style="color:#ff4a1c;"></i> Please fill in all required fields (marked with *) before submitting.</div>
				<div class="form-grid">
					<div class="field"><label>Full Name <span class="req">*</span></label><input type="text" name="full_name" placeholder="Your name" required></div>
					<div class="field"><label>Email <span class="req">*</span></label><input type="email" name="email" placeholder="you@email.com" required></div>
					<div class="field"><label>Phone <span class="req">*</span></label><input type="tel" name="phone" placeholder="01733162490" required></div>
					<div class="field">
						<label>Department / Role <span class="req">*</span></label>
						<select name="role" required>
							<option value="">Select a role</option>
							<option>Administration &amp; HR</option>
							<option>Junior Accountant</option>
							<option>Bookkeeping Executive</option>
							<option>Junior Web Developer</option>
							<option>Digital Marketing Executive</option>
							<option>SEO Executive</option>
							<option>Digital Marketing Manager</option>
							<option>SEO Manager</option>
							<option>General Application</option>
						</select>
					</div>
					<div class="field full"><label>Tell us about yourself <span class="req">*</span></label><textarea name="message" placeholder="A short note on your background and why you're interested" required></textarea></div>
					<div class="field full"><label>Key skills <span class="req">*</span></label><textarea name="skills" placeholder="e.g. Technical SEO, Google Ads, Figma, WordPress" required></textarea></div>
					<div class="field full">
						<label>Resume / CV <span class="req">*</span></label>
						<div class="field-file"><i class="fa-solid fa-paperclip"></i> <input type="file" name="resume" accept=".pdf,.doc,.docx" style="border:0;min-height:auto;padding:0;" required></div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit Application</button>
			</form>
		</div>
	</section>

	<section class="detail-section alt">
		<div class="container" style="max-width:800px;">
			<span class="section-kicker">FAQ</span>
			<h2 class="section-title">Common questions</h2>
			<details class="faq-item"><summary>Do you hire remote employees?</summary><p>Yes, most roles are remote-friendly with flexibility around working hours.</p></details>
			<details class="faq-item"><summary>Do you offer freelance or contract work?</summary><p>Occasionally, depending on current client demand — mention your interest in the form above.</p></details>
			<details class="faq-item"><summary>What if I don't see a role that fits?</summary><p>Submit a general application anyway — we keep strong candidates in mind for future openings.</p></details>
			<details class="faq-item"><summary>What does the interview process look like?</summary><p>A quick screening call, a role-specific interview with the team lead, and for some roles a short paid trial task.</p></details>
			<details class="faq-item"><summary>How long does hiring usually take?</summary><p>Most roles move from application to offer within 1–2 weeks, depending on how many interview rounds the position needs.</p></details>
			<details class="faq-item"><summary>Do you offer benefits for full-time staff?</summary><p>Yes — paid time off, performance bonuses and learning/training support are included for full-time team members.</p></details>
			<details class="faq-item"><summary>Can I apply for more than one role?</summary><p>Yes, just mention every role you're interested in on your application form or note it in your message.</p></details>
		</div>
	</section>

	<section class="cta-band">
		<div class="container">
			<h2>Don't see the right role listed?</h2>
			<p>Send us your resume anyway. We're always interested in hearing from strong marketers, designers and developers.</p>
			<div class="cta-actions">
				<a class="btn btn-dark" href="#apply"><i class="fa-solid fa-paper-plane"></i> Submit General Application</a>
				<a class="btn btn-outline" href="contact.php" style="background:rgba(255,255,255,.14);color:#fff;border-color:rgba(255,255,255,.4);">Contact Us Instead</a>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php'; ?>


<script>
const applyForm = document.getElementById("applyForm");
if (applyForm) {
	applyForm.addEventListener("submit", (event) => {
		const missingMsg = document.getElementById("rdApplyMissingMsg");
		let allFilled = true;
		applyForm.querySelectorAll("[required]").forEach((field) => {
			if (field.type === "file") {
				if (!field.value) allFilled = false;
			} else if (!field.value || !field.value.trim()) {
				allFilled = false;
			}
		});
		if (!allFilled) {
			event.preventDefault();
			if (missingMsg) {
				missingMsg.style.display = "block";
				missingMsg.scrollIntoView({ behavior: "smooth", block: "center" });
			}
			return;
		}
		if (missingMsg) missingMsg.style.display = "none";
		const btn = applyForm.querySelector("button[type=submit]");
		btn.disabled = true;
		btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
	});
}
</script>
<script src="assets/site-nav.js?v=3" defer></script>
<script>
(function(){
	var ids = ['rdApplySuccessMsg','rdApplyErrorMsg'];
	ids.forEach(function(id){
		var el = document.getElementById(id);
		if (el) {
			setTimeout(function(){
				el.style.transition = 'opacity 400ms ease';
				el.style.opacity = '0';
				setTimeout(function(){ el.style.display = 'none'; }, 400);
			}, 2000);
		}
	});
})();
</script>
</body>
</html>
