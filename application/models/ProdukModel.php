<?php
class ProdukModel extends CI_Model {
    public function simpanProduk($data){
        $this->db->insert('data_produk', $data);
    }

    public function getProduk(){
        $query = $this->db->get('data_produk');
        return $query->result();
    }

    public function getProdukTerlaris(){
        $this->db->select('*');
        $this->db->from('produk_terlaris'); // Ganti dengan nama tabel Anda
        $this->db->limit(1); // Mengambil 1 data saja
        $query = $this->db->get();
        return $query->row();
    }

    public function getProdukTerlarisById($id_produk){
        $this->db->where('id_produk', $id_produk);
        $query = $this->db->get('produk_terlaris');
        return $query->row();
    }

    public function getProdukById($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $query = $this->db->get('data_produk');
        return $query->row();
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
    
    //     // Gabungkan dengan awalan "JM" dan kembalikan sebagai string
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
        $this->db->or_like('kategori', $keyword);

        return $this->db->get('data_produk')->result();
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
