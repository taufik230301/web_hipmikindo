<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function view_admin()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['data_user'] = $this->m_user->get_user_umkm()->result_array();
		$this->load->view('admin/user_umkm', $data);
		
	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}
	
	public function tambah_user()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$no_telp = $this->input->post("no_telp");
			$nama_lengkap = $this->input->post("nama_lengkap");
			$alamat = $this->input->post("alamat");
			$nik = $this->input->post("nik");
			$tempat_lahir = $this->input->post("tempat_lahir");
			$tanggal_lahir = $this->input->post("tanggal_lahir");
			$penanggung_jawab = $this->input->post("penanggung_jawab");
			$jenis_usaha = $this->input->post("jenis_usaha");
			$nama_usaha = $this->input->post("nama_usaha");
			$jenis_produk_jasa = $this->input->post("jenis_produk_jasa");
			$merk_produk_jasa = $this->input->post("merk_produk_jasa");
			$kapasitas_usaha = $this->input->post("kapasitas_usaha");
			$pendapatan = $this->input->post("pendapatan");
			$mulai_usaha = $this->input->post("mulai_usaha");
			$jumlah_karyawan = $this->input->post("jumlah_karyawan");
			$mesin_produksi = $this->input->post("mesin_produksi");
			$luas_lahan_ruang = $this->input->post("luas_lahan_ruang");
			$keluhan_usaha = $this->input->post("keluhan_usaha");
			$ijin_dimiliki = $this->input->post("ijin_dimiliki");
			$id_user_level = 2;
			$id_status_verifikasi = 1;
			$id = md5($username.$no_telp.$password);
			$file_name = md5($username.$password);

			$path = './assets/foto/';

		$this->load->library('upload');
		$config['upload_path'] = './assets/foto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '4048';  //4MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name.'_logo_usaha';
		$this->upload->initialize($config);
		$foto_logo = $this->upload->do_upload('logo_usaha');

			if($foto_logo){
				$foto_logo = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_file','error_file');
				redirect('User/view_admin');
			}

			$this->load->library('upload');

		$config['upload_path'] = './assets/foto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name.'_ktp';
		$this->upload->initialize($config);
		$foto_ktp = $this->upload->do_upload('ktp');

		if($foto_ktp){
			$foto_ktp = $this->upload->data();
			
		}else{
			@unlink($path.$foto_logo['file_name']);
			$this->session->set_flashdata('error_file','error_file');
			redirect('User/view_admin');
		}


			// echo var_dump($foto_logo['file_name']);
			// die();

			$hasil = $this->m_user->insert_data_user($id, $username, $password, $email, $no_telp, $nama_lengkap, $alamat, $nik, $tempat_lahir, $tanggal_lahir, $penanggung_jawab, $jenis_usaha, $nama_usaha, $jenis_produk_jasa, $merk_produk_jasa, $kapasitas_usaha, $pendapatan, $mulai_usaha, $jumlah_karyawan, $mesin_produksi, $luas_lahan_ruang, $ijin_dimiliki, $foto_logo['file_name'], $keluhan_usaha, $foto_ktp['file_name'], $id_user_level, $id_status_verifikasi);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_input','eror_input');
					
					}else{
						$this->session->set_flashdata('input','input');
					}
					redirect('User/view_admin');

			// echo $username;
			// echo "<br>";
			// echo $password;
			// echo "<br>";
			// echo $email;
			// echo "<br>";
			// echo $no_telp;
			// echo "<br>";
			// echo $nama_lengkap;
			// echo "<br>";
			// echo $alamat;
			// echo "<br>";
			// die();
			
		}else{
	
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
	
		}
	}
	
	public function hapus_user()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$id = $this->input->post('id');

		$path = './assets/foto/';

		$hasil = $this->m_user->delete_data_user($id);
		
		if($hasil==false){
			$this->session->set_flashdata('eror_hapus','eror_hapus');
		}else{
			$this->session->set_flashdata('hapus','hapus');
		}

		@unlink($path.$this->input->post('logo_usaha_old'));
		@unlink($path.$this->input->post('ktp_old'));
		redirect('User/view_admin');

	}else{
	
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
	
		}
	}

	public function edit_user()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$id = $this->input->post("id");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$no_telp = $this->input->post("no_telp");
			$nama_lengkap = $this->input->post("nama_lengkap");
			$alamat = $this->input->post("alamat");
			$nik = $this->input->post("nik");
			$tempat_lahir = $this->input->post("tempat_lahir");
			$tanggal_lahir = $this->input->post("tanggal_lahir");
			$penanggung_jawab = $this->input->post("penanggung_jawab");
			$jenis_usaha = $this->input->post("jenis_usaha");
			$nama_usaha = $this->input->post("nama_usaha");
			$jenis_produk_jasa = $this->input->post("jenis_produk_jasa");
			$merk_produk_jasa = $this->input->post("merk_produk_jasa");
			$kapasitas_usaha = $this->input->post("kapasitas_usaha");
			$pendapatan = $this->input->post("pendapatan");
			$mulai_usaha = $this->input->post("mulai_usaha");
			$jumlah_karyawan = $this->input->post("jumlah_karyawan");
			$mesin_produksi = $this->input->post("mesin_produksi");
			$luas_lahan_ruang = $this->input->post("luas_lahan_ruang");
			$ijin_dimiliki = $this->input->post("ijin_dimiliki");
			$id_status_verifikasi = 1;
			$foto_logo_old = $this->input->post('logo_usaha_old');
			$keluhan_usaha = $this->input->post('keluhan_usaha');
			$foto_ktp_old = $this->input->post('ktp_old');
			$file_name = md5($nama_lengkap.$alamat.$foto_logo_old.rand(1, 9999));
			

			

			$path = './assets/foto/';

			$this->load->library('upload');

		$config['upload_path'] = './assets/foto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name.'_logo_usaha';
		$this->upload->initialize($config);
		$foto_logo = $this->upload->do_upload('logo_usaha');

		if($foto_logo){
			$foto_logo = $this->upload->data();
			
		}else{
			$this->session->set_flashdata('error_file','error_file');
			redirect('User/view_admin');
		}

		$this->load->library('upload');

		$config['upload_path'] = './assets/foto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name.'_ktp';
		$this->upload->initialize($config);
		$foto_ktp = $this->upload->do_upload('ktp');

		if($foto_ktp){
			$foto_ktp = $this->upload->data();
			
		}else{
			@unlink($path.$foto_logo['file_name']);
			$this->session->set_flashdata('error_file','error_file');
			redirect('User/view_admin');
		}

		

			$hasil = $this->m_user->update_data_user($id, $username, $password, $email, $no_telp, $nama_lengkap, $alamat, $nik, $tempat_lahir, $tanggal_lahir, $penanggung_jawab, $jenis_usaha, $nama_usaha, $jenis_produk_jasa, $merk_produk_jasa, $kapasitas_usaha, $pendapatan, $mulai_usaha, $jumlah_karyawan, $mesin_produksi, $luas_lahan_ruang, $ijin_dimiliki, $foto_logo['file_name'], $keluhan_usaha, $foto_ktp['file_name']);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_edit','eror_edit');
					}else{
						$this->session->set_flashdata('edit','edit');
					}
					@unlink($path.$this->input->post('logo_usaha_old'));
					@unlink($path.$this->input->post('ktp_old'));
					redirect('User/view_admin');

			// echo $username;
			// echo "<br>";
			// echo $password;
			// echo "<br>";
			// echo $email;
			// echo "<br>";
			// echo $no_telp;
			// echo "<br>";
			// echo $nama_lengkap;
			// echo "<br>";
			// echo $alamat;
			// echo "<br>";
			// die();
			
		}else{
	
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
	
		}
	}

	public function verifikasi_data($id_status_verifikasi)
	{
		$id_user = $this->input->post("id_user");
		$pesan = $this->input->post("pesan");
		$email = $this->input->post("email");

		$this->load->library('email');
      	$this->load->config('email');

          
      $from = $this->config->item('smtp_user');
      
      $subject = 'Status Verifikasi Data Web Hipmikindo';
      

      $this->email->set_newline("\r\n");
      $this->email->from($from);
      $this->email->to($email);
      $this->email->subject($subject);
      $this->email->message($pesan);

      if ($this->email->send()) {
        $hasil = $this->m_user->update_status_verifikasi_user($id_status_verifikasi, $id_user);

        if($hasil==false){
                  $this->session->set_flashdata('eror_status_verifikasi','eror_status_verifikasi');
                  redirect('User/view_admin');
        }else{
          $this->session->set_flashdata('input_status_verifikasi','input_status_verifikasi');
          redirect('User/view_admin');
        }
      } else {
        $this->session->set_flashdata('error_send','error_send');
        redirect('User/view_admin');
      }

	}
}