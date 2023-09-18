<!DOCTYPE html>
<html lang="en">
<head>
    <!-- reCaptcha Enterprise Google -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lf8M04nAAAAAMpRiYuWw87cLuk1LV1Zl5H4oqFM"></script>
</head>
<body>
    <!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Djaman Brand</h2>
						<p>Djaman menjual jamu berupa resep
							rahasia atau warisan nenek
							moyang. Hal ini karena Djaman
							memiliki pengalaman dan
							pengetahuan dalam pembuatan
							jamu yang telah diwariskan dari
							nenek moyang dan dijaga dengan
							baik hingga saat ini.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Kontak</h2>
						<ul>
							<li><?php echo $data_kontak[0]->alamat; ?></li>
							<li><?php echo $data_kontak[0]->email; ?></li>
							<li><?php echo $data_kontak[0]->phone; ?></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Halaman</h2>
						<ul>
							<li><a href="<?= base_url()?>">Home</a></li>
							<li><a href="<?= base_url()?>index.php/Home/TentangKami">Tentang Kami</a></li>
							<li><a href="<?= base_url()?>index.php/Home/KontakKami">Kontak Kami</a></li>
							<li><a href="<?= base_url()?>index.php/Home/Belanja">Belanja</a></li>
							<!-- <li><a href="news.html">News</a></li> -->
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Social Media</h2>
						<!-- <p>Berlangganan Email untuk mendapatkan info terbaru tentang Djaman!</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form> -->
						<div class="social-icons">
						<ul>
							<li><a href="https://instagram.com/djaman.id" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.tiktok.com/@djaman.id" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
							<li><a href="https://api.whatsapp.com/send/?phone=6281394494246" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2023 - <a href="https://reyhanadr.epizy.com/">Reyhan Adriana Deris</a>
					<!-- ,  All Rights Reserved.<br> -->
						<!-- Distributed By - <a href="https://Djaman.my.id/">Djaman Brand.</a> -->
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://reyhanadr.epizy.com" target="_blank"><i class="fa-regular fa-address-card"></i></a></li>
							<li><a href="https://www.linkedin.com/in/reyhan-adriana-deris" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
							<li><a href="https://instagram.com/reyhanadr" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
		<script>
            grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6Lf8M04nAAAAAMpRiYuWw87cLuk1LV1Zl5H4oqFM', {action: 'homepage'});
                // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
                // reCAPTCHA Enterprise to the end user's browser.
                // This token must be validated by creating an assessment.
                // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
            });
        </script>
		<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>