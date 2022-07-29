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


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="#">HIPMIKINDO</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Profil</a></li>

                    <li><a class="nav-link scrollto" href="#about">Galeri</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">UMKM</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1>WEBSITE INFROMASI HIPMIKINDO</h1>
                        <h2>Himpunan Pengusaha Mikro dan Kecil Indonesia</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="<?= base_url();?>assets/public_page/img/home_logo.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="<?= base_url();?>assets/image/bersama.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3>Sekilas Tentang Kami</h3>
                            <p class="fst-italic">
                                Organisasi ini bernama himpunan pengusaha mikro dan kecil Indonesia disingkat dengan
                                nama hipmikindo.
                                Usaha mikro dan kecil Indonesia (hipmikindo) didirikan pada hari Jumat tanggal
                                08-08-2008 di daerah khususnya Ibu kota Jakarta dalam waktu yang tidak di tentukan.
                            </p>

                            <h3>Visi Kami</h3>
                            <p>
                                Adapun visi Hipmikindo adalah Terwujudnya pengusaha Mikro dan kecil yang mandiri,
                                sejahtera, adil dan produktif guna membangun daya saing dalam dunia usaha.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item" data-aos="fade-up">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Para Pendiri HIPMIKINDO</h4>
                                    <p>Dr. Syahnan Phalipi, SH.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <p>Drs. H. Djaya Sukma.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">

                                    <p>Drs. Henry Bahri.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <p>JP Tri Harijanto</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                                    <p>Jurika Pratiwi</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="<?= base_url();?>assets/public_page/img/features-1.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="<?= base_url();?>assets/public_page/img/features-2.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="<?= base_url();?>assets/public_page/img/features-3.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="<?= base_url();?>assets/public_page/img/features-4.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <figure>
                                    <img src="<?= base_url();?>assets/public_page/img/features-4.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->



        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Anggota UMKM</h2>
                    <p>Berikut UMKM yang ada di dalam naungan kami.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
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
                                            $alamat = $i['alamat'];
                                            $logo_usaha = $i['logo_usaha'];
                                            $password = $i['password'];
                                            

                                            ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url();?>assets/foto/<?=$logo_usaha?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?=$nama_lengkap?></h4>
                                <p><?=$no_telp?></p>
                            </div>
                            <div class="portfolio-links">
                                <a href="<?= base_url();?>assets/foto/<?=$logo_usaha?>" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="<?=base_url();?>Web_Public/detail_user/<?=$id_user?>" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>


                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Daftarkan UMKM mu Sekarang !</h3>
                        <p> Berikut pendaftaran UMKM mu.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?= base_url();?>Register/index">Daftar</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Temukan Kami</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Merdeka No.66, Talant Semut, Kec. Bukit Kecil, Kota Palembang, Sumatera Selatan
                                    30136</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>dpd.hipmikindo.sumsel@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>


                            <iframe
                                src="https://maps.google.com/maps?q=Jl.%20Merdeka%20No.66,%20Talant%20Semut,%20Kec.%20Bukit%20Kecil,%20Kota%20Palembang,%20Sumatera%20Selatan%2030136&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>



                </div>

            </div>
        </section><!-- End Contact Section -->

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