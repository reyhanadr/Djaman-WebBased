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

    <title>Data Produk - Djaman Admin</title>

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
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
                      <a class="dropdown-item" href="../Profile/tampilEditProfile">
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
              <div class="row0">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                  <h5 class="card-header">Data Produk</h5>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                          <form action="<?= site_url('produk/search') ?>" method="GET">
                            <div class="input-group">
                              <input type="text" name="keyword" class="form-control" placeholder="Cari Produk" aria-describedby="button-addon2" value="<?php echo $this->input->get('keyword'); ?>">
                              <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- Tampilkan pesan alert success -->
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
                  <div class="table-responsive text-nowrap">
                  <?php
                    $no = 1;
                    $template = array(
                        'table_open' => '<table class="table display" id=" "',
                        'tbody_open' => '<tbody class="table-border-bottom-0" >',
                        'tbody_colse' => '</tbody>',
                        'heading_row_start' => '<tr>',
                        'heading_row_end' => '</tr>',
                        'heading_cell_start' => '<th>',
                        'heading_cell_end' => '</th>',
                        'row_start' => '<tr>',
                        'row_end' => '</tr>',
                        'cell_start' => '<td>',
                        'cell_end' => '</td>',
                        'row_alt_start' => '<tr>',
                        'row_alt_end' => '</tr>',
                        'cell_alt_start' => '<td>',
                        'cell_alt_end' => '</td>',
                        'table_close' => '</table>'
                    );

                    $this->table->set_template($template);
                    $this->table->set_heading('No.', 'Terlaris', 'Foto', 'ID Produk', 'Nama Jamu', 'Satuan', 'Harga', 'Deskripsi', 'Manfaat 1', 'Manfaat 2', 'Manfaat 3', 'Kategori', 'Link Whatsapp Bisnis', 'Aksi');

                    foreach ($data_produk as $item) {
                        $no_tampil = '<strong >' . $no++ . '.</strong>';
                        $terlaris_btn= '
                        <a class="dropdown-item" href="' . site_url('Produk/UpdateDataTerlaris/' . htmlentities($item->id_produk)) . '">
                            <i class="bx bx-star me-1"></i> 
                        </a>
                        ';
                        $id_jamu= '<strong data-id="$item->id_produk">' . htmlentities($item->id_produk) . '</strong>';
                        $foto_produk = '<img src="' . base_url('assets/img/produk/' . htmlentities($item->foto)) . '" alt="Avatar" class="avatar " >';
                        $dropdown_menu = '
                          <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="' . site_url('Produk/editProduk/' . htmlentities($item->id_produk)) . '">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                  </a>
                                  <a class="dropdown-item" href="' . site_url('Produk/hapus/' . htmlentities($item->id_produk)) . '">
                                      <i class="bx bx-trash me-1"></i> Delete
                                  </a>
                                  <a class="dropdown-item" href="' . site_url('Produk/UpdateDataTerlaris/' . htmlentities($item->id_produk)) . '">
                                      <i class="bx bx-star me-1"></i> Terlaris
                                  </a>
                              </div>
                          </div>';

                        $this->table->add_row(
                          $no_tampil,
                          $terlaris_btn,
                          $foto_produk,
                          $id_jamu,
                          strlen($item->nama_jamu) > 20 ? substr(htmlentities($item->nama_jamu), 0, 20) . '...' : htmlentities($item->nama_jamu),
                          strlen($item->satuan) > 10 ? substr(htmlentities($item->satuan), 0, 10) . '...' : htmlentities($item->satuan),
                          htmlentities($item->harga),
                          strlen($item->deskripsi) > 25 ? substr(htmlentities($item->deskripsi), 0, 50) . '...' : htmlentities($item->deskripsi),
                          strlen($item->manfaat1) > 30 ? substr(htmlentities($item->manfaat1), 0, 30) . '...' : htmlentities($item->manfaat1),
                          strlen($item->manfaat2) > 30 ? substr(htmlentities($item->manfaat2), 0, 30) . '...' : htmlentities($item->manfaat2),
                          strlen($item->manfaat3) > 30 ? substr(htmlentities($item->manfaat3), 0, 30) . '...' : htmlentities($item->manfaat3),
                          htmlentities($item->kategori),
                          strlen($item->link_wa) > 5 ? substr(htmlentities($item->link_wa), 0, 30) . '...' : htmlentities($item->link_wa),
                          $dropdown_menu
                        );
                    }

                    echo $this->table->generate();
                    ?>
                  </div>
                </div>
                <!--/ Basic Bootstrap Table -->
              </div>
              <div class="row">
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2 py-3 mb-4">
                    <a href="inputProduk">
                        <button type="button" class="btn btn-primary ">Tambah Data</button>
                    </a>
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
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> -->
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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- jQuery & Data Tables-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>
  <script>
  </script>
  </body>
</html>
