<!DOCTYPE html>
<html lang="tr">


<!-- Mirrored from layerdrops.com/insur/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2022 08:02:31 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('title')
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Site Sepetim" />
    <meta property="og:url" content="http://sitesepetim.com/" />
    <meta property="og:site_name" content="Site Sepetim" />

    @yield('desc')

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/insur-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/insur-two-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="{{asset('assets/css/insur.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/insur-responsive.css')}}" />

</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<style>.float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="tel:+902884175787" class="float" target="_blank">
    <i class="fa fa-phone my-float"></i>
</a>




<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header clearfix">
        <div class="main-header__top">
            <div class="container">
                <div class="main-header__top-inner">
                    <div class="main-header__top-address">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="icon-pin"></span>
                                </i>
                                <div class="text">
                                    <p> Lüleburgaz / Kırklareli</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="icon-email"></span>
                                </i>
                                <div class="text">
                                    <p><a href="mailto:asaf@asafsigorta.com.tr">asaf@asafsigorta.com.tr</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-menu-box">
                            <ul class="list-unstyled main-header__top-menu">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <li><a href="{{route('login')}}">Hesabım</a></li>
                                <li><a href="{{route('admin.police')}}">Poliçelerim</a></li>
                                @if(\Illuminate\Support\Facades\Auth::user()->id==1)

                                        @if(\App\Models\iletisimFormu::where('status','=',0)->count() >0)

                                            <li><a href="{{route('admin.iletisim.formu')}}"> İletişim Formu <span style="margin-left: 10px" class="badge badge-success"> +{{\App\Models\iletisimFormu::where('status','=',0)->count()}}</span></a></li>
                                             @else
                                            <li><a href="{{route('admin.iletisim.formu')}}">İletişim Formu</a></li>

                                        @endif


                                    @endif
                                @else
                                    <li><a href="{{route('login')}}">Giriş Yap</a></li>
                                    <li><a href="{{route('register')}}"> Kaydol</a></li>
                                    <li><a href="{{route('admin.police')}}">Poliçe Takip</a></li>

                                @endif
                            </ul>
                        </div>
                        <div class="main-header__top-social-box">
                            <div class="main-header__top-social">
                                <a href="https://tr-tr.facebook.com/axa.sigorta.9/"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/asafsigorta/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu clearfix">
            <div class="main-menu__wrapper clearfix">
                <div class="container">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{route('index')}}"><img width="160" src="{{asset('assets/huzey-metal-logo.png')}}" alt=""></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <div class="main-menu__main-menu-box-inner">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown {{request()->is('/') ? "current":""}}">
                                            <a href="{{route('index')}}">Ana Sayfa </a>

                                        </li>
                                        <li class="dropdown {{request()->is('hakkimizda') ? "current":""}}">
                                            <a href="{{route('hakkimizda')}}">Hakkımızda</a>
                                            <!--
                                            <ul>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                <li><a href="team-page.html">Team</a></li>
                                                <li><a href="team-carousel.html">Team Carousel</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="testimonial-carousel.html">Teatimonials Carousel</a>
                                                </li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                            -->
                                        </li>
                                        <li class="dropdown {{request()->is('hizmetlerimiz') ? "current":""}} {{request()->is('kasko*') ? "current":""}} {{request()->is('trafik*') ? "current":""}} {{request()->is('yatim*') ? "current":""}}
                                        {{request()->is('konut*') ? "current":""}}   {{request()->is('zorunlu*') ? "current":""}}  {{request()->is('ailem*') ? "current":""}} {{request()->is('saglik*') ? "current":""}} {{request()->is('yurt-disi*') ? "current":""}}
                                        {{request()->is('isyerim*') ? "current":""}}  {{request()->is('otel*') ? "current":""}}  {{request()->is('akaryakit*') ? "current":""}}  {{request()->is('eczanen*') ? "current":""}}  {{request()->is('muhendislik*') ? "current":""}}
                                        {{request()->is('sorumluluk*') ? "current":""}}   {{request()->is('tarim*') ? "current":""}} ">
                                            <a href="{{route('hizmetlerimiz')}}">Hizmetlerimiz </a>
                                            <ul>
                                                <li ><a href="{{route('kasko')}}">Kasko Sigortaları</a></li>
                                                <li><a href="{{route('trafik')}}">Trafik Sigortaları</a></li>
                                                <li><a href="{{route('yatim')}}">Yatım Paket Sigortası</a></li>
                                                <li><a href="{{route('konut')}}">Konut Sigortaları</a></li>
                                                <li><a href="{{route('deprem')}}">Zorunlu Deprem Sigortası</a>
                                                </li>
                                                <li><a href="{{route('ailem')}}">Ailem Sigortası</a></li>
                                                <li><a href="{{route('saglik')}}">Sağlık Sigortaları</a></li>
                                                <li><a href="{{route('yurt.disi')}}">Yurt Dışı Seyahat Sağlık Sigortası</a></li>
                                                <li><a href="{{route('isyerim')}}">İşyerim Paket Sigortası</a></li>
                                                <li><a href="{{route('tatil')}}">Otel ve Tatil Köyü Paket Sigortası</a></li>
                                                <li><a href="{{route('akaryakit')}}">Akaryakıt İstasyonu Paket Sigortası</a></li>
                                                <li><a href="{{route('eczane')}}">Eczanem Paket Sigortası</a></li>
                                                <li><a href="{{route('muhendis')}}">Mühendislik Sigortaları</a></li>
                                                <li><a href="{{route('sorumluluk')}}">Sorumluluk Sigortaları</a></li>
                                                <li><a href="{{route('nakliyat')}}">Nakliyat Sigortası</a></li>
                                                <li><a href="{{route('tarim')}}">Tarım Sigortaları</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown {{request()->is('blog*') ? "current":""}}">
                                            <a href="{{route('blog')}}">Blog</a>

                                        </li>
                                        <li class="dropdown {{request()->is('iletisim') ? "current":""}}">
                                            <a href="{{route('iletisim')}}">İletişim</a>

                                        </li>

                                    </ul>
                                </div>
                                <div class="main-menu__main-menu-box-search-get-quote-btn">
                                    <div class="main-menu__main-menu-box-search">
                                        <a href="#"
                                           class="main-menu__search search-toggler icon-magnifying-glass"></a>

                                    </div>
                                    <div class="main-menu__main-menu-box-get-quote-btn-box">

                                        <a href="{{route('iletisim')}}"
                                           class="thm-btn main-menu__main-menu-box-get-quote-btn">Hızlı Teklif Al</a>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="main-menu__call-content">
                                    <a href="tel:+902884175787">+90 (288) 417 57 87</a>
                                    <p>Uzmanlarımızı Arayın</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->

    @yield('content')
    <!--Tracking End-->

    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.png);">
        </div>
        <div class="container">
            <div class="site-footer__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="index.html"><img src="{{asset('assets/huzey-metal-logo-wihte.png')}}" alt=""></a>
                            </div>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">Asaf Sigorta olarak, 2010 yılından beri Kırıklareli'nin Lüleburgaz ilçesinde, sektörün öncüsü Axa Sigorta’dan aldığımız güçle sizlere hizmet ediyoruz.</p>
                            </div>
                            <div class="site-footer__social">
                                <a href="https://tr-tr.facebook.com/axa.sigorta.9/"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/asafsigorta/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__contact clearfix">
                            <h3 class="footer-widget__title">İletişim</h3>
                            <ul class="footer-widget__contact-list list-unstyled clearfix">
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone-call"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">+90 (549) 417 57 88</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">asaf@asafsigorta.com.tr</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>Yılmaz Mah. Eski Kırklareli Cad. No:22
                                            Lüleburgaz / Kırklareli</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="footer-widget__open-hour">
                                <h3 class="footer-widget__open-hour-title">Mesai Saatleri</h3>
                                <h3 class="footer-widget__open-hour-text">Pazartesi - Cuma 08:00 - 18:00
                                    Closed</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© Tüm Hakları Saklıdır. Lisanslıdır 2022  <a href="#">sitesepetim.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/huzey-metal-logo-wihte.png" width="143"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">info@asafsigorta.com.tr</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+902884175787">+90 (288) 417 57 87</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('assets/vendors/wow/wow.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('assets/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{asset('assets/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('ssets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/js/custom/account/settings/signin-methods.js')}}"></script>
<script src="{{asset('assets/js/custom/account/settings/profile-details.js')}}"></script>
<script src="{{asset('assets/js/custom/account/settings/deactivate-account.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/two-factor-authentication.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/639703dddaff0e1306dc3b1c/1gk2ue6q2';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->


<!-- template js -->
<script src="{{asset('assets/js/insur.js')}}"></script>
</body>


<!-- Mirrored from layerdrops.com/insur/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2022 08:03:26 GMT -->
</html>
