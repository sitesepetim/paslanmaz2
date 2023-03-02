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
                            <th scope="row">15×15 mm	</th>
                            <td>0,453</td>
                            <td>0,538</td>
                            <td>0,661</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">16×16 mm	</th>
                            <td>0,485</td>
                            <td>0,576</td>
                            <td>0,709</td>
                            <td>0,920</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">20×20 mm	</th>
                            <td>0,613</td>
                            <td>0,729</td>
                            <td>0,90</td>
                            <td>1,175</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">25×25 mm</th>
                            <td>0,772</td>
                            <td>0,921</td>
                            <td>1,140</td>
                            <td>1,494</td>
                            <td>1,846</td>
                            <td>2,179</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30×30 mm</th>
                            <td>0,932</td>
                            <td>1,112</td>
                            <td>1,379</td>
                            <td>1,813</td>
                            <td>2,222</td>
                            <td>2,645</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">35×35 mm</th>
                            <td>1,091</td>
                            <td>1,303</td>
                            <td>1,618</td>
                            <td>2,132</td>
                            <td>2,629</td>
                            <td>3,118</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40×40 mm</th>
                            <td>1,251</td>
                            <td>1,495</td>
                            <td>1,857</td>
                            <td>2,451</td>
                            <td>3,036</td>
                            <td>3,602</td>
                            <td>4,708</td>
                        </tr>
                        <tr>
                            <th scope="row">45×45 mm</th>
                            <td>1,410</td>
                            <td>1,686</td>
                            <td>2,097</td>
                            <td>2,770</td>
                            <td>3,433</td>
                            <td>4,081</td>
                            <td>5,309</td>
                        </tr>
                        <tr>
                            <th scope="row">50×50 mm</th>
                            <td>1,570</td>
                            <td>1,878</td>
                            <td>2,336</td>
                            <td>3,089</td>
                            <td>3,818</td>
                            <td>4,559</td>
                            <td>5,960</td>
                        </tr>
                        <tr>
                            <th scope="row">60×60 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>2,814</td>
                            <td>3,727</td>
                            <td>4,607</td>
                            <td>5,516</td>
                            <td>7,222</td>
                        </tr>
                        <tr>
                            <th scope="row">70×70 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,293</td>
                            <td>4,365</td>
                            <td>5,408</td>
                            <td>6,473</td>
                            <td>8,507</td>
                        </tr>
                        <tr>
                            <th scope="row">80×80 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,771</td>
                            <td>5,003</td>
                            <td>6,203</td>
                            <td>7,430</td>
                            <td>9,807</td>
                        </tr>
                        <tr>
                            <th scope="row">100×100 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>4,728</td>
                            <td>6,279</td>
                            <td>7,918</td>
                            <td>9,343</td>
                            <td>12,358</td>
                        </tr>
                        <tr>
                            <th scope="row">120×120 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>7,555</td>
                            <td>-</td>
                            <td>11,257</td>
                            <td>-</td>
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
