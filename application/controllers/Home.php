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

        public function getSingleProduk($id_produk){
            $data['active_menu'] = 'belanja';

            $data['single_product']= $this->ProdukModel->getProdukById($id_produk);
            $data['data_kontak']= $this->KontakModel->getKontak();
            // $data['single_product']->harga = 'Rp. ' . number_format($data['single_product']->harga, 0, ',', '.');

            $this->load->view("header", $data);
            $this->load->view("index_2", $data);
            $this->load->view("footer", $data);

        }

        public function SingleProduk($id_produk){
            $data['active_menu'] = 'belanja';

            $data['data_produk'] = $this->ProdukModel->getProduk();
            $data['data_kontak']= $this->KontakModel->getKontak();
            $data['data_produk_random'] = $this->ProdukModel->getRandomProduk(3); // Contoh: Menampilkan 3 produk secara acak
            foreach ($data['data_produk_random'] as &$produk) {
                $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
            }
        
            $data['single_product'] = $this->ProdukModel->getProdukById($id_produk);
            $data['single_product']->harga = 'Rp. ' . number_format($data['single_product']->harga, 0, ',', '.');
        
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
            $data['active_menu'] = 'kontak_kami';

            $data['data_kontak']= $this->KontakModel->getKontak();
            $data['data_jam_operasional'] = $this->KontakModel->getJamOperasional();
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

            // Validasi input tidak boleh kosong
            if (empty($nama) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
                $this->session->set_flashdata('error', 'Harap Lengkapi Semua Formlulir');
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
            $this->session->set_flashdata('success', 'Pertanyaan / Saran Di kirim');
            redirect('Home/KontakKami');
        }

        public function search(){
            $data['active_menu'] = 'home';

            $keyword = $this->input->get('keyword'); // Mendapatkan nilai keyword dari form pencarian
            // Panggil model dan lakukan pencarian produk berdasarkan keyword
            $this->load->model('ProdukModel');
            $data['data_produk'] = $this->ProdukModel->searchProduk($keyword);
            // Ubah format Harga Kueri Data Produk
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
            // Load Data Kontak
            $data['data_kontak']= $this->KontakModel->getKontak();
            // Load view belanja dengan data produk hasil pencarian
            $this->load->view("header", $data);
            $this->load->view('shop-search', $data);
            $this->load->view("footer", $data);
        }

        public function not_found(){
            $data['data_kontak']= $this->KontakModel->getKontak();
            $this->load->view("header", $data);
            $this->load->view('404');
            $this->load->view("footer", $data);
        }

    }
?>