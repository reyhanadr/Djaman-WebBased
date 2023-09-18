<?php
    class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('UserModel');
            $this->load->model('ProfileModel');
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
            $this->load->view("admin/header", $data);
            $this->load->view("admin/dashboard", $data);
            $this->load->view("admin/sidebar", $data);


        }

        // Terkait Pengelolaan Admin
        public function tampilDataAdmin(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'data_admin';
            $data['data_admin']= $this->UserModel->getAdmin();
            $this->load->view("admin/header", $data);
            $this->load->view("admin/data-admin", $data);
            $this->load->view("admin/modal/modal-blokir", $data);
            $this->load->view("admin/sidebar", $data);
        }

        public function detailAdmin($id_admin){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'data_admin';
            $data['detail_admin']= $this->UserModel->getAdminById($id_admin);

            $this->load->view("admin/header", $data);
            $this->load->view("admin/detail-admin", $data);
            $this->load->view("admin/modal/modal-blokir", $data);
            $this->load->view("admin/sidebar", $data);
        }

        public function tampilEditAdmin($id_admin){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'data_admin';
            $data['data_admin']= $this->UserModel->getAdminById($id_admin);
            $data['data_roles']= $this->UserModel->getRoles();


            $this->load->view("admin/header", $data);
            $this->load->view("admin/edit-admin", $data);
            $this->load->view("admin/sidebar", $data);
        }

        public function updateDataAdmin($id_admin) {
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $id_admin = $this->input->post('id_admin');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $role_id = $this->input->post('role_id');
        
            // Memeriksa apakah ada file foto yang diupload
            if ($_FILES['foto']['name']) {
                $config['upload_path'] = 'assets/img/admin'; // Lokasi penyimpanan foto
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048; // Batasan ukuran file (dalam KB)
        
                $this->load->library('upload', $config);
        
                if ($this->upload->do_upload('foto')) {
                    $uploaded_data = $this->upload->data();
                    $foto = $uploaded_data['file_name'];
        
                    // Mengupdate data produk beserta foto
                    $data = array(
                        'id_admin' => $id_admin,
                        'nama' => $nama,
                        'email' => $email,
                        'username' => $username,
                        'foto' => $foto,
                        'role_id' => $role_id
                    );
        
                    // Memeriksa apakah password diisi atau tidak
                    if (!empty($password)) {
                        $data['password'] = md5($password);
                    }
        
                    $this->UserModel->updateAdmin($id_admin, $data);
                    $this->session->set_flashdata('success', 'Data Admin berhasil diperbarui');
        
                    // Mengambil data admin terbaru dari database
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('Admin/tampilEditAdmin/' . $id_admin);
                    $this->session->set_flashdata('failed', 'Data Admin gagal diperbarui');
                }
            } else {
                // Jika tidak ada foto yang diupload, hanya mengupdate data produk tanpa foto
                $data = array(
                    'id_admin' => $id_admin,
                    'nama' => $nama,
                    'email' => $email,
                    'username' => $username,
                    'role_id' => $role_id
                );
        
                // Memeriksa apakah password diisi atau tidak
                if (!empty($password)) {
                    $data['password'] = md5($password);
                }
        
                $this->UserModel->updateAdmin($id_admin, $data);
                $this->session->set_flashdata('success', 'Data Admin berhasil diperbarui');
        
            }
        
            // Mengatur kembali session data admin
            if ($this->session->userdata('id_admin') == $id_admin){
                $this->session->set_userdata($data);
            }
            redirect('Admin/tampilDataAdmin');
        }

        private function incrementAdminId($lastAdminID){
            // Ambil angka dari ID Admin terakhir
            $lastNumber = (int) substr($lastAdminID, 3);
    
            // Increment angka
            $nextNumber = $lastNumber + 1;
    
            // Jika angka melebihi 999, kembalikan nilai awal "ADM"
            if ($nextNumber > 999) {
                return 'ADM000';
            }
    
            // Format angka menjadi tiga digit dengan padding nol di depan
            $nextProductID = 'ADM' . sprintf('%03d', $nextNumber);
    
            return $nextProductID;
        }

        public function inputDataAdmin(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            // Mendapatkan ID Admin terakhir dari database
            $lastAdminID = $this->UserModel->getLastIdAdmin();
            $newAdminId = $this->incrementAdminId($lastAdminID);
        
            // Kirim nilai $newAdminId ke view menggunakan array data
            $data['newAdminId'] = $newAdminId;
            $data['active_menu'] = 'data_admin';
    
            // mengambil data roles
            $data['data_roles']= $this->UserModel->getRolesAdmin();
        
            // Load view form dan kirim data ke view
            $this->load->view("admin/header", $data);
            $this->load->view('admin/input-admin', $data);
            $this->load->view("admin/sidebar", $data);
        }

        public function simpanAdmin(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            // Mendapatkan data input dari form
            $id_admin = $this->input->post('id_admin');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $role_id = $this->input->post('role_id');
            // $foto = $this->input->post('foto');

            // Upload foto ke folder
            $config['upload_path'] = 'assets/img/admin';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = $nama;
     
            $this->load->library('upload', $config);
             // Menampilkan pesan error dikarenakan tidak terdapat foto
            if (!$this->upload->do_upload('foto')) {
            //  $error = $this->upload->display_errors();
             $this->session->set_flashdata('error', "Masukan Foto Admin untuk Menambah ADmin");
             redirect('Admin/inputDataAdmin');
             }else {     
                 $data = array(
                     'id_admin' => $id_admin,
                     'nama' => $nama,
                     'email' => $email,
                     'username' => $username,
                     'password' => md5($password),
                     'role_id' => $role_id,
                     'foto' => $this->upload->data('file_name'),
                 );
     
                 $this->UserModel->simpanDataAdmin($data);
                 $this->session->set_flashdata('success', 'Data Admin berhasil disimpan.');
                 redirect('Admin/tampilDataAdmin');
             }
        }
        
        public function searchAdmin(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'data_admin';
            $keyword = $this->input->get('keyword'); // Mendapatkan keyword pencarian dari input GET
            $data['data_admin'] = $this->UserModel->searchAdmin($keyword);

            // Tampilkan tampilan (view) dengan hasil pencarian
            $this->load->view("admin/header", $data);
            $this->load->view("admin/data-admin", $data);
            $this->load->view("admin/sidebar", $data);

        }

        // Terkait Jam Operasional
        public function tampilJamOperasional(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'jam_operasional';
            $data['data_jam_operasional'] = $this->KontakModel->getJamOperasional();
            // Tampilkan tampilan (view) dengan hasil pencarian
            $this->load->view("admin/header", $data);
            $this->load->view("admin/data-jamoperasional", $data);
            $this->load->view("admin/sidebar", $data);
        }
        public function tampilEditJamOperasional($id_jamoperasional){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'jam_operasional';
            $data['data_jam_operasional'] = $this->KontakModel->getJamOperasional();
            // Tampilkan tampilan (view) dengan hasil pencarian
            $this->load->view("admin/header", $data);
            $this->load->view("admin/data-jamoperasional", $data);
            $this->load->view("admin/sidebar", $data);
        }
        public function editJamOperasional($id_jamoperasional){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'jam_operasional';
            $data['data_jam_operasional'] = $this->KontakModel->getJamOperasionalById($id_jamoperasional);
            // Tampilkan tampilan (view) dengan hasil pencarian
            $this->load->view("admin/header", $data);
            $this->load->view("admin/edit-jamoperasional", $data);
            $this->load->view("admin/sidebar", $data);
        }
        public function updateJamOperasional($id_jamoperasional){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }

            $jam_buka = $this->input->post('jam_buka');
            $jam_tutup = $this->input->post('jam_tutup');
            $data = array(
                'jam_buka' => $jam_buka,
                'jam_tutup' => $jam_tutup,
                'isBuka' => "Buka",
               );
            $this->KontakModel->editJamOperasional($id_jamoperasional, $data);
            $this->session->set_flashdata("success", "Data Jam Operasional Berhasil Diperbarui");
            redirect('Admin/tampilJamOperasional'); 
        }
        public function tutupJamOperasional($id_jamoperasional){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }

            $data = array(
                'jam_buka' => NULL,
                'jam_tutup' => NULL,
                'isBuka' => "Tutup",

               );
            $this->KontakModel->editJamOperasional($id_jamoperasional, $data);
            $this->session->set_flashdata("success", "Data Link Berhasil Diperbarui");
            redirect('Admin/tampilJamOperasional'); 
        }

        // Terkait Aktivitas Blokir / Aktif
        public function blokirAdmin($id_admin) {
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            if ($this->UserModel->blokirAdmin($id_admin)) {
                $this->session->set_flashdata('success', 'Admin berhasil diblokir.');
            } else {
                $this->session->set_flashdata('error', 'Gagal memblokir admin.');
            }
            redirect('Admin/tampilDataAdmin'); // Ganti dengan halaman yang sesuai
        }

        public function aktifkanAdmin($id_admin) {
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            if ($this->UserModel->aktifkanAdmin($id_admin)) {
                $this->session->set_flashdata('success', 'Admin berhasil diaktifkan kembali.');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengaktifkan admin.');
            }
            redirect('Admin/tampilDataAdmin'); // Ganti dengan halaman yang sesuai
        }


        // Terkait Aktivitas Login
        public function dashboard(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }
            $data['active_menu'] = 'dashboard';
            $this->load->view("admin/header", $data);
            $this->load->view("admin/dashboard");
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
                    $admin = $result->row();
                    if ($admin->status_aktif === 'Blokir') {
                        $this->session->set_flashdata("error", "Akun Anda terblokir.");
                        redirect('Admin/loginPage');
                    } else {
                        $session_data = array(
                            "id" => $admin->id,
                            "id_admin" => $admin->id_admin,
                            "username" => $admin->username,
                            "password" => $admin->password,
                            'role_id' => $admin->role_id,
                            "logged_in" => true
                        );
                        $this->session->set_userdata($session_data);
                        $this->session->set_userdata('foto', $admin->foto);
                        redirect('Admin');
                    }
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

        // Terkait Manajemen Link Embed
        public function tampilLinkEmbed(){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $data['active_menu'] = 'data_linkEmbed';
            $data['detail_link']= $this->UserModel->getLinkEmbed();
            $this->load->view("admin/header", $data);
            $this->load->view("admin/detail-linkembed", $data);
            $this->load->view("admin/sidebar", $data);
        }

        public function editLink($id_link){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $link = $this->input->post('link');
            $data = array(
                     'link' => $link,
                    );
            $this->UserModel->updateLink($id_link, $data);
            $this->session->set_flashdata("success", "Data Link Berhasil Diperbarui");

            redirect('Admin/tampilLinkEmbed'); 
        }

        public function resetLink($id_link){
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }else if ($this->session->userdata('role_id') == 2){
                redirect('Admin/errorPage');
            }
            $default_link = $this->UserModel->getLinkEmbedDefault();
            $data = array(
                     'link' => $default_link->link_default,
                    );
            $this->UserModel->updateLink($id_link, $data);
            $this->session->set_flashdata("success", "Data Link Berhasil Diperbarui");

            redirect('Admin/tampilLinkEmbed'); 
        }

        public function search(){
            $keyword = $this->input->get('keyword'); // Mendapatkan keyword pencarian dari input GET
            // Lakukan pencarian data berdasarkan keyword
            $data['data_organisasi'] = $this->OrganisasiModel->searchOrganisasi($keyword);
            $data['data_produk'] = $this->ProdukModel->searchProduk($keyword);
            $data['data_kontak'] = $this->KontakModel->searchKontak($keyword);
            $data['asknsugest'] = $this->AsknsugestModel->searchAsknSugest($keyword);
            $data['data_admin'] = $this->UserModel->searchAdmin($keyword);

            
            
            if (!empty($data['data_produk'])) {
                // Jika ditemukan data organisasi, arahkan ke view data-produk
                $data['active_menu'] = 'data_produk';
                $this->load->view("admin/header", $data);
                $this->load->view("admin/data-produk", $data);
                $this->load->view("admin/sidebar", $data);

            }else if(!empty($data['data_organisasi'])){
                // Jika tidak ditemukan data organisasi, arahkan ke view data-organisasi
                $data['active_menu'] = 'data_organisasi';
                $this->load->view("admin/header", $data);
                $this->load->view("admin/data-organisasi", $data);
                $this->load->view("admin/sidebar", $data);

            }else if(!empty($data['data_kontak'])){
                // Jika tidak ditemukan data organisasi, arahkan ke view data-organisasi
                $data['active_menu'] = 'data_kontak';
                $this->load->view("admin/header", $data);
                $this->load->view("admin/data-kontak", $data);
                $this->load->view("admin/sidebar", $data);

            }else if(!empty($data['asknsugest'])){
                // Jika tidak ditemukan data organisasi, arahkan ke view data-organisasi
                $data['active_menu'] = 'asknsugest';
                $this->load->view("admin/header", $data);
                $this->load->view("admin/asknsugest", $data);
                $this->load->view("admin/sidebar", $data);
            }else if(!empty($data['data_admin']) && $this->session->userdata('role_id') == 1) {
                // Kode yang akan dijalankan jika kondisi terpenuhi
                $data['active_menu'] = 'asknsugest';
                $this->load->view("admin/header", $data);
                $this->load->view("admin/data-admin", $data);
                $this->load->view("admin/sidebar", $data);
            } else {
                redirect('Admin/ErrorPage');
            }
        }

        // Halaman Peralihan
        public function errorPage(){
            $this->load->view("admin/error");
        }
        public function MaintainancePage(){
            $this->load->view("admin/maintainance");
            
        }
    }
    
?>