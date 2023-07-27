<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Edit Produk <?php echo $data_produk->nama_jamu; ?> - Djaman Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url()?>/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= base_url()?>/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url()?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url()?>/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <form action="<?= site_url('Admin/search') ?>" method="GET">
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                    name="keyword"
                  />
                  </form>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

               <!-- User -->
               <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class=" avatar-online">
                      <img src="<?= base_url()?>/assets/img/avatars/<?php echo $this->session->userdata('foto'); ?>" alt class="w-px-40 h-px-50 rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url()?>/assets/img/avatars/<?php echo $this->session->userdata('foto'); ?>" alt class="w-px-40 h-px-50  rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $this->session->userdata('username'); ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../../Profile/tampilEditProfile">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Pengaturan Profil</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo site_url('Admin/logout');?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <h5 class="card-header">Edit Produk </h5>
                      <?php echo $this->session->flashdata("error"); ?>

                      <div class="card-body">
                        <form action="<?php echo site_url('Produk/update/'.$data_produk->id_produk); ?>" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="id_produk" class="form-label">ID Produk</label>
                            <input
                              type="text"
                              class="form-control"
                              id="id_produk"
                              name="id_produk"
                              value="<?php echo $data_produk->id_produk; ?>"
                              placeholder="PJM001"
                              readonly
                            />
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nama Jamu</label>
                              <input
                                type="text"
                                class="form-control"
                                id="nama_jamu"
                                name="nama_jamu"
                                value="<?php echo $data_produk->nama_jamu; ?>"
                              />
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Satuan</label>
                              <input
                                type="text"
                                class="form-control"
                                id="satuan"
                                name="satuan"
                                value="<?php echo $data_produk->satuan; ?>"
                              />
                          </div>
                          <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input
                              type="text"
                              class="form-control"
                              id="harga"
                              name="harga_varchar"
                              placeholder="10000"
                              value="<?php echo $data_produk->harga; ?>"
                            />
                            <input
                              type="text"
                              id="hidden_harga"
                              name="harga"
                              hidden
                            />
                          </div>
                          <div class="mb-3">
                            <label for="manfaat1" class="form-label">Manfaat 1</label>
                            <input
                              type="text"
                              class="form-control"
                              id="manfaat1"
                              name="manfaat1"
                              value="<?php echo $data_produk->manfaat1; ?>"
                              placeholder="Manfaat 1"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="manfaat2" class="form-label">Manfaat 2</label>
                            <input
                              type="text"
                              class="form-control"
                              id="manfaat2"
                              name="manfaat2"
                              value="<?php echo $data_produk->manfaat2; ?>"

                            />
                          </div>
                          <div class="mb-3">
                            <label for="manfaat3" class="form-label">Manfaat 3</label>
                            <input
                              type="text"
                              class="form-control"
                              id="manfaat3"
                              name="manfaat3"
                              value="<?php echo $data_produk->manfaat3; ?>"

                            />
                          </div>
                          <div>
                              <label for="deskripsi" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" ><?php echo $data_produk->deskripsi; ?></textarea>
                          </div>

                          <div class="mb-3">
                              <label for="kategori" class="form-label">Kategori</label>
                              <select class="form-select" id="exampleFormControlSelect1" name="kategori" aria-label="Default select example" value="<?php echo $data_produk->kategori; ?>">
                                <option selected value="Jamu Akar">Jamu Akar</option>
                                <option value="Jamu Rempah">Jamu Rempah</option>
                                <option value="Jamu Daun">Jamu Daun</option>
                              </select>
                            </div>
                          </div>
                          <!-- Account -->
                          <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img
                                src="<?php echo base_url('/assets/img/produk/'.$data_produk->foto); ?>"
                                alt="foto-produk"
                                class="d-block rounded "
                                height="100"
                                width="100"
                                id="uploadedAvatar"
                              />
                              <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                  <span class="d-none d-sm-block">Upload Foto Produk</span>
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
                                <button type="submit" class="btn btn-primary ">Update Data</button>
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
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Ambil nilai harga dari input harga
        var harga = document.getElementById("harga").value;

        // Hapus tanda titik dan koma dari harga (format ribuan)
        var hargaTanpaFormat = harga.replace(/\D/g, "");

        // Set nilai harga_hidden dengan harga dalam format integer
        document.getElementById("hidden_harga").value = hargaTanpaFormat;
      });
    </script>

  </body>
</html>
