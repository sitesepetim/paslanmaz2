<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from html.tonatheme.com/2022/welbim/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:36 GMT -->
<head>
    <meta charset="utf-8">
    <title>Blog || Huzey Metal</title>
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
    <section class="page-title" style="background-image: url(assets/images/resource/HUZEY-METAL-BLOG-SLİDER.jpeg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Blog </h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach(\App\Models\blogs::all() as $key=> $value)

                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{route('blog_detail',$value['slug'])}}"><img src="{{asset('public/'.$value['image_path'])}}" alt=""></a>
                                <div class="date">{{$value['created_at']}}</div>
                            </div>
                            <div class="content">
                                <div class="post-meta"> <a href="#"><i class="far fa-user-circle"></i> Huzey Metal</a></div>
                                <h4><a href="{{route('blog_detail',$value['slug'])}}">{{$value['title']}}</a></h4>
                                <div class="text">{{$value['meta_desc']}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <ul class="styled-pagination">
                        <li class="next"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li class="prev"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar blog-sidebar">

                        <!-- Search -->
                        <div class="widget search-box">
                            <form method="post" action="https://html.tonatheme.com/2022/welbim/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Ara:" required="">
                                    <button type="submit"><span class="icon flaticon-magnifying-glass"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Popular Posts -->
                        <div class="widget news-widget-two">
                            <h4 class="widget_title">Önceki Yazılarımız</h4>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="assets/images/resource/news-13.jpg" alt=""></a></figure>
                                <div class="comment">02 Yorum</div>
                                <div class="text"><a href="blog-detail.html">Örnek Metin </a></div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="assets/images/resource/news-14.jpg" alt=""></a></figure>
                                <div class="comment">02 Yorum</div>
                                <div class="text"><a href="blog-detail.html">Örnek Metin</a></div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="assets/images/resource/news-15.jpg" alt=""></a></figure>
                                <div class="comment">02 Yorum</div>
                                <div class="text"><a href="blog-detail.html">Örnek Metin</a></div>
                            </article>

                        </div>

                        <!--Blog Category Widget-->
                        <div class="widget category-widget">
                            <h4 class="widget_title">Kategoriler</h4>
                            <ul class="cat-list">
                                <li><a href="#">Paslanmaz Çelik</a></li>
                                <li><a href="#">Paslanmaz Profil</a></li>
                                <li><a href="#">Paslanmaz Boru</a></li>
                                <li><a href="#">Paslanmaz Sac</a></li>
                                <li><a href="#">Paslanmaz Rulo</a></li>
                                <li><a href="#">Paslanmaz Şerit</a></li>
                            </ul>
                        </div>

                        <!-- Popular Tags -->
                        <div class="widget tag-widget">
                            <h4 class="widget_title">Etiketler</h4>
                            <div class="tag-outer">
                                <a href="#">Çelik</a>
                                <a href="#">Profil</a>
                                <a href="#">Boru</a>
                                <a href="#">Sac</a>
                                <a href="#">Rulo</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

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

<!-- Mirrored from html.tonatheme.com/2022/welbim/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:38 GMT -->
</html>













