@extends('welcome')
@section('title','Bersama Lawan Corona')
@section('content')
<div id=" slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360" data-autoplay="2600"
    data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">

    <!-- Slide 1 -->
    <div class="slide" data-bg-video="media/vid/example1.mp4">
        <div class="container">
            <div class="slide-captions text-left text-light">
                <div class="row">
                    <div class="col-9">
                        <h2 class="text-dark text-lg-x2" style="background-color:#ff0011 !important;">
                            #PemudaBergerak
                        </h2>
                        <p class="lead">Sudah saat nya kita pemuda juga ikutan untuk membantu pemerintah dalam
                            penanggulangan dan memerangi COVID-19. Penyebaran COVID-19 yang begitu masif di
                            Indonesia, sudah ribuan
                            jiwa terdeteksi positif dan ratusan jiwa telah meninggal dunia.<br>Ayo bersama
                            <b>#PemudaBergerak</b> menanggulangi COVID-19!</p>
                        <a href="/donasi" class="btn btn-light btn-outline">Berikan Bantuan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Slide 1 -->

</div>
<!--end: Inspiro Slider -->


<!-- WHY CHOOSE US -->
<section>
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Bersama Lawan Corona</h2>
                <p>Kami berharap, aksi ini dapat menjadi sumber kebahagiaan bagi para mereka yang membutuhkan
                    bantuan ini. Dengan nilai berapapun yang kamu donasikan, kamu sudah membantu 1 jiwa dengan
                    makanan dan vitamin gratis.</p>
                <h2>Kepada siapa kami membantu?</h2>
                <div class="accordion accordion-shadow">
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-heart"></i> Tunawisma, Orang yang membutuhkan</h5>
                        <div class="ac-content">
                            <p>Kami membagikan donasi ini kepada orang yang tidak memiliki tempat tinggal, dan
                                mereka yang terlantar diluar sana dan yang tidak dapat bantuan langsung dari
                                pemerintah. Donasi yang kamu berikan akan kami berikan berbentuk makanan gratis
                                hingga vitamin gratis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>DONASI TERHIMPUN</h2>
                <p><span class="donasiyet">Rp.1.000.000</span> terkumpul dari <span
                        class="targetdonasi">Rp.10.000.000</span></p>
                <div class="p-progress-bar-container radius">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1000000"
                        aria-valuemin="0" aria-valuemax="100" style="width:10%">
                        Rp.1.000.000 Terkumpul
                    </div>
                </div>
                <div class="text-center m-t-40">
                    <h2><span style="color:#ff0011 !important;"><b>18</b></span> <b>hari lagi</b></h2>
                    <a href="/donasi" class="btn btn-primary btn-rounded btn-lg">DONASI SEKARANG</a>
                </div>
            </div>
        </div>



    </div>

</section>
<!-- COUNTERS -->
<section class="text-light p-t-150 p-b-150"
    data-bg-parallax="https://res.cloudinary.com/sarjanamalam/image/upload/v1588128921/cos/media/bg-min_zsjmfw.jpg">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365"
                            data-from="100" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>Penerima Manfaat</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114"
                            data-from="50" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>Relawan</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825"
                            data-from="48" data-seperator="true"></span> </div>
                    <div class="seperator seperator-small"></div>
                    <p>Donatur</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: COUNTERS -->

<!-- BLOG -->
<section class="content background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2><span class="cfhstyle">CFH.</span> News</h2>
            <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis
                lacinia faucibus,
                orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius
                consequat magna, id
                molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi
                diam, non ornare
                orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
            </span>
        </div>
    </div>

    <div id="blog">
        <div class="container">
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt=""
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1588130467/cos/media/blog/1_laerrq.jpg">
                            </a>
                            <span class="post-meta-category"><a href="">Lifestyle</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21,
                                2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                    Comments</a></span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac.
                                Vivamus luctus
                                commodo dolor porta feugiat. Fusce at velit id ligula pharetra
                                laoreet.</p>

                            <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->

                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt=""
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1588130467/cos/media/blog/2_uh85mr.jpg">
                            </a>
                            <span class="post-meta-category"><a href="">Science</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21,
                                2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                    Comments</a></span>

                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac.
                                Vivamus luctus
                                commodo dolor porta feugiat. Fusce at velit id ligula pharetra
                                laoreet.</p>

                            <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->


                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt=""
                                    src="https://res.cloudinary.com/sarjanamalam/image/upload/v1588130468/cos/media/blog/3_gdtv59.jpg">
                            </a>
                            <span class="post-meta-category"><a href="">Science</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21,
                                2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                    Comments</a></span>

                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac.
                                Vivamus luctus
                                commodo dolor porta feugiat. Fusce at velit id ligula pharetra
                                laoreet.</p>

                            <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
            </div>
        </div>
    </div>
</section>
<!-- end: BLOG -->
@endsection
