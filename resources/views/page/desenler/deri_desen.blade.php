@extends('page.desenler.layouts')

@section('title')
    Deri Desen | Huzey Metal
@endsection

@section('desc')
    Deri desenli paslanmaz çeliklerimiz, dokulu yüzeyleri ve benzersiz görünümleriyle özel tasarımlarda öne çıkıyor ve fark yaratıyor.@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>DERİ DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">DEKORATİF DESENLER</a></li>
                        <li>DERİ DESEN</li>
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
                    <h2>DERİ DESEN</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/deri-desen.png')}}" alt="deri-desen"></div>

                    <div class="text">Paslanmaz çelik deri deseni, asansör kabinleri ve diğer dekoratif alanlar gibi birçok farklı alanda kullanılır.
                        Bu desen, yüksek kaliteli paslanmaz çelik malzemelerin kullanılmasıyla üretilir ve çok dayanıklıdır.
                        <br>
                        <br>
                        Deri desen, metal yüzeyler için güzel bir alternatifdir ve doğal görünen bir dokuya sahiptir. Bu desen, dekoratif
                        amaçlı kullanıldığında modern ve şık bir görünüm kazandırır.

                        Asansör kabinlerinde ve diğer dekoratif alanlarda, paslanmaz çelik deri deseni hafif ve dayanıklıdır ve ayrıca
                        kolayca temizlenebilir. Bu özellikler, bu deseni bu tür alanlar için ideal bir seçim yapar.
                        <br>
                        <br>
                        Paslanmaz çelik deri desenin fiyatı, kalitesine ve ölçüsüne göre değişebilir. Ancak genel olarak,
                        bu desen maliyeti, paslanmaz çelik malzemelerinin yüksek kalitesinden ve üretim sürecinin zahmetliliğinden kaynaklanır.
                    </div>
                    <h3>DERİ DESEN KULLANIM ALANLARI</h3>
                    <div class="text">Paslanmaz çelik deri desen, asansör kabinleri ve diğer dekoratif alanlar için güzel ve dayanıklı bir
                        alternatifdir. Bu desen, yüksek kaliteli paslanmaz çelik malzemelerin kullanılmasıyla üretildiği için uzun vadeli
                        kullanım için güvenilirdir.
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
