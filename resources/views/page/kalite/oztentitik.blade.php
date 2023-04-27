@extends('page.kalite.layouts')

@section('title')
    Östenitik Paslanmaz Çelik | Huzey Metal
@endsection

@section('desc')
    Östenitik Paslanmaz Çelik, korozyon direnci ve mukavemeti yüksek bir malzemedir. Huzey Metal'de farklı kalitelerde bulunur.@endsection

@section('content')


<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="https://html.tonatheme.com/2022/welbim/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>ÖSTENİTİK Paslanmaz ÇELİK</h1>
                </div>
                <ul class="bread-crumb">
                    <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                    <li><a href="{{route('kaliteler')}}">KALİTELER</a></li>
                    <li>ÖSTENİTİK Paslanmaz ÇELİK</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Service details -->
<section class="service-details">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-side">
                    <h2>ÖSTENİTİK PASLANMAZ ÇELİK</h2>
                    <div class="image"><img src="{{asset('assets/images/kalite/Östenitik Paslanmaz Çelik.jpeg')}}" alt="Östenitik Paslanmaz Çelik"></div>
                    <div class="text">
                        <p>Östenitik paslanmaz çelik talebi yönlendiren en olumlu özelliği korozyon direncidir.
                            Bileşimlerinde minimal %16 krom içerirler. Bunun da %8 ila 10 arasında nikel alınıp
                            zenginleştirilen östenitik paslanmaz çelikler, aşındırıcı sıvı maddeler kullanıldığı
                            alanlarda yüksek performans sağlamasıdır. Bununla birlikte östenitik çeliklerde karbon
                            miktarı olabildiğince düşüktür. Karbon sayesinde paslanmaz çelik sertlik özelliği barındırır.
                            Östenitik paslanmaz malzemeler maksimum %0,15 karbon, içerir. Bu da yüksek korozyon direnci
                            özelliğine karşın, Karbon değerinin düşük olması, dayanıklılığın azalması anlamına gelmektedir.
                            Bu yüzden de östenitik paslanmaz çeliklerin manyetik olmadığı ve ısıl işleme tabi tutulmamaktadır.
                            Ancak kaçınılmaz olduğu durumlarda haddeleme   işlemi yapılarak belirli bir düzeye kadar sertlik değerinin
                            arttırılması da mümkündür. Östenitik paslanmaz çeliklerin sert olmaması, kolay işlenebilecek özellikte
                            olmasına olabilirlik sağlamaktadır.</p>
                    </div>
                    <div hidden class="row mb-30">
                        <div class="col-md-6">
                            <div class="image"><img src="assets/images/resource/image-16.jpg" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="image"><img src="assets/images/resource/image-17.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="service-benifit">

                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h3>ÖSTENİTİK PASLANMAZ ÇELİK FAYDALARI</h3>
                                <div class="text">Bu denli yoğun kullanımı olan östenitik paslanmaz çeliklerin sağlamış olduğu
                                    faydalar oldukça fazladır. Bu faydaların en başında yüksek korozyon direnci gelmektedir.
                                    Uygulamaları gibi ağır şartlarda tercih edilen östenitik paslanmaz çelikler günümüzde çok
                                    geniş bir alanda kullanılmaktadır. Oksidasyonu sürecinde yüksek sıcaklığa ek olarak östenitik
                                    malzemelerin bir avantajı da kolay bulunuyor olmalarıdır. </div>
                                <h3>PASLANMAZ ÇELİĞİ <br>ÖSTENİTİK YAPAN ÖZELLİĞİ NEDİR</h3>
                                <div class="text">Çeliğe belli bir miktarda krom-nikel eklendiğinde, yapısı gereği "östenitik" olur.
                                    Çeliğin kimyasal bileşimi, derecesini belirlerken, malzemedeki östenit kristal konstrüksiyon en
                                    bilinen bir özelliğidir. Tavlanarak östenitik oluşturan bu çelikler çoğunlukla manyetik olmayan
                                    olarak nitelendirildiği görülmektedir. Bu durumda dikkat etmek önemlidir. Yalnız soğuk haddeleme
                                    östenitik çelik veya kalınlık azaltması için ve sertlik değerini arttırmak, malzemeye belli bir
                                    oranda manyetizma katar. Şekillendirilebilirlik sayesinde Şekillendirilebilirliği ve korozyona karşı
                                    direnci onu çok önemli bir endüstriyel malzeme yapmaktadır. Paslanmaz çelik sektörüne dair çözümlerimiz
                                    ile yanınızdayız. İhtiyacınız olan ürünler ile ilgili bilgi almak isterseniz bizimle iletişim kurabilirsiniz. </div>
                            </div>
                            <div hidden class="col-lg-4">
                                <div class="icon-box">
                                    <div class="icon"><span class="fa fa-award"></span></div>
                                    <h4>Sertifikalı <br> Malzemeler </h4>
                                </div>
                                <div class="icon-box">
                                    <div class="icon"><span class="fa fa-thumbs-up"</span></div>
                                    <h4>Profesyonel <br> İşçilik</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="accordion-box">
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="fas fa-plus"></span></div>Östenitik Paslanmaz Çelik Kullanım Alanları</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yaygın olarak kullanılan östenitik paslanmaz çelikler tedariki kolay ve üstün kalitelerine karşın,
                                        kabul edilebilir fiyatlar da olması bu malzemelere olan talebi arttırmaktadır. Bu yüzden de östenitik paslanmaz
                                        çeliğin kullanım alanları itibarıyla keskin sınırlar çizebilmek mümkün değildir. Kimya ve petrokimya sanayileri
                                        başta olmak üzere birçok alanda tercih edilen östenitik paslanmaz çelik vazgeçilmez bir malzemedir.  Buna ilaveten
                                        su ve kanalizasyon şebekelerinde, petrol boru hatlarında, şehir içi gaz, ve oksidasyon yığının yüksek olduğu daha
                                        pek çok alanda östenitik paslanmaz çelikler yaygın olarak kullanılmaktadır.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="fas fa-plus"></span></div>Östenitik Paslanmaz Çelik Fiyatları</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Çelik ülkemizde ithal olarak tedarik edildiğinden dolayı fiyatlar döviz kuruna göre değişkenlik göstermektedir.
                                        Çeliğin özelliklerine göre de çelik fiyatları değişmektedir. Detaylı ve güncel paslanmaz çelik fiyatları hakkında iletişim sayfamızdaki
                                        bilgilerimizden bizlere ulaşabilirsiniz.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="fas fa-plus"></span></div> Östenitik Paslanmaz Çelik Ağırlık Hesaplama Nasıl Yapılır?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Web sitemizde ihtiyacınız olan tüm malzemeler için ağırlık hesaplamasını kolayca yapabilirsiniz. Bütün ürün gruplarında
                                        ölçüleri belirterek hesaplama yapma kolaylığını sizlere sağlamaktayız. Paslanmaz boru, çubuk, köşebent, lama, sac, profil ve tel ağırlık
                                        hesaplamasına ağırlık hesaplama sayfamızdan ulaşabilirsiniz. Detaylı bilgi için iletişim sayfamızdaki bilgilerimizden bizlere ulaşabilirsiniz.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Block -->
                    </ul>
                </div>
            </div>
        @include('page.kalite.sidebar')
        </div>
    </div>
</section>


@endsection
