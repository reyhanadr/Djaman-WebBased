<?php
    class Profile extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('ProfileModel');
            $this->load->library('session');
            if (!$this->session->userdata('logged_in')) {
                redirect('Admin/loginPage');
            }
        }

        
        public function tampilEditProfile($id_profile){
            $data['active_menu'] = 'dashboard';
            $data['admin']= $this->ProfileModel->getProfileById($id_profile);
            
            $this->load->view("admin/header", $data);
            $this->load->view("admin/edit-profile", $data);
            $this->load->view("admin/sidebar", $data);
        }

        
        public function update($id_profile) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        
            // Memeriksa apakah ada file foto yang diupload
            if ($_FILES['foto']['name']) {
                $config['upload_path'] = 'assets/img/admin'; // Lokasi penyimpanan foto
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048; // Batasan ukuran file (dalam KB)
        
                $this->load->library('upload', $config);
        
                if ($this->upload->do_upload('foto')) {
                    $uploaded_data = $this->upload->data();
                    $foto = $uploaded_data['file_name'];
        
                    // Mengupdate Profile beserta foto
                    $data = array(
                        'nama' => $nama,
                        'email' => $email,
                        'username' => $username,
                        'foto' => $foto
                    );
        
                    // Memeriksa apakah password diisi atau tidak
                    if (!empty($password)) {
                        $data['password'] = md5($password);
                    }
        
                    $this->ProfileModel->updateProfile($id_profile, $data);
                    $this->session->set_flashdata('success', 'Profile berhasil diperbarui');
                    $this->session->set_userdata($data);
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('Profile/tampilEditProfile/' . $id_profile);
                    $this->session->set_flashdata('failed', 'Profile gagal diperbarui');
                }
            } else {
                // Jika tidak ada foto yang diupload, hanya mengupdate data produk tanpa foto
                $data = array(
                    'nama' => $nama,
                    'email' => $email,
                    'username' => $username
                );
        
                // Memeriksa apakah password diisi atau tidak
                if (!empty($password)) {
                    $data['password'] = md5($password);
                }
        
                $this->ProfileModel->updateProfile($id_profile, $data);
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', 'Profile berhasil diperbarui');
            }
        
            redirect('Profile/tampilEditProfile/' . $id_profile);
        }
        

}
?>