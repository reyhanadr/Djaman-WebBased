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
										<i class="fas fa-receipt"></i>
									</div>
									<div class="content">
										<h3>Resep Rahasia dan Warisan Leluhur</h3>
										<p>Djaman menjual jamu dengan resep rahasia yang telah diwariskan dari nenek moyang. Pengalaman dan pengetahuan dalam pembuatan jamu ini telah dijaga dengan baik selama bertahun-tahun.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
									<i class="fas fa-seedling"></i>
									</div>
									<div class="content">
										<h3>Kesehatan Alami dan Tradisional</h3>
										<p>Djaman memberikan pelanggan pengalaman menjaga kesehatan tubuh secara alami dan tradisional, sesuai dengan resep jamu yang telah terbukti selama beberapa generasi.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-microscope"></i>
									</div>
									<div class="content">
										<h3>Pembuatan dengan Standarisasi</h3>
										<p>Djaman memproduksi jamu tradisional dengan menjunjung tinggi standar kualitas yang ketat. Setiap produk kami diproduksi dengan cermat untuk memastikan keamanan dan efektivitasnya.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-box"></i>
									</div>
									<div class="content">
										<h3>Kemasan Aman</h3>
										<p>Djaman memastikan bahwa produk kami dikemas dengan aman dan higienis. Kami menggunakan metode pengemasan yang sesuai dengan standar keamanan dan kebersihan yang ketat.</p>
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
        	<h3>Product sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
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
						<!-- <ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul> -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg" style="background-image: url(<?= base_url()?>/assets/img/anggota/<?php echo $data_organisasi[0]->foto; ?>);">
					</div>
						<h4><?php echo $data_organisasi[0]->nama; ?> <span><?php echo $data_organisasi[0]->jabatan; ?></span></h4>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg" style="background-image: url(<?= base_url()?>/assets/img/anggota/<?php echo $data_organisasi[2]->foto; ?>);"></div>
						<h4><?php echo $data_organisasi[2]->nama; ?> <span><?php echo $data_organisasi[2]->jabatan; ?></span></h4>

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