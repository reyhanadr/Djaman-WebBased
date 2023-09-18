          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <h5 class="card-header">Edit Produk: <?php echo $data_produk->nama_jamu; ?></h5>
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
                              <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
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
                          <div>
                              <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" ><?php echo $data_produk->deskripsi; ?></textarea>
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

                          <div class="mb-3">
                              <label for="kategori" class="form-label">Kategori</label>
                              <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                                  <option disabled>Pilih Kategori</option>
                                  <?php foreach ($kategori as $row) { ?>
                                      <option value="<?php echo $row['id_kategori']; ?>" <?php echo ($row['id_kategori'] == $data_produk->id_kategori) ? 'selected' : ''; ?>>
                                          <?php echo $row['nama_kategori']; ?>
                                      </option>
                                  <?php } ?>
                              </select>

                          </div>
                          <hr class="m-0">
                          <!-- Foto -->
                          <div class="mt-4">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img
                                src="<?php echo base_url('/assets/img/produk/'.$data_produk->foto); ?>"
                                alt="foto-produk"
                                class="d-block rounded "
                                height="100"
                                width="150"
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
                      <div class="mt-1">
                        <button type="submit" class="btn btn-primary ">Perbarui Data</button>
                        <a href="<?= base_url()?>index.php/Produk/tampilDataProduk" class="btn btn-outline-primary">Kembali</a>
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
