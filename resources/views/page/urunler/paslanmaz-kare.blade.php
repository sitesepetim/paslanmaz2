@extends('page.urunler.layouts')

@section('title')
    PASLANMAZ Kare Profil | Huzey Metal
@endsection


@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ KARE PROFİL </h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ KARE PROFİL</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">
              @include('page.urunler.sidebar')
                <div class="col-lg-8">
                    <h2>PASLANMAZ KARE PROFİL</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ KARE PROFİL.jpeg')}}" alt="PASLANMAZ KARE PROFİL"></div>

                    <div class="text">Paslanmaz kare profil ürünleri, genellikle inşaat, endüstriyel, ticari veya dekoratif amaçlar için kullanılan,
                        dayanıklı ve estetik olarak güzel görünen ürünlerdir. Bu ürünler, paslanmaz çelikten imal edilirler ve korozyona karşı dayanıklı
                        olduklarından, uzun ömürlü ve kullanımı kolaydır.</div>
                    <h3>PASLANMAZ KARE PROFİL ÜRÜNLERİNİN İMALAT SÜRECİ</h3>
                    <ul class="list">
                        <li><strong>Ham malzeme seçimi: </strong>Paslanmaz çelik levhalar veya bobinler seçilir ve kalınlığı, genişliği ve uzunluğu belirlenir</li>
                        <li><strong>Kesme:</strong> Ham malzeme, belirlenen boyutlara göre kesilir</li>
                        <li><strong>Bükme:</strong> Kesilen parçalar, belirlenen profil şekline göre bükülür</li>
                        <li><strong>Kaynaklama:</strong> Profil parçaları, paslanmaz çelik kaynak makinesi ile birleştirilir</li>
                        <li><strong>Temizleme: </strong>Ürünler, çeşitli temizleme yöntemleri kullanılarak, kir, yağ veya pas gibi kalıntılarından arındırılır</li>
                        <li><strong>Kaplama: </strong>Ürünler, isteğe bağlı olarak farklı kaplama seçenekleri ile kaplanabilir</li>
                        <li><strong>Kontrol ve ambalajlama:</strong> Ürünler, kalite kontrol testlerinden geçirilir ve ambalajlanır</li>
                    </ul>
                    <h3>PASLANMAZ KARE PROFİL ÇEŞİTLERİ</h3>
                    <div class="text">Paslanmaz kare profil ürünleri çeşitli boyutlarda ve şekillerde üretilebilir. Bu ürünler, yüksek mukavemete
                        sahip olduğu için yapısal uygulamalarda sıklıkla kullanılır. Örneğin, inşaat projelerinde yapıların güçlendirilmesi için
                        kullanılabilir veya otomotiv endüstrisinde araba veya motosiklet parçaları olarak kullanılabilir. Ayrıca, gıda ve petrokimya
                        endüstrisinde, korozyona karşı dayanıklı olarak kullanılan tesisler için de kullanılabilir.
                        <br>
                        <br>
                        Paslanmaz kare profil ürünleri, üretim sürecinde kullanılan malzeme, işleme tekniği, boyutlar ve şekiller gibi çeşitli
                        faktörlere göre değişebilir. Bu nedenle, üretici firmalar, müşteri ihtiyaçlarına göre özel üretim yapabilirler.
                        </div>
                    <h3>PASLANMAZ KARE PROFİL KULLANIM ALANLARI</h3>
                    <div class="text">Bu ürünler, endüstriyel, ticari, dekoratif veya inşaat projelerinde kullanılabilir. Özellikle,
                        paslanmaz kare profil ürünler, güzel bir görünüm ve korozyon direnci nedeniyle inşaat, ticaret ve endüstri
                        alanlarında sıklıkla kullanılmaktadır.
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
