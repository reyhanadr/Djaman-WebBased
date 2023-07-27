<?php
    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->model('UserModel');
            $this->load->model('ProdukModel');
            $this->load->library('session');
        }
        public function index(){
            
            if($this->session->userdata('logged_in')){
                $this->load->view("admin/dashboard");
            }else{
                $this->load->view("admin/login");
            }
        }

        public function dashboard(){
            $this->load->view("admin/dashboard");
        }

        public function login(){
            //input dari form
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $result = $this->UserModel->login($username, $password);
            if($result->num_rows() > 0){
                $session_data = array(
                    "username" => $this->input->post("username"),
                    "password" => $this->input->post("password"),
                    "logged_in" => true
                );
                $this->session->set_userdata($session_data);
                $this->load->view('admin/dashboard');
            }else{
                $this->session->set_flashdata("error","Username atau Password Salah");
                $this->load->view('admin/login');
            }
    
        }

        public function logout()
        {
            $this->session->unset_userdata('username');
            redirect('admin/login'); // Ganti 'admin/login' dengan halaman login Anda
        }

    }
?>