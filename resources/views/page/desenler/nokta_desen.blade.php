@extends('page.desenler.layouts')

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>NOKTA DESEN</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('desenler')}}">DEKORATİF DESENLER/a></li>
                        <li>NOKTA DESEN</li>
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
                    <h2>NOKTA DESEN</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/nokta-desen.jpg')}}" alt="nokta-desen"></div>

                    <div class="text">Paslanmaz çelik, dayanıklılık, uzun ömürlülük ve estetik görünüm sunan bir malzeme olarak,
                        asansör kabinleri ve diğer dekoratif alanlar için sıklıkla tercih edilmektedir. Bu malzemenin en popüler
                        desenlerinden birisi de nokta deseni'dir.
                        <br>
                        <br>
                        Nokta deseni, paslanmaz çelik ürünlerin görünümüne hareketlilik ve canlılık katmasıyla tanınır.
                        Bu desen, ince noktaların üst üste konmasıyla oluşur ve modern, şık ve zarif bir görünüm sunar.
                        Ayrıca, bu desen, aydınlık ve geniş görüntüler sağlamaya yardımcı olduğundan, asansör kabinlerinde
                        ve diğer dekoratif alanlarda sıklıkla tercih edilir.
                    </div>
                    <h3>NOKTA DESEN KULLANIM ALANLARI</h3>
                    <div class="text">Fiyatlar, malzemenin kalitesi, boyutları, desen kalınlığı ve diğer faktörlere göre değişebilir.
                        Ancak, paslanmaz çelik nokta desenli ürünler genellikle diğer desenli ürünlere göre daha ekonomik fiyatlarda satılır.
                        <br>
                        <br>
                        Sonuç olarak, paslanmaz çelik nokta deseni, asansör kabinleri ve diğer dekoratif alanlar için estetik ve ekonomik
                        bir seçimdir. Bu desen, dayanıklı ve uzun ömürlü bir malzeme olan paslanmaz çelik ürünlerin görünümünü canlı ve şık hale getirir
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
