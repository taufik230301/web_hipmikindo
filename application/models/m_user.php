<?php

class M_user extends CI_Model
{
    public function pendaftaran_user($id, $username, $email, $no_telp, $password, $id_user_level, $id_status_verifikasi)
    {
        $this->db->trans_start();
       $this->db->query("INSERT INTO user(username,password,email ,no_telp ,id_user_level, id_user_detail) VALUES ('$username','$password','$email','$no_telp','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi) VALUES ('$id','$id_status_verifikasi')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function cek_login($username, $password)
    {
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE username='$username' AND password='$password' ");
        return $hasil;
    }
}