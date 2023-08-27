<?php
class ProfileModel extends CI_Model {


    public function getProfileById($id_profile)
    {
        $this->db->where('id', $id_profile);
        return $this->db->get('admin')->row();
    }

    public function updateProfile($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }
    
}
