<?php
$rd_dir    = strtr(dirname($_SERVER['SCRIPT_NAME']), '\\', '/');
$rd_folder = basename($rd_dir);
$rd_base   = in_array($rd_folder, ['blogs', 'portfolio'], true) ? '../' : '';
$rd_portfolio = $rd_folder === 'portfolio' ? 'index.php' : $rd_base . 'portfolio/index.php';
$rd_blog      = $rd_folder === 'blogs' ? 'index.php' : $rd_base . 'blogs/index.php';
$rd_home      = $rd_base !== '' ? $rd_base : '/';
?>
<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<a class="brand brand-logo" href="<?php echo $rd_home; ?>" aria-label="RealDeal IT Center home">
					<img src="<?php echo $rd_base; ?>assets/logo/logo-dark-navy.png" alt="RealDeal IT Center" class="brand-logo-img">
				</a>
				<p>RealDeal IT Center helps businesses grow with bookkeeping, web design &amp; development, digital marketing and SEO services delivered by one focused team.</p>
				<div class="socials">
					<a href="#" data-rd-contact="facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" data-rd-contact="instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" data-rd-contact="whatsapp" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
					<a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
					<a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
				</div>
			</div>
			<div class="footer-col">
				<h4>Services</h4>
				<ul>
					<li><a href="<?php echo $rd_base; ?>bookkeeping.php">Accounting and Bookkeeping</a></li>
					<li><a href="<?php echo $rd_base; ?>web-design-development.php">Web Design &amp; Development</a></li>
					<li><a href="<?php echo $rd_base; ?>digital-marketing.php">Digital Marketing</a></li>
					<li><a href="<?php echo $rd_base; ?>seo.php">Search Engine Optimization (SEO)</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Company</h4>
				<ul>
					<li><a href="<?php echo $rd_base; ?>about.php">About us</a></li>
					<li><a href="<?php echo $rd_portfolio; ?>">Portfolio</a></li>
					<li><a href="<?php echo $rd_blog; ?>">Blog</a></li>
					<li><a href="<?php echo $rd_base; ?>careers.php">Career</a></li>
					<li><a href="<?php echo $rd_base; ?>packages.php">Packages</a></li>
					<li><a href="<?php echo $rd_base; ?>contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Contact</h4>
				<ul>
					<li><a href="#" data-rd-contact="email">contactrealdealteam@gmail.com</a></li>
					<li><a href="#" data-rd-contact="phone">01733162490</a></li>
					<li><a href="<?php echo $rd_base; ?>contact.php">Book a free consultation</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p>Copyright &copy; 2026 RealDeal IT Center. All rights reserved.</p>
			<a href="<?php echo $rd_home; ?>#top">Back to top</a>
		</div>
	</div>
</footer>
