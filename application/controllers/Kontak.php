<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('KontakModel');
        $this->load->library('session');
        $this->load->library('table');

        if (!$this->session->userdata('logged_in')) {
            redirect('Admin/loginPage');
        }
    }
    
    public function tampilKontak(){
        $data['active_menu'] = 'data_kontak';
        $data['data_kontak']= $this->KontakModel->getKontak();
        $this->load->view("admin/header", $data);
        $this->load->view("admin/data-kontak", $data);
        $this->load->view("admin/sidebar", $data);

    }

    public function detailKontak($id_kontak){
        $data['active_menu'] = 'data_kontak';
        $data['data_kontak'] = $this->KontakModel->getKontakById($id_kontak);

        $this->load->view("admin/header", $data);
        $this->load->view("admin/detail-kontak", $data);
        $this->load->view("admin/sidebar", $data);
    }

    public function editKontak($id_kontak){
        $data['active_menu'] = 'data_kontak';
        $data['data_kontak']= $this->KontakModel->getKontakById($id_kontak);
        $this->load->view("admin/header", $data);
        $this->load->view("admin/edit-kontak", $data);
        $this->load->view("admin/sidebar", $data);
    }

    public function update($id_kontak){
        $id_kontak = $this->input->post('id_kontak');
        $alamat = $this->input->post('alamat');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $maps = $this->input->post('maps');

        // Mengupdate data kontak
        $data = array(
            'id_kontak' => $id_kontak,
            'alamat' => $alamat,
            'phone' => $phone,
            'email' => $email,
            'maps' => $maps
        );
        $this->KontakModel->updateKontak($id_kontak, $data);
        redirect('Kontak/tampilKontak');
    }
}