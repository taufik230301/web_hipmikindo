<?php

class M_user extends CI_Model
{
    public function pendaftaran_user($id, $username, $email, $no_telp, $password, $id_user_level, $id_status_verifikasi)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id,username,password,email ,no_telp ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$no_telp','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi) VALUES ('$id','$id_status_verifikasi')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function cek_login($username)
    {
        
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE username='$username'");
        return $hasil;
        
    }

    public function get_user_umkm()
    {
        $hasil = $this->db->query('SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level = 2');
        return $hasil;
    }

    public function get_user_umkm_by_id($id)
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level = 2 AND id='$id'");
        return $hasil;
    }

    public function get_count_user()
    {
        $hasil=$this->db->query("SELECT COUNT(id) as total_user FROM user WHERE id_user_level=2");
            return $hasil;
    }

    public function insert_data_user($id, $username, $password, $email, $no_telp, $nama_usaha, $alamat ,$foto ,$id_user_level, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO user(id,username,password,email ,no_telp ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$no_telp','$id_user_level','$id')");
        $this->db->query("INSERT INTO user_detail(id_user_detail, nama_usaha, alamat, logo_usaha, id_status_verifikasi) VALUES ('$id', '$nama_usaha', '$alamat', '$foto','$id_status_verifikasi')");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function delete_data_user($id)
    {
        $this->db->trans_start();

        $this->db->query("DELETE FROM user WHERE id='$id'");
        $this->db->query("DELETE FROM user_detail WHERE id_user_detail='$id'");
        
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function update_data_user($id, $username, $password, $email, $no_telp, $nama_usaha, $alamat, $logo_usaha, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', password='$password', email='$email', no_telp='$no_telp' WHERE id='$id'");
        $this->db->query("UPDATE user_detail SET nama_usaha='$nama_usaha', alamat='$alamat', logo_usaha='$logo_usaha'  WHERE id_user_detail='$id'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_account($id, $username, $password)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', password='$password' WHERE id='$id'");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function daftar_data_user($id, $nama_usaha, $alamat, $logo_usaha, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET nama_usaha='$nama_usaha', alamat='$alamat', logo_usaha='$logo_usaha'  WHERE id_user_detail='$id'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
}