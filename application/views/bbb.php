<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Dimas Katring</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?= base_url('frontend') ?>/css/flaticon.css" />

        <!-- Animate -->
        <link rel="stylesheet" href="<?= base_url('frontend') ?>/css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="<?= base_url('frontend') ?>/css/bootsnav.css">
        <!-- Color style -->
        <link rel="stylesheet" href="<?= base_url('frontend') ?>/css/color.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="<?= base_url('frontend') ?>/css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->
        <!-- Navbar -->
        <nav class="navbar navbar-default bootsnav no-background navbar-fixed black">
            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="<?= base_url('frontend') ?>/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Menu</h6>
                    <ul class="link">
                        <li><a href="#">Tentang Kita</a></li>
                        <li><a href="#">Pelayanan</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Kontak kami</a></li>
                        <li><a href="<?php echo base_url(); ?>Coba/daftarUserBaru">daftar</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>

        <!-- Header -->
        <header id="hello">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner">
                            <h3>-CATRING-</h3>
                            <h1>DIMAS & FRIENDS</h1>

                            <div class="inner_banner" container>
                                <div class="banner_content">
                                    <p>.Sejarah catering bukanlah topik yang diketahui oleh banyak orang tetapi siapa sangka bahwa topik ini sangatlah menarik. Jasa memasak ternyata sudah ada pada tahun ke-4 sebelum masehi, di china. tetapi sebetulnya budaya makan bersama sudah ada terlebih dahulu sebelum itu,</p>
                                    <p>Semoga sukses selalu.</p>
                                </div>
                                <div class="stamp">
                                    <img src="<?= base_url('frontend') ?>/images/stamp.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container end -->
            <p class="caption">*Limited Time Only</p>
        </header><!-- Header end -->

        <!-- Block Content -->
        <section id="block">
            <div class="container">

                <!-- First section -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="feature">
                            <div class="shack_burger">
                                <div class="chicken">
                                    <img src="<?= base_url('frontend') ?>/images/chicken.png" alt="Chicken" />
                                </div>

                                <h2>Daging Salmon Pilihan </h2>
                                <p color="black">Daging salmon pilihan ini diexpor langsung dari bosnia, dengan menggunakan kapal terbaik</p>
                            </div>
                            <p class="caption">*Limited Time Only</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="signature">
                            <div class="shape">
                                <span class="flaticon flaticon-burger"></span>
                                <p>signature</p>
                            </div>
                            <div class="signature_content">
                                <p>It used to be a Secret but not any more! Our tribute to the King is a Cheddar Beef Patty,</p>
                            </div>
                        </div>
                    </div>
                </div><!-- first section end -->

                <!-- Second section -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="classic">
                            <a href="" class="classic_btn">classic</a>

                            <div class="overlay">
                                <h3>Katring dimas</h3>
                                <p>(kami akan melanani anda sampe puas).</p>

                                <p class="overlay_content">makanan bergizi dengan kualitas terbaik, dan ada juga masakan rumahan bergizi cocok untuk anda yang malas memsak, bayar kami mahal perut anda akan kenyang.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Carousel -->
                        <div id="small_carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#small_carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#small_carousel" data-slide-to="1"></li>
                                <li data-target="#small_carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-caption">
                                <h3>Dimas Katring</h3>
                                <hr />

                                <ul class="list-unstyled nutrition">
                                    <li><a href=""><span class="flaticon flaticon-protein"></span><p>Protein - 33g</p></a></li>
                                    <li><a href=""><span class="flaticon flaticon-carbohydrate"></span><p>Mineral- 46gm</p></a></li>
                                    <li><a href=""><span class="flaticon flaticon-calories"></span><p>Kalori - 750 kcal</p></a></li>
                                </ul>
                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrisi</a>
                                </div>
                            </div>

                            <!-- carousel inner -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="<?= base_url('frontend') ?>/images/11.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?= base_url('frontend') ?>/images/ee.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?= base_url('frontend') ?>/images/snak.jpg" alt="" />
                                </div>
                            </div><!-- carousel inner end -->
                        </div><!-- Carousel end-->
                    </div>
                </div><!-- second section end -->

                <!-- Third section -->
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?= base_url('frontend') ?>/images/large_slider_img.JPG" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Catring Dimasl</h2>
                                <h3>Demi Tugas Berfaedah</h3>

                                <p>Katring ini memberi anda pelayanan bagi perusahaan dan rumahan, makanan disini sangat bergizi dan memberi kualitas yang maksimal</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('frontend') ?>/images/mkSlide2.JPG" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Dimas Katring</h2>
                                <h3>Kepuasan anda sangat berarti bagi kama</h3>

                                <p>Gaji yang anda trima perbulan sebaiknya belikan produk kami, karena anda akan puas dan sehat, ada juga yang rendah lemak dan membuat berat badan tetap ideal.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('frontend') ?>/images/slideAyam.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Dimas Katring</h2>
                                <h3>Melayani Sepuas Hati</h3>

                                <p>Makanan sehat merupakan makanan yang bebas dari bahan berbahaya dan mengandung gizi yang bermanfaat untuk tubuh kita.</p>

                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->

                <!-- Forth section -->
                <div class="row forth_sec">
                    <div class="col-sm-4">
                        <div class="menu">
                            <div class="inner_content">
                                <span class="flaticon flaticon-burger"></span>
                                <h2>Makanan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="drinks">
                            <div class="inner_content">
                                <span class="flaticon flaticon-drink"></span>
                                <h2>Minuman</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="sides">
                            <div class="inner_content">
                                <span class="flaticon flaticon-food"></span>
                                <h2>makanan ringan</h2>
                            </div>
                        </div>
                    </div>
                </div><!-- forth section end -->
            </div>
        </section><!-- Block Content end-->

        <!-- Lock -->
        <section id="lock">
            <h2>BERDIRI SEJAK 18 JUNI 2018 SAMPE KIAMAT</h2>
            <p>melayani pesanan dan sponsor sip, untuk info lebih lanjut hubungi kontak dibawah ini.</p>
        </section>

        <!-- Map -->
        <div id="ourmaps"></div>

        <!-- Footer -->
        <footer>
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="subscribe">
                            <h4>Subscribe now</h4>
                            <p>Subscribe to the newsletter and
                                get some crispy stuff every week.</p>

                            <form role="form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="em" placeholder="Enter your e-mail here">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn send_btn">
                                                <i class="glyphicon glyphicon-send"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="contact_us">
                            <h4>Contact Us</h4>
                            <a href="">Catring@sukses.com</a>

                            <address>
                                Jalan Soekarno Hatta<br />
                                58200 Malang <br />
                                Jawa Timur <br />
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                        <div class="basic_info">
                            <a href=""><img class="footer_logo" src="<?= base_url('frontend') ?>/images/footer_logo.png" alt="Burger" /></a>

                            <ul class="list-inline social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="" class="fa fa-instagram"></a></li>
                            </ul>

                            <div class="footer-copyright">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Made with
                                    <i class="fa fa-heart"></i>
                                    by
                                    <a target="_blank" href="http://bootstrapthemes.co">Dimas Crew</a> <br />
                                    2018. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- Container end -->
        </footer><!-- Footer end -->


        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="<?= base_url('frontend') ?>/js/jquery-1.12.1.min.js"></script>
        <script src="<?= base_url('frontend') ?>/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="<?= base_url('frontend') ?>/js/bootsnav.js"></script>



        <!--main js-->
        <script type="text/javascript" src="<?= base_url('frontend') ?>/js/main.js"></script>
    </body>
</html>
