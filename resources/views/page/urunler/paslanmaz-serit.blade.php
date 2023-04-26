@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Şerit | Huzey Metal
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
                        <h1>PASLANMAZ ŞERİT</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ ŞERİT</li>
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
                    <h2>PASLANMAZ ŞERİT</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ-ŞERİT.jpeg')}}" alt="PASLANMAZ-ŞERİT"></div>
                    <div class="text">Paslanmaz şerit, korozyona dayanıklı ve güçlü bir malzeme olan paslanmaz çelikten üretilir.
                        Bu şeritler genellikle inşaat, endüstriyel ve gıda sektörlerinde kullanılır.</div>
                    <h3>PASLANMAZ ŞERİTLERİN ÖZELLİKLERİ</h3>
                    <ul class="list">
                        <li><strong>Korozyona dayanıklılık: </strong>Paslanmaz çelik, korozyona dayanıklı bir malzeme olduğundan paslanmaz şeritler de bu özelliği taşır.</li>
                        <li><strong>Güçlülük:</strong> Paslanmaz şeritler güçlü ve dayanıklıdır, bu nedenle inşaat, endüstriyel ve gıda sektörlerinde uzun süreli kullanım için ideal bir seçenektir.</li>
                        <li><strong>Düşük aşınma: </strong>Paslanmaz şeritler, yüksek aşınma dayanımına sahiptir ve dolayısıyla uzun süreli kullanım için uygundur.</li>
                        <li><strong>Hijyenik: </strong>Paslanmaz şeritler, mikroorganizmaların büyümesini engelleme ve kolay temizlenebilme özelliğine sahiptir.
                            Bu nedenle gıda sektöründe sıklıkla kullanılır.</li>
                    </ul>
                    <h3>PASLANMAZ ŞERİTLERİN <br> KULLANIM ALANLARI</h3>
                    <ul class="list">
                        <li><strong>Gıda endüstrisi:</strong> Paslanmaz şeritler hijyenik özelliği nedeniyle gıda endüstrisinde sıklıkla kullanılır (örneğin, gıda işleme tesislerinde).</li>
                        <li><strong>Endüstriyel:</strong> Paslanmaz şeritler, endüstriyel makine ve ekipmanlar için kapaklar, çerçeveler, borular ve vidalar gibi uygulamalarda kullanılır.</li>
                        <li><strong>İnşaat: </strong>Paslanmaz şeritler, duvar kaplamaları, merdivenler, çatı örtüleri ve banyo malzemeleri gibi inşaat uygulamalarında kullanılabilir.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
