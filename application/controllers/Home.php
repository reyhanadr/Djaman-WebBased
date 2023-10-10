<?php
    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('AsknsugestModel');
            $this->load->model('ProdukModel');
            $this->load->model('KontakModel');
            
            $this->load->library('session');
        }
        public function index(){
            $data['active_menu'] = 'home';
            $data['title'] = 'Jamu Organik dan Terstandarisasi dari Djaman (Jamu Manunggal) Cimahi.';
            $data['meta_description'] = 'Temukan manfaat luar biasa dari jamu segar, organik, dan berstandar laboratorium di Djaman. Jaga kesehatan tubuh dengan cara autentik dan tradisional. elamat berbelanja dan menjaga kesehatan dengan Djaman!';
            $data['meta_url'] = base_url();
            $this->load->model('UserModel');
            // $data['data_produk'] = $this->ProdukModel->getProduk();
            $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
            $data['data_kontak']= $this->KontakModel->getKontak();
            $data['data_produk_random'] = $this->ProdukModel->getRandomProduk(3); // Contoh: Menampilkan 5 produk secara acak
            $data['data_link'] = $this->UserModel->getLinkEmbed(); 
            foreach ($data['data_produk_random'] as &$produk) {
                $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
            }
            $data['is_diskon_harga'] = $this->ProdukModel->getProdukTerlarisRow1();
            if($data['is_diskon_harga']){            
                $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();

            }

            $data['produk_terlaris']->harga_asli = 'Rp. ' . number_format($data['produk_terlaris']->harga_asli, 0, ',', '.');
            $data['produk_terlaris']->harga_diskon = 'Rp. ' . number_format($data['produk_terlaris']->harga_diskon, 0, ',', '.');

            $this->load->view("header", $data);
            $this->load->view("index_2", $data);
            $this->load->view("footer", $data);
        }


        public function SingleProduk($id_produk){
            $data['active_menu'] = 'belanjaSingle';

            $data['data_produk'] = $this->ProdukModel->getProduk();

            $data['data_kontak']= $this->KontakModel->getKontak();
            // Menghapus karakter '+' dan spasi dari nomor telepon
            foreach ($data['data_kontak'] as &$kontak) {
                $kontak->formated_phone_for_whatsapp = str_replace(['+', ' '], '', $kontak->phone);
            }
            
            $data['data_produk_random'] = $this->ProdukModel->getRandomProduk(3); // Contoh: Menampilkan 3 produk secara acak
            foreach ($data['data_produk_random'] as &$produk) {
                $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
            }
        
            $data['single_product'] = $this->ProdukModel->getProdukById($id_produk);
            if (!$data['single_product']) {
                redirect('Home/not_found');
            }
            $data['single_product']->harga = 'Rp. ' . number_format($data['single_product']->harga, 0, ',', '.');
            // Jika produk tidak ditemukan, arahkan ke halaman 404


            $data['title'] =   $data['single_product']->nama_jamu. ' dari Djaman (Jamu Manunggal) Cimahi.';
            $data['meta_description'] = $data['single_product']->deskripsi;
            $data['meta_url'] = base_url(). 'index.php/Home/SingleProduk/'. $id_produk;
            $data['meta_img'] = base_url(). 'assets/img/produk/'. $data['single_product']->foto;
        
            // Periksa apakah produk terdapat dalam tabel produk_terlaris
            $data['is_diskon'] = $this->ProdukModel->isProdukTerlaris($id_produk);
            if($data['is_diskon']){            
                $data['produk_terlaris']= $this->ProdukModel->getProdukTerlarisById($id_produk);
                $data['produk_terlaris']->harga_diskon = 'Rp. ' . number_format($data['produk_terlaris']->harga_diskon, 0, ',', '.');
            }        
            $data['is_diskon_harga'] = $this->ProdukModel->getProdukTerlarisRow1();
            if($data['is_diskon_harga']){            
                $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
                $data['produk_terlaris']->harga_asli = 'Rp. ' . number_format($data['produk_terlaris']->harga_asli, 0, ',', '.');
                $data['produk_terlaris']->harga_diskon = 'Rp. ' . number_format($data['produk_terlaris']->harga_diskon, 0, ',', '.');
            }

            $this->load->view("header", $data);
            $this->load->view("single-product", $data);
            $this->load->view("footer", $data);

        }
        

        public function TentangKami(){
            $data['title'] = 'Tentang Kami - Djaman';
            $data['meta_description'] = 'Selamat datang di halaman Tentang Kami Djaman. Kami adalah pelopor dalam pembuatan produk herbal tradisional, khususnya Jamu, yang membawa manfaat kesehatan alami kepada masyarakat. Kami melestarikan warisan jamu tradisional Indonesia dengan inovasi sesuai kebutuhan zaman modern.';
            $data['meta_url'] = base_url(). 'index.php/Home/TentangKami';
            
            $data['active_menu'] = 'tentang_kami';

            $this->load->model('OrganisasiModel');
            $data['data_kontak']= $this->KontakModel->getKontak();
            $data['data_organisasi']= $this->OrganisasiModel->getOrganisasi();
            $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
            $this->load->view("header", $data);
            $this->load->view("about-us", $data);
            $this->load->view("footer", $data);
        }
        public function Belanja(){
            $data['title'] = 'Jamu Tradisional Berkualitas Tinggi dari Djaman (Jamu Manunggal)';
            $data['meta_description'] = 'Selamat datang di halaman belanja Produk Jamu dari Djaman, tempat Anda dapat menemukan berbagai macam jamu tradisional berkualitas tinggi. Temukan manfaat kesehatan alami dengan produk herbal tradisional terbaik dari Djaman. Melestarikan warisan jamu Indonesia dengan inovasi modern.';
            $data['meta_url'] = base_url(). 'index.php/Home/Belanja';
            
            $data['active_menu'] = 'belanja';

            $data['data_produk']= $this->ProdukModel->getProduk();
            $data['kategori_produk']= $this->ProdukModel->getKategoriProdukArray();
            $data['data_kontak']= $this->KontakModel->getKontak();
            foreach ($data['data_produk'] as &$produk) {
                $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
            }

            // Periksa apakah produk terdapat dalam tabel produk_terlaris
            $data['is_diskon'] = $this->ProdukModel->getProdukTerlarisRow1();
            if($data['is_diskon']){            
                $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
                $data['produk_terlaris']->harga_asli = 'Rp. ' . number_format($data['produk_terlaris']->harga_asli, 0, ',', '.');
                $data['produk_terlaris']->harga_diskon = 'Rp. ' . number_format($data['produk_terlaris']->harga_diskon, 0, ',', '.');
            }
            $this->load->view("header", $data);
            $this->load->view("shop", $data);
            $this->load->view("footer", $data);

        }
        public function KontakKami(){
            $data['title'] = 'Kontak Kami - Djaman';
            $data['meta_description'] = 'Hubungi kami di Djaman untuk kebutuhan dan pertanyaan Anda. Temukan kami di [Alamat Toko], [Jam Operasional Toko], [Nomer Telepon], [Alamat Email], dan [Tempat Peta Lokasi Google Maps]. Kirimkan masukan atau pertanyaan melalui formulir kami. Kami siap membantu Anda.';
            $data['meta_url'] = base_url(). 'index.php/Home/KontakKami';

            $data['active_menu'] = 'kontak_kami';

            $data['data_kontak']= $this->KontakModel->getKontak();
            $data['data_jam_operasional'] = $this->KontakModel->getJamOperasional();
            $site_key = '6LcuADUoAAAAAAGZpb1eTWPx0GEi4NBt40e-UZqS'; // Ganti dengan Site Key Anda dari reCAPTCHAA
            $data['site_key'] = $site_key;
            $this->load->view("header", $data);
            $this->load->view("contact", $data);
            $this->load->view("footer", $data);

        }

        public function simpanAsknsugest(){
            // Mendapatkan data input dari form
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            $response = $this->input->post('g-recaptcha-response');

            if ($response){
                // Validasi input tidak boleh kosong
                if (empty($nama) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
                    $this->session->set_flashdata('error', 'Harap Lengkapi Semua Formulir');
                    redirect('Home/KontakKami');
                }
        
                $data = array(
                    'nama' => $nama,
                    'email' => $email,
                    'phone' => $phone,
                    'subject' => $subject,
                    'message' => $message
                );
        
                $this->AsknsugestModel->insertAsknsugest($data);
                $this->session->set_flashdata('success', 'Pertanyaan / Saran Terkirim');
                redirect('Home/KontakKami');
            }
            $this->session->set_flashdata('error', 'Harap Mengisi Captcha Untuk Mengirim Pertanyaan / Saran');
            redirect('Home/KontakKami');
        
        }
        public function kirimEmail(){
            // Mendapatkan data input dari form
            $email = $this->input->post('email');
            $data = array(
                'email' => $email,
            );
            $this->AsknsugestModel->insertEmail($data);
            $this->session->set_flashdata('success', 'Pertanyaan / Saran Terkirim');
            redirect('Home');       
        }

        public function tampilKonfirmasiUnsubEmail($email){
            $data['data_email'] = $this->AsknsugestModel->getEmailSubsbyEmail($email);

            $this->load->view("admin/form-konfirmasi-unsub", $data);
        }
        
        
        public function unsubscribeEmail(){
            // Mendapatkan data input dari form
            $email = $this->input->post('email');
            $konfirmasi = strtolower($this->input->post('konfirmasi'));
        
            // Daftar nilai yang valid untuk konfirmasi
            $validKonfirmasi = ['berhenti', 'Berhenti', 'Berhenti'];
        
            // Memeriksa apakah konfirmasi adalah salah satu dari nilai yang valid
            if (in_array($konfirmasi, $validKonfirmasi)) {
                // Proses berhenti berlangganan email di sini
                $this->AsknsugestModel->hapusEmail($email);
        
                $this->session->set_flashdata('success', 'Berhasil Berhenti Berlangganan Email');
            } else {
                $this->session->set_flashdata('error', 'Konfirmasi tidak valid');
            }
        
            redirect('Home/tampilKonfirmasiUnsubEmail/'.$email);       
        }
        


        public function search(){
            $data['active_menu'] = 'cariProduk';
            $keyword = $this->input->get('keyword'); // Mendapatkan nilai keyword dari form pencarian
            
            $data['title'] = 'Mencari Produk Jamu/ Kategori: '. $keyword;
            $data['meta_description'] = 'Temukan keajaiban Jamu Herbal kami! Cari produk Jamu berkualitas tinggi untuk kesehatan alami tubuh Anda. Dapatkan manfaat warisan tradisional dari generasi ke generasi. Temukan solusi alami dengan Jamu herbal kami.';
            $data['meta_url'] = base_url(). 'index.php/Home/search?keyword='.$keyword;
            $data['canonical_url_search'] = base_url(). 'index.php/Home/search?keyword='.urlencode($keyword);
        
            // Panggil model knnSearch dan lakukan pencarian produk berdasarkan keyword
            $this->load->model('ProdukModel');
            $data['data_produk'] = $this->ProdukModel->knnSearch($keyword);
            // Ubah format Harga Kueri Data Produk
            foreach ($data['data_produk'] as &$produk) {
                $produk['harga'] = 'Rp. ' . number_format($produk['harga'], 0, ',', '.');
            }
            // Periksa apakah produk terdapat dalam tabel produk_terlaris
            $data['is_diskon'] = $this->ProdukModel->getProdukTerlarisRow1();
            if($data['is_diskon']){            
                $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
                $data['produk_terlaris']->harga_asli = 'Rp. ' . number_format($data['produk_terlaris']->harga_asli, 0, ',', '.');
                $data['produk_terlaris']->harga_diskon = 'Rp. ' . number_format($data['produk_terlaris']->harga_diskon, 0, ',', '.');
                
            }
            // Load Data Kontak
            $data['data_kontak']= $this->KontakModel->getKontak();
            // Load view belanja dengan data produk hasil pencarian
            $this->load->view("header", $data);
            $this->load->view('shop-search', $data);
            $this->load->view("footer", $data);
        }
        

        public function not_found(){
            $data['active_menu'] = '404NotFound';
            $data['title'] = 'Halaman Tidak Ditemukan - Djaman';
            $data['meta_description'] = 'Temukan manfaat luar biasa dari jamu segar, organik, dan berstandar laboratorium di Djaman. Jaga kesehatan tubuh dengan cara autentik dan tradisional. elamat berbelanja dan menjaga kesehatan dengan Djaman!';
            $data['meta_url'] = base_url();

            $data['data_kontak']= $this->KontakModel->getKontak();
            $this->load->view("header", $data);
            $this->load->view('404');
            $this->load->view("footer", $data);
        }

    }
?>