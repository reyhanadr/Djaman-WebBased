<?php
    class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('UserModel');
            $this->load->model('ProdukModel');
            $this->load->model('AsknsugestModel');
            $this->load->model('OrganisasiModel');
            $this->load->model('KontakModel');
            $this->load->library('session');
            $this->load->library('table');
        }
        public function index(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }
            $data['active_menu'] = 'dashboard';
            $data['data_produk']= $this->ProdukModel->getProduk();
            $data['totalData'] = $this->ProdukModel->getTotalDataProduk();
            $data['totalAsknSugest'] = $this->AsknsugestModel->getTotalDataAsknSugest();
            $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
            foreach ($data['data_produk'] as &$produk) {
                $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
            }
            $this->load->view("admin/dashboard", $data);
            $this->load->view("admin/sidebar", $data);


        }

        public function dashboard(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }
            $data['active_menu'] = 'dashboard';
            $this->load->view("admin/dashboard");
            $this->load->view("admin/sidebar", $data);
        }
        public function tampilFormTambahProduk(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }
            $data['active_menu'] = 'data_produk';
            $this->load->view("admin/input-produk");
            $this->load->view("admin/sidebar", $data);
        }
        
        
        public function loginPage(){
            $site_key = '6Lcn-k4nAAAAAMAzpS5yXU7GEAb3kVjfs6345Wcx'; // Ganti dengan Site Key Anda dari reCAPTCHA
            $data['site_key'] = $site_key;
            $this->load->view("admin/login", $data);
        }

        public function login(){
            // Ambil data Respons Captcha
            $response = $this->input->post('g-recaptcha-response');
            // Validasi reCaptcha Google v2
            if ($response) {
                // reCAPTCHA valid, lanjutkan dengan proses login
                $this->load->model('UserModel');
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
                $result = $this->UserModel->login($username, $password);
                if ($result->num_rows() > 0) {
                    $admin  = $result->row();
                    $session_data = array(
                        "username" => $this->input->post("username"),
                        "password" => $this->input->post("password"),
                        "logged_in" => true
                    );
                    $this->session->set_userdata($session_data);
                    $this->session->set_userdata('foto', $admin->foto);
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata("error", "Username atau Password Salah");
                    redirect('Admin/loginPage');
                } 
            } else{
                // reCAPTCHA tidak valid, tindakan sesuai kebijakan Anda (misalnya, kembali ke halaman login dengan pesan kesalahan)
                $this->session->set_flashdata("error", "Captcha tidak Valid");
                redirect('Admin/loginPage'); 
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            $this->session->set_flashdata('success', 'Anda telah berhasil logout.');
            redirect('Admin');
        }

        public function search(){
            $keyword = $this->input->get('keyword'); // Mendapatkan keyword pencarian dari input GET
            // Lakukan pencarian data berdasarkan keyword
            $data['data_organisasi'] = $this->OrganisasiModel->searchOrganisasi($keyword);
            $data['data_produk'] = $this->ProdukModel->searchProduk($keyword);
            $data['data_kontak'] = $this->KontakModel->searchKontak($keyword);
            $data['asknsugest'] = $this->AsknsugestModel->searchAsknSugest($keyword);
            
            
            if (!empty($data['data_produk'])) {
                // Jika ditemukan data organisasi, arahkan ke view data-produk
                $data['active_menu'] = 'data_produk';
                $this->load->view("admin/data-produk", $data);
                $this->load->view("admin/sidebar", $data);

            }else if(!empty($data['data_organisasi'])){
                // Jika tidak ditemukan data organisasi, arahkan ke view data-organisasi
                $data['active_menu'] = 'data_organisasi';
                $this->load->view("admin/data-organisasi", $data);
                $this->load->view("admin/sidebar", $data);

            }else if(!empty($data['data_kontak'])){
                // Jika tidak ditemukan data organisasi, arahkan ke view data-organisasi
                $data['active_menu'] = 'data_kontak';
                $this->load->view("admin/data-kontak", $data);
                $this->load->view("admin/sidebar", $data);

            }else if(!empty($data['asknsugest'])){
                // Jika tidak ditemukan data organisasi, arahkan ke view data-organisasi
                $data['active_menu'] = 'asknsugest';
                $this->load->view("admin/asknsugest", $data);
                $this->load->view("admin/sidebar", $data);
            }
        }
    }
    
?>