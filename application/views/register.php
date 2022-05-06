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

    <!-- SweetAlert -->
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
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
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form"
                            action="<?=base_url();?>Register/proses">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="no_telp"><i class="zmdi zmdi-phone"></i></label>
                                <input type="no_telp" name="no_telp" id="no_telp" placeholder="Your Phone" required/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url();?>assets/login/images/hipmikindo_logo.jpeg"
                                alt="sing up image"></figure>
                        <a href="<?=base_url();?>Login" class="signup-image-link">Saya Sudah Terdaftar</a>
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