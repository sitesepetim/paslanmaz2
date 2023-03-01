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


                    <h5>Üretimdeki Kare Profiller ve Teorik Birim Ağırlıkları(Kg/Mt)
                    </h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">DIŞ KUTUR (mm)</th>
                            <th scope="col">1,0</th>
                            <th scope="col">1,2	</th>
                            <th scope="col">1,5</th>
                            <th scope="col">2,0	</th>
                            <th scope="col">2,5	</th>
                            <th scope="col">3,0	</th>
                            <th scope="col">4,0	</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">12×12 mm	</th>
                            <td>0,358</td>
                            <td>0,415</td>
                            <td>0,508</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
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

                        </tbody>
                    </table>



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
