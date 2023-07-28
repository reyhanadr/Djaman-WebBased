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
	<title>Belanja - Djaman</title>

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
								<li><a href="<?= base_url()?>index.php/Home/TentangKami">Tentang Kami</a></li>
								<li><a href="<?= base_url()?>index.php/Home/KontakKami">Kontak Kami</a></li>
								<li class="current-list-item"><a href="<?= base_url()?>index.php/Home/Belanja">Belanja</a>
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
						<!-- <p>Fresh and Organic</p>
						<h1>Shop</h1> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".JamuRempah">Jamu Rempah</li>
                            <li data-filter=".JamuAkar">Jamu Akar</li>
                            <li data-filter=".JamuDaun">Jamu Daun</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<?php foreach ($data_produk as $row) : ?>
					<div class="col-lg-4 col-md-6 text-center <?php echo str_replace(' ', '', $row->kategori); ?>">
						<div class="single-product-item">
							<div class="product-image">
								<a href="Home/SingleProduk/<?php echo $row->id_produk; ?>"><img src="<?= base_url()?>/assets/img/produk/<?php echo $row->foto; ?>" alt=""></a>
							</div>
							<h3><?php echo $row->nama_jamu; ?></h3>

							<?php if ($is_diskon == $row->id_produk ) : ?>
								<p class="product-price">
									<span class="subtitle-product-price">Per <?php echo $row->satuan; ?></span>
									<del><?php echo $produk_terlaris->harga_asli; ?></del>
									<span class="product-price-shop"> <?php echo $produk_terlaris->harga_diskon; ?></span>
								</p>

							<?php else : ?>
								<p class="product-price">
									<span class="subtitle-product-price"><?php echo $row->satuan; ?></span>
									<?php echo $row->harga; ?>
								</p>
							<?php endif; ?>

							<a href="SingleProduk/<?php echo $row->id_produk; ?>" class="cart-btn"> Lihat Detail</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>


			<!-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end products -->

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