          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Detail Link Embed (Pada Home Klien)</span></h4>
              
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-3">
                    <?php if ($this->session->flashdata("success")): ?>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="alert alert-success alert-dismissible">
                                        <?php echo $this->session->flashdata("success"); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Tampilkan pesan error -->
                        <?php if ($this->session->flashdata("error")): ?>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="alert alert-danger alert-dismissible">
                                        <?php echo $this->session->flashdata("error"); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="mt-4 mb-2 d-flex justify-content-center">
                        <h5 for="firstName" class="">Tampilan Link pada Home:</h5>
                        </div>
                        <div class="justify-content-center align-items-center">
                            <?= $detail_link->link?>
                        </div>

                        <hr class="m-0" />

                  </div>
                </div>
                <div class="col-lg">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="mb-3 col">
                          <h5 for="link" class="mb-4">Detail Link:</h5>
                          <form action="<?= base_url() ?>index.php/Admin/editLink/<?= $detail_link->id_link ?>" method="post">
                            <textarea
                                type="text"
                                class="form-control"
                                id="link"
                                name="link"
                                rows="12"
                              ><?= htmlentities($detail_link->link) ?>
                            </textarea>
                            <div class="row">
                              <div class="mt-4">
                                  <button type="submit" class="btn btn-primary ">Edit Link Embed</button>
                                  <a href="<?= base_url()?>index.php/Admin/resetLink/<?=  $detail_link->id_link?>" class="btn btn-outline-primary">Reset Link Default</a>
                              </div>
                            </div>
                          </form>
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
