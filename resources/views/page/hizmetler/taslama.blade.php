@extends('page.hizmetler.layouts')

@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ ÇELİK TAŞLAMA</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>PASLANMAZ ÇELİK TAŞLAMA</li>
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
                    <h2>PASLANMAZ ÇELİK TAŞLAMA</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ ÇELİK TAŞLAMA.jpeg')}}" alt="PASLANMAZ ÇELİK TAŞLAMA"></div>

                    <div class="text">Huzey Metal en paslanmaz çelik taşlama hizmetleri sunar. Döküm ve çelik parçaların mükemmel yüzey kalitesi
                        ile taşlama yeteneğine sahiptir. Huzey Metal Çelik, pek çok farklı malzeme ve sisteme sahip tekerlek ve malzeme türleri
                        için maksimum taşlama ve kesim verimliliği ile yüzeyler için düzlük, paralellik ve karelik ihtiyaçlarınızı karşılayabilir.
                        Her türlü yüzey taşlamada profesyonel ve büyüklük ihtiyaçlarımız dâhilindeki her şeyi taşlamak için gerekli olan eğitime
                        sahibiz. Üstün düzeyde doğruluk elde etme kabiliyetine sahibiz. Yüzey taşlama için malzeme özelliğine göre hizmetler sunuyoruz.
                        Yüzey taşlama ihtiyaçlarınıza göre geniş yelpazede uygun çözümler sunan Huzey Metal olarak, hassas parça işleme maliyetlerinize
                        uygun şekilde karşılayabilecek yüzey taşlama ihtiyaçlarınız için kapsamlı ve tek bir tek elden çözüm sunuyoruz. Biz katma değeri
                        yüksek, nitelikli hassasiyete sahip yüksek karmaşıklıktaki ve kritik önem taşıyan yüzey taşlama parçalarıyla kusursuz yüzey
                        bitirme hizmetleri sunuyoruz. Huzey Metal parçaları spesifikasyon aşamasına göre özelleştirir. Paslanmaz çelik taşlama ile ilgili
                        her türlü ihtiyacınızı karşılayabilir.;

                    </div>
                    <h3>UZMAN MÜHENDİSLİK KADROSU</h3>
                    <div class="text">Uzmanlarımız son derece yeteneklidir ve ileri düzeyde  eğitime dayalı bir donanımla karakterizedir.
                        Alanında uzman olan mühendisimizin sahip olduğu kariyer ve teknolojik, bilgileri karmaşık örüntüleri algılama ve
                        kolaylıkla gerçekleştirme kabiliyeti sağlar. Huzey Metal Çeliğin yeni teknolojik gelişmeleri benimsemesi ve son
                        teknoloji paslanmaz çeliği taşlama ekipmanları konusundaki yaratıcı bilgi ve beceri ile teknolojiyi işlevsel bir
                        şekilde kullanabilme yeteneği, bizi sektörde öne çıkaran özelliklerimizdendir. </div>
                    <h3>ÜSTÜN KALİTE VE PERFORMANS</h3>
                    <div class="text">Huzey Metal, Çelik yüzey taşlama yöntemi ile geliştirilen taşlama mekanizmasında elde edilecek kalitenin
                        iyi bir parça üretilmesinden çok daha fazlası olduğuna inanmaktadır. Müşteri memnuniyetinin temel şartı kaliteli ürün ve
                        hizmet üretmektir. Huzey Metal size en yüksek performans ve kalitedeki parçaları hatasız şekilde sunarak kaliteyi ölçmektedir.
                        Odak noktamız, yüksek kaliteli gereksemelerinizi karşılayabilecek daha kesif toleranslı hassas parçalar sunmaktır. </div>
                    <h3>GENİŞ MALZEME YELPAZESİ</h3>
                    <div class="text">Teknolojik ekipmanlarımız ve geniş bir malzeme yelpazesindeki yüzey taşlama deneyimimiz, her
                        türlü malzemeyi öğütmemizi sağlar. Üretkenliğinizi, performansınızı ve parça kalitenizi artırmak için her zaman
                        en kaliteli malzemeyi tercih ediyor ve seçiyoruz. Karaca, paslanmaz Çelik müşterilerine ile ilgili uluslararası
                        standartlarda paslanmaz çelik taşlama hizmeti sunmaktadır. </div>
                </div>

                </div>

        </div>
            </div>
        </div>
    </section>

@endsection
