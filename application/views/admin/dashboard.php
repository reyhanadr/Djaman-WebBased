          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!--/ Total Revenue -->
                <div class="col">
                  <div class="row">
                    <div class="col mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>/assets/img/icons/unicons/jamu.png" alt="Product" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="Produk/tampilDataProduk">Lihat Semua</a>
                                <!--<a class="dropdown-item" href="javascript:void(0);">Delete</a>-->
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Jumlah Produk</span>
                          <h3 class="card-title text-nowrap mb-2"><?php echo $totalData; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>/assets/img/icons/unicons/asknguest.png" alt="AskNGuess" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="Asknsugest/tampilAsknsugest">Lihat Semua</a>
                                <!--<a class="dropdown-item" href="javascript:void(0);">Delete</a>-->
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Pertanyaan & Saran</span>
                          <h3 class="card-title mb-2"><?php echo $totalAsknSugest; ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>/assets/img/produk/<?php echo $produk_terlaris->foto; ?>" alt="BestSelling" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="<?= base_url()?>#Terlaris" target="_blank">Lihat Tampilan Produk Terlaris</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Produk Terlaris</span>
                          <h3 class="card-title mb-2">
                            <?php echo $produk_terlaris->nama_jamu; ?>
                            <small class="text-success fw-semibold">Disc <?php echo $produk_terlaris->diskon; ?>%</small>

                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row0">
                  <!-- Basic Bootstrap Table -->
                  <div class="card">
                    <h5 class="card-header">Data Singkat Produk</h5>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                            <form action="<?= site_url('produk/search') ?>" method="GET">
                              <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Cari Produk" aria-describedby="button-addon2">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
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
                      $this->table->set_heading('No.', 'Terlaris', 'Foto Produk', 'Nama Jamu', 'Satuan', 'Harga',  'Kategori', 'Aksi');

                      for ($i = 0; $i < min(5, count($data_produk)); $i++) {
                        $item = $data_produk[$i];
                        $no_tampil = '<strong>' . ($i + 1) . '.</strong>';
                        $foto_produk = '
                        <a href="' . site_url('Produk/DetailProduk/' . htmlentities($item->id_produk)) . '">
                            <img style="max-width: 100%; height: auto; width: 100px;" src="' . base_url() . 'assets/img/produk/' . htmlentities($item->foto) . '" alt="fotoProduk" class="avatar">
                        </a>';
                        $terlaris_btn = '
                            <a class="dropdown-item" href="' . site_url('Produk/UpdateDataTerlaris/' . $item->id_produk) . '">
                                <i class="bx bx-star me-1"></i> 
                            </a>
                        ';
                        $dropdown_menu = '
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . site_url('Produk/detailProduk/' . htmlentities($item->id_produk)) . '">
                                        <i class="bx bx-detail me-1"></i> Detail Produk
                                    </a>
                                    <a class="dropdown-item" href="' . site_url('Produk/editProduk/' . $item->id_produk) . '">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <a class="dropdown-item" href="' . site_url('Produk/hapus/' . $item->id_produk) . '">
                                        <i class="bx bx-trash me-1"></i> Hapus
                                    </a>
                                    <a class="dropdown-item" href="' . site_url('Produk/UpdateDataTerlaris/' . $item->id_produk) . '">
                                        <i class="bx bx-star me-1"></i> Terlaris
                                    </a>
                                </div>
                            </div>
                        ';
                    
                        $this->table->add_row(
                            $no_tampil,
                            $terlaris_btn,
                            $foto_produk,
                            $item->nama_jamu,
                            $item->satuan,
                            $item->harga,
                            $item->kategori,
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
                      <a href="Produk/inputProduk">
                          <button type="button" class="btn btn-primary ">Tambah Produk</button>
                      </a>
                      <a href="<?= base_url()?>index.php/Produk/tampilDataProduk" class="btn btn-outline-primary">Lihat Semua</a>
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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
