<?php
class ProfileModel extends CI_Model {


    public function getProfileById($id_profile)
    {
        $this->db->where('id_admin', $id_profile);
        return $this->db->get('admin')->row();
    }

    public function updateProfile($id, $data)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }
    
}
