    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
              <!-- <p>Get 24/7 Support</p>
						<h1>Contact us</h1> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="form-title">
              <h2>Pertanyaan atau Masukan Bagi Kami</h2>
              <p>
                Jangan ragu untuk memberikan masukan, saran, atau pertanyaan 
                apapun yang anda miliki. Kami berkomitmen untuk memberikan 
                layanan yang terbaik untuk pelanggan kami dan kami selalu siap 
                untuk mendengar umpan balik Anda. Silakan hubungi kami melalui formulir 
                kontak yang tersedia di halaman ini. Terima kasih telah memilih layanan kami.
              </p>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
              <div id="form_status">
                <span class="success"><?php echo $this->session->flashdata('success'); ?></span>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
              <div id="form_status">
                <span class="wrong"><?php echo $this->session->flashdata('error'); ?></span>
              </div>
            <?php endif; ?>

            <div class="contact-form">
              <form action="<?php echo site_url('Home/simpanAsknsugest')?>" method="POST" enctype="multipart/form-data">
                <p>
                  <input type="text" placeholder="Name" name="nama" id="name" />
                  <input
                    type="email"
                    placeholder="Email"
                    name="email"
                    id="email"
                    required
                  />
                </p>
                <p>
                  <input
                    type="tel"
                    placeholder="Phone"
                    name="phone"
                    id="phone"
                  />
                  <input
                    type="text"
                    placeholder="Subject"
                    name="subject"
                    id="subject"
                  />
                </p>
                <p>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    placeholder="Message"
                    required
                  ></textarea>
                </p>
                <!-- <input type="hidden" name="token" value="FsWga4&@f6aw" />   -->
                <p><input type="submit" value="Submit" /></p>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-form-wrap">
              <div class="contact-form-box">
                <h4><i class="fas fa-map"></i> Alamat Toko</h4>
                <p>
                  <?php echo $data_kontak[0]->alamat; ?>
                </p>
              </div>
              <div class="contact-form-box">
    <h4><i class="far fa-clock"></i> Jam Operasional</h4>
    <p style="text-transform: uppercase;">
        <?php
        $combinedDays = [];
        $currentDay = null;
        
        foreach ($data_jam_operasional as $jam) {
            if ($currentDay === null) {
                $currentDay = $jam->hari;
                $currentBuka = $jam->jam_buka;
                $currentTutup = $jam->jam_tutup;
            } elseif ($currentBuka === $jam->jam_buka && $currentTutup === $jam->jam_tutup) {
                // Gabungkan hari dengan jadwal yang sama
                $currentDay .= ' - ' . $jam->hari;
            } else {
                // Jika lebih dari 2 hari yang sama, tampilkan hanya hari terakhir
                $days = explode(' - ', $currentDay);
                if (count($days) > 2) {
                    $currentDay = reset($days) . ' - ' . end($days);
                }

                // Tambahkan syarat jika $jam->isbuka == null
                if ($currentBuka === null) {
                    $combinedDays[] = $currentDay . ': Tutup';
                } else {
                    $combinedDays[] = $currentDay . ': ' . $currentBuka . ' - ' . $currentTutup;
                }
                
                // Reset variabel
                $currentDay = $jam->hari;
                $currentBuka = $jam->jam_buka;
                $currentTutup = $jam->jam_tutup;
            }
        }
        
        // Tambahkan hari terakhir
        if ($currentDay !== null) {
            $days = explode(' - ', $currentDay);
            if (count($days) > 2) {
                $currentDay = reset($days) . ' - ' . end($days);
            }

            // Tambahkan syarat jika $jam->isbuka == null
            if ($currentBuka === null) {
                $combinedDays[] = $currentDay . ': Tutup';
            } else {
                $combinedDays[] = $currentDay . ': ' . $currentBuka . ' - ' . $currentTutup;
            }
        }
        
        // Gabungkan jadwal menjadi satu string
        echo implode('<br />', $combinedDays);
        ?>
    </p>
</div>





              <div class="contact-form-box">
                <h4><i class="fas fa-address-book"></i> Kontak Kami</h4>
                <p>
                  No. Telepon: <?php echo $data_kontak[0]->phone; ?> <br />
                  Email: <?php echo $data_kontak[0]->email; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p><i class="fas fa-map-marker-alt"></i> Temui Lokasi Kami</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
      <iframe
        src="<?php echo $data_kontak[0]->maps; ?>"
        width="600"
        height="450"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        class="embed-responsive-item"
      ></iframe>
    </div>
    <!-- end google map section -->

    <!-- jquery -->
    <script src="<?= base_url()?>/assets_client/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url()?>/assets_client/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="<?= base_url()?>/assets_client/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="<?= base_url()?>/assets_client/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="<?= base_url()?>/assets_client/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="<?= base_url()?>/assets_client/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="<?= base_url()?>/assets_client/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="<?= base_url()?>/assets_client/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="<?= base_url()?>/assets_client/js/sticker.js"></script>
    <!-- form validation js -->
    <script src="<?= base_url()?>/assets_client/js/form-validate.js"></script>
    <!-- main js -->
    <script src="<?= base_url()?>/assets_client/js/main.js"></script>
  </body>
</html>
