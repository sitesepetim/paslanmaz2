@extends('page.hizmetler.layouts')

@section('title')
    BLOG |  Huzey Metal
@endsection

@section('desc')
    Blog Yazılarımız@endsection

@section('content')
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

                            @foreach(\App\Models\blogs::orderBy('id', 'desc')->limit(3)->get() as $key=> $value)

                            <article class="post">
                                <figure class="post-thumb"><a href="{{route('blog_detail',['slug'=>$value['title']])}}"><img src="{{asset('public/'.$value['image_path'])}}" alt=""></a></figure>
                                <div class="text"><a href="{{route('blog_detail',['slug'=>$value['title']])}}">{{$value['title']}} </a></div>
                            </article>
                            @endforeach




                        </div>

                        <!--Blog Category Widget-->
                        <div class="widget category-widget">
                            <h4 class="widget_title">Kategoriler</h4>
                            <ul class="cat-list">
                                @foreach(\App\Models\categories::all() as$key=> $value)
                                    <li><a href="#">{{$value['name']}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Popular Tags -->
                        <div class="widget tag-widget">
                            <h4 class="widget_title">Etiketler</h4>
                            <div class="tag-outer">
                                @foreach(\App\Models\tags::all() as$key=> $value)
                                    <li><a href="#">{{$value['name']}}</a></li>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection






