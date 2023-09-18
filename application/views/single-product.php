	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>See more Details</p>
						<h1>Single Product</h1> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="<?php echo base_url('/assets/img/produk/'.$single_product->foto); ?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?php echo $single_product->nama_jamu; ?></h3>

						<?php if ($is_diskon) : ?>
							<p class="single-product-pricing">
								<span class="sub-title">Per <?php echo $single_product->satuan; ?></span>
								<del><?php echo $single_product->harga; ?></del>
								<span class="product-price"> <?php echo $produk_terlaris->harga_diskon; ?></span>
							</p>
						<?php else : ?>
							<p class="single-product-pricing">
								<span class="sub-title">Per <?php echo $single_product->satuan; ?></span>
								<?php echo $single_product->harga; ?>
							</p>
						<?php endif; ?>

						<strong>Deskripsi </strong>
						<p><?php echo $single_product->deskripsi; ?></p>
						<strong>Manfaat: </strong>
						<p>1. <?php echo $single_product->manfaat1; ?></p>
						<p>2. <?php echo $single_product->manfaat2; ?></p>
						<p>3. <?php echo $single_product->manfaat3; ?></p>
						<div class="single-product-form">
							<a href="<?php echo $single_product->link_wa; ?>" target="_blank" class="cart-btn"> Beli Sekarang</a>
							<p>
								<a style="color:#4B3414;" target="_blank" href="<?= site_url('Home/search?keyword=' . urlencode($single_product->kategori)) ?>">
									<strong>Kategori: </strong><?= $single_product->kategori ?>
									<iconify-icon icon="fluent-mdl2:open-in-new-tab"></iconify-icon>
								</a>

							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produk</span> Terkait</h3>
						<p>Produk terkait yang mungkin anda butuhkan atau anda minati. Silahkan dilihat dan dipilih.</p>
					</div>
				</div>
			</div>
			<div class="row">
			<?php foreach ($data_produk_random as $produk) : ?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="<?php echo $produk->id_produk; ?>"><img src="<?= base_url()?>/assets/img/produk/<?php echo $produk->foto; ?>" alt=""></a>
						</div>
						<h3><?php echo $produk->nama_jamu; ?></h3>
						<?php if ($is_diskon_harga == $produk->id_produk ) : ?>
								<p class="product-price">
									<span class="subtitle-product-price">Per <?php echo $produk->satuan; ?></span>
									<del><?php echo $produk_terlaris->harga_asli; ?></del>
									<span class="product-price-shop"> <?php echo $produk_terlaris->harga_diskon; ?></span>
								</p>

							<?php else : ?>
								<p class="product-price">
									<span class="subtitle-product-price">Per <?php echo $produk->satuan; ?></span>
									<?php echo $produk->harga; ?>
								</p>
						<?php endif; ?>
						<a href="<?php echo $produk->id_produk; ?>" class="cart-btn">Lihat Detail</a>
					</div>
				</div>
			<?php endforeach; ?>


			</div>
		</div>
	</div>
	<!-- end more products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="<?= base_url()?>/assets_client/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?= base_url()?>/assets_client/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?= base_url()?>/assets_client/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?= base_url()?>/assets_client/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?= base_url()?>/assets_client/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	
	<!-- jquery -->
	<script src="<?= base_url()?>/assets_client/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url()?>/assets_client/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?= base_url()?>/assets_client/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?= base_url()?>/assets_client/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?= base_url()?>/assets_client/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?= base_url()?>/assets_client/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?= base_url()?>/assets_client/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?= base_url()?>/assets_client/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?= base_url()?>/assets_client/js/sticker.js"></script>
	<!-- main js -->
	<script src="<?= base_url()?>/assets_client/js/main.js"></script>

</body>
</html>