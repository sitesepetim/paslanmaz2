@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Lama | Huzey Metal
@endsection

@section('desc')
    Paslanmaz lama seçeneklerimiz, yüksek kalite standartlarında üretilmiştir. Huzey Metal'den en uygun fiyatlarla paslanmaz lama temin etmek için hemen tıklayın.@endsection

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ LAMA</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ LAMA</li>
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
                    <h2>PASLANMAZ LAMA</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ LAMA.jpg')}}" alt="PASLANMAZ LAMA"></div>

                    <div class="text">Paslanmaz lama piyasa adıyla silme malzeme, olarak bilinen. Paslanmaz çelik ürünlerindendir.
                        Paslanmaz lama/silme, İçi boş metal çabuk çürüyeceği ve paslanacağı için çok farklı alanlarda kullanılabilen
                        bir üründür. Paslanmaz lamalar bilinen diğer adıyla paslanmaz silmeler dikdörtgen bir şekle ve 90° açılı kenarlara
                        sahip olan özel ürünlerdir. Lamalar sıcak haddeleme ile şekillendirilirler.   Sıcak haddeleme: bu slabın veya kütük
                        diye nitelendirilen yarı mamulün tekrardan ısı verilerek, sıcak halde kesitinin veya da ebadının değiştirilmesi işlemine
                        verilen isimdir. Öncelikle istenilen kaliteye göre oluşturulan formüle göre paslanmaz çelik hurdaları eritilir.
                        İlk olarak istenilen kaliteye uygun olan formüllere göre paslanmaz çelik hurdaları eritilir.  Bu eritme sırasında
                        kayıplar olması durumda formüle göre amalgam elementleri ilave edilerek paslanmaz kütükleri dökülür. Dökülen kütükler
                        sıcak haddelemeye alınır ve sıcak haldeki kütükler makaralar arasından geçirilerek istenilen  boyda kesilir ve sonuç elde edilir </div>

                    <br>
                    <br>
                    <h5><strong>Üretimdeki Paslanmaz Lama ve Teorik Birim Ağırlıkları(Kg/Mt)</strong></h5>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr >
                            <th scope="col">MM</th>
                            <th scope="col">3</th>
                            <th scope="col">4</th>
                            <th scope="col">5</th>
                            <th scope="col">6</th>
                            <th scope="col">8</th>
                            <th scope="col">10</th>
                            <th scope="col">12</th>
                            <th scope="col">15</th>
                            <th scope="col">20</th>
                            <th scope="col">25</th>
                            <th scope="col">30</th>
                            <th scope="col">40</th>
                            <th scope="col">50</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">10</th>
                            <td>0,236</td>
                            <td>0,314</td>
                            <td>0,393</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>0,353</td>
                            <td>0,471</td>
                            <td>0,589</td>
                            <td>0,707</td>
                            <td>0,942</td>
                            <td>1,178</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>0,471</td>
                            <td>0,628</td>
                            <td>0,785</td>
                            <td>0,942</td>
                            <td>1,256</td>
                            <td>1,571</td>
                            <td>1,844</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td>0,589</td>
                            <td>0,785</td>
                            <td>0,981</td>
                            <td>1,178</td>
                            <td>1,571</td>
                            <td>1,965</td>
                            <td>2,355</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30</th>
                            <td>0,707</td>
                            <td>0,942</td>
                            <td>1,178</td>
                            <td>1,413</td>
                            <td>1,884</td>
                            <td>2,355</td>
                            <td>2,826</td>
                            <td>3,533</td>
                            <td>4,711</td>
                            <td>5,888</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">35</th>
                            <td>0,824</td>
                            <td>1,099</td>
                            <td>1,374</td>
                            <td>1,649</td>
                            <td>2,198</td>
                            <td>2,748</td>
                            <td>3,297</td>
                            <td>4,121</td>
                            <td>5,495</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40</th>
                            <td>0,942</td>
                            <td>1,256</td>
                            <td>1,571</td>
                            <td>1,884</td>
                            <td>2,512</td>
                            <td>3,141</td>
                            <td>3,758</td>
                            <td>4,711</td>
                            <td>6,280</td>
                            <td>7,851</td>
                            <td>9,421</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">45</th>
                            <td>1,061</td>
                            <td>1,413</td>
                            <td>1,%1006</td>
                            <td>2,120</td>
                            <td>2,826</td>
                            <td>3,533</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">50</th>
                            <td>1,178</td>
                            <td>1,571</td>
                            <td>1,963</td>
                            <td>2,355</td>
                            <td>3,141</td>
                            <td>3,925</td>
                            <td>4,711</td>
                            <td>5,888</td>
                            <td>7,851</td>
                            <td>9,813</td>
                            <td>11,770</td>
                            <td>15,701</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">60</th>
                            <td>1,413</td>
                            <td>1,884</td>
                            <td>2,355</td>
                            <td>2,826</td>
                            <td>3,%1008</td>
                            <td>4,711</td>
                            <td>5,652</td>
                            <td>7,065</td>
                            <td>9,421</td>
                            <td>9,421</td>
                            <td>14,130</td>
                            <td>18,841</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">70</th>
                            <td>1,649</td>
                            <td>2,198</td>
                            <td>2,748</td>
                            <td>3,297</td>
                            <td>4,396</td>
                            <td>5,495</td>
                            <td>6,594</td>
                            <td>8,243</td>
                            <td>10,991</td>
                            <td>13,757</td>
                            <td>16,490</td>
                            <td>21,981</td>
                            <td>27,481</td>
                        </tr>
                        <tr>
                            <th scope="row">80</th>
                            <td>1,884</td>
                            <td>2,512</td>
                            <td>3,141</td>
                            <td>3,%1008</td>
                            <td>5,024</td>
                            <td>6,281</td>
                            <td>7,536</td>
                            <td>9,421</td>
                            <td>12,561</td>
                            <td>15,701</td>
                            <td>18,840</td>
                            <td>25,121</td>
                            <td>31,401</td>
                        </tr>
                        <tr>
                            <th scope="row">90</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>5,652</td>
                            <td>7,065</td>
                            <td>8,478</td>
                            <td>10,601</td>
                            <td>14,131</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">100</th>
                            <td>-</td>
                            <td>-</td>
                            <td>3,925</td>
                            <td>4,711</td>
                            <td>6,281</td>
                            <td>7,851</td>
                            <td>9,421</td>
                            <td>11,771</td>
                            <td>15,701</td>
                            <td>19,621</td>
                            <td>23,550</td>
                            <td>31,401</td>
                            <td>39,251</td>
                        </tr>
                        <tr>
                            <th scope="row">120</th>
                            <td>-</td>
                            <td>-</td>
                            <td>4,710</td>
                            <td>5,652</td>
                            <td>7,536</td>
                            <td>9,421</td>
                            <td>11,301</td>
                            <td>14,131</td>
                            <td>18,841</td>
                            <td>23,551</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">150</th>
                            <td>-</td>
                            <td>-</td>
                            <td>5,887</td>
                            <td>7,065</td>
                            <td>9,421</td>
                            <td>11,771</td>
                            <td>14,131</td>
                            <td>17,661</td>
                            <td>23,551</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">200</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>12,561</td>
                            <td>15,701</td>
                            <td>18,841</td>
                            <td>23,550</td>
                            <td>31,401</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>


                        </tbody>
                    </table>
                        <br>
                        <br>

                    <h3>PASLANMAZ LAMA KULLANIM ALANLARI</h3>
                    <div class="text">Gelişen teknolojiler sanayi ve teknolojiyle beraber paslanmaz lama malzemelerin kullanımı  giderek artmaktadır.
                        Hijyenik özellikte olmaları nedeniyle gıda endüstrisinde tercih edilir. Bu özelliği sayesinde gıda sektörü için vazgeçilmezdir.
                        Gıda makinelerinde hareket aktarımını sağlayan parçalarda makine şaselerinde  ve karıştırıcı bıçaklarında paslanmaz lama tercih edilir.
                        İmalat sanayinin pek çok alanında  özellikle talaşlı imalatta tercih edilir. Yüksek korozyon dayanımı nedeni ile gemi inşa,
                        ilaç, gıda sanayi gibi alanlarda kullanılır. Deniz suyu korozyonuna karşı yüksek direnç sağlarlar. Lamalar gemi inşasında
                        kullanılan şaselerde yüksek korozif ve mekanik dayanımları sayesinde kullanılır. Paslanmaz çelik lama, dekoratif amaçlı
                        olarak da tercih  edilebilir Sanayi sektöründe. Önemli avantajlar sağladığı ve yüksek mukavemetleri için bu ürünler tercih
                        edilse de dekoratif ve mimari alanlarda da paslanmazlardan sıklıkla yararlanılır. Ev ürünlerinde masa ve sehpa ürünlerinde
                        tercih edilebilirken, yaya üst geçitleri gibi alanlarda küpeşte korkuluklarda tercih edilebilir. Günümüzde son derece yaygın
                        bir şekilde kullanılmaktadır.  Paslanmaz lama ölçüleri kullanılacak olan ortama göre değişiklik gösterebilir.</div>
                    <h3>PASLANMAZ LAMA KULLANIMININ AVANTAJLARI</h3>
                    <div class="text">Paslanmaz lama çeşitli kullanımlar için pek çok avantajı vardır. Bunları kısaca ifade etmek gerekirse;
                        ticari anlamda ilk olarak uzun ömürlülük gelmektedir. Dış etkenlerin verdiği zararlara karşı yüksek korozyon direni
                        ve kaynaklanabilme özellikleri sayesinde kullanıldıkları alanlarda uzun süre boyunca bakıma ihtiyaç duymaksızın işlevlerini
                        yerine getirebilir. </div>
                </div>
            </div>
        </div>
    </section>


@endsection
