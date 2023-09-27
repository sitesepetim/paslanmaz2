<div class="loader-wrap">
    <div class="preloader"><div class="preloader-close">HUZEY METAL</div></div>
    <div class="layer layer-one"><span class="overlay"></span></div>
    <div class="layer layer-two"><span class="overlay"></span></div>
    <div class="layer layer-three"><span class="overlay"></span></div>
</div>
<header class="main-header header-style-two">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <ul class="contact-info">
                        <li><a href="mailto:info@nikometpaslanmaz.com"><i class="flaticon-email-1"></i>info@huzeymetal.com</a></li>
                        <li><a href="tel:+905445073848"><i class="flaticon-telephone"></i>+90 (544) 507 38 48</a></li>
                        <li><i class="flaticon-pin"></i>Velibaba Mh.Mimarsinan Cd.No:1 Pendik/İST.</li>
                    </ul>
                </div>
                <div class="right-column">
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{route('index')}}"><img src="assets/huzey-metal-logo.png" width="250" alt=""></a></div>
                </div>
                <div class="right-column">
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">

                                    <li  class="{{request()->is('/') ? "current":""}}"><a  href="{{route('index')}}">Ana Sayfa</a></li>
                                    <li  class="{{request()->is('hakkimizda') ? "current":""}}"><a  href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                                    <li  class="dropdown {{request()->is('kaliteler') || request()->is('kalite*')  ? "current":""}}"><a href="{{route('kaliteler')}}">Kaliteler</a>

                                    </li>
                                    
                                    <li  class="dropdown {{request()->is('urunler') ? "current":""}}"><a href="{{route('urunler')}}">Ürünler</a>
                                        <ul>
                                            <li><a href="{{route('urunler')}}">Ürünlerimiz</a></li>

                                            <li  class="dropdown {{request()->is('desenler') ? "current":""}}"><a href="{{route('desenler')}}">Desenlerimiz</a>
                                                <ul>
                                                    <li><a href="{{route('dekor_desenler')}}">Dekoratif Desenler</a></li>
                                                    <li><a href="{{route('endus_desenler')}}">Endüstriyel  Desenler</a></li>


                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li  class="dropdown {{request()->is('hizmet*') ? "current":""}}"><a href="{{route('hizmetlerimiz')}}">Hizmetlerimiz</a>
                                        <ul>
                                            <li><a href="{{route('imalat')}}">Paslanmaz Çelik İmalatı</a></li>
                                            <li><a href="{{route('kesme')}}">Paslanmaz Çelik Boy Kesme</a></li>
                                            <li><a href="{{route('taslama')}}">Paslanmaz Çelik Taşlama</a></li>
                                            <li><a href="{{route('dilme')}}">Paslanmaz Çelik Dilme</a></li>
                                            <li><a href="{{route('lazer')}}">Paslanmaz Çelik Lazer Kesim </a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown {{request()->is('agirlik-hesaplama') ? "current":""}}"><a href="{{route('fiyat_hesaplamaa')}}">Ağırlık Hesaplama</a></li>
                                    <li class="dropdown {{request()->is('fiyat-listesi') ? "current":""}}"><a href="{{route('fiyat_listesi')}}">Fiyat Listesi</a></li>
                                    <li  class="dropdown {{request()->is('blog') ? "current":""}}"><a href="{{route('blog')}}">Blog</a>

                                    </li>
                                    <li  class="{{request()->is('iletisim') ? "current":""}}"><a href="{{route('iletisim')}}">İLETİŞİM</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div hidden class="link-box">
                    <a href="#" class="theme-btn btn-style-one"><span>S.S.S</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="assets/huzey-metal-logo-wihte.png"  width="250" alt=""></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-remove"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/huzey-metal-logo-wihte.png" alt=""  width="200" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
