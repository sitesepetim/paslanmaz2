@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Fittings | Huzey Metal
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
                        <h1>PASLANMAZ FİTTİNGS</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ FİTTİNGS</li>
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
                    <h2>PASLANMAZ FİTTİNGS</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ FİTTİNGS.jpeg')}}" alt="PASLANMAZ FİTTİNGS"></div>

                    <div class="text">Paslanmaz fittings bir başka anlatımla paslanmaz boru bağlantı elamanı olarak adlandırılan fittingsler
                        kullanıldıkları boru hatlarının en önemli bileşenleri arasında yer almaktadır. Boruları birbirine bağlamak, dönüş yapmak
                        ve dallar oluşturmak farklı büyüklükteki çaplar arasında geçişi sağlamak gibi amaçlar için kullanılırlar. Bu parçalar gıda,
                        endüstriyel ve kimya ve ilaç endüstrilerinde yaygın olarak kullanılmaktadır. Çeşitli durumlarda farklı amaçlarla kullanılan
                        paslanmaz çelik bağlantı parçaları kullanılmadıkça olumsuz çevresel koşullarında yer alan inşaatlar yapmak mümkün değildir.
                        Paslanmaz fittingsler birçok sektörde kendine kullanım yeri bulmaktadır.</div>
                    <h3>PASLANMAZ FİTTİNGS ÇEŞİTLERİ</h3>
                    <div class="text">Paslanmaz bağlantı elemanları fittingsler kullanım şekline göre kaynaklı ve dişli diye ikiye ayrılır.
                        Boru hatlarının çap büyüklüğü ve basıncına göre değişiklik göstermektedir. Düşük basınçlarda dişli fittingsler kullanılırken
                        daha büyük ve yüksek basınçlara sahip olan hatlarda kaynaklı fittingsler kullanılmaktadır.</div>
                    <h3>PASLANMAZ DİŞLİ FİTTİNGSLER</h3>
                    <div class="text">Konstrüksiyonsundaki dişliler sayesinde işletim yapılacak alana kolaylıkla kenetlenebilen bağlantı elemanlarına
                        ‘paslanmaz dişli fittings’ denir. Çoğunlukla 2 parmağa kadar olan hatlarda kullanılırlar.</div>
                    <h3>PASLANMAZ KAYNAKLI FİTTİNGSLER</h3>
                    <div class="text">Kaynaklı fittings isminden de anlaşılacağı gibi hatlara kaynak ile bağlanan boru bağlantı eleman türüdür.
                        Hemen hemen her hatta kullanılabilen paslanmaz fittingsler kaynaklı birleştirmelere uygun olmasından dolayı yüksek basınca
                        karşı dayanabilmektedirler.</div>
                    <h3>NEDEN FİTTİNGS KULLANILMALIDIR?</h3>
                    <div class="text">Fittings ürünleri daha yaygın bir biçimde kullanılmaktadır. Fittings   kullanımının bu kadar yaygın olmasının
                        çok nedeni vardır. Son zamanlarda bu kadar popüler olan bu ürün, neden kullanılmalıdır?  Boru bağlantı parçaları anlamına gelen
                        fittings ürünlerinin giderek artan bir şekilde yaygınlaşmasının temelinde, maliyetinin düşük olması ve bu ürünlerin kullanımının
                        sağlamış olduğu avantajlar nedeniyle tercih edilmektedir. 604 ve 316 kalitede üretilen paslanmaz ürünlerimiz, müşterilerin istek
                        ve ihtiyaçlarını çok hızlı bir şekilde karşılamaktadır. Buna karşın dişli olarak da üretilen ürünler, büyük hatlarda ve basınçlı
                        ortamlarda yoğun olarak tercih edilir.</div>
                    <h3>PASLANMAZ FİTTİNGS KULLANIM ALANLARI</h3>
                    <div class="text">Paslanmaz fittings ürünlerinin farklı kullanım amaçları ve kullanım biçimleri bulunmaktadır.
                        Ağırlıklı olarak gıda ve sağlık tesislerinde kullanılmaktadır. Konuyla ilgili daha detaylı bilgi almak isterseniz
                        bizimle hemen iletişime geçebilirsiniz. Güncel ürün fiyatlarımız için Huzey Metal Paslanmaz Çelik web sayfamızdaki
                        iletişim formumuzu doldurarak da bilgi alabilirsiniz.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
