<?php
$f = fopen("changelog.txt", 'r');
$version = fgets($f);
fclose($f);
?>
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-info">
						<h3><?=TITLE ?></h3>
						<p>
							Plaça Francesc Macià i Llussà, 2 <br>
							08902 L'Hospitalet de Llobregat, Barcelona<br><br>
							<strong>Phone:</strong> +0034 93 422 59 99<br>
							<strong>Email:</strong> alkertxa@gmail.com<br>
						</p>
						<div class="social-links mt-3">
<!--							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
							<a target="_blank" href="https://www.facebook.com/CafeDeLaPlazaLh" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a target="_blank" href="https://www.instagram.com/cafedelaplaza_lh/" class="instagram"><i class="bx bxl-instagram"></i></a>
<!--							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
<!--							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 footer-links">
					<h4><?=tr("useful-links") ?></h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
						<li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.comarcacuinalhocal.es">comarcacuinalhocal.es</a></li>
						<li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.grenyaobrador.es">grenyaobrador.es</a></li>
						<li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.simonecelia.it">simonecelia.it</a></li>
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
					</ul>
				</div>
<!--				<div class="col-lg-3 col-md-6 footer-links">-->
<!--					<h4>--><?//=tr("our-services") ?><!--</h4>-->
<!--					<ul>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="https://simon387.github.io/jekyll/update/2018/11/26/about-link.html">Web Design</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="https://simon387.github.io/jekyll/update/2018/11/26/about-link.html">Web Development</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="https://simon387.github.io/jekyll/update/2018/11/26/about-link.html">Product Management</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="https://simon387.github.io/jekyll/update/2018/11/26/about-link.html">Marketing</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="https://simon387.github.io/jekyll/update/2018/11/26/about-link.html">Graphic Design</a></li>-->
<!--					</ul>-->
<!--				</div>-->
				<div class="col-lg-4 col-md-6 footer-newsletter">
					<h4><?=tr("our-newsletter-h4") ?></h4>
					<p><?=tr("our-newsletter-p") ?></p>
					<form action="" method="post">
						<input disabled type="email" name="email"><input disabled type="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="copyright">&copy; Copyright <strong><span><a target="_blank" href="https:\\www.simonecelia.it">www.simonecelia.it</a></span></strong>. All Rights Reserved. <?php echo $version ?></div>
		<div class="credits">
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</div>
</footer>