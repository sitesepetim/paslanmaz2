<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from html.tonatheme.com/2022/welbim/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:35 GMT -->
<head>
    <meta charset="utf-8">
    <title>Ürünlerimiz | HUZEY METAL </title>
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
    <section class="page-title" style="background-image: url(assets/images/background/SAYFALAR-SLİDER.jpeg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>ürünler</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ana sayfa</a></li>
                        <li>ürünler</li>
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
                        <div class="image"><img src="assets/images/resource/PASLANMAZ ÇELİK.jpg" alt="PASLANMAZ ÇELİK"></div>
                        <h4><a href="{{route('paslanmaz_celik')}}">Paslanmaz Çelİk</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ MİL.jpeg" alt="PASLANMAZ MİL"></div>
                        <h4><a href="{{route('paslanmaz-mil-cubuk')}}">Paslanmaz Mİl (Çubuk)</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ KARE PROFİL.jpeg" alt="PASLANMAZ KARE PROFİL"></div>
                        <h4><a href="{{route('paslanmaz-kare')}}">Paslanmaz Kare Profİl </a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ TEL.jpeg" alt="PASLANMAZ TEl"></div>
                        <h4><a href="{{route('paslanmaz-tel')}}">Paslanmaz Tel (Kanga Tel)</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ LAMA.jpeg" alt="PASLANMAZ LAMA"></div>
                        <h4><a href="{{route('paslanmaz-lama')}}">Paslanmaz Lama</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ FİTTİNGS.jpeg" alt="PASLANMAZ FİTTİNGS"></div>
                        <h4><a href="{{route('paslanmaz-fitting')}}">Paslanmaz Fittings</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ KÜPEŞTE.jpeg" alt="PASLANMAZ KÜPEŞTE"></div>
                        <h4><a href="{{route('paslanmaz-kupeste')}}">Paslanmaz Küpeşte</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ KÖŞEBENT.jpeg" alt="PASLANMAZ KÖŞEBENT"></div>
                        <h4><a href="{{route('paslanmaz-kosebent')}}">Paslanmaz Köşebent</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ PROFİL.png" alt="PASLANMAZ PROFİL"></div>
                        <h4><a href="{{route('paslanmaz-profil')}}">Paslanmaz Profİl</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ BORU.jpeg" alt="PASLANMAZ BORU"></div>
                        <h4><a href="{{route('paslanmaz-boru')}}">Paslanmaz Boru</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ SAC.jpeg" alt="PASLANMAZ SAC"></div>
                        <h4><a href="{{route('paslanmaz-sac')}}">Paslanmaz Sac</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ RULO.jpeg" alt="PASLANMAZ RULO"></div>
                        <h4><a href="{{route('paslanmaz-rulo')}}">Paslanmaz Rulo</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ ŞERİT.jpeg" alt="PASLANMAZ ŞERİT"></div>
                        <h4><a href="{{route('paslanmaz-serit')}}">Paslanmaz Şerİt</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="assets/images/resource/PASLANMAZ ÇEKME BORU.jpeg" alt="PASLANMAZ ÇEKME BORU"></div>
                        <h4><a href="{{route('paslanmaz-cekme')}}">Paslanmaz Çekme Boru</a></h4>
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

<!-- Mirrored from html.tonatheme.com/2022/welbim/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:36 GMT -->
</html>













