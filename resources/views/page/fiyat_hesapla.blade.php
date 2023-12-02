<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from html.tonatheme.com/2022/welbim/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:34 GMT -->
<head>
    <meta charset="utf-8">
    <title>Ağırlık Hesaplama || Huzey Metal </title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    @include('layouts.head')

</head>

<body>
@include('layouts.body')

<div class="page-wrapper">
    <!-- Preloader -->


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
    <section class="page-title" style="background-image: url(assets/images/background/SAYFALAR-SLİDER.jpeg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Ağırlık Hesaplama</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li>Ağırlık Hesaplama</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ BORU.jpeg" alt="Paslanmaz Boru Ağırlık"></div>
                        <div class="content">
                            <h3><a href="{{route('boru_agirlik')}}"> Paslanmaz Boru Ağırlık <br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('boru_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ MİL.jpeg" alt=" Paslanmaz Çubuk Ağırlık"></div>
                        <div class="content">
                            <h3><a href="{{route('cubuk_agirlik')}}"> Paslanmaz Çubuk Ağırlık <br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('cubuk_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ KÖŞEBENT.jpeg" alt="Paslanmaz Köşebent Ağırlık"></div>
                        <div class="content">
                            <h3><a href="{{route('kosebent_agirlik')}}"> Paslanmaz Köşebent Ağırlık <br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('kosebent_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ LAMA.jpeg" alt="Paslanmaz Lama Ağırlık  "></div>
                        <div class="content">
                            <h3><a href="{{route('lama_agirlik')}}"> Paslanmaz Lama Ağırlık  <br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('lama_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ SAC.jpeg" alt="Paslanmaz Saç Ağırlık"></div>
                        <div class="content">
                            <h3><a href="{{route('sac_agirlik')}}"> Paslanmaz Saç Ağırlık<br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('sac_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ PROFİL.png" alt="Paslanmaz Kutu Profil Ağırlık"></div>
                        <div class="content">
                            <h3><a href="{{route('kutu_agirlik')}}"> Paslanmaz Kutu Profil Ağırlık <br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('kutu_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="assets/images/resource/PASLANMAZ KARE PROFİL.jpeg" alt="Paslanmaz Kare Profil Ağırlık"></div>
                        <div class="content">
                            <h3><a href="{{route('kare_agirlik')}}"> Paslanmaz Kare Profil Ağırlık <br>Hesaplama</a></h3>
                            <div class="link">
                                <a href="{{route('kare_agirlik')}}" class="theme-btn btn-style-one"><span>DETAYLI BİLGİ</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Main Footer-->
    @include('layouts.footer1')
    @include('layouts.footer2')


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-4"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>

<!-- Mirrored from html.tonatheme.com/2022/welbim/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:35 GMT -->
</html>













