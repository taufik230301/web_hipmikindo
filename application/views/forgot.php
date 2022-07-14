<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEB-HIPMIKINDO</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?= base_url();?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/login/css/style.css">
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="<?= base_url() ?>assets/image/logo.jpg" />
</head>

<body>
    <?php if ($this->session->flashdata('error_send_no_email')){ ?>
    <script>
    swal({
        title: "Error Email!",
        text: "Email Anda Tidak Ditemukan!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_send')){ ?>
    <script>
    swal({
        title: "Error Email!",
        text: "Gagal Mengirim Request!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_input')){ ?>
    <script>
    swal({
        title: "Error Update Token!",
        text: "Gagal Mengirim Request!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url();?>assets/login/images/hipmikindo_logo.jpeg" alt="sing up image"></figure>
                        <a href="<?= base_url()?>Register/index" class="signup-image-link">Buat akun !</a>
                        <a href="<?= base_url()?>ForgotPassword/index" class="signup-image-link">Lupa Password ?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Masukan Email</h2>
                        <form method="POST" class="register-form" id="login-form"
                            action="<?= base_url()?>ForgotPassword/proses">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Masukan Email" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="Send Settings Request" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url();?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>