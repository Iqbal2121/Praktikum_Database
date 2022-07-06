<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Data</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.png" type="image/png' ?>">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/magnific-popup.css' ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/slick.css' ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/LineIcons.css' ?>">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/default.css' ?>">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url() . 'assets/images/logo.svg' ?>" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#prodi">Prodi</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#Mahasiswa">Mahasiswa</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#Dosen">Dosen</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="<?php echo base_url() . 'index.php/login' ?>">Login</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Business is Now Digital</h1>
                                    <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?php echo base_url() . 'assets/images/slider/1.png' ?>" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Crafted for Business</h1>
                                    <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?php echo base_url() . 'assets/images/slider/2.png' ?>" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Based on Bootstrap 4</h1>
                                    <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?php echo base_url() . 'assets/images/slider/3.png' ?>" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Prodi</h3>
                        <div class="container mt-3 mx-auto ">
                            <div class="table-responsive">
                                <table class="table table-light table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>KODE</th>
                                            <th>Nama Prodi</th>
                                            <th>Ketua Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($list_prodi as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $row->kode ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->kaprodi ?></td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- row -->
                    </div>
                </div> <!-- row -->

            </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Mahasiswa</h3>
                        <div class="container mt-3 mx-auto ">
                            <div class="table-responsive">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>IPK</th>
                                            <th>Kode Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($list_mahasiswa as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $row->nim ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->gender ?></td>
                                                <td><?= $row->tmp_lahir . ", " . $row->tgl_lahir ?></td>
                                                <td><?= $row->ipk ?></td>
                                                <td><?= $row->prodi_kode ?></td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

        </div>
        </div> <!-- row -->
        </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== PRINICNG START ======-->

    <section id="pricing" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Dosen</h3>
                        <div class="container mt-3 mx-auto ">
                            <div class="table-responsive">
                                <table class="table table-light table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIDN</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Pendidikan Akhir</th>
                                            <th>Kode Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($list_dosen as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $row->nidn ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->gender ?></td>
                                                <td><?= $row->tmp_lahir ?>, <?= $row->tgl_lahir ?></td>
                                                <td><?= $row->pendidikan_akhir ?></td>
                                                <td><?= $row->prodi_kode ?></td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG ENDS ======-->

    <!--====== ABOU

    <!-====== TESTIMONIAL PART START ======-->



    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM START ======-->

    <!--====== TEAM  ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text"> Elizabeth St, Melbourne<br>1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@ayroui.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+333 789-321-654</p>
                                <p class="text">+333 985-458-609</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>

                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <-- form input -->

            </form>
        </div> <!-- contact wrapper form -->
        </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="<?php echo base_url() . 'assets/images/logo.svg' ?>" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@uideck.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="<?php echo base_url() . 'assets/js/vendor/jquery-1.12.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/vendor/modernizr-3.7.1.min.js' ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url() . 'assets/js/popper.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url() . 'assets/js/slick.min.js' ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url() . 'assets/js/jquery.magnific-popup.min.js' ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?php echo base_url() . 'assets/js/ajax-contact.js' ?>"></script>

    <!--====== Isotope js ======-->
    <script src="<?php echo base_url() . 'assets/js/imagesloaded.pkgd.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/isotope.pkgd.min.js' ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url() . 'assets/js/jquery.easing.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/scrolling-nav.js' ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url() . 'assets/js/main.js' ?>"></script>

</body>

</html>