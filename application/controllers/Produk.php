<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('UserModel');
        $this->load->model('ProdukModel');
        $this->load->library('session');
        $this->load->library('table');
        if (!$this->session->userdata('logged_in')) {
            redirect('Admin/loginPage');
        }

    }
    public function tampilDataProduk(){
        $data['active_menu'] = 'data_produk';
        $data['data_produk'] = $this->ProdukModel->getProduk();
        foreach ($data['data_produk'] as &$produk) {
            $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
        }
        $this->load->view("admin/data-produk", $data);
        $this->load->view("admin/sidebar", $data);
    }
    

    public function tampilDataProdukTerlaris(){
        $data['produk_terlaris']= $this->ProdukModel->getProdukTerlaris();
        $this->load->view("admin/dashboard", $data);

    }

    public function inputProduk()
    {
        // Mendapatkan ID produk terakhir dari database
        $lastProductID = $this->ProdukModel->getLastProductID();
        $newProductID = $this->incrementProductID($lastProductID);
    
        // Kirim nilai $newProductID ke view menggunakan array data
        $data['newProductID'] = $newProductID;
        $data['active_menu'] = 'data_produk';
    
        // Load view form dan kirim data ke view
        $this->load->view('admin/input-produk', $data);
        $this->load->view("admin/sidebar", $data);
    }

    private function incrementProductID($lastProductID)
    {
        // Ambil angka dari ID produk terakhir
        $lastNumber = (int) substr($lastProductID, 2);

        // Increment angka
        $nextNumber = $lastNumber + 1;

        // Jika angka melebihi 999, kembalikan nilai awal "JM000"
        if ($nextNumber > 999) {
            return 'JM000';
        }

        // Format angka menjadi tiga digit dengan padding nol di depan
        $nextProductID = 'JM' . sprintf('%03d', $nextNumber);

        return $nextProductID;
    }

    public function simpanProduk(){
       // Mendapatkan data input dari form
       $idProduk = $this->input->post('id_produk');
       $namaJamu = $this->input->post('nama_jamu');
       $satuan = $this->input->post('satuan');
       $harga = $this->input->post('harga');
       $deskripsi = $this->input->post('deskripsi');
       $manfaat1 = $this->input->post('manfaat1');
       $manfaat2 = $this->input->post('manfaat2');
       $manfaat3 = $this->input->post('manfaat3');
       $kategori = $this->input->post('kategori');
       // Upload foto ke folder
       $config['upload_path'] = 'assets/img/produk';
       $config['allowed_types'] = 'jpg|jpeg|png';
       $config['max_size'] = 2048;
       $config['file_name'] = $idProduk;

       $this->load->library('upload', $config);
        // Menampilkan pesan error dikarenakan tidak terdapat foto
       if (!$this->upload->do_upload('foto')) {
        $error = $this->upload->display_errors();
        $this->session->set_flashdata('error', "Masukan Gambar Produk untuk Menambah Produk");
        redirect('Produk/inputProduk');
        }else {
            $pesan = 
            "Nama Lengkap: \n"
            . "Nomor Telepon: \n"
            . "Kecamatan: \n"
            . "Kota: \n"
            . "Provinsi: \n"
            . "Alamat Lengkap: \n"
            . "Kode Pos: \n"
            . "Nama Produk: $namaJamu\n"
            . "Jumlah Pesanan:... $satuan   \n"
            . "Metode Pembayaran(Cash on Delivery, BCA, GoPay, Dana):  ";

            $whatsapp_link = "https://wa.me/628123456789?text=" . urlencode($pesan);

            $data = array(
                'id_produk' => $idProduk,
                'nama_jamu' => $namaJamu,
                'satuan' => $satuan,
                'harga' => $harga,
                'deskripsi' => $deskripsi,
                'manfaat1' => $manfaat1,
                'manfaat2' => $manfaat2,
                'manfaat3' => $manfaat3,
                'kategori' => $kategori,
                'foto' => $this->upload->data('file_name'),
                'link_wa' => $whatsapp_link
            );

            $this->ProdukModel->simpanProduk($data);
            $this->session->set_flashdata('success', 'Produk berhasil disimpan.');
            redirect('Produk/tampilDataProduk');
        }
    }

    public function editProduk($id_produk){
        $data['active_menu'] = 'data_produk';
        $data['data_produk']= $this->ProdukModel->getProdukById($id_produk);
        $data['data_produk']->harga = number_format($data['data_produk']->harga, 0, ',', '.');
        $this->load->view("admin/edit-produk", $data);
        $this->load->view("admin/sidebar", $data);
    }

    public function update($id_produk){
        $id_produk = $this->input->post('id_produk');
        $nama_jamu = $this->input->post('nama_jamu');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $manfaat1 = $this->input->post('manfaat1');
        $manfaat2 = $this->input->post('manfaat2');
        $manfaat3 = $this->input->post('manfaat3');
        $kategori = $this->input->post('kategori');

        $pesan = 
            "Nama Lengkap: \n"
            . "Nomor Telepon: \n"
            . "Kecamatan: \n"
            . "Kota: \n"
            . "Provinsi: \n"
            . "Alamat Lengkap: \n"
            . "Kode Pos: \n"
            . "Nama Produk: $nama_jamu \n"
            . "Jumlah Pesanan:... $satuan   \n"
            . "Metode Pembayaran(Cash on Delivery, BCA, GoPay, Dana):  ";
        
        $whatsapp_link = "https://wa.me/628123456789?text=" . urlencode($pesan);
    
        // Memeriksa apakah ada file foto yang diupload
        if ($_FILES['foto']['name']) {
            $config['upload_path'] = 'assets/img/produk';// Lokasi penyimpanan foto
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // Batasan ukuran file (dalam KB)
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto')) {
                $uploaded_data = $this->upload->data();
                $foto = $uploaded_data['file_name'];
    
                // Mengupdate data produk beserta foto
                $data = array(
                    'nama_jamu' => $nama_jamu,
                    'satuan' => $satuan,
                    'harga' => $harga,
                    'deskripsi' => $deskripsi,
                    'manfaat1' => $manfaat1,
                    'manfaat2' => $manfaat2,
                    'manfaat3' => $manfaat3,
                    'kategori' => $kategori,
                    'foto' => $foto,
                    'link_wa' => $whatsapp_link
                );
                $this->ProdukModel->updateProduk($id_produk, $data);
                $this->session->set_flashdata('success', 'Produk berhasil diperbarui dengan gambar baru.');

            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', "$error");
                redirect('Produk/editProduk/'.$id_produk);
            }
        } else {
            // Jika tidak ada foto yang diupload, hanya mengupdate data produk tanpa foto
            $data = array(
                'nama_jamu' => $nama_jamu,
                'satuan' => $satuan,
                'harga' => $harga,
                'deskripsi' => $deskripsi,
                'manfaat1' => $manfaat1,
                'manfaat2' => $manfaat2,
                'manfaat3' => $manfaat3,
                'kategori' => $kategori,
                'link_wa' => $whatsapp_link
            );
            $this->ProdukModel->updateProduk($id_produk, $data);
            $this->session->set_flashdata('success', 'Produk berhasil diperbarui.');
        }
        redirect('Produk/tampilDataProduk');
    }

    public function hapus($id_produk) {
        try {
            // Cek apakah data ada di tabel utama berdasarkan $id
            $data = $this->ProdukModel->getProdukById($id_produk);
            if ($data) {
                // Periksa apakah ada data terkait di tabel referensi
                if ($this->ProdukModel->cekDataReferensi($id_produk)) {
                    $this->session->set_flashdata('error', 'Tidak dapat menghapus produk dikarenakan produk tersebut adalah PRODUK TERLARIS');
                } else {
                    // Lakukan penghapusan data dari tabel utama
                    $this->ProdukModel->hapusProduk($id_produk);
                    $this->session->set_flashdata('success', 'Data berhasil dihapus.');
                }
            } else {
                $this->session->set_flashdata('error', 'Data tidak ditemukan.');
            }
        } catch (Exception $e) {
            // Tangkap pengecualian jika terjadi kesalahan saat menghapus data
            $this->session->set_flashdata('error', 'Terjadi kesalahan saat menghapus data.');
        }
    
        redirect('Produk/tampilDataProduk');
    }
    

    public function UpdateDataTerlaris($id_produk){
        $data['active_menu'] = 'data_produk';
        $data['produk_terlaris'] = $this->ProdukModel->getProdukById($id_produk);
        // $data['produk_terlaris']->harga = 'Rp. ' . number_format($data['produk_terlaris']->harga, 0, ',', '.');
        $this->load->view("admin/update-terlaris", $data);
        $this->load->view("admin/sidebar", $data);
    }
    
    public function updateTerlaris($id_produk){
        $id_produk = $this->input->post('id_produk');
        $nama_jamu = $this->input->post('nama_jamu');
        $harga_asli = $this->input->post('harga_asli');
        $diskon = $this->input->post('diskon');
        $harga_diskon = $this->input->post('harga_diskon');
        $date = $this->input->post('date');
        $foto = $this->input->post('foto');
        $data = array(
            'id_produk' => $id_produk,
            'nama_jamu' => $nama_jamu,
            'harga_asli' => $harga_asli,
            'diskon' => $diskon,
            'harga_diskon' => $harga_diskon,
            'date' => $date,
            'foto' => $foto
        );
        $this->ProdukModel->updateTerlaris($id_produk, $data);
        redirect('Admin');

    }

    public function search(){
        $data['active_menu'] = 'data_produk';
        $keyword = $this->input->get('keyword'); // Mendapatkan keyword pencarian dari input GET
        
        // Lakukan pencarian data berdasarkan keyword
        $data['data_produk'] = $this->ProdukModel->searchProduk($keyword);
        foreach ($data['data_produk'] as &$produk) {
            $produk->harga = 'Rp. ' . number_format($produk->harga, 0, ',', '.');
        }
        
        // Tampilkan tampilan (view) dengan hasil pencarian
        $this->load->view("admin/data-produk", $data);
        $this->load->view("admin/sidebar", $data);
    }




}
