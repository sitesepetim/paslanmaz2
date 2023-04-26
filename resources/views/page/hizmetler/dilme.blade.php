@extends('page.hizmetler.layouts')

@section('title')
     Paslanmaz çelik Dilme |  Huzey Metal
@endsection

@section('desc')
    ÖSTENİTİK Paslanmaz ÇELİK
@endsection

@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ ÇELİK DİLME</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>PASLANMAZ ÇELİK DİLME</li>
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
                    <h2>PASLANMAZ ÇELİK DİLME</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ ÇELİK DİLME.jpeg')}}" alt="PASLANMAZ ÇELİK DİLME"></div>

                    <div class="text">PPaslanmaz çelik dilme hattı, rulo halinde olan sacı açarak belli bir düzende sıralanmış dairesel
                        hale dönüşen bıçaklar arasından geçirerek normal genişliğinden daha küçük kalıplar haline getirilmesini sağlar.
                        Dilme hattında kesimi yapılacak saca en yüksek toleransta ısı verilerek istenilen ölçünün sağlanması gereklidir.
                        Dilme hattı içinde istenilen genişlikte ve kalınlıktaki sac üretimi yapabilmek için ısı toleransının yüksek performansı
                        yakalayabilmesi gerekmektedir.
                        <br>
                        <br>
                        Bir dilme hattı 0,3–10 mm aralığında rulolar ile saca kısa ve kolayca bir şekil verme özelliği mümkün olabilmektedir.
                        Sac ısıl işleme alınırken şekli ve boyutları istenilen ölçülerde olmalıdır. Dilme hattında yüksek performans sağlanması
                        profesyonel bir ekip işidir. Dilme hattının başlıca özellikleri arasında sacı istenen forma sokacak uygun ısıl işlem süreleri
                        yer almaktadır.
                        <br>
                        <br>
                        Huzey Metal Firması bünyesindeki rulo sac dilme makinelerimiz ile rulo sac dilme işlemi yüksek standartlarda yapılabilmektedir.
                        İhtiyaca göre değişen genişliklerde uzunlamasına kesim işlemi gerçekleştikten sonra ortaya çıkan hurda çapakları
                        küçük parçacıklara ayırabilen sistemlerimiz mevcuttur. Rulo sac dilme makinelerimizde oluşabilecek arızalar erken uyarı
                        sistemleri ile kontrol altına alınmaktadır. Rulo sac dilme makinelerimiz manyetik kayıpları minimuma indirerek verimi arttırmaktadır.
                        Böylelikle gereksiz enerji tüketimin önüne geçilerek, mümkün olduğu ölçüde tasarruf edilmesi, sağlanmaktadır.
                        </div>
                    <h3>KULLANIM ALANLARI</h3>
                    <div class="text">Paslanmaz ürünler rulo, kare, levha, köşebent olarak farklı ölçülerde, özelliklerde kesildikten sonra kullanım
                        amacına göre dilimlenerek farklı sektörlerde kullanılmaktadır. Paslanmaz dilme rulo da en çok ulaştırma sektörü, savunma, inşaat
                        sanayi, silah ve savunma sanayi gibi daha birçok alanda tercih edilmektedir. Paslanmaz ürünlerin temizlenmesi, parlaklaştırma ya
                        da matlaştırma aşamalarında da polisaj malzemeleri kullanılmaktadır.</div>

                </div>
            </div>
        </div>
    </section>

@endsection
