@extends('page.hizmetler.layouts')

@section('title')
     Paslanmaz Çelik Lazer Kesim |  Huzey Metal
@endsection

@section('desc')
    Paslanmaz Çelik Lazer Kesim: Huzey Metal'de paslanmaz çeliklerinizi hassas lazer kesim teknolojisi ile
    kesim işlemlerinde kullanılmak üzere hazırlatabilirsiniz.@endsection

@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ ÇELİK <br>LAZER KESİM</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>PASLANMAZ ÇELİK LAZER KESİM</li>
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
                    <h2>PASLANMAZ ÇELİK <br>LAZER KESİM</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ ÇELİK LAZER KESİM.jpeg')}}" alt="PASLANMAZ ÇELİK LAZER KESİM"></div>

                    <div class="text">Paslanmaz çeliği diğer maddelerden ayırt edici özelliği yüksek korozyon dayanımıdır. Paslanmaz çelik gibi kesimi
                        zor malzemelerde ve özel kesme aletleri kullanılması gerekir. Lazer kesim İmalat sektöründeki birçok alanda kullanılan paslanmaz
                        çeliklerin kesilmesinde çok önemli avantajlar sağlar. Paslanmaz çelik kesimde ve şekillendirme yöntemleri arasında kesme, delme
                        ve plazma kesim başta gelmektedir. Paslanmaz çelik lazer kesim uygulaması, endüstri sektöründe büyük kolaylıklar sağlamaktadır.
                        Paslanmaz lazer kesimde, lazer ışını malzemeyi yerel olarak ısıtır.  Bu ısınma esnasında azot erimiş metali kertiden dışarı atar.
                        Azot çeliğin ısıl direnç alaşımları korozyon ve oksidasyona karsı dayanımının düşmesini önler. Paslanmaz çelik lazer kesimde yardımcı
                        gaz olarak kullanılan azotun uygun kalite ve miktarda olması gerekir. Erimiş metalleri ve bir miktar oksijen ve azotun uzaklaştırılması
                        için malzeme kalınlığı arttıkça azot absorpsiyonuda artmalıdır.

                    </div>
                    <h3>PASLANMAZ LAZER KESİM MAKİNESİ</h3>
                    <div class="text">Çeşitli lazer makineleri vardır. Bunlar; UV (ultraviyole) lazer makineleri, YAG lazer makineleri, fiber lazer makineleri,
                        CO2 lazer makineleri ve yeşil lazer makineleridir. Materyalin cinsine göre lazer kesim makinesi çeşidi de değişiklik göstermektedir.
                        Fiber lazer makineleri paslanmaz çelik lazer kesim için kullanılan makinedir. Paslanmaz lazer kesim makinesinin kalitesi ve seçimi,
                        işlemin verimliliğini doğrudan etkilemektedir.</div>

                    <h3>PASLANMAZ LAZER KESİM <br> NERELERDE UYGULANIR</h3>
                    <div class="text"> Lazer kesim teknolojisinin kullanım alanları oldukça geniştir. Bunlar;
                        <br>
                        <br>
                        <ul class="list">
                            <li>Otomotiv Sektörü</li>
                            <li>Makine İmalat Sanayi</li>
                            <li>İnşaat Malzemeleri Üretimi</li>
                            <li>Mobilya ve Dekorasyon Malzemeleri Üretimi</li>
                            <li>Görsel İletişim İçin Kullanılan Reklam Tabelaları İmalatı</li>
                            <li>Kalıp Sanayi</li>
                            <li>Elektrik ve Aydınlatma Ürünlerinin İmalatı</li>
                            <li>Kalıp Sanayi</li>
                        </ul>
                    </div>
                    <h3>PASLANMAZ LAZER KESİM AVANTAJLARI</h3>
                    <div class="text">Paslanmaz lazer kesim üretim süreçleri üzerinde birçok avantaj sunmaktadır. Özellikle son teknolojiye
                        sahip lazer kesim makineleri ile  hassas ve hızlı kesimler yapabilirsiniz.  Çeliğin otonom bir şekilde istenilen kullanıma
                        hazır hale getirilmesi havacılık alanında güvenilir ürünlerin üretimini kolaylaştırmaktadır. Seri kesim kabiliyetleri ile
                        hassas ve doğru bir şekilde kesim yapabilmekte ve çok daha uygun maliyetlerle ürünler hazırlanabilmektedir. Huzey Metal olarak
                        son teknoloji ürünü paslanmaz lazer kesim makinelerimiz ile uygun fiyatlarla ve en hızlı teslim süresi ile çalışmaktayız.
                        Sizde paslanmaz çelik lazer kesim işlemlerinizde beklenti ve ihtiyaçlarınızda bizimle iletişime geçerek bilgi alabilirsiniz.</div>

                </div>
            </div>
        </div>
    </section>

@endsection
