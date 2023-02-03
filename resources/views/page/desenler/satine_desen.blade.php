@extends('page.desenler.layouts')

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>SATİNE DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">DESENLER</a></li>
                        <li>SATİNE DESEN</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="image mb-40"><img src="{{asset('assets/images/resource/project-7.jpg')}}" alt=""></div>
            <div class="row">
                @include('page.desenler.sidebar')
                <div class="col-lg-8">
                    <h2>SATİNE DESEN</h2>
                    <div class="text">Paslanmaz çelik satine deseni, asansör kabinleri ve diğer dekoratif alanlar gibi
                        fonksiyonel ve estetik amaçları bir arada sunan yapılar için idealdir. Bu desen, düz ve sade bir
                        görünüme sahip olmasına rağmen hafif eğimli çizgilerle zenginleştirilmiş bir görünüme sahiptir.
                        Paslanmaz çelik malzemesi, bu desenin uzun süreli performansını ve güzelliğini koruyan dayanıklı
                        bir malzeme olarak kullanılmasını sağlar.</div>
                    <h3>SATİNE DESEN KULLANIM ALANLARI</h3>
                    <div class="text">Bu desen, aynı zamanda farklı renk ve parlaklık seçenekleri sunan paslanmaz çelik ürünlerin
                        yüzeylerinde de kullanılabilir. Asansör kabinlerinde kullanımı, insanların rahat ve lüks bir atmosfere
                        ulaşmasına olanak tanır. Ayrıca, bu desen, diğer dekoratif alanlar için de oldukça popülerdir ve farklı renk
                        ve parlaklık seçenekleri sunarak bu alanların estetik değerini arttırır.
                        <br>
                        <br>
                        Sonuç olarak, paslanmaz çelik satine deseni, asansör kabinleri ve diğer dekoratif alanlar için ideal
                        bir seçimdir ve uzun süreli performansı, güzelliği ve dayanıklılığı sunar.
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
