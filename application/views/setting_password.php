<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISM-DWM</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?= base_url();?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/login/css/style.css">
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="<?= base_url() ?>assets/image/logo.jpg" />
</head>

<body>
    

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Password Gagal Diubah !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('password_err')){ ?>
    <script>
    swal({
        title: "Error Password!",
        text: "Ketik Ulang Password!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Buat Password Baru</h2>
                        <form method="POST" class="register-form"
                            action="<?=base_url()?>ForgotPassword/setting_account/<?=$user['id']?>/<?=$user['token']?>"
                            id="register-form">

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_pass"
                                    placeholder="Repeat your password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url();?>assets/login/images/hipmikindo_logo.jpeg" alt="sing up image">
                        </figure>

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