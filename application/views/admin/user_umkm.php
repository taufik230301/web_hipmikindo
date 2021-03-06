<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('error_send')){ ?>
    <script>
    swal({
        title: "Gagal Diiupdate!",
        text: "Pesan gagal dikirim!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('input_status_verifikasi')){ ?>
    <script>
    swal({
        title: "Berhasil Diiupdate!",
        text: "Data Telah diverifikasi!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_status_verifikasi')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

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

    <?php if ($this->session->flashdata('error_file')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data File Terlalu Besar !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_hapus')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Dihapus !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diedit!",
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
        <?php $this->load->view("admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">User UMKM</h1>
                            <!-- Button trigger modal -->
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#tambah_user">
                                Tambah User
                            </button>
                        </div>

                        <!-- /.col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User UMKM</li>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data User UMKM</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>No HP</th>
                                                <th>Nama Usaha</th>
                                                <th>Alamat</th>
                                                <th>Nik</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Penanggung Jawab</th>
                                                <th>Jenis Usaha</th>
                                                <th>Nama Usaha</th>
                                                <th>Jenis Produk/Jasa</th>
                                                <th>Merk Produk/Jasa</th>
                                                <th>Kapasitas Usaha</th>
                                                <th>Pendapatan</th>
                                                <th>Mulai Usaha</th>
                                                <th>Jumlah Karyawan</th>
                                                <th>Mesin Produksi</th>
                                                <th>Luas Lahan/Ruang</th>
                                                <th>Ijin Dimiliki</th>
                                                <th>Logo Usaha</th>
                                                <th>Keluhan Usaha</th>
                                                <th>KTP</th>
                                                <th>Status Verifikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                            <tr>
                                                <td><?= $id?></td>
                                                <td><?= $username?></td>
                                                <td><?= $email ?></td>
                                                <td><?= $no_telp ?></td>
                                                <?php if($nama_lengkap == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $nama_lengkap ?></td>
                                                <?php } ?>
                                                <?php if($alamat == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $alamat ?></td>
                                                <?php } ?>
                                                <?php if($nik == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $nik ?></td>
                                                <?php } ?>
                                                <?php if($tempat_lahir == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $tempat_lahir ?></td>
                                                
                                                <?php } ?>
                                                <?php if($tanggal_lahir == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $tanggal_lahir ?></td>
                                                <?php } ?>
                                                <?php if($penanggung_jawab == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $penanggung_jawab ?></td>
                                                <?php } ?>
                                                <?php if($jenis_usaha == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $jenis_usaha ?></td>
                                                <?php } ?>
                                                <?php if($nama_usaha == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $nama_usaha ?></td>
                                                <?php } ?>
                                                <?php if($jenis_produk_jasa == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $jenis_produk_jasa ?></td>
                                                <?php } ?>
                                                <?php if($merk_produk_jasa == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $merk_produk_jasa ?></td>
                                                <?php } ?>
                                                <?php if($kapasitas_usaha == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $kapasitas_usaha ?></td>
                                                <?php } ?>
                                                <?php if($pendapatan == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $pendapatan ?></td>
                                                <?php } ?>
                                                <?php if($mulai_usaha == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $mulai_usaha ?></td>
                                                <?php } ?>
                                                <?php if($jumlah_karyawan == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $jumlah_karyawan ?></td>
                                                <?php } ?>
                                                <?php if($mesin_produksi == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $mesin_produksi ?></td>
                                                <?php } ?>
                                                <?php if($luas_lahan_ruang == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $luas_lahan_ruang ?></td>
                                                <?php } ?>
                                                <?php if($ijin_dimiliki == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $ijin_dimiliki ?></td>
                                                <?php } ?>
                                                <?php if($logo_usaha == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/foto/<?php echo $logo_usaha?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/foto/<?php echo $logo_usaha?>"
                                                                style="width: 25%"> </a>
                                                </td>
                                                <?php } ?>
                                                <?php if($keluhan_usaha == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td><?= $keluhan_usaha ?></td>
                                                <?php } ?>
                                                <?php if($ktp == NULL){ ?>
                                                <td>
                                                    <center><i class="fas fa-times"></i></center>
                                                </td>
                                                <?php }else{ ?>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/foto/<?php echo $ktp?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/foto/<?php echo $ktp?>"
                                                                style="width: 25%"> </a>
                                                </td>
                                                <?php } ?>
                                                <td><?php if($id_status_verifikasi == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_verifikasi == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-warning" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Menunggu Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_verifikasi == 3) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Data Ditolak
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_verifikasi == 4) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-success" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Data Diterima
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit_data_user<?= $id_user ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#hapus<?php echo  $id_user ?>"
                                                                class="btn btn-danger"><i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#setuju<?= $id_user ?>">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#tidak_setuju<?= $id_user ?>"
                                                                class="btn btn-danger"><i class="fas fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit User-->
                                            <div class="modal fade" id="edit_data_user<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                                User
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>User/edit_user" method="POST"
                                                                enctype="multipart/form-data">
                                                                <input type="text" name="id" value="<?= $id_user ?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <input type="text" class="form-control"
                                                                        id="username" aria-describedby="username"
                                                                        name="username" value="<?= $username ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="password" aria-describedby="password"
                                                                        name="password" value="<?= $password ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control" id="email"
                                                                        aria-describedby="email" name="email"
                                                                        value="<?= $email ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_telp">No HP</label>
                                                                    <input type="text" class="form-control" id="no_telp"
                                                                        aria-describedby="no_telp" name="no_telp"
                                                                        value="<?= $no_telp ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama_lengkap"
                                                                        aria-describedby="nama_lengkap"
                                                                        name="nama_lengkap" value="<?= $nama_lengkap ?>"
                                                                        required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <textarea class="form-control" id="alamat" rows="3"
                                                                        name="alamat" required><?=$alamat?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nik">NIK</label>
                                                                    <input type="text" class="form-control" id="nik"
                                                                        aria-describedby="nik" name="nik"
                                                                        value="<?= $nik ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tempat_lahir"
                                                                        aria-describedby="tempat_lahir"
                                                                        name="tempat_lahir" value="<?= $tempat_lahir ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control"
                                                                        id="tanggal_lahir"
                                                                        aria-describedby="tanggal_lahir"
                                                                        name="tanggal_lahir"
                                                                        value="<?= $tanggal_lahir ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="penanggung_jawab">Penanggung
                                                                        Jawab</label>
                                                                    <input type="text" class="form-control"
                                                                        id="penanggung_jawab"
                                                                        aria-describedby="penanggung_jawab"
                                                                        name="penanggung_jawab"
                                                                        value="<?= $penanggung_jawab ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jenis_usaha">Jenis Usaha</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jenis_usaha" aria-describedby="jenis_usaha"
                                                                        name="jenis_usaha" value="<?= $jenis_usaha ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama_usaha">Nama Usaha</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama_usaha" aria-describedby="nama_usaha"
                                                                        name="nama_usaha" value="<?= $nama_usaha ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jenis_produk_jasa">Jenis
                                                                        Produk/Jasa</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jenis_produk_jasa"
                                                                        aria-describedby="jenis_produk_jasa"
                                                                        name="jenis_produk_jasa"
                                                                        value="<?= $jenis_produk_jasa ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="merk_produk_jasa">Merk
                                                                        Produk/Jasa</label>
                                                                    <input type="text" class="form-control"
                                                                        id="merk_produk_jasa"
                                                                        aria-describedby="merk_produk_jasa"
                                                                        name="merk_produk_jasa"
                                                                        value="<?= $merk_produk_jasa ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kapasitas_usaha">Kapasitas Usaha</label>
                                                                    <input type="text" class="form-control"
                                                                        id="kapasitas_usaha"
                                                                        aria-describedby="kapasitas_usaha"
                                                                        name="kapasitas_usaha"
                                                                        value="<?= $kapasitas_usaha ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pendapatan">Pendaptan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="pendapatan" aria-describedby="pendapatan"
                                                                        name="pendapatan" value="<?= $pendapatan ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="mulai_usaha">Mulai Usaha</label>
                                                                    <input type="date" class="form-control"
                                                                        id="mulai_usaha" aria-describedby="mulai_usaha"
                                                                        name="mulai_usaha" value="<?= $mulai_usaha ?>"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jumlah_karyawan">Jumlah Karyawan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jumlah_karyawan"
                                                                        aria-describedby="jumlah_karyawan"
                                                                        name="jumlah_karyawan"
                                                                        value="<?= $jumlah_karyawan ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="mesin_produksi">Mesin Produksi</label>
                                                                    <input type="text" class="form-control"
                                                                        id="mesin_produksi"
                                                                        aria-describedby="mesin_produksi"
                                                                        name="mesin_produksi"
                                                                        value="<?= $mesin_produksi ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="luas_lahan_ruang">Luas
                                                                        Lahan/Ruang</label>
                                                                    <input type="text" class="form-control"
                                                                        id="luas_lahan_ruang"
                                                                        aria-describedby="luas_lahan_ruang"
                                                                        name="luas_lahan_ruang"
                                                                        value="<?= $luas_lahan_ruang ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="ijin_dimiliki">Ijin Dimiliki</label>
                                                                    <input type="text" class="form-control"
                                                                        id="ijin_dimiliki"
                                                                        aria-describedby="ijin_dimiliki"
                                                                        name="ijin_dimiliki"
                                                                        value="<?= $ijin_dimiliki ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="keluhan_usaha">Keluhan Usaha</label>
                                                                    <input type="text" class="form-control"
                                                                        id="keluhan_usaha"
                                                                        aria-describedby="keluhan_usaha"
                                                                        name="keluhan_usaha"
                                                                        value="<?= $keluhan_usaha ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="logo_usaha">Logo Usaha</label>
                                                                    <input type="file" class="form-control"
                                                                        id="logo_usaha" aria-describedby="logo_usaha"
                                                                        name="logo_usaha" required>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    id="logo_usaha_old" aria-describedby="emailHelp"
                                                                    name="logo_usaha_old" value="<?=$logo_usaha?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="ktp">KTP</label>
                                                                    <input type="file" class="form-control" id="ktp"
                                                                        aria-describedby="ktp" name="ktp" required>
                                                                </div>
                                                                <input type="text" class="form-control" id="ktp_old"
                                                                    aria-describedby="emailHelp" name="ktp_old"
                                                                    value="<?=$ktp?>" hidden>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Hapus Data User -->
                                            <div class="modal fade" id="hapus<?= $id_user ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                User
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?php echo base_url()?>User/hapus_user"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo $id_user?>" />
                                                                        <input type="text" name="logo_usaha_old"
                                                                            value="<?php echo $ktp?>" hidden />
                                                                        <input type="text" name="ktp_old"
                                                                            value="<?php echo $ktp?>" hidden />

                                                                        <p>Apakah kamu yakin ingin menghapus data
                                                                            ini?</i></b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger ripple"
                                                                        data-dismiss="modal">Tidak</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success ripple save-category">Ya</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Verifikasi Data -->
                                            <div class="modal fade" id="setuju<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi
                                                                Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>User/verifikasi_data/4"
                                                                method="POST">
                                                                <input type="text" name="id_user" value="<?=$id_user?>"
                                                                    hidden>
                                                                <input type="text" name="email" value="<?=$email?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="pesan" required>Pesan</label>
                                                                    <textarea class="form-control" id="pesan" rows="3"
                                                                        name="pesan">Kepada yang terhormat Bpk/Ibu <?=$username?> Data yang anda kirim sudah diverifikasi admin, 
Harap cek secara berkala dengan login ke aplikasi untuk informasi lebih lanjut. Terimakasih</textarea>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Tolak Data -->
                                            <div class="modal fade" id="tidak_setuju<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tolak
                                                                Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>User/verifikasi_data/3"
                                                                method="POST">
                                                                <input type="text" name="id_user" value="<?=$id_user?>"
                                                                    hidden>
                                                                <input type="text" name="email" value="<?=$email?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="pesan" required>Pesan</label>
                                                                    <textarea class="form-control" id="pesan" rows="3"
                                                                        name="pesan">Kepada yang terhormat Bpk/Ibu <?=$username?> Data yang anda kirim kurang lengkap,
Diharapkan untuk melengkapi data nya terlebih dahulu, lalu lakukan pendaftaran ulang pada aplikasi. Terimakasih</textarea>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <!-- Modal -->
                <div class="modal fade" id="tambah_user" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url();?>User/tambah_user" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            aria-describedby="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password"
                                            aria-describedby="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" aria-describedby="email"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telp">No HP</label>
                                        <input type="text" class="form-control" id="no_telp" aria-describedby="no_telp"
                                            name="no_telp">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Usaha</label>
                                        <input type="text" class="form-control" id="nama_lengkap"
                                            aria-describedby="nama_lengkap" name="nama_lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" aria-describedby="nik"
                                            name="nik" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir"
                                            aria-describedby="tempat_lahir" name="tempat_lahir"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir"
                                            aria-describedby="tanggal_lahir" name="tanggal_lahir"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="penanggung_jawab">Penanggung
                                            Jawab</label>
                                        <input type="text" class="form-control" id="penanggung_jawab"
                                            aria-describedby="penanggung_jawab" name="penanggung_jawab"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_usaha">Jenis Usaha</label>
                                        <input type="text" class="form-control" id="jenis_usaha"
                                            aria-describedby="jenis_usaha" name="jenis_usaha"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_usaha">Nama Usaha</label>
                                        <input type="text" class="form-control" id="nama_usaha"
                                            aria-describedby="nama_usaha" name="nama_usaha"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_produk_jasa">Jenis
                                            Produk/Jasa</label>
                                        <input type="text" class="form-control" id="jenis_produk_jasa"
                                            aria-describedby="jenis_produk_jasa" name="jenis_produk_jasa"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="merk_produk_jasa">Merk
                                            Produk/Jasa</label>
                                        <input type="text" class="form-control" id="merk_produk_jasa"
                                            aria-describedby="merk_produk_jasa" name="merk_produk_jasa"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kapasitas_usaha">Kapasitas Usaha</label>
                                        <input type="text" class="form-control" id="kapasitas_usaha"
                                            aria-describedby="kapasitas_usaha" name="kapasitas_usaha"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendapatan">Pendaptan</label>
                                        <input type="text" class="form-control" id="pendapatan"
                                            aria-describedby="pendapatan" name="pendapatan" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="mulai_usaha">Mulai Usaha</label>
                                        <input type="date" class="form-control" id="mulai_usaha"
                                            aria-describedby="mulai_usaha" name="mulai_usaha"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_karyawan">Jumlah Karyawan</label>
                                        <input type="text" class="form-control" id="jumlah_karyawan"
                                            aria-describedby="jumlah_karyawan" name="jumlah_karyawan"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="mesin_produksi">Mesin Produksi</label>
                                        <input type="text" class="form-control" id="mesin_produksi"
                                            aria-describedby="mesin_produksi" name="mesin_produksi"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="luas_lahan_ruang">Luas
                                            Lahan/Ruang</label>
                                        <input type="text" class="form-control" id="luas_lahan_ruang"
                                            aria-describedby="luas_lahan_ruang" name="luas_lahan_ruang"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ijin_dimiliki">Ijin Dimiliki</label>
                                        <input type="text" class="form-control" id="ijin_dimiliki"
                                            aria-describedby="ijin_dimiliki" name="ijin_dimiliki"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="keluhan_usaha">Keluhan Usaha</label>
                                        <input type="text" class="form-control" id="keluhan_usaha"
                                            aria-describedby="keluhan_usaha" name="keluhan_usaha"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo_usaha">Logo Usaha</label>
                                        <input type="file" class="form-control" id="logo_usaha"
                                            aria-describedby="logo_usaha" name="logo_usaha">
                                    </div>
                                    <div class="form-group">
                                        <label for="ktp">KTP</label>
                                        <input type="file" class="form-control" id="ktp"
                                            aria-describedby="ktp" name="ktp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
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

    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>