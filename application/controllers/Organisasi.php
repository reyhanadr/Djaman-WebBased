<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('OrganisasiModel');
        $this->load->library('session');
        $this->load->library('table');
        if (!$this->session->userdata('logged_in')) {
            redirect('Admin/loginPage');
        }
        
    }
    public function tampilDataOrganisasi(){
        $data['active_menu'] = 'data_organisasi';
        $data['data_organisasi']= $this->OrganisasiModel->getOrganisasi();
        $this->load->view("admin/data-organisasi", $data);
        $this->load->view("admin/sidebar", $data);

    }

    public function editOrganisasi($id_anggota){
        $data['active_menu'] = 'data_organisasi';
        $data['data_organisasi']= $this->OrganisasiModel->getOrganisasiById($id_anggota);
        $this->load->view("admin/edit-anggota", $data);
        $this->load->view("admin/sidebar", $data);

    }

    public function update($id_anggota){

        $id_anggota = $this->input->post('id_anggota');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $email = $this->input->post('email');

        // Memeriksa apakah ada file foto yang diupload
        if ($_FILES['foto']['name']) {
            $config['upload_path'] = 'assets/img/anggota';// Lokasi penyimpanan foto
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // Batasan ukuran file (dalam KB)
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto')) {
                $uploaded_data = $this->upload->data();
                $foto = $uploaded_data['file_name'];
    
                // Mengupdate data produk beserta foto
                $data = array(
                    'id_anggota' => $id_anggota,
                    'nama' => $nama,
                    'jabatan' => $jabatan,
                    'email' => $email,
                    'foto' => $foto
                );
                $this->OrganisasiModel->updateOrganisasi($id_anggota, $data);
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('Organisasi/editOrganisasi/'.$id_anggota);
            }
        } else {
            // Jika tidak ada foto yang diupload, hanya mengupdate data produk tanpa foto
            $data = array(
                'id_anggota' => $id_anggota,
                'nama' => $nama,
                'jabatan' => $jabatan,
                'email' => $email
            );
            $this->OrganisasiModel->updateOrganisasi($id_anggota, $data);
        }
    
        redirect('Organisasi/tampilDataOrganisasi');
    }

    public function hapus($id_anggota)
    {
        $this->OrganisasiModel->hapusAnggota($id_anggota);

        redirect('Organisasi/tampilDataOrganisasi');
    }

}
