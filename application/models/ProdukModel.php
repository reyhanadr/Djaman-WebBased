<?php
class ProdukModel extends CI_Model {
    public function simpanProduk($data){
        $this->db->insert('data_produk', $data);
    }

    public function simpanKategori($data) {
        $jumlahKategori = $this->getJumlahKategori();
        if ($jumlahKategori < 5) {
            return $this->db->insert('kategori_produk', $data);
        } else {
            return false; // Jumlah kategori sudah mencapai batas (5).
        }
    }

    public function getProduk(){
        $this->db->select('data_produk.*, kategori_produk.nama_kategori AS kategori');
        $this->db->from('data_produk');
        $this->db->join('kategori_produk', 'kategori_produk.id_kategori = data_produk.id_kategori', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function getKategoriProduk(){
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }

    public function getKategoriProdukById($id_kategori){
        $this->db->where('id_kategori', $id_kategori);
        $query = $this->db->get('kategori_produk');
        return $query->row();
    }

    public function getKategoriProdukArray(){
        $query = $this->db->get('kategori_produk');
        return $query->result_array();
    }

    public function getJumlahKategori() {
        return $this->db->count_all('kategori_produk');
        
    }

    public function getProdukTerlaris(){
        $this->db->select('produk_terlaris.*, data_produk.nama_jamu , data_produk.harga AS harga_asli, data_produk.foto');
        $this->db->from('produk_terlaris');
        $this->db->join('data_produk', 'data_produk.id_produk = produk_terlaris.id_produk', 'left');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    

    public function getProdukTerlarisById($id_produk){
        $this->db->where('id_produk', $id_produk);
        $query = $this->db->get('produk_terlaris');
        return $query->row();
    }

    public function getProdukById($id_produk){
        $this->db->select('data_produk.*, kategori_produk.nama_kategori AS kategori, admin_membuat.nama AS admin_membuat, admin_update.nama AS admin_update');
        $this->db->where('data_produk.id_produk', $id_produk);
        $this->db->from('data_produk');
        $this->db->join('kategori_produk', 'kategori_produk.id_kategori = data_produk.id_kategori', 'left');
        $this->db->join('admin AS admin_membuat', 'admin_membuat.id = data_produk.created_by', 'left');
        $this->db->join('admin AS admin_update', 'admin_update.id = data_produk.updated_by', 'left');
        $query = $this->db->get();
        return $query->row();
    }
    
    public function cekRelasiDenganDataProduk($id_kategori) {
        // Mengecek apakah ada produk yang terkait dengan kategori ini
        $this->db->where('id_kategori', $id_kategori);
        $query = $this->db->get('data_produk');

        return $query->num_rows() > 0;
    }

    public function hapusKategori($id_kategori) {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori_produk');
    }

    public function getProdukDiscById($id_produk)
    {
        $this->db->select('data_produk.*, produk_terlaris.harga_asli');
        $this->db->from('data_produk');
        $this->db->join('produk_terlaris', 'data_produk.id_produk = produk_terlaris.id_produk');
        $this->db->where('data_produk.id_produk', $id_produk);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function updateProduk($id_produk, $data)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->update('data_produk', $data);
    }

    public function updateTerlaris($id_produk, $data)
    {
        $this->db->update('produk_terlaris', $data);
        $this->db->where('id_produk', $id_produk);
    }

    
    public function hapusProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('data_produk');
    }

    public function cekDataReferensi($id_produk) {
        // Query untuk memeriksa apakah ada data terkait di tabel referensi
        // Gantikan dengan query sesuai dengan struktur tabel referensi Anda
        $query = $this->db->get_where('produk_terlaris', array('id_produk' => $id_produk));
        return $query->num_rows() > 0;
    }

    public function getTotalDataProduk(){
        return $this->db->count_all('data_produk');
    }

    public function getLastProductID(){
        $this->db->select_max('id_produk');
        $this->db->like('id_produk', 'JM', 'after'); // Hanya ambil ID yang dimulai dengan "JM"
        $this->db->where('LENGTH(id_produk)', 5); // Filter hanya ID produk dengan panjang 5 karakter
        $query = $this->db->get('data_produk');
        $result = $query->row_array();
    
        // Jika tidak ada data dengan ID "JM", kembalikan nilai awal yaitu "JM000"
        if ($result['id_produk'] === null) {
            return 'JM0000';
        }
    
        return $result['id_produk'];
    }
    
    // public function generateNextProductID($lastProductID)
    // {
    //     // Hapus awalan "JM" dan ubah ke dalam bentuk angka
    //     $lastNumber = intval(substr($lastProductID, 2));
    
    //     // Increment nomor ID
    //     $nextNumber = $lastNumber + 1;
    
    //     // Gabungkan dengan awalan "JM" dan kembalikan sebagai stringg
    //     $nextProductID = 'JM' . sprintf('%03d', $nextNumber);
    
    //     return $nextProductID;
    // }
    

    public function searchProduk($keyword){
        $this->db->like('id_produk', $keyword);
        $this->db->or_like('nama_jamu', $keyword);
        $this->db->or_like('satuan', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        $this->db->or_like('manfaat1', $keyword);
        $this->db->or_like('manfaat2', $keyword);
        $this->db->or_like('manfaat3', $keyword);
    
        // Tambahkan join dengan tabel kategori_produk untuk mengambil nama_produk
        $this->db->join('kategori_produk', 'kategori_produk.id_kategori = data_produk.id_kategori', 'left');
    
        // Tambahkan kondisi pencarian juga pada kolom kategori dari tabel kategori_produk
        $this->db->or_like('kategori_produk.nama_kategori', $keyword);
    
        // Mengganti 'nama_kategori' menjadi 'kategori' pada hasil query
        $this->db->select('data_produk.*, kategori_produk.nama_kategori AS kategori');
    
        return $this->db->get('data_produk')->result();
    }
    
    

    public function searchKategori($keyword){
        $this->db->like('id_kategori', $keyword);
        $this->db->or_like('nama_kategori', $keyword);
        $this->db->or_like('deskripsi_kategori', $keyword);


        return $this->db->get('kategori_produk')->result();
    }

    public function getRandomProduk($limit)
    {
        $this->db->order_by('RAND()');
        $this->db->limit($limit);
        return $this->db->get('data_produk')->result();
    }

    public function isProdukTerlaris($id_produk) {
        $this->db->where('id_produk', $id_produk);
        $result = $this->db->get('produk_terlaris');
        return $result->num_rows() > 0;
    }

    public function isProdukTerlarisBelanja($id_produk) {
        $this->db->where('id_produk', $id_produk);
        return $this->db->get('data_produk')->result();

    }
    public function getProdukTerlarisRow1(){
        $this->db->select('id_produk');
        $this->db->from('produk_terlaris');
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row();
        if ($row) {
            return $row->id_produk;
        } else {
            return null;
        }
    }
    
}
