@extends('page.desenler.layouts')

@section('title')
    Kare Desen | Huzey Metal
@endsection

@section('desc')
    Kare desenli paslanmaz çeliklerimiz, sade ve modern tasarımların yanı sıra geleneksel tasarımlarda da estetik bir dokunuş sunuyor.@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>KARE DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">DEKORATİF DESENLER</a></li>
                        <li>KARE DESEN</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">
                @include('page.desenler.sidebar')
                <div class="col-lg-8">
                    <h2>KARE DESEN</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/KARE-DESEN.jpeg')}}" alt=""KARE-DESEN></div>

                    <div class="text">Paslanmaz çelik, kare desenli olarak tasarlandığında, birçok dekoratif alanda kullanılabilir.
                        Bunlar arasında asansör kabinleri, banyo ve mutfak dolapları, kapılar ve mobilyalar bulunur. Paslanmaz çelik,
                        dayanıklı, rutubetsiz ve hijyenik özellikleri nedeniyle, ev ve işletmelerin dekorasyonunda popüler bir seçimdir.
                        <br>
                        <br>
                        Kare desenli paslanmaz çelik, modern ve şık bir görünüme sahip olabilir. Desen, ev ve işletmelerin iç
                        tasarımına uygun olarak çeşitli renklerde boyanabilir. Ayrıca, kare deseni, paslanmaz çelik yüzeyinde
                        yapışkan bir film kullanılarak da uygulanabilir.
                        <br>
                        <br>
                        Paslanmaz çelik kare deseni, fiyatını etkileyen faktörler arasında üretim maliyetleri, kalitesi,
                        boyutları ve miktarı bulunur. Bu faktörlere bağlı olarak, paslanmaz çelik kare desenin fiyatı değişebilir.
                    </div>
                    <h3>KARE DESEN KULLANIM ALANALRI</h3>
                    <div class="text">Paslanmaz çelik kare desenli tasarım, ev ve işletmelerin dekorasyonunda şık, dayanıklı ve hijyenik bir seçimdir.
                    </div>
                    <ul class="list">
                        <li>Asansör kabinleri</li>
                        <li>Dekoratif alanlar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
