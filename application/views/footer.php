<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q9VKM4TDMZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Q9VKM4TDMZ');
    </script>
    <!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url()?>assets_client/css/responsive.css">
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

</body>

</html>