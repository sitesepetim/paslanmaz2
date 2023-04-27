@extends('page.desenler.layouts')

@section('title')
    Baklava Desen | Huzey Metal
@endsection

@section('desc')
    Baklava desenli paslanmaz çelikler, endüstriyel tarza şık bir dokunuş katar.
    Huzey Metal'in baklava desenli paslanmaz çelikleri uygun fiyatları ve kalitesiyle öne çıkıyor.@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>BAKLAVA DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">ENDÜSTRİYEL DESENLER</a></li>
                        <li>BAKLAVA DESEN</li>
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
                    <h2>BAKLAVA DESEN</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/baklava-desen.png')}}" alt=""></div>

                    <div class="text">Paslanmaz çelik endüstriyel sektöründe baklava deseni, zeminler, fabrikalar, gemiler
                        ve benzer alanlarda sıklıkla kullanılan bir endüstriyel desendir. Bu desen, paslanmaz çelik ürünlerin
                        estetik görünümünü arttırmak için kullanılır ve güçlü, dayanıklı ve korozyona karşı dirençli olduğu
                        için uzun süreli kullanım için idealdir. </div>
                    <h3>Baklava Desen KullanIM ALANLARI</h3>
                    <div class="text">Baklava desen paslanmaz çelikler, özellikle zemin ve platformlar gibi yüzeylerde, baklava
                        deseni düşmeleri önlemek için güvenli bir alternatif olarak kullanılabilir.</div>
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
