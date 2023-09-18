          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <h5 class="card-header">Tambah Data Admin</h5>
                      

                      <div class="card-body">
                        <?php echo $this->session->flashdata("error"); ?>
                        <form action="<?php echo site_url('Admin/simpanAdmin'); ?>" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="id_produk" class="form-label">ID Admin</label>
                            <input
                              type="text"
                              class="form-control"
                              id="id_admin"
                              name="id_admin"
                              placeholder="PJM001"
                              value="<?php echo $newAdminId; ?>"
                              readonly
                            />
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nama Admin</label>
                              <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                              />
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email Admin</label>
                              <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                              />
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username Admin</label>
                            <input
                              type="text"
                              class="form-control"
                              id="username"
                              name="username"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password Admin</label>
                            <input
                              type="password"
                              class="form-control"
                              id="password"
                              name="password"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Role Admin</label>
                            <input
                              type="text"
                              class="form-control"
                              id="namarole"
                              name="namarole"
                              readonly
                              value="<?= $data_roles->nama_role?>"
                            />
                            <input
                              type="text"
                              class="form-control"
                              id="role_id"
                              name="role_id"
                              hidden
                              value="<?= $data_roles->role_id?>"
                            />
                          </div>
                          <hr class="m-0">

                          <!-- Foto -->
                          <div class="mt-4">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img style="max-width: 100%; height: auto; width: 150px;"
                                src="<?= base_url()?>/assets/img/avatars/1.png"
                                alt="user-avatar"
                                class="d-block rounded "

                                id="uploadedAvatar"
                              />
                              <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                  <span class="d-none d-sm-block">Upload Foto Admin</span>
                                  <i class="bx bx-upload d-block d-sm-none"></i>
                                  <input
                                    type="file"
                                    id="upload"
                                    class="account-file-input"
                                    hidden
                                    name="foto"
                                    accept="image/png, image/jpeg"
                                  />
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                  <i class="bx bx-reset d-block d-sm-none"></i>
                                  <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2MB</p>
                              </div>
                              
                            </div>
                          </div>

                          
                      </div>
                    </div>
                    <div class="row">
                            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2 mb-4 ">
                                <button type="submit" class="btn btn-primary ">Tambah Data</button>
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
    <script>
      $(document).ready(function() {
        $('#harga').on('input', function() {
          var inputHarga = $(this).val();
          var angka = inputHarga.replace(/\D/g, '');
          var hargaFormatted = angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
          
          // Hapus tanda titik pemisah ribuan sebelum mengirim data
          var hargaInt = parseInt(angka.replace(/\./g, ''));
          
          // Set nilai input dengan format harga
          $(this).val(hargaFormatted);
          
          // Set nilai input tersembunyi (hidden input) dengan harga integer
          $('#hidden_harga').val(hargaInt);
        });
      });
    </script>
  </body>
</html>
