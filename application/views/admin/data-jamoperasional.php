          <!-- Content wrapperr -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row0">
              <!-- Basic Bootstrap Tablee -->
              <div class="card">
                <h5 class="card-header">Data Jam Operasional</h5>
                    <div class="card-body">
                      <!-- <div class="row">
                        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                          <form action="<?= site_url('Admin/searchAdmin') ?>" method="GET">
                            <div class="input-group">
                              <input type="text" name="keyword" class="form-control" placeholder="Cari Admin" aria-describedby="button-addon2" value="<?php echo $this->input->get('keyword'); ?>">
                              <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                          </form>
                        </div>
                      </div> -->
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
                    $this->load->library('table');

                    $template = array(
                        'table_open' => '<table class="table">',
                        'tbody_open' => '<tbody class="table-border-bottom-0" >',
                        'tbody_colse' => '</tbody>',
                        'thead_open' => '<thead>',
                        'thead_close' => '</thead>',
                        'heading_row_start' => '<tr>',
                        'heading_row_end' => '</tr>',
                        'th_open' => '<th>',
                        'th_close' => '</th>',
                        'tbody_open' => '<tbody>',
                        'tbody_close' => '</tbody>',
                        'row_start' => '<tr>',
                        'row_end' => '</tr>',
                        'cell_start' => '<td>',
                        'cell_end' => '</td>',
                        'table_close' => '</table>'
                    );
                    
                    $this->table->set_template($template);
                    $this->table->set_heading('No. ', 'Hari', 'Jam Buka dan Jam Tutup', 'Aksi');
                    
                    foreach ($data_jam_operasional as $item) {
                        $dropdown_menu = '
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">';
                    
                        if ($item->jam_buka === null && $item->jam_tutup === null) {
                            $dropdown_menu .= '<a class="dropdown-item" href="' . site_url('Admin/editJamOperasional/' . htmlentities($item->id_jamoperasional)) . '">
                                <iconify-icon icon="mdi:timer-lock-open-outline" class="bx me-1"></iconify-icon> Buka Jam Operasional
                            </a>';
                        } else {
                            $dropdown_menu .= '
                            <a class="dropdown-item" href="' . site_url('Admin/editJamOperasional/' . $item->id_jamoperasional) . '">
                                <i class="bx bx-edit-alt me-1"></i> Edit Jam Operasional
                            </a>
                            <a class="dropdown-item" href="' . site_url('Admin/tutupJamOperasional/' . htmlentities($item->id_jamoperasional)) . '">
                                <iconify-icon icon="carbon:close-filled" class="bx me-1"></iconify-icon> Tutup Jam Operasional
                            </a>  ';
                        }

                    
                        $dropdown_menu .= '</div></div>';
                    
                        $jam_buka_tutup = ($item->jam_buka === null && $item->jam_tutup === null) ?  $item->isBuka: $item->jam_buka . ' - ' . $item->jam_tutup;
                    
                        $this->table->add_row(
                            $item->id_jamoperasional,
                            $item->hari,
                            $jam_buka_tutup,
                            $dropdown_menu
                        );
                    }
                    
                    echo $this->table->generate();
                    
                    
                    
                  
                  ?>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
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
