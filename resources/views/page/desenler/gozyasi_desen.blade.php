@extends('page.desenler.layouts')

@section('title')
    Gözyaşı Desen | Huzey Metal
@endsection

@section('desc')
    ÖSTENİTİK Paslanmaz ÇELİK
@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>GÖZYAŞI DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">ENDÜSTRİYEL DESENLER</a></li>
                        <li>GÖZYAŞI DESEN</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">
                @include('page.desenler.sidebar2')
                <div class="col-lg-8">
                    <h2>GÖZYAŞI DESEN</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/GÖZYAŞI DESEN-min.jpeg')}}" alt="GÖZYAŞI-DESEN"></div>

                    <div class="text">Paslanmaz çelik, dayanıklı ve korozyon direncine sahip olduğu için endüstriyel
                        alanlarda sıklıkla kullanılır. Gözyaşı deseni de bu endüstriyel alanlarda kullanılan desenlerden biridir.
                        Zeminde, fabrikalarda, gemilerde ve benzer alanlarda paslanmaz çelik gözyaşı deseni, zemin kaplama
                        veya döşeme olarak kullanılabilir. </div>
                    <h3>GÖZYAŞI DESEN KULLANIM ALANLARI</h3>
                    <div class="text">Gözyaşı desen, metal yüzeylerde korozyonun önlenmesine ve dayanıklılığın arttırılmasına
                        da yardımcı olabilir. </div>
                    <ul class="list">
                        <li>Fabrikalarda</li>
                        <li>Zeminlerde</li>
                        <li>Gemilerde</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
