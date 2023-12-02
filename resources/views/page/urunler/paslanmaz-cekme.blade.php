@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Çekme Boru | Huzey Metal
@endsection

@section('desc')
    Huzey Metal, paslanmaz çelik çekme boru ihtiyaçlarınıza uygun çözümler sunar.
    Yüksek kaliteli malzemelerimizle endüstriyel kullanım için ideal çekme borulara sahip olabilirsiniz.@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ ÇEKME BORU</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ ÇEKME BORU</li>
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
                    <h2>PASLANMAZ ÇEKME BORU</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ-MİL.jpg')}}" alt="PASLANMAZ-ÇEKME-BORU "></div>

                    <div class="text">Paslanmaz çekme boru, paslanmaz çelik malzemesinden üretilen bir tür boru türüdür. Bu borular,
                        korozyona dayanıklılık, güçlülük ve hijyenik özellikleri nedeniyle birçok endüstriyel, inşaat ve gıda sektöründe kullanılır.</div>
                    <h3>PASLANMAZ ÇEKME BORU ÖZELLİKLERİ</h3>
                    <ul class="list">
                        <li><strong>Korozyona dayanıklılık:</strong>  Paslanmaz çelik malzemesi korozyona dayanıklı olduğundan paslanmaz çekme borular
                            da bu özelliği taşır.</li>
                        <li><strong>Güçlülük:</strong> Paslanmaz çekme borular güçlü ve dayanıklıdır ve uzun süreli kullanım için uygundur.</li>
                        <li><strong>Hijyenik:</strong> Paslanmaz çekme borular, mikroorganizmaların büyümesini engelleme ve kolay
                            temizlenebilme özelliğine sahiptir. Bu nedenle gıda sektöründe sıklıkla kullanılır.</li>
                        <li><strong>Esneklik: </strong>Paslanmaz çekme borular, kolayca şekil verilebilme özelliğine sahiptir ve bu nedenle uygulama esnekliği sağlar.</li>
                    </ul>
                    <h3>PASLANMAZ ÇEKME BORU <br> KULLANIM ALANLARI</h3>
                    <ul class="list">
                        <li><strong>Gıda endüstrisi:</strong>  Paslanmaz çekme borular hijyenik özelliği nedeniyle gıda endüstrisinde sıklıkla kullanılır
                                (örneğin, sıvı ve gaz türlerinin dağıtımı).</li>
                        <li><strong>Endüstriyel: </strong> Paslanmaz çekme borular, endüstriyel tesislerde su, gaz, yağ ve diğer türlerin dağıtımı için kullanılır.</li>
                        <li><strong>Hijyenik:</strong> Petrol ve gaz endüstrisi: Paslanmaz çekme borular, petrol ve gaz türlerinin dağıtımı için kullanılabilir.</li>
                        <li><strong>Esneklik: </strong> Kimya endüstrisi: Paslanmaz çekme borular, kimyasal maddelerin dağıtımı için hijyenik ve güvenli bir seçenek olarak kullanılabilir.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
