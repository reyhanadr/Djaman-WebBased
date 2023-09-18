<?php
class AsknsugestModel extends CI_Model {
    public function getAsknsugest(){
        $query = $this->db->get('asknsugest');
        return $query->result();
    }
    public function getTotalDataAsknSugest(){
        return $this->db->count_all('asknsugest');
    }

    public function getAsknsugestById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('asknsugest');
        return $query->row();
    }

    public function insertAsknsugest($data){
        return $this->db->insert("asknsugest", $data);
    }
    public function searchAsknSugest($keyword) {
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('phone', $keyword);
        $this->db->or_like('subject', $keyword);
        $this->db->or_like('message', $keyword);

        return $this->db->get('asknsugest')->result();

    }
}