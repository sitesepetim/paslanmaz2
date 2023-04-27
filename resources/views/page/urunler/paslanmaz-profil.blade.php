@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Profil | Huzey Metal
@endsection

@section('desc')
    Paslanmaz profil çözümlerimiz, farklı boyut ve kalitelerde sunulur. Huzey Metal'in geniş paslanmaz profil ürün yelpazesine göz atın.@endsection

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ PROFİL</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ PROFİL</li>
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
                    <h2>PASLANMAZ PROFİL</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ PROFİL.png')}}" alt="PASLANMAZ PROFİL"></div>

                    <div class="text">Paslanmaz profil paslanmaz özelliğe sahip çelikler için kullanılan bir isimdir. İçerisinde çelik ve krom amalgamları
                        bulunduran bu profiller birçok sektör tarafından kullanılmaktadır. Çeliğin en çok kullanıldığı birinci sektör yapı ve inşaat, sektörüdür.
                        <br>
                        <br>
                        Korozyon ve oksitlenmeye karşı büyük bir direnç göstermesi yapısında yer alan  bu malzemeler inşaat sektörü başta olmak üzere birçok
                        sektörde yaygın olarak kullanılmaktadır. Paslanmaz  özelliğinden dolayı da uzun yıllar boyunca kullanıma uygundur. Paslanmaz profil
                        satışı hizmeti sunan firmamız Huzey Metal Paslanmaz Çelik istenilen ölçü ve ebatlarda üretim gerçekleştirilmektedir. Profil üretimlerimiz
                        paslanmaz kare profil ve paslanmaz dikdörtgen profil olarak gerçekleştirilmektedir.
                        <br>
                        <br>
                        Geniş bir kullanım alanına sahip olan paslanmaz profiller inşaat sektörü başta olmak üzere, otomotivde ve daha birçok alanda
                        kullanılmaktadır. Kare profil ve dikdörtgen profil ve 304 paslanmaz dikdörtgen profil ölçü ve fiyat bilgileri için iletişim bilgilerimizden
                        bizlere ulaşabilirsiniz.
                    </div>

                    <br>
                    <br>
                    <h5><strong>Üretimdeki Dikdörtgen Profiller ve Teorik Birim Ağırlıkları(Kg/Mt)</strong></h5>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr >
                            <th scope="col">DIŞ KUTUR (mm)</th>
                            <th scope="col">1,0</th>
                            <th scope="col">1,2</th>
                            <th scope="col">1,5</th>
                            <th scope="col">2,0	</th>
                            <th scope="col">2,5</th>
                            <th scope="col">3,0</th>
                            <th scope="col">4,0</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">20x10 mm</th>
                            <td>0,453</td>
                            <td>0,538</td>
                            <td>0,661</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">20x15 mm</th>
                            <td>0,533</td>
                            <td>0,634</td>
                            <td>0,781</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">25x15 mm</th>
                            <td>0,613</td>
                            <td>0,729</td>
                            <td>0,900</td>
                            <td>1,175</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30x10 mm</th>
                            <td>0,613</td>
                            <td>0,729</td>
                            <td>0,900</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30x15 mm</th>
                            <td>0,693</td>
                            <td>0,825</td>
                            <td>1,020</td>
                            <td>1,335</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30x20 mm</th>
                            <td>0,772</td>
                            <td>0,921</td>
                            <td>1,140</td>
                            <td>1,494</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">35x20 mm</th>
                            <td>0,852</td>
                            <td>1,017</td>
                            <td>1,259</td>
                            <td>1,654</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40x15 mm</th>
                            <td>0,852</td>
                            <td>1,017</td>
                            <td>1,259</td>
                            <td>1,654</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40x20 mm</th>
                            <td>0,926</td>
                            <td>1,112</td>
                            <td>1,379</td>
                            <td>1,813</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40x30 mm</th>
                            <td>1,091</td>
                            <td>1,303</td>
                            <td>1,618</td>
                            <td>2,132</td>
                            <td>2,661</td>
                            <td>3,156</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">50x20 mm</th>
                            <td>1,091</td>
                            <td>1,303</td>
                            <td>1,618</td>
                            <td>2,132</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">50x25 mm</th>
                            <td>-</td>
                            <td>1,399</td>
                            <td>1,738</td>
                            <td>2,292</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">50x30 mm</th>
                            <td>1,251</td>
                            <td>1,495</td>
                            <td>1,857</td>
                            <td>2,451</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">50x40 mm</th>
                            <td>-</td>
                            <td>1,686</td>
                            <td>2,097</td>
                            <td>2,770</td>
                            <td>3,412</td>
                            <td>4,081</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">60x20 mm</th>
                            <td>-</td>
                            <td>1,495</td>
                            <td>1,857</td>
                            <td>2,451</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">60x30 mm</th>
                            <td>-</td>
                            <td>1,686</td>
                            <td>2,097</td>
                            <td>2,770</td>
                            <td>3,412</td>
                            <td>4,081</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">60x40 mm</th>
                            <td>-</td>
                            <td>1,878</td>
                            <td>2,336</td>
                            <td>3,089</td>
                            <td>3,819</td>
                            <td>4,559</td>
                            <td>5,960</td>
                        </tr>
                        <tr>
                            <th scope="row">80x40 mm</th>
                            <td>-</td>
                            <td>2,261</td>
                            <td>2,814</td>
                            <td>3,727</td>
                            <td>4,600</td>
                            <td>5,516</td>
                            <td>7,222</td>
                        </tr>
                        <tr>
                            <th scope="row">80x60 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,293</td>
                            <td>4,365</td>
                            <td>5,408</td>
                            <td>6,473</td>
                            <td>8,504</td>
                        </tr>
                        <tr>
                            <th scope="row">100x40 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,293</td>
                            <td>4,365</td>
                            <td>5,408</td>
                            <td>6,473</td>
                            <td>8,504</td>
                        </tr>
                        <tr>
                            <th scope="row">100x50 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,532</td>
                            <td>4,684</td>
                            <td>5,790</td>
                            <td>6,952</td>
                            <td>9,115</td>
                        </tr>
                        <tr>
                            <th scope="row">100x60 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,771</td>
                            <td>5,003</td>
                            <td>-</td>
                            <td>7,430</td>
                            <td>9,807</td>
                        </tr>
                        <tr>
                            <th scope="row">120x40 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>5,003</td>
                            <td>-</td>
                            <td>7,430</td>
                            <td>9,807</td>
                        </tr>
                        <tr>
                            <th scope="row">120x60 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>5,642</td>
                            <td>-</td>
                            <td>8,387</td>
                            <td>11,083</td>
                        </tr>
                        <tr>
                            <th scope="row">120x80 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>6,279</td>
                            <td>-</td>
                            <td>9,343</td>
                            <td>12,358</td>
                        </tr>
                        <tr>
                            <th scope="row">150x50 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>6,279</td>
                            <td>-</td>
                            <td>9,343</td>
                            <td>12,358</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>

                        </tbody>
                    </table>
                    <br>
                    <br>

                    <h5><strong>Üretimdeki Kare Profiller ve Teorik Birim Ağırlıkları(Kg/Mt)</strong></h5>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr >
                            <th scope="col">DIŞ KUTUR (mm)</th>
                            <th scope="col">1,0</th>
                            <th scope="col">1,2</th>
                            <th scope="col">1,5</th>
                            <th scope="col">2,0	</th>
                            <th scope="col">2,5</th>
                            <th scope="col">3,0</th>
                            <th scope="col">4,0</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">12x12 mm</th>
                            <td>0,358</td>
                            <td>0,415</td>
                            <td>0,508</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">15x15 mm</th>
                            <td>0,453</td>
                            <td>0,538</td>
                            <td>0,661</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">16x16 mm</th>
                            <td>0,485</td>
                            <td>0,576</td>
                            <td>0,709</td>
                            <td>0,920</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">20x20 mm</th>
                            <td>0,613</td>
                            <td>0,729</td>
                            <td>0,900</td>
                            <td>1,175</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">25x25 mm</th>
                            <td>0,772</td>
                            <td>0,921</td>
                            <td>1,140</td>
                            <td>1,494</td>
                            <td>1,846</td>
                            <td>2,179</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30x30 mm</th>
                            <td>0,932</td>
                            <td>1,112</td>
                            <td>1,379</td>
                            <td>1,813</td>
                            <td>2,222</td>
                            <td>2,645</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">35x35 mm</th>
                            <td>1,091</td>
                            <td>1,303</td>
                            <td>1,618</td>
                            <td>2,132</td>
                            <td>2,629</td>
                            <td>3,118</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40x40 mm</th>
                            <td>1,251</td>
                            <td>1,495</td>
                            <td>1,857</td>
                            <td>2,451</td>
                            <td>3,036</td>
                            <td>3,602</td>
                            <td>4,708</td>
                        </tr>
                        <tr>
                            <th scope="row">45x45 mm</th>
                            <td>1,410</td>
                            <td>1,686</td>
                            <td>2,097</td>
                            <td>2,770</td>
                            <td>3,433</td>
                            <td>4,081</td>
                            <td>5,309</td>
                        </tr>
                        <tr>
                            <th scope="row">50x50 mm</th>
                            <td>1,570</td>
                            <td>1,878</td>
                            <td>2,336</td>
                            <td>3,089</td>
                            <td>3,818</td>
                            <td>4,559</td>
                            <td>5,960</td>
                        </tr>
                        <tr>
                            <th scope="row">60x60 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>2,814</td>
                            <td>3,727</td>
                            <td>4,607</td>
                            <td>5,516</td>
                            <td>7,222</td>
                        </tr>
                        <tr>
                            <th scope="row">70x70 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,293</td>
                            <td>4,365</td>
                            <td>5,408</td>
                            <td>6,473</td>
                            <td>8,507</td>
                        </tr>
                        <tr>
                            <th scope="row">80x80 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,771</td>
                            <td>5,003</td>
                            <td>6,203</td>
                            <td>7,430</td>
                            <td>9,807</td>
                        </tr>
                        <tr>
                            <th scope="row">100x100 mm</th>
                            <td>-</td>
                            <td>-</td>
                            <td>4,728</td>
                            <td>6,279</td>
                            <td>7,918</td>
                            <td>9,343</td>
                            <td>12,358</td>
                        </tr>
                        <tr>
                            <th scope="row">120x120 mm</th>
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

                    <h3>PASLANMAZ PROFİL VE FİYATLARI</h3>
                    <div class="text">Huzey Metal Paslanmaz çelik olarak   her ölçüde paslanmaz profil stokumuz bulunmaktadır. Kare profillerde 10x10’dan
                        150x150’ye kadar uzanan ebatlar, dikdörtgen profillerde 20x10’dan 120x80’e uzanan ebatlar bulunsa da sizlerin ölçü isteğine göre
                        milimetrik olarak kesim işlemlerini ise büyük bir özen ile gerçekleştirmekteyiz.</div>
                    <h3>PASLANMAZ PROFİL KULLANIM ALANLARI</h3>
                    <div class="text">Ağır yüklere karşı dayanıklı bir ürün olan paslanmaz profiller otomotivden dekorasyona birçok alanda kullanılmaktadırlar.
                        Restoranlarda dekorasyondaki konfor düzeyini belirleyen masa sandalye yapımında mutfak tezgâh ürünleri tasarımında ve mobilya sektöründe
                        paslanmaz profiller kullanılmaktadır.
                        <br>
                        <br>
                        Taşıma gücü kapasitesinin yüksek olması ve uzun süreli kullanım avantajı olması nedeniyle otomotiv ve sanayi alanında sıklıkla tercih
                        edilmektedir. Gemi yapımında paslanmaz profillerin kullanıldığı gözlenmektedir. Mimari ve dekorasyon alanlarında paslanmaz profiller
                        kullanılır. Tekstil alanında da kullanımı çok yaygındır. Bu alanlarda genelde askılık ürünlerinin  yapımı ve manken yapımı için tercih
                        edilir. Kullanım alanlarına göre şekillendirilerek paslanmaz profiller oluşturulur.
                        <br>
                        <br>
                        Dekoratif görüntüsü ile yoğun olarak tercih edilen paslanmaz profil, aynı zamanda makine sektöründe yaygın olarak kullanılmaktadır.
                        Tekstil-hazır giyim sektörleri perakende mağazacılık alanında, dekorasyon alanında ve daha birçok farklı sektörde uygulama kolaylığı
                        açısından paslanmaz profiller tercih edilmektedir.
                        .</div>

                </div>
            </div>
        </div>
    </section>


@endsection
