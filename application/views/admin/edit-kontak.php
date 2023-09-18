          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <h5 class="card-header">Edit Kontak</h5>
                      <?php echo $this->session->flashdata("error"); ?>

                      <div class="card-body">
                        <form action="<?php echo site_url('Kontak/update/'.$data_kontak->id_kontak); ?>" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="id_kontak" class="form-label">ID Kontak</label>
                            <input
                              type="text"
                              class="form-control"
                              id="id_kontak"
                              name="id_kontak"
                              value="<?php echo $data_kontak->id_kontak; ?>"
                              readonly
                            />
                          </div>
                          <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input
                                type="text"
                                class="form-control"
                                id="alamat"
                                name="alamat"
                                value="<?php echo $data_kontak->alamat; ?>"
                              />
                          </div>

                          <div class="mb-3">
                              <label for="phone" class="form-label">No. Telepon (gunakan +62)</label>
                              <input
                                type="tel"
                                class="form-control"
                                id="phone"
                                name="phone"
                                value="<?php echo $data_kontak->phone; ?>"
                              />
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              name="email"
                              value="<?php echo $data_kontak->email; ?>"

                            />
                          </div>
                          <div class="mb-3">
                            <label for="maps" class="form-label">Maps</label>
                            <input
                              type="text"
                              class="form-control"
                              id="maps"
                              name="maps"
                              value="<?php echo $data_kontak->maps; ?>"
                            />
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="mt-1">
                        <button type="submit" class="btn btn-primary ">Simpan Perubahan</button>
                        <a href="<?= base_url()?>index.php/Kontak/tampilKontak" class="btn btn-outline-primary">Batalkan</a>
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