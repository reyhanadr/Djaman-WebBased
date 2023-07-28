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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Djaman, jamu, resep rahasia, warisan nenek moyang, pengalaman, pengetahuan, pembuatan jamu, warisan budaya, identitas bangsa, kesehatan tubuh, alami, tradisional,  body health, natural, herbal drink crafting, alternative medicine, vegan friendly, vegetarian, vegan food">
    <meta name="description" content="Djaman menjual jamu berupa resep rahasia atau warisan nenek moyang. Produk kami memiliki pengalaman dan pengetahuan dalam pembuatan jamu yang telah diwariskan dari nenek moyang dan dijaga dengan baik. Rasakan manfaat dari warisan budaya ini dengan menggunakan produk Djaman dan jaga kesehatan tubuh dengan cara alami dan tradisional.">

	<meta property="og:title" content="Djaman - Jamu Organik">
    <meta property="og:description" content="Djaman menjual jamu berupa resep rahasia atau warisan nenek moyang.">
    <meta property="og:url" content="https://djaman.42web.io">
    <meta property="og:image" content="https://djaman.42web.io//assets_client/img/Logo_Djaman.png">
	<!-- title -->
	<title>Tentang Kami - Djaman</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url()?>/assets_client/img/Logo_Djaman.webp">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url()?>/assets_client/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="<?= base_url()?>">
								<img src="<?= base_url()?>/assets_client/img/Logo_Djaman.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="<?= base_url()?>">Home</a>
								</li>
								<li class="current-list-item"><a href="<?= base_url()?>index.php/Home/TentangKami">Tentang Kami</a></li>
								<li><a href="<?= base_url()?>index.php/Home/KontakKami">Kontak Kami</a></li>
								<li><a href="<?= base_url()?>index.php/Home/Belanja">Belanja</a>
								<li><a href="https://cekresi.com/" target="_blank">Lacak Pengiriman</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
                            <form action="<?= site_url('Home/search') ?>" method="GET">
                                <input type="text" name="keyword" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>Kami Menjual Jamu Organik dan Fresh</p>
						<h1>Tentang Kami</h1> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Mengapa memilih <span class="orange-text">Djaman?</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="content">
										<h3>Gratis Ongkir</h3>
										<p>Untuk setiap pembelian dengan nilai minimum 100.000, Anda bisa menikmati 
											pengiriman produk kesayangan ke alamat tujuan tanpa dikenakan 
											biaya tambahan.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Harga Terbaik</h3>
										<p>Kami memberikan harga yang sangat terjangkau untuk memastikan 
											Anda mendapatkan nilai terbaik dari setiap pembelian.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-briefcase"></i>
									</div>
									<div class="content">
										<h3>Kemasan Aman</h3>
										<p> Kemasan kami dirancang khusus untuk menjaga 
											produk tetap aman dan terlindungi dari kerusakan selama proses pengiriman.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-sync-alt"></i>
									</div>
									<div class="content">
										<h3>Jaminan Refund</h3>
										<p>Kami memberikan jaminan refund kepada pelanggan jika produk yang kami kirimkan tidak 
											berbahan organik seperti yang dijanjikan. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span><?php echo $produk_terlaris->diskon; ?>% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Belanja Sekarang!</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Anggota <span class="orange-text">Kami</span></h3>
						<p>Kami adalah kelompok orang yang berdedikasi untuk memberikan layanan terbaik untuk pelanggan kami.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg" style="background-image: url(<?= base_url()?>/assets/img/anggota/<?php echo $data_organisasi[1]->foto; ?>);" ></div>
						<h4><?php echo $data_organisasi[1]->nama; ?> <span><?php echo $data_organisasi[1]->jabatan; ?></span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg" style="background-image: url(<?= base_url()?>/assets/img/anggota/<?php echo $data_organisasi[0]->foto; ?>);">
					</div>
						<h4><?php echo $data_organisasi[0]->nama; ?> <span><?php echo $data_organisasi[0]->jabatan; ?></span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg" style="background-image: url(<?= base_url()?>/assets/img/anggota/<?php echo $data_organisasi[2]->foto; ?>);"></div>
						<h4><?php echo $data_organisasi[2]->nama; ?> <span><?php echo $data_organisasi[2]->jabatan; ?></span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end team section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="<?= base_url()?>/assets_client/img/avaters/avatar1.webp" alt="">
							</div>
							<div class="client-meta">
								<h3>Naomi Jubaedah <span>Pelanggan Lokal</span></h3>
								<p class="testimonial-body">
									"Saya mengalami masalah tidur selama beberapa bulan terakhir dan telah mencoba
									banyak hal untuk membantu saya tidur lebih nyenyak. Namun setelah mencoba jamu
									dari produk ini, saya merasa lebih rileks dan mudah tidur. Terima kasih atas produk
									yang luar biasa ini.”
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="<?= base_url()?>/assets_client/img/avaters/avatar2.webp" alt="">
							</div>
							<div class="client-meta">
								<h3>David Batagor <span>Pelanggan Lokal</span></h3>
								<p class="testimonial-body">
									"Saya mengalami masalah tidur selama beberapa bulan terakhir dan telah mencoba
									banyak hal untuk membantu saya tidur lebih nyenyak. Namun setelah mencoba jamu
									dari produk ini, saya merasa lebih rileks dan mudah tidur. Terima kasih atas produk
									yang luar biasa ini.”
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="<?= base_url()?>/assets_client/img/avaters/avatar3.webp" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Cupu <span>Pelanggan Lokal</span></h3>
								<p class="testimonial-body">
									"Saya mengalami masalah tidur selama beberapa bulan terakhir dan telah mencoba
									banyak hal untuk membantu saya tidur lebih nyenyak. Namun setelah mencoba jamu
									dari produk ini, saya merasa lebih rileks dan mudah tidur. Terima kasih atas produk
									yang luar biasa ini.”
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- logo carousel -->
	<!-- <div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end logo carousel -->
	
	<!-- jquery -->
	<script src="<?= base_url()?>/assets_client\/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url()?>/assets_client\/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?= base_url()?>/assets_client\/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?= base_url()?>/assets_client\/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?= base_url()?>/assets_client\/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?= base_url()?>/assets_client\/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?= base_url()?>/assets_client\/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?= base_url()?>/assets_client\/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?= base_url()?>/assets_client\/js/sticker.js"></script>
	<!-- main js -->
	<script src="<?= base_url()?>/assets_client\/js/main.js"></script>

</body>
</html>