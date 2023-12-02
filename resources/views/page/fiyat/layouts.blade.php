<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
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
    @include('layouts.head')
</head>

<body>
@include('layouts.body')


<div class="page-wrapper">


    <script>

        $(document).ready(function (){

            var element = document.getElementById('loader-wrap');
            element.remove();

        });

    </script>



 @include('layouts.header')



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

    @yield('content')

    <div class="auto-container"><div class="border-bottom"></div></div>



    <!-- Related Project -->
    <section hidden class="related-projects">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">NİKOMET PASLANMAZ</div>
                <h2>ÜRÜNLERİMİZ</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{asset('assets/images/resource/project-1.jpg')}}" alt=""></div>
                        <h4><a href="project-details.html">Steel Welding</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{asset('assets/images/resource/project-2.jpg')}}" alt=""></div>
                        <h4><a href="project-details.html">Metal Work</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 project-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{asset('assets/images/resource/project-3.jpg')}}" alt=""></div>
                        <h4><a href="project-details.html">Pipe Welding</a></h4>
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

<!-- Mirrored from html.tonatheme.com/2022/welbim/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 08:21:36 GMT -->
</html>













