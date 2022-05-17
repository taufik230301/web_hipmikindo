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
                                            $nama_usaha = $i['nama_usaha'];
                                            $alamat = $i['alamat'];
                                            $logo_usaha = $i['logo_usaha'];
                                            $password = $i['password'];
                                               

                                            ?>
                            <form action="<?=base_url();?>Form_daftar/daftar_user" method="POST"
                                enctype="multipart/form-data">
                                <input type="text" name="id" value="<?= $id_user ?>" hidden>
                                <div class="form-group">
                                    <label for="nama_usaha">Nama Usaha</label>
                                    <input type="text" class="form-control" id="nama_usaha"
                                        aria-describedby="nama_usaha" name="nama_usaha" value="<?= $nama_usaha ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" name="alamat"><?=$alamat?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="logo_usaha">Logo Usaha</label>
                                    <input type="file" class="form-control" id="logo_usaha"
                                        aria-describedby="logo_usaha" name="logo_usaha">
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
                                <button type="submit" class="btn btn-primary">Submit</button>
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