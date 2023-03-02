@extends('page.urunler.layouts')

@section('title')

    PASLANMAZ TEL ||

@endsection

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ TEL</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ TEL</li>
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
                    <h2>PASLANMAZ TEL</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ TEL.jpeg')}}" alt="PASLANMAZ TEL"></div>

                    <div class="text">Krom nikel paslanmaz teller genelde kangal halinde sarılmış şekilde imal edilerek satışa sunulmaktadır.
                        Endüstriyel fırınlarda yüksek ısı gerektiren koşullarda konveyör sistemlerinde  yüksek ısı olsun veya olmasın fark etmez.
                        Yüksek ısıya dayandığı için K309 ve 310 kalite paslanmaz çelikten üretilmektedir. Bununla birlikte K314 kalite malzeme ile
                        de üretim yapılmaktadır. Bu kalite 1200 derece santigrat yüksek sıcaklık dayanımı bulunmaktadır. Firmamız tüketicilerin ortak
                        yönelik kangal tel   ve tel ürünleri üretimini yapmaktadır. Huzey Metal Paslanmaz Çelik olarak Metal olarak farklı kangal tel
                        seçenekleriyle sizlere hizmet vermekteyiz.</div>
                    <br>
                    <br>
                    <h5><strong>Üretimdeki Paslanmaz Teller ve Teorik Birim Ağırlıkları(Gr/Mt)</strong></h5>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr >
                            <th scope="col">ÇAP (mm)</th>
                            <th scope="col">KALINLIK TOLERANSI(mm)	</th>
                            <th scope="col">AĞIRLIK	</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">0,05</th>
                            <td>+,-0,002</td>
                            <td>0,0003</td>
                        </tr>
                        <tr>
                            <th scope="row">0,10</th>
                            <td>+,-0,003</td>
                            <td>0,0006</td>
                        </tr>
                        <tr>
                            <th scope="row">0,30</th>
                            <td>+,-0,005</td>
                            <td>0,0018</td>
                        </tr>
                        <tr>
                            <th scope="row">0,60</th>
                            <td>+,-0,006</td>
                            <td>0,0016</td>
                        </tr>
                        <tr>
                            <th scope="row">1,00</th>
                            <td>+,-0,010</td>
                            <td>0,006</td>
                        </tr>
                        <tr>
                            <th scope="row">1,50</th>
                            <td>+,-0,020</td>
                            <td>0,009</td>
                        </tr>
                        <tr>
                            <th scope="row">2,00</th>
                            <td>+,-0,030</td>
                            <td>0,012</td>
                        </tr>
                        <tr>
                            <th scope="row">2,50</th>
                            <td>+,-0,040</td>
                            <td>0,015</td>
                        </tr>
                        <tr>
                            <th scope="row">3,00</th>
                            <td>+,-0,050</td>
                            <td>0,018</td>
                        </tr>
                        <tr>
                            <th scope="row">4,00</th>
                            <td>+,-0,060</td>
                            <td>0,024</td>
                        </tr>


                        </tbody>
                    </table>

                    <br>
                    <br>

                    <h3>PASLANMAZ ÇELİK TEL ÇEŞİTLERİ</h3>

                    <ul class="list">
                        <li><strong>Örgülük ve genel amaca yönelik paslanmaz çelik teller: </strong>krom tel, örgülük tel diye de isimlendirilmektedir.
                            Dayanıklı olmaları nedeniyle uzun süreli kullanım gerektiren alanlarda  sorunsuz bir şekilde kullanılırlar. Fırça, hortum
                            üretimi, gemi gibi uygulamalarda kullanılırlar.</li>
                        <li><strong>Yaylık amaçlı paslanmaz teller:  </strong>Yay imalatında kullanılan paslanmaz çelik yaylık tellerin  en belirgin özelliği enerji
                            depolama ve enerjinin geri salınıcına imkân veren  bileşiklerden üretilmiştir. Beyaz eşya sanayisi inşaat sektörü, elektronik
                            gibi farklı alanlarda kullanılır.</li>
                        <li><strong>Soğuk şekillendirme amaçlı paslanmaz çelik tel çeşitleri:</strong> Düşük ısıllarda form alabilme özelliğine sahip olan tellerdir.
                            Vida,  somun cıvata, gibi alanlarda kullanılır./li>
                        <li><strong>Ezik çelik tel:</strong> Otomotiv sanayi, inşaat sanayi ve gıda, sektörü gibi farklı sektörlerde parça üretiminde kullanılır.</li>
                        <li><strong>Mesh filtre teli:</strong> Özellikle yüksek sıcaklığa dayanabilmesi nedeniyle su ve asidik ortamlarda çok rahatlıkla  kullanılan tellerdir.</li>
                    </ul>
                    <h3>PASLANMAZ TEL KULLANIM ALANLARI</h3>
                    <div class="text">Çelik teller, donatılı betonlar başta endüstriyel zeminler olmak üzere  su yapıları, beton yol zayıf taban zeminleri
                        ve karayolu üst yapıları, havaalanları ve her türlü açık ve kapalı saha betonlarında yaygın olarak kullanılmaktadır.
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
