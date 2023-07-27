<?php
class UserModel extends CI_Model {
    public function login($username, $password)
    {
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        return $this->db->get("admin");
    }
}
