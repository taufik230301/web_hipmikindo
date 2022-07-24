<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Ditambahkan!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/dist/img/Loading.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("user/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("user/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pendaftaran User UMKM</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Form Daftar</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col col-8">
                            <?php

                           
                                            $id = 0;
                                            foreach($data_user as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id'];
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $no_telp = $i['no_telp'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $nik = $i['nik'];
                                            $tempat_lahir = $i['tempat_lahir'];
                                            $tanggal_lahir = $i['tanggal_lahir'];
                                            $penanggung_jawab = $i['penanggung_jawab'];
                                            $jenis_usaha = $i['jenis_usaha'];
                                            $nama_usaha = $i['nama_usaha'];
                                            $jenis_produk_jasa = $i['jenis_produk_jasa'];
                                            $merk_produk_jasa = $i['merk_produk_jasa'];
                                            $kapasitas_usaha = $i['kapasitas_usaha'];
                                            $pendapatan = $i['pendapatan'];
                                            $mulai_usaha = $i['mulai_usaha'];
                                            $jumlah_karyawan = $i['jumlah_karyawan'];
                                            $mesin_produksi = $i['mesin_produksi'];
                                            $luas_lahan_ruang = $i['luas_lahan_ruang'];
                                            $ijin_dimiliki = $i['ijin_dimiliki'];
                                            $keluhan_usaha = $i['keluhan_usaha'];
                                            $alamat = $i['alamat'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $logo_usaha = $i['logo_usaha'];
                                            $ktp = $i['ktp'];
                                            $password = $i['password'];
                                               

                                            ?>
                            <form action="<?=base_url();?>Form_daftar/daftar_user" method="POST"
                                enctype="multipart/form-data">
                                <input type="text" name="id" value="<?= $id_user ?>" hidden>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap"
                                        aria-describedby="nama_lengkap" name="nama_lengkap" value="<?= $nama_lengkap ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" aria-describedby="nik" name="nik"
                                        value="<?= $nik ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir"
                                        aria-describedby="tempat_lahir" name="tempat_lahir" value="<?= $tempat_lahir ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir"
                                        aria-describedby="tanggal_lahir" name="tanggal_lahir"
                                        value="<?= $tanggal_lahir ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="penanggung_jawab">Penanggung Jawab</label>
                                    <input type="text" class="form-control" id="penanggung_jawab"
                                        aria-describedby="penanggung_jawab" name="penanggung_jawab"
                                        value="<?= $penanggung_jawab ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_usaha">Jenis Usaha</label>
                                    <input type="text" class="form-control" id="jenis_usaha"
                                        aria-describedby="jenis_usaha" name="jenis_usaha" value="<?= $jenis_usaha ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="nama_usaha">Nama Usaha</label>
                                    <input type="text" class="form-control" id="nama_usaha"
                                        aria-describedby="nama_usaha" name="nama_usaha" value="<?= $nama_usaha ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_produk_jasa">Jenis Produk/Jasa</label>
                                    <input type="text" class="form-control" id="jenis_produk_jasa"
                                        aria-describedby="jenis_produk_jasa" name="jenis_produk_jasa"
                                        value="<?= $jenis_produk_jasa ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="merk_produk_jasa">Merk Produk/Jasa</label>
                                    <input type="text" class="form-control" id="merk_produk_jasa"
                                        aria-describedby="merk_produk_jasa" name="merk_produk_jasa"
                                        value="<?= $merk_produk_jasa ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="kapasitas_usaha">Kapasitas Usaha</label>
                                    <input type="text" class="form-control" id="kapasitas_usaha"
                                        aria-describedby="kapasitas_usaha" name="kapasitas_usaha"
                                        value="<?= $kapasitas_usaha ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="pendapatan">Pendapatan</label>
                                    <input type="number" class="form-control" id="pendapatan"
                                        aria-describedby="pendapatan" name="pendapatan" value="<?= $pendapatan ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_usaha">Mulai Usaha</label>
                                    <input type="date" class="form-control" id="mulai_usaha"
                                        aria-describedby="mulai_usaha" name="mulai_usaha" value="<?= $mulai_usaha ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_karyawan">Jumlah Kayawan</label>
                                    <input type="number" class="form-control" id="jumlah_karyawan"
                                        aria-describedby="jumlah_karyawan" name="jumlah_karyawan"
                                        value="<?= $jumlah_karyawan ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="mesin_produksi">Mesin Produksi</label>
                                    <input type="text" class="form-control" id="mesin_produksi"
                                        aria-describedby="mesin_produksi" name="mesin_produksi"
                                        value="<?= $mesin_produksi ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="luas_lahan_ruang">Luas Lahan/Ruang</label>
                                    <input type="text" class="form-control" id="luas_lahan_ruang"
                                        aria-describedby="luas_lahan_ruang" name="luas_lahan_ruang"
                                        value="<?= $luas_lahan_ruang ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="ijin_dimiliki">Ijin Dimiliki</label>
                                    <input type="text" class="form-control" id="ijin_dimiliki"
                                        aria-describedby="ijin_dimiliki" name="ijin_dimiliki"
                                        value="<?= $ijin_dimiliki ?>" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" name="alamat" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>><?=$alamat?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="keluhan_usaha">Keluhan Usaha</label>
                                    <textarea class="form-control" id="keluhan_usaha" rows="3" name="keluhan_usaha" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>><?=$keluhan_usaha?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="logo_usaha">Logo Usaha</label>
                                    <input type="file" class="form-control" id="logo_usaha"
                                        aria-describedby="logo_usaha" name="logo_usaha" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Preview Logo Usaha</label>
                                    <?php if($logo_usaha){?>
                                    <img src="<?= base_url();?>assets/foto/<?php echo $logo_usaha?>" style="width: 25%">
                                    <?php }else{ ?>
                                    <p>Masukan Logo Usaha !</p>
                                    <?php } ?>
                                </div>
                                <input type="text" class="form-control" id="logo_usaha_old" aria-describedby="emailHelp"
                                    name="logo_usaha_old" value="<?=$logo_usaha?>" hidden>
                                <div class="form-group">
                                    <label for="ktp">Foto KTP</label>
                                    <input type="file" class="form-control" id="ktp"
                                        aria-describedby="ktp" name="ktp" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Preview KTP</label>
                                    <?php if($ktp){?>
                                    <img src="<?= base_url();?>assets/foto/<?php echo $ktp?>" style="width: 25%">
                                    <?php }else{ ?>
                                    <p>Masukan KTP !</p>
                                    <?php } ?>
                                </div>
                                <input type="text" class="form-control" id="ktp_old" aria-describedby="emailHelp"
                                    name="ktp_old" value="<?=$ktp?>" hidden>
                                <button type="submit" class="btn btn-primary" <?php  if($id_status_verifikasi == '4'){
                                        echo 'disabled';
                                    }else{
                                       echo 'required';
                                    }  ?>>Submit</button>
                            </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("user/components/js.php") ?>
</body>

</html>