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
	<meta property="og:site_name" content="Djaman Brand">
	<meta property="og:title" content="Djaman - Jamu Organik">
	<meta property="og:type" content="shop" />
    <meta property="og:description" content="Djaman menjual jamu berupa resep rahasia atau warisan nenek moyang.">
    <meta property="og:url" content="https://djaman.42web.io">
    <meta property="og:image" content="https:/djaman.42web.io/assets_client/img/Logo_Djaman.png">
	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https:/djaman.42web.io/assets_client/img/Logo_Djaman.png">

	<meta name="keywords" content="Djaman, jamu, resep rahasia, warisan nenek moyang, pengalaman, pengetahuan, pembuatan jamu, warisan budaya, identitas bangsa, kesehatan tubuh, alami, tradisional,  body health, natural, herbal drink crafting, alternative medicine, vegan friendly, vegetarian, vegan food">
    <meta name="description" content="Djaman menjual jamu berupa resep rahasia atau warisan nenek moyang. Produk kami memiliki pengalaman dan pengetahuan dalam pembuatan jamu yang telah diwariskan dari nenek moyang dan dijaga dengan baik. Rasakan manfaat dari warisan budaya ini dengan menggunakan produk Djaman dan jaga kesehatan tubuh dengan cara alami dan tradisional.">

	<!-- title -->
	<title>Djaman - Jamu Organik</title>
	
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Djaman",
        "url": "/",
        "logo": "https://djaman.42web.io//assets_client/img/Logo_Djaman.png",
    }
    </script>


	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url()?>assets_client/img/Logo_Djaman.webp">
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
    <!-- reCaptcha Enterprise Google -->
    <script  src="https://www.google.com/recaptcha/enterprise.js?render=6Lf8M04nAAAAAMpRiYuWw87cLuk1LV1Zl5H4oqFM"></script>

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
                                <li <?php if ($active_menu === 'home') echo 'class="current-list-item"'; ?>><a href="<?= base_url()?>">Home</a></li>
                                <li <?php if ($active_menu === 'tentang_kami') echo 'class="current-list-item"'; ?>><a href="<?= base_url()?>index.php/Home/TentangKami">Tentang Kami</a></li>
                                <li <?php if ($active_menu === 'kontak_kami') echo 'class="current-list-item"'; ?>><a href="<?= base_url()?>index.php/Home/KontakKami">Kontak Kami</a></li>
                                <li <?php if ($active_menu === 'belanja') echo 'class="current-list-item"'; ?>><a href="<?= base_url()?>index.php/Home/Belanja">Belanja</a></li>
                                <li><a href="https://cekresi.com/" target="_blank">Lacak Pengiriman</a></li>
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
							<h3>Cari Produk / Kategori:</h3>
							<form action="<?= site_url('Home/search') ?>" method="GET">
							<input type="text" name="keyword" placeholder="Kata Kunci">
								<button type="submit">Cari <i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->