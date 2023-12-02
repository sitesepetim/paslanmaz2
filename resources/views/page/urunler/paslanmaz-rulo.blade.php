@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Rulo | Huzey Metal
@endsection

@section('desc')
    Paslanmaz rulo ihtiyaçlarınız için Huzey Metal kalitesiyle tanışın. Geniş seçeneklerimizle size özel paslanmaz rulo çözümleri sunuyoruz.@endsection

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ RULO</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ RULO</li>
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
                    <h2>PASLANMAZ RULO</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ RULO.jpg')}}" alt="PASLANMAZ RULO"></div>

                    <div class="text">Hızlı ve kolay bir şekilde montajı sağlanan paslanmaz rulo, estetik ve ekonomik çözümler sunmaktadır.
                        Dayanıklı ve kütlesinin hafif olmasından dolayı yüksek oranda dayanım sağlamaktadır.  İnşaat işleri maliyetlerinin önemli
                        ölçüde düşürülmesine yardımcı olur. Stoklarımızda çeşitli ebat, alaşım, kalite ve boyutlarda  paslanmaz rulo ürünler
                        bulunmaktadır. Dünya üzerinde son derece önemini bir potansiyel pazara sahip olan paslanmaz rulo, kimyasallara ve
                        genel aşınmaya karşı oldukça dayanıklıdır.  Yüksek kaliteli paslanmaz rulo parlak ve dayanıklı yapıya sahiptir. Pas,
                        leke tutmamaya karşı dayanıklı bir materyal olduğu için havacılık sektöründe tercih edilmektedir. Soğuk şekil verme
                        sonucunda kolaylıkla şekillendirilebilirler. Sertleştirme gibi ısıl işlemler uygulanamamaktadır.  Manyetik çekim gücüne
                        sahip olmadığından mıknatıs tutmamaktadır.</div>
                    <h3>PASLANMAZ RULO AVANTAJLARI</h3>
                    <div class="text">Paslanmaz rulo oldukça değerli bir malzeme niteliği taşımakla beraber fabrikalarda yoğun bir şekilde kullanılmaktadır.
                        Asit, klor, solüsyon ve korozyona karşı direnci yüksektir. Hijyenik bir yapıya sahip olmasından dolayı birçok alanda tercih edilebilmektedir.
                        Sağladığı avantajlar nedeniyle paslanmaz rulo olan  herhangi bir zarar görmesi olmadığından dolayı değerini kaybetmemektedir.</div>
                    <h3>PASLANMAZ RULO FİYATLARI</h3>
                    <div class="text">Üstün nitelikli dayanıma sahip olan paslanmaz rulo, geniş kullanım alanıyla oldukça dikkat çekmektedir.
                        Göstermiş olduğu üstün performans ile bilinen paslanmaz rulo fiyatları  son derece ekonomiktir.  Farklı kullanım alanlarına
                        hitap etmesinden dolayı paslanmaz rulo fiyatları İhtiyaca bağlı olarak değişiklik göstermektedir. Müşteri ihtiyaçları doğrultusunda
                        paslanmaz rulo tercih edilmektedir. Kullanım esnasında ve uzun vadede sağladığı yararlar sayesinde iş yerlerinde ve evlerde sıklıkla
                        kullanılmaktadır. Hem konfor açısından oldukça uygun hem de daha ekonomik  olması nedeniyle paslanmaz rulo tercih edilebilmektedir.
                        Performans açısından da istenileni sağlayan paslanmaz rulo, kullanıldığı ortamda daha temiz ve hijyenik bir ortam
                        oluşmasında yardımcı olur. </div>
                    <h3>PASLANMAZ RULO KULLANIM ALANLARI</h3>
                    <div class="text">Dayanıklı olması uzun süreli kullanım avantajı sağlamaktadır. Akla gelebilecek her alanda paslanmaz rulo  kullanılabilir.
                        Özellikle havacılık gibi sektörlerde paslanmaz rulo ağırlıklı olarak kullanılır.  Özel formülasyonu sayesinde leke tutmaz bir yapıya
                        sahiptir. Çatal ve bıçaklar için de paslanmaz rulolar tercih edilmektedir. Gemilerde özellikle çok büyük güç gereksinimi olan gemi
                        pervanelerinde, paslanmaz rulo  kullanılması gerekli görülmüştür. Mutfak araç ve gereçlerin yanı sıra tencere yapımında kullanılmaktadır.
                        Tanklar, borular, vanalar ve buna benzer çelik sanayisinde de paslanmaz rulo ihtiyaç duyulan bir malzemedir paslanmaz rulo elektrik
                        sektöründen inşaat sektörüne kadar birçok farklı alanda kullanılmaktadır.  </div>
                </div>
            </div>
        </div>
    </section>


@endsection
