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
	<div class="product-section mt-100 mb-100">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h4><span class="orange-text">Berikut Hasil Pencarian Dari: </span> <?php echo htmlentities($this->input->get('keyword'));?></h4>
					</div>
				</div>
            </div>

			<div class="row product-lists">
			<?php if (empty($data_produk)): ?>
				<div class="col-lg-8 offset-lg-2 text-center">
					<p>Produk Tidak Ditemukan</p>
				</div>
			<?php else: ?>
				<?php foreach ($data_produk as $row) : ?>
				<div class="col-lg-4 col-md-6 text-center <?php echo str_replace(' ', '', $row->kategori); ?>">
					<div class="single-product-item">
						<div class="product-image">
							<a href="SingleProduk/<?php echo $row->id_produk; ?>"><img src="<?= base_url()?>/assets/img/produk/<?php echo $row->foto; ?>" alt=""></a>
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
									<span class="subtitle-product-price">Per <?php echo $row->satuan; ?></span>
									<?php echo $row->harga; ?>
								</p>
							<?php endif; ?>
						<a href="SingleProduk/<?php echo $row->id_produk; ?>" class="cart-btn"> Lihat Detail</a>
					</div>
				</div>
				<?php endforeach; ?>
			<?php endif; ?>
	
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