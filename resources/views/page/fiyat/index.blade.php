<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from html.tonatheme.com/2022/welbim/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:35 GMT -->
<head>
    <meta charset="utf-8">
    <title>Fiyat Listesi | Huzey Metal</title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{asset('assets/css/color.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- Main Header -->
@include('layouts.header')
<!-- End Main Header -->


    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://html.tonatheme.com/2022/welbim/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-9.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Fiyat Listesi</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                        <li>Fiyat Listesi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects section -->
    <section class="projects-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Sac Fİyatları.jpg" alt="304 Paslanmaz Sac Fİyatları"></div>
                        <h4><a href="{{route('304_sac_fiyat')}}">304 Paslanmaz Sac Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/316 Paslanmaz Sac Fİyatları.jpg" alt="316 Paslanmaz Sac Fİyatları"></div>
                        <h4><a href="{{route('316_sac_fiyat')}}">316 Paslanmaz Sac Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/430 Paslanmaz Sac Fİyatları.jpg" alt="430 Paslanmaz Sac Fİyatları"></div>
                        <h4><a href="{{route('430_sac_fiyat')}}">430 Paslanmaz Sac Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/309 Paslanmaz Sac Fİyatları.jpeg" alt="309 Paslanmaz Sac Fİyatları"></div>
                        <h4><a href="{{route('309_sac_fiyat')}}">309 Paslanmaz Sac Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/310 Paslanmaz Sac Fİyatları.jpeg" alt="310 Paslanmaz Sac Fİyatları"></div>
                        <h4><a href="{{route('310_sac_fiyat')}}">310 Paslanmaz Sac Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Boru Fİyatları.jpg" alt="304 Paslanmaz Boru Fİyatları"></div>
                        <h4><a href="{{route('304_boru_fiyat')}}">304 Paslanmaz Boru Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Kare Profil FİyatLARI.jpg" alt="304 Paslanmaz Kare Profil FİyatLARI"></div>
                        <h4><a href="{{route('304_kare_fiyat')}}">304 Paslanmaz Kare Profil FİyatLARI</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Dİkdörtgen Profİl FiyatLARI.jpeg" alt="304 Paslanmaz Dİkdörtgen Profİl FiyatLARI"></div>
                        <h4><a href="{{route('304_dik_fiyat')}}">304 Paslanmaz Dİkdörtgen Profİl FiyatLARI</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Çubuk Fİyatları.jpeg" alt="304 Paslanmaz Çubuk Fİyatları"></div>
                        <h4><a href="{{route('304_cubuk_fiyat')}}">304 Paslanmaz Çubuk Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/316 Paslanmaz Çubuk Fİyatları.jpg" alt="316 Paslanmaz Çubuk Fİyatları"></div>
                        <h4><a href="{{route('316_cubuk_fiyat')}}">316 Paslanmaz Çubuk Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Lama Fİyatları.jpeg" alt="304 Paslanmaz Lama Fİyatları"></div>
                        <h4><a href="{{route('304_lama_fiyat')}}">304 Paslanmaz Lama Fİyatları</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/304 Paslanmaz Köşebent Fİyatları.jpeg" alt="304 Paslanmaz Köşebent Fİyatları"></div>
                        <h4><a href="{{route('304_kose_fiyat')}}">304 Paslanmaz Köşebent Fİyatları</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer1')
    @include('layouts.footer2')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-4"></span></div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/lazyload.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/parallax-scroll.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>


</body>

<!-- Mirrored from html.tonatheme.com/2022/welbim/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:36 GMT -->
</html>













