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

    public function get_user_umkm_verified()
    {
        $hasil = $this->db->query('SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level = 2 AND user_detail.id_status_verifikasi=4');
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

    public function get_count_user_verified()
    {
        $hasil=$this->db->query("SELECT COUNT(id) as total_user FROM user JOIN user_detail ON user.id = user_detail.id_user_detail WHERE id_user_level=2 AND user_detail.id_status_verifikasi = 4");
            return $hasil;
    }

    public function get_count_user_not_verified()
    {
        $hasil=$this->db->query("SELECT COUNT(id) as total_user FROM user JOIN user_detail ON user.id = user_detail.id_user_detail WHERE id_user_level=2 AND user_detail.id_status_verifikasi = 3");
            return $hasil;
    }

    public function get_count_user_wait_verified()
    {
        $hasil=$this->db->query("SELECT COUNT(id) as total_user FROM user JOIN user_detail ON user.id = user_detail.id_user_detail WHERE id_user_level=2 AND user_detail.id_status_verifikasi = 2");
            return $hasil;
    }

    public function insert_data_user($id, $username, $password, $email, $no_telp, $nama_lengkap, $alamat , $nik, $tempat_lahir, $tanggal_lahir, $penanggung_jawab, $jenis_usaha, $nama_usaha, $jenis_produk_jasa, $merk_produk_jasa, $kapasitas_usaha, $pendapatan, $mulai_usaha, $jumlah_karyawan, $mesin_produksi, $luas_lahan_ruang, $ijin_dimiliki, $foto_logo, $keluhan_usaha, $foto_ktp ,$id_user_level, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO user(id,username,password,email ,no_telp ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$no_telp','$id_user_level','$id')");
        $this->db->query("INSERT INTO user_detail(id_user_detail, nama_lengkap, alamat, nik, tempat_lahir, tanggal_lahir, penanggung_jawab, jenis_usaha, nama_usaha, jenis_produk_jasa, merk_produk_jasa, kapasitas_usaha, pendapatan, mulai_usaha, jumlah_karyawan, mesin_produksi, luas_lahan_ruang, ijin_dimiliki, logo_usaha, keluhan_usaha, ktp, id_status_verifikasi) 
        VALUES ('$id', '$nama_lengkap', '$alamat', '$nik', '$tempat_lahir', '$tanggal_lahir', '$penanggung_jawab', '$jenis_usaha', '$nama_usaha', '$jenis_produk_jasa', '$merk_produk_jasa', '$kapasitas_usaha', '$pendapatan', '$mulai_usaha', '$jumlah_karyawan', '$mesin_produksi', '$luas_lahan_ruang', '$ijin_dimiliki','$foto_logo', '$keluhan_usaha', '$foto_ktp',
  '$id_status_verifikasi')");
 
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

    public function update_data_user($id, $username, $password, $email, $no_telp, $nama_lengkap, $alamat, $nik, $tempat_lahir, $tanggal_lahir, $penanggung_jawab, $jenis_usaha, $nama_usaha, $jenis_produk_jasa, $merk_produk_jasa, $kapasitas_usaha, $pendapatan, $mulai_usaha, $jumlah_karyawan, $mesin_produksi, $luas_lahan_ruang, $ijin_dimiliki, $foto_logo, $keluhan_usaha, $foto_ktp)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', password='$password', email='$email', no_telp='$no_telp' WHERE id='$id'");
        $this->db->query("UPDATE user_detail SET nama_lengkap='$nama_lengkap', alamat='$alamat', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', penanggung_jawab='$penanggung_jawab', jenis_usaha='$jenis_usaha', 
        nama_usaha='$nama_usaha', jenis_produk_jasa='$jenis_produk_jasa', merk_produk_jasa='$merk_produk_jasa', kapasitas_usaha='$kapasitas_usaha', pendapatan='$pendapatan', mulai_usaha='$mulai_usaha', 
        jumlah_karyawan='$jumlah_karyawan',  mesin_produksi='$mesin_produksi',  luas_lahan_ruang='$luas_lahan_ruang',  ijin_dimiliki='$ijin_dimiliki',  logo_usaha='$foto_logo',  keluhan_usaha='$keluhan_usaha', ktp='$foto_ktp', logo_usaha='$foto_logo'  WHERE id_user_detail='$id'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_status_verifikasi_user($status_verifikasi, $id)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET id_status_verifikasi='$status_verifikasi' WHERE id_user_detail='$id'");
       

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

    public function edit_user($id, $password){
        $this->db->trans_start();
       $this->db->query("UPDATE user SET password='$password' WHERE id='$id'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }   

    public function daftar_data_user($id, $nama_lengkap, $alamat, $nik, $tempat_lahir, $tanggal_lahir, $penanggung_jawab, $jenis_usaha, $nama_usaha,
     $jenis_produk_jasa, $merk_produk_jasa, $kapasitas_usaha, $pendapatan, $mulai_usaha, $jumlah_karyawan, $mesin_produksi, $luas_lahan_ruang, $ijin_dimiliki, $foto_logo, $keluhan_usaha, $foto_ktp, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET nama_lengkap='$nama_lengkap', alamat='$alamat', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', penanggung_jawab='$penanggung_jawab', jenis_usaha='$jenis_usaha', 
        nama_usaha='$nama_usaha', jenis_produk_jasa='$jenis_produk_jasa', merk_produk_jasa='$merk_produk_jasa', kapasitas_usaha='$kapasitas_usaha', pendapatan='$pendapatan', mulai_usaha='$mulai_usaha', 
        jumlah_karyawan='$jumlah_karyawan',  mesin_produksi='$mesin_produksi',  luas_lahan_ruang='$luas_lahan_ruang',  ijin_dimiliki='$ijin_dimiliki',  logo_usaha='$foto_logo',  keluhan_usaha='$keluhan_usaha', ktp='$foto_ktp', id_status_verifikasi='$id_status_verifikasi'  WHERE id_user_detail='$id'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_token_user($token, $id)
    {
         $this->db->trans_start();
         $this->db->query("UPDATE user SET token='$token' WHERE id='$id'");
         $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function cek_email($email){
        $hasil=$this->db->query("SELECT * FROM user WHERE email='$email' ");
        return $hasil;
    }

    public function read_user_by_token($token){
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE token='$token' ");
        return $hasil;
    }
}