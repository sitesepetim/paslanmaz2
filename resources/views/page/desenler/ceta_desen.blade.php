@extends('page.desenler.layouts')

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>ÇETA DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">DESENLER</a></li>
                        <li>ÇETA DESEN</li>
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
                @include('page.desenler.sidebar2')
                <div class="col-lg-8">
                    <h2>ÇETA DESEN</h2>
                    <div class="text">Paslanmaz çelik, uzun ömürlü, dayanıklı ve korozyona karşı dirençli özelliklere sahip
                        bir malzeme olduğu için endüstriyel sektörde sıklıkla kullanılır. Bu sebeple, paslanmaz çelik malzemelerin
                        görünümlerine de büyük önem verilir. Endüstriyel desenler, paslanmaz çelik malzemelerin görünümünü değiştirerek,
                        estetik açıdan daha atraktif hale getirmeyi hedefler.
                        <br>
                        <br>
                        Çeta deseni, paslanmaz çelik endüstriyel sektörde sıklıkla kullanılan bir desendir. Zeminde, fabrikalarda,
                        gemilerde ve benzer alanlarda yaygın olarak kullanılır. Çeta deseni, paslanmaz çelik malzemelerin görünümünü
                        değiştirir ve daha estetik hale getirir. Bu desenin kullanımı, alanın görünümünün düzgün ve profesyonel görünmesini sağlar.
                    </div>
                    <h3>ÇETA DESEN kullanım alanları</h3>
                    <div class="text">Paslanmaz çelik çeta deseni, her türlü endüstriyel ortam için uygun bir seçimdir.
                        Korozyona karşı dirençli ve dayanıklı olması sebebiyle, uzun ömürlü bir görünüm sağlar. Aynı zamanda,
                        temizlik ve bakımı kolaydır ve uzun süreli kullanım için idealdir.
                        <br>
                        <br>
                        Sonuç olarak, paslanmaz çelik endüstriyel çeta deseni, estetik ve dayanıklı bir görünüm sunan bir seçimdir.
                        Zeminde, fabrikalarda, gemilerde ve benzer alanlarda yaygın olarak kullanılır ve ortamın profesyonel ve düzgün görünmesini sağlar.
                    </div>
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
