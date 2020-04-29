<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <meta name="description"
        content="Kumpulan pemuda yang bergerak dalam mendukung pemerintah dalam memerangi covid-19 dalam hal membantu masyarakat yang membutuhkan untuk dapat terus melanjutkan kehidupan mereka.">
    <link rel="icon" type="image/png" href="media/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Charities Of Humanity - @yield('title')</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light ">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="/"><span class="logo-default"><img
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1588124395/cos/media/menu_bcshuq.png"
                                    alt=""></span><span class="logo-dark"><img
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1588124395/cos/media/menu_bcshuq.png"
                                    alt=""></span></a> </div>
                    <!--End: Logo-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>

                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/tentang-kami">Tentang Kami</a></li>
                                    <li><a href="/faq">F.A.Q</a>
                                        {{-- <li><a href="/menjadi-relawan">Menjadi
                                            Relawan</a></li> --}}
                                    <li><a href="/donasi">Donasi</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        @yield('content')
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">More from CFH.</div>
                                        <ul class="list">
                                            <li><a href="/konfirmasi-pembayaran">Konfirmasi Pembayaran</a></li>
                                            <li><a href="/donasi">Donasi</a></li>
                                            <li><a href="/rekening-donasi">Rekening Donasi</a></li>
                                            {{-- <li><a href="/membership-register">Daftar menjadi relawan</a></li> --}}
                                            <li><a href="/kontak-kami">Kontak Kami</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="/faq">Pertanyaan yang sering diajukan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">
                        <span class="leftfooter">
                            &copy; 2020 Charities For Humanity.
                        </span>
                    </div>
                </div>
            </div>
    </div>
    </footer>
    <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>
    <script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3/map-styles.js"></script>

</body>

</html>
