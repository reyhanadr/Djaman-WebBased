          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail Produk dari:</span> <?php echo $data_produk->nama_jamu; ?></h4>
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body d-flex justify-content-center align-items-center">
                      <img
                        src="<?= base_url() ?>/assets/img/produk/<?= htmlentities($data_produk->foto) ?>"
                        alt="user-avatar"
                        class="d-block rounded"
                        height="200"
                        width="310"
                        id="uploadedAvatar"
                      />
                    </div>

                    <hr class="m-0" />

                  </div>
                </div>
                <div class="col-lg">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <h5 for="firstName" class="mb-2">Nama Produk:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                              <?php echo $data_produk->nama_jamu?>
                            </p>
                          </td>
                        </div>
                        <div class="mb-3 col-md-6">
                          <h5 for="firstName" class="mb-2">Satuan:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                            <?php echo $data_produk->satuan?>
                            </p>
                          </td>
                        </div>
                        <div class="mb-3 col-md-12">
                          <h5 for="firstName" class="mb-2">Deskripsi Produk:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                              <?php echo $data_produk->deskripsi?>
                            </p>
                          </td>
                        </div>
                        <div class="mb-3 col-md-6">
                          <h5 for="firstName" class="mb-2">Harga:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                            <?php echo $data_produk->harga?>
                            </p>
                          </td>
                        </div>
                        <div class="mb-3 col-md-6">
                          <h5 for="firstName" class="mb-2">Kategori Produk:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                            <?php echo $data_produk->kategori?>
                            </p>
                          </td>
                        </div>
                        <div class="mb-3 col-md-12">
                          <h5 for="firstName" class="mb-2">Manfaat</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                              1. <?php echo $data_produk->manfaat1?>
                            </p>
                            <p class="lead mb-0">
                              2. <?php echo $data_produk->manfaat2?>
                            </p>
                            <p class="lead mb-0">
                              3. <?php echo $data_produk->manfaat3?>
                            </p>
                          </td>
                        </div>

                        <div class="mb-3 col-md-12">
                          <h5 for="firstName" class="mb-2">Link Wa</h5>
                          <td class="py-2">
                            <a target="_blank" href="<?php echo $data_produk->link_wa?>">
                              ...
                              <?= substr($data_produk->link_wa, 149, 60) // Ini akan memotong link WhatsApp menjadi 10 karakter pertama ?>
                              ...
                            </a>
                          </td>
                        </div>

                        <div class="mb-3 col-md-6">
                          <h5 for="firstName" class="mb-2">Dibuat Oleh:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                            <?php echo $data_produk->admin_membuat?>
                            </p>
                          </td>
                        </div>
                        <div class="mb-3 col-md-6">
                          <h5 for="firstName" class="mb-2">Dibuat Tanggal:</h5>
                          <td class="py-6">
                            <p class="lead mb-0">
                            <?php echo $data_produk->created_at?>
                            </p>
                          </td>
                        </div>
                        <?php
                        if ($data_produk->admin_update !== null):
                          ?>
                        <div class="mb-3 col-md-6">
                            <h5 for="firstName" class="mb-2">Diperbarui Oleh:</h5>
                            <td class="py-6">
                                <p class="lead mb-0">
                                    <?= $data_produk->admin_update?>
                                </p>
                            </td>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h5 for="firstName" class="mb-2">Diperbarui Tanggal:</h5>
                            <td class="py-6">
                                <p class="lead mb-0">
                                    <?= $data_produk->updated_at ?>
                                </p>
                            </td>
                        </div>
                        <?php endif; ?>

                        
                        <div class="row">
                          <div class="mt-2">
                              <a href="<?= base_url()?>index.php/Produk/editProduk/<?=  $data_produk->id_produk?>" class="btn btn-primary">Edit Produk</a>
                              <a href="<?= base_url()?>index.php/Produk/tampilDataProduk" class="btn btn-outline-primary">Kembali</a>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://reyhanadr.epizy.com" target="_blank" class="footer-link fw-bolder">Reyhanadr</a>
                </div>

              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url()?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url()?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url()?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url()?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url()?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url()?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url()?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url()?>/assets/js/dashboards-analytics.js"></script>
    <script src="<?= base_url()?>/assets/js/pages-account-settings-account.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
