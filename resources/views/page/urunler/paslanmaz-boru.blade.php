@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Boru | Huzey Metal
@endsection

@section('desc')
    Huzey Metal, kaliteli ve uzun ömürlü paslanmaz boruları
    en uygun fiyatlarla sunar. İhtiyacınıza özel boyutlandırma seçenekleriyle paslanmaz boru çözümleri için bizi tercih edin.@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ BORU</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ BORU</li>
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
                    <h2>PASLANMAZ BORU</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ-BORU.jpg)}}" alt="PASLANMAZ BORU"></div>
                    <div class="text">İmalat aşamasında paslanmaz çelik kullanılan paslanmaz borular, tek bir standarda göre üretilmediğinden
                        farklı özellikler taşımaktadır. Dayanıklılığı yüksek olan paslanmaz borular süreklilik ve yüksek korozyon direncine
                        sahiptir ve uzun ömürlüdürler. Yüksek sıcaklığa, tuzlu su ve kuvvetli asitler gibi tahriş edici sıvı etkilere gazlara
                        dayanıklıdırlar. Paslanmaz boru dikişli ya da dikişsiz olmak üzere iki farklı şekilde olabilir.</div>

                    <br>
                    <br>

                    <h5><strong>Üretimde Olan Paslanmaz Boru ve Teorik Birim Ağırlıkları</strong></h5>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr >
                            <th scope="col">Çap (mm)</th>
                            <th scope="col">İnç</th>
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
                            <th scope="row">10</th>
                            <td>-</td>
                            <td>0,225</td>
                            <td>0,264</td>
                            <td>0,319</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>-</td>
                            <td>0,275</td>
                            <td>0,325</td>
                            <td>0,394</td>
                            <td>0,500</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>-</td>
                            <td>0,326</td>
                            <td>0,385</td>
                            <td>0,470</td>
                            <td>0,601</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>-</td>
                            <td>0,351</td>
                            <td>0,415</td>
                            <td>0,507</td>
                            <td>0,651</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>-</td>
                            <td>0,376</td>
                            <td>0,445</td>
                            <td>0,545</td>
                            <td>0,701</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">17,2</th>
                            <td>3/8"</td>
                            <td>0,406</td>
                            <td>0,481</td>
                            <td>0,590</td>
                            <td>0,761</td>
                            <td>0,921</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>-</td>
                            <td>0,426</td>
                            <td>0,505</td>
                            <td>0,620</td>
                            <td>0,801</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td>-</td>
                            <td>0,452</td>
                            <td>0,536</td>
                            <td>0,659</td>
                            <td>0,851</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>-</td>
                            <td>0,476</td>
                            <td>0,565</td>
                            <td>0,695</td>
                            <td>0,901</td>
                            <td>1,095</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">21,3</th>
                            <td>1/2"</td>
                            <td>0,508</td>
                            <td>0,604</td>
                            <td>0,744</td>
                            <td>0,967</td>
                            <td>1,177</td>
                            <td>1,375</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td>-</td>
                            <td>0,526</td>
                            <td>0,625</td>
                            <td>0,770</td>
                            <td>1,002</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td>-</td>
                            <td>0,551</td>
                            <td>0,655</td>
                            <td>0,808</td>
                            <td>1,051</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td>-</td>
                            <td>0,601</td>
                            <td>0,715</td>
                            <td>0,883</td>
                            <td>1,152</td>
                            <td>1,409</td>
                            <td>1,653</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">25,4</th>
                            <td>-</td>
                            <td>-</td>
                            <td>0,898</td>
                            <td>1,172</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">26,9</th>
                            <td>3/4"</td>
                            <td>0,649</td>
                            <td>0,772</td>
                            <td>0,954</td>
                            <td>1,247</td>
                            <td>1,527</td>
                            <td>1,796</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td>-</td>
                            <td>0,676</td>
                            <td>0,805</td>
                            <td>0,995</td>
                            <td>1,302</td>
                            <td>1,596</td>
                            <td>1,878</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">30</th>
                            <td>-</td>
                            <td>0,726</td>
                            <td>0,865</td>
                            <td>1,070</td>
                            <td>1,402</td>
                            <td>1,722</td>
                            <td>2,028</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">32</th>
                            <td>-</td>
                            <td>0,776</td>
                            <td>0,925</td>
                            <td>1,146</td>
                            <td>1,502</td>
                            <td>1,847</td>
                            <td>2,178</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">33</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1,184</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">33,7</th>
                            <td>1"</td>
                            <td>0,819</td>
                            <td>0,977</td>
                            <td>1,209</td>
                            <td>1,588</td>
                            <td>1,953</td>
                            <td>2,306</td>
                            <td>2,975</td>
                        </tr>
                        <tr>
                            <th scope="row">35</th>
                            <td>-</td>
                            <td>0,851</td>
                            <td>1,016</td>
                            <td>1,258</td>
                            <td>1,653</td>
                            <td>2,035</td>
                            <td>2,404</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">38</th>
                            <td>-</td>
                            <td>0,929</td>
                            <td>1,106</td>
                            <td>1,371</td>
                            <td>1,803</td>
                            <td>2,222</td>
                            <td>2,629</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">40</th>
                            <td>-</td>
                            <td>0,977</td>
                            <td>1,166</td>
                            <td>1,446</td>
                            <td>1,903</td>
                            <td>2,348</td>
                            <td>2,779</td>
                            <td>3,606</td>
                        </tr>
                        <tr>
                            <th scope="row">42</th>
                            <td>-</td>
                            <td>1,226</td>
                            <td>-</td>
                            <td>1,226</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">42,4</th>
                            <td>1'1/2"</td>
                            <td>1,037</td>
                            <td>1,238</td>
                            <td>1,536</td>
                            <td>2,023</td>
                            <td>2,498</td>
                            <td>2,960</td>
                            <td>3,847</td>
                        </tr>
                        <tr>
                            <th scope="row">43</th>
                            <td>-</td>
                            <td>-</td>
                            <td>1,257</td>
                            <td>-</td>
                            <td>1,559</td>
                            <td>-</td>
                            <td>-</td>
                            <td>2,536</td>
                        </tr>
                        <tr>
                            <th scope="row">45</th>
                            <td>-</td>
                            <td>1,102</td>
                            <td>1,316</td>
                            <td>1,634</td>
                            <td>2,153</td>
                            <td>2,661</td>
                            <td>3,155</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">48,3</th>
                            <td>-</td>
                            <td>1,184</td>
                            <td>1,415</td>
                            <td>1,758</td>
                            <td>2,319</td>
                            <td>2,867</td>
                            <td>3,403</td>
                            <td>4,438</td>
                        </tr>
                        <tr>
                            <th scope="row">50</th>
                            <td>-</td>
                            <td>1,227</td>
                            <td>1,466</td>
                            <td>1,822</td>
                            <td>2,404</td>
                            <td>2,974</td>
                            <td>3,531</td>
                            <td>4,607</td>
                        </tr>
                        <tr>
                            <th scope="row">50,8</th>
                            <td>-</td>
                            <td>1,247</td>
                            <td>1,490</td>
                            <td>1,852</td>
                            <td>2,444</td>
                            <td>-</td>
                            <td>3,591</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">51</th>
                            <td>-</td>
                            <td>1,252</td>
                            <td>1,496</td>
                            <td>1,859</td>
                            <td>2,454</td>
                            <td>3,036</td>
                            <td>3,606</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">52</th>
                            <td>-</td>
                            <td>1,277</td>
                            <td>1,526</td>
                            <td>1,897</td>
                            <td>2,504</td>
                            <td>3,099</td>
                            <td>3,681</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">53</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1,935</td>
                            <td>2,554</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">54</th>
                            <td>-</td>
                            <td>1,327</td>
                            <td>1,587</td>
                            <td>1,972</td>
                            <td>2,604</td>
                            <td>3,224</td>
                            <td>3,831</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">55</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>2,010</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">57</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>2,085</td>
                            <td>2,754</td>
                            <td>3,412</td>
                            <td>4,057</td>
                            <td>5,309</td>
                        </tr>
                        <tr>
                            <th scope="row">60,3</th>
                            <td>2"</td>
                            <td>1,485</td>
                            <td>1,776</td>
                            <td>2,209</td>
                            <td>2,920</td>
                            <td>3,618</td>
                            <td>4,304</td>
                            <td>5,640</td>
                        </tr>
                        <tr>
                            <th scope="row">63</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>2,310</td>
                            <td>3,055</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">63,5</th>
                            <td>-</td>
                            <td>1,565</td>
                            <td>-</td>
                            <td>2,329</td>
                            <td>3,080</td>
                            <td>3,819</td>
                            <td>4,545</td>
                            <td>5,960</td>
                        </tr>
                        <tr>
                            <th scope="row">70</th>
                            <td>-</td>
                            <td>1,728</td>
                            <td>2,067</td>
                            <td>2,573</td>
                            <td>3,405</td>
                            <td>4,226</td>
                            <td>5,033</td>
                            <td>6,611</td>
                        </tr>
                        <tr>
                            <th scope="row">76</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>2,799</td>
                            <td>3,706</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">76,1</th>
                            <td>2"1/2</td>
                            <td>1,881</td>
                            <td>2,251</td>
                            <td>2,802</td>
                            <td>3,711</td>
                            <td>4,607</td>
                            <td>5,491</td>
                            <td>7,222</td>
                        </tr>
                        <tr>
                            <th scope="row">80</th>
                            <td>-</td>
                            <td>1,978</td>
                            <td>2,368</td>
                            <td>2,948</td>
                            <td>3,906</td>
                            <td>4,852</td>
                            <td>5,784</td>
                            <td>7,613</td>
                        </tr>
                        <tr>
                            <th scope="row">84</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>4,107</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">88,9</th>
                            <td>3"</td>
                            <td>-</td>
                            <td>-</td>
                            <td>3,283</td>
                            <td>4,352</td>
                            <td>5,409</td>
                            <td>6,453</td>
                            <td>8,504</td>
                        </tr>
                        <tr>
                            <th scope="row">101,6</th>
                            <td>3"1/2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>3,760</td>
                            <td>4,988</td>
                            <td>6,204</td>
                            <td>7,407</td>
                            <td>9,776</td>
                        </tr>
                        <tr>
                            <th scope="row">104</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>3,850</td>
                            <td>5,108</td>
                            <td>6,354</td>
                            <td>7,587</td>
                            <td>10,016</td>
                        </tr>
                        <tr>
                            <th scope="row">108</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>4,001</td>
                            <td>5,309</td>
                            <td>6,605</td>
                            <td>7,888</td>
                            <td>10,420</td>
                        </tr>
                        <tr>
                            <th scope="row">114,3</th>
                            <td>4"</td>
                            <td>-</td>
                            <td>-</td>
                            <td>4,237</td>
                            <td>5,624</td>
                            <td>6,999</td>
                            <td>8,361</td>
                            <td>11,048</td>
                        </tr>
                        <tr>
                            <th scope="row">129</th>
                            <td>4"1/2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>4,789</td>
                            <td>6,360</td>
                            <td>7,919</td>
                            <td>9,465</td>
                            <td>12,520</td>
                        </tr>
                        <tr>
                            <th scope="row">139,7</th>
                            <td>5"</td>
                            <td>-</td>
                            <td>-</td>
                            <td>5,191</td>
                            <td>6,896</td>
                            <td>8,589</td>
                            <td>10,269</td>
                            <td>13,592</td>
                        </tr>
                        <tr>
                            <th scope="row">154</th>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>5,728</td>
                            <td>7,612</td>
                            <td>9,484</td>
                            <td>11,343</td>
                            <td>15,024</td>
                        </tr>
                        <tr>
                            <th scope="row">168,3</th>
                            <td>6"</td>
                            <td>-</td>
                            <td>-</td>
                            <td>6,265</td>
                            <td>8,328</td>
                            <td>10,379</td>
                            <td>12,417</td>
                            <td>-</td>
                        </tr>



                        </tbody>
                    </table>
                    <br>
                    <br>


                    <h3>PASLANMAZ BORULARIN KULLANIM ALANLARI </h3>
                    <div class="text">Birçok sektörde kullanılan paslanmaz boruların başlıca kullanıldığı yerler alanlar şunlardır;
                        kimyasal üretim tesisleri ve petrokimyasal tesisler, ilaç sanayi sektörü, gıda maddeleri sanayi, sabun sanayi,
                        alkollü ve alkolsüz içecekler meşrubat sanayi, gemicilik sanayi, ısı sanayi, endüstriyel mutfak ekipmanları,
                        otomotiv sanayi sektörü, makine imalatı, beyaz eşya sanayi, mimari uygulama projeleri ve küçük ev aletleri
                        üretiminde kullanılmaktadır.</div>
                    <h3>DİKİŞLİ PASLANMAZ BORU</h3>
                    <div class="text">Dikişli paslanmaz boru, kullanıldığı tüm endüstri dallarında hem basınçsız hem de basınçlı
                        olarak birçok alanında kullanılan borulardır. Paslanmaz dikişli borular, kaynak işleminin niteliğine göre
                        TİG kaynaklı, HF kaynaklı, lazer kaynaklı ve MIG kaynaklı olmak üzere üçe ayrılırlar. Hammaddesi sıcak haddelenmiş sacdır.
                        Rulolar boruların çaplarına uygun koşutlarda büyük çelik servis merkezlerin de dilimlenmektedir.  Dilimlenmiş rulo
                        paslanmaz saclar form makinelerinde kıvrılarak, çeşitli kaynak metotları ile kaynatılarak boru haline getirilir.
                        Paslanmaz dikişli boru fiyatları ve özellikleri ile ilgili daha detaylı bilgiye ulaşmak için müşteri temsilcilerimize danışın.</div>
                    <h3>DİKİŞSİZ (ÇEKME) PASLANMAZ BORU </h3>
                    <div class="text">Dikişsiz borular, basınca dayandıklarından dolayı, endüstriyel alanlarda ağır sanayi
                        alanlarında kullanılırlar. Korozyon direnci vardır ve yüksek sıcaklıklarda mukavemetini koruyabilmektedirler.
                        Bu yöntemde akkor halindeki kütüğün sıcak şekil verme yöntemi ile şekillendirilmesi ile tek parça olarak üretilirler.
                        Mikro yapıda bir homojenliğe sahip olan dikişsiz boruların mukavemeti sac kıvırarak üretilir.  Dikişsiz boruların
                        maliyeti dikişli borulara göre daha yüksektir ve üretim maliyetleri daha fazladır.</div>
                    <h3>NEDEN PASLANMAZ BORU KULLANILMALIDIR? </h3>
                    <ul class="list">
                        <li><strong>Mukavemet momenti:</strong> Mekanik yüklere ve yüksek sıcaklığa karşı dayanıklıdır. Paslanmaz borular hem mekanik yüklere hem
                            de sıcaklığa oldukça dayanıklıdırlar ve yüksek basınç düzeyleri kolayca tolere edebilirler.</li>
                        <li><strong>Uzun ömürlü olmaları:</strong> Paslanmaz borular yıllar içinde özelliklerini kayıp etmezler.
                            İlave herhangi bir işlem ya da bakım yapılmasına gerek bulunmamaktadır. </li>
                        <li><strong>Güvenli Kullanımları:</strong> Paslanmaz borular kullanım sırasında zararlı kimyasallar salmazlar. Çalışma ortamının olumsuz
                            etkilenmesine neden olmazlar. İçlerinden geçen gaz sıvı ve toksinlerden etkilenmeyeceğinden endüstriyel
                            proseslerin önemli bir kesiminde güvenle kullanılmaktadır. </li>
                        <li><strong>Geniş bir seçenek yelpazesi:</strong> Geniş bir seçenek yelpazesi sayesinde birçok kullanıcıya
                            hitap eden en uygun ürünü kolayca seçebilirler.</li>
                        <li><strong>Dayanıklılık: </strong>Paslanmaz çelikten yapılmış borular, yüksek basınca karşı oldukça dayanıklıdır ve
                            benzer etkilere karşı da sızdırmazlık sağlamaktadır </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
