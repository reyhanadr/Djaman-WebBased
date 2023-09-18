          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <h5 class="card-header">Edit Kategori</h5>
                      <?php echo $this->session->flashdata("error"); ?>

                      <div class="card-body">
                        <form action="<?php echo site_url('Produk/updateKategori/'.$data_kategori->id_kategori); ?>" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="nokategori" class="form-label">No. Kategori</label>
                            <input
                              type="text"
                              class="form-control"
                              id="nokategori"
                              name="nokategorinokategori"
                              value="<?php echo $data_kategori->id_kategori; ?>"
                              readonly
                            />
                          </div>
                          <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input
                              type="text"
                              class="form-control"
                              id="nama_kategori"
                              name="nama_kategori"
                              value="<?php echo $data_kategori->nama_kategori; ?>"
                            />
                          </div>
                          <div class="mb-3">
                              <label for="deskripsi" class="form-label">Deskripsi Kategori</label>
                              <textarea
                                type="text"
                                class="form-control"
                                id="deskripsi"
                                name="deskripsi"
                                rows="3"
                              ><?php echo $data_kategori->deskripsi_kategori; ?>
                              </textarea>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="mt-1">
                        <button type="submit" class="btn btn-primary ">Perbarui Data</button>
                        <a href="<?= base_url()?>index.php/Produk/tampilDataKategori" class="btn btn-outline-primary">Kembali</a>
                      </div>
                    </div>
                  </form>
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