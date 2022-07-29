<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB - HIPMIKINDO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/image/favico.ico" rel="icon">
    <link href="<?= base_url() ?>assets/image/favico.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url();?>assets/public_page/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public_page/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public_page/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public_page/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public_page/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url();?>assets/public_page/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="index.html">HIPMIKINDO</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="<?=base_url();?>Web_Public/index">Home</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?=base_url();?>Web_Public/index">Home</a></li>
                    <li>Detail Perusahaan</li>
                </ol>
                <h2>Detail Perusahaan</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="<?= base_url();?>assets/foto/<?=$data_user['logo_usaha']?>" alt="">
                                </div>

                            </div>
                            <div class="mt-5">
                                <iframe src="https://maps.google.com/maps?q=<?=$data_user['alamat']?>&output=embed"
                                    frameborder="0" style="border:0; width: 100%; height: 290px;"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Perusahaan</h3>
                            <ul>
                                <li><strong>Nama Usaha</strong> : <?=$data_user['nama_usaha']?></li>
                                <li><strong>Penangung Jawab</strong>: <?=$data_user['penanggung_jawab']?></li>
                                <li><strong>Jenis usaha</strong>: <?=$data_user['jenis_usaha']?></li>
                                <li><strong>Jenis Produk/Jasa</strong>: <?=$data_user['jenis_produk_jasa']?></li>
                                <li><strong>Merk Produk/Jasa</strong>: <?=$data_user['merk_produk_jasa']?></li>
                                <li><strong>Kapasitas Usaha</strong>: <?=$data_user['kapasitas_usaha']?></li>
                                <li><strong>Pendapatan</strong>: <?=$data_user['pendapatan']?></li>
                                <li><strong>Mulai Usaha</strong>: <?=$data_user['mulai_usaha']?></li>
                                <li><strong>Jumlah Karyawan</strong>: <?=$data_user['jumlah_karyawan']?></li>
                                <li><strong>Mesin Produksi</strong>: <?=$data_user['mesin_produksi']?></li>
                                <li><strong>Luas Lahan/Ruang</strong>: <?=$data_user['luas_lahan_ruang']?></li>
                                <li><strong>Ijin Dimiliki</strong>: <?=$data_user['ijin_dimiliki']?></li>
                            </ul>
                        </div>

                        <div class="portfolio-description">
                            <h2>Alamat</h2>
                            <p>
                                <?=$data_user['alamat']?>
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-md-6">
                        <div class="footer-info">
                            <h3>HIPMIKINDO</h3>
                            <p>
                                Jl. Merdeka No.66, Talant Semut, Kec. Bukit Kecil <br>
                                Kota Palembang, Sumatera Selatan 30136<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> dpd.hipmikindo.sumsel@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">UMKM</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>HIPMIKINDO</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url();?>assets/public_page/vendor/aos/aos.js"></script>
    <script src="<?= base_url();?>assets/public_page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public_page/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url();?>assets/public_page/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/public_page/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public_page/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url();?>assets/public_page/js/main.js"></script>

</body>

</html>