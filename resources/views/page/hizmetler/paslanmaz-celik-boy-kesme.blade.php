@extends('page.hizmetler.layouts')

@section('title')
     Paslanmaz Çelik Boy kesme |  Huzey Metal
@endsection

@section('desc')
    Huzey Metal, istenilen boyutlarda kaliteli paslanmaz çelik boy kesme hizmeti sunmaktadır.
    Boy kesme işlemlerinde uzmanlaşmış ekibimizle sizlere en iyi hizmeti sağlıyoruz.@endsection

@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ ÇELİK <br> BOY KESME</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>PASLANMAZ ÇELİK BOY KESME</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">
              @include('page.hizmetler.sidebar')
                <div class="col-lg-8">
                    <h2>PASLANMAZ ÇELİK <br> BOY KESME</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ ÇELİK BOY KESME.jpeg')}}" alt="PASLANMAZ ÇELİK BOY KESME"></div>

                    <div class="text">Paslanmaz çelik boy kesme, paslanmaz çelik malzemelerin belirli boyutlarda kesilmesi
                        için yapılan bir işlemdir. Bunun için farklı teknikler ve ekipmanlar kullanılabilir.
                        <br>
                        <br>
                        <h3>PASLANMAZ ÇELİK KULLANIM ALANLARI</h3>
                        <ul class="list">
                            <li><strong>Scrap Çizme:</strong> Paslanmaz çelik malzeme, sert bir çizme aracı yardımıyla kesilebilir.
                                Bu teknik manuel olarak yapılabilir veya büyük çizme makinaları kullanılabilir.</li>
                            <li><strong>Guillotine Kesme: </strong>Bu teknikte, paslanmaz çelik malzeme bir guillotine makinası
                                aracılığıyla kesilir. Guillotine makinaları hızlı ve hassas bir şekilde kesim yapabilir.</li>
                            <li><strong>Lazer Kesme:</strong> Lazer kesme, paslanmaz çelik malzemelerin hassas kesimler yapılmasını sağlar.
                                Lazer teknolojisi sayesinde, lazer kesme makinaları paslanmaz çelik malzemeleri çok ince kesimler yapabilir.</li>
                            <li><strong>Plazma Kesme:</strong> Plazma kesme, paslanmaz çelik malzemeleri hızlı ve hassas bir şekilde kesmenin bir yoludur.
                                Plazma kesme makinaları, çok büyük veya çok kalın paslanmaz çelik malzemeleri kesebilir.</li>

                        </ul>
                    </div>
                    <h3>PASLANMAZ ÇELİK BOYUTLANDIRMA</h3>
                    <div class="text">Paslanmaz çelik boy kesme işlemi için farklı teknikler ve ekipmanlar kullanılabilir ve hangi teknik ve ekipman kullanılacağı, malzemenin boyutları, kesim şekli ve hassasiyetine bağlı olarak belirlenebilir.
                        <br>
                        <br>
                        Ayrıca, paslanmaz çelik boy kesme işlemi sonucunda, kesilen malzemelerin kalitesi de önemlidir. İyi bir kesim işlemi, kesilen parçaların düzgün ve pürüzsüz olmasını, kenarlarının net olmasını ve kesilen parçaların uygun bir şekilde yapışmasını sağlar.
                        <br>
                        <br>
                        Paslanmaz çelik boy kesme işlemi sırasında, güvenliğin de önemli olduğu unutulmamalıdır. Kesme işlemi sırasında, kesici araçların kullanımındaki güvenliğe dikkat edilmeli, gerekli güvenlik önlemleri alınmalı ve gerekli eğitim verilmelidir.
                        <br>
                        <br>
                        Sonuç olarak, paslanmaz çelik boy kesme işlemi, doğru teknik ve ekipmanların seçimi, kaliteli sonuçlar elde etmek için gerekli olan hassasiyet ve güvenli bir şekilde yapılması gereken bir işlemdir.
                    </div>

                       <div class="text">Huzey Metal 0,20mm ile 12,00m kalınlıklar arasındaki paslanmaz çelik rulolar standart ölçülere ve müşterinin talep ettiği ölçülere modern Boy Kesme hatlarında kesilmektedir.

                           Boy Kesme işlemi uluslararası standartlara uygun toleranslarda ve yüksek kesme kalitesinde gerçekleştirilmektedir.

                           Paslanmaz levha paket ağırlığı müşteri isteğine göre ayarlanmakta ve paletler dış etkilerden korunacak şekilde standartlara uygun olarak paketlenip ambalajlanmaktadır.

                           Boykesme işlemi sırasında levhalar müşteri talebine uygun olarak Koruyucu PE veya kağıt ile kaplanmaktadır
                       </div>




                </div>
            </div>
        </div>
    </section>

@endsection
