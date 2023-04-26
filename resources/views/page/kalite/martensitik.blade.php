    @extends('page.kalite.layouts')


@section('title')
    Martensitik  Paslanmaz Çelik | Huzey Metal
@endsection

    @section('desc')
        ÖSTENİTİK Paslanmaz ÇELİK
    @endsection

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
                    <h1>MARTENSİTİK  Paslanmaz ÇELİK</h1>
                </div>
                <ul class="bread-crumb">
                    <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                    <li><a href="{{route('kaliteler')}}">KALİTELER</a></li>
                    <li>MARTENSİTİK  Paslanmaz ÇELİK</li>
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
                    <h2>MARTENSİTİK  PASLANMAZ ÇELİK</h2>
                    <div class="image"><img src="{{asset('assets/images/kalite/MARTENSİTİK PASLANMAZ ÇELİK.jpeg')}}" alt="MARTENSİTİK PASLANMAZ ÇELİK"></div>
                    <div class="text">
                        <p>Martensitik paslanmaz çelik, içinde yüzde 1'den az karbon olan paslanmaz çelik bir alaşımdır.
                            Martensitik paslanmaz çelik temel olarak demir, krom ve çoğu zaman da nikel bakır içeren  metallerden oluşur.
                            Bu özel metal karışımı, bu malzemeye, yüksek dayanım ve korozyona karşı direnç  olmak üzere bilindik karbon
                            çeliğine göre birçok avantajları vardır. Martensitik paslanmaz çeliklerin içinde düşük miktarda bulunan krom miktarı,
                            metalin kalitesini özelliklerini veya derecesini belirleyen en önemli unsurlardır. Ayrıca, dayanımı veya yüksek
                            korozyon dirençleri ile muayyen kurşun, bakır ve farklı metalleri de içerebilir. Krom içeriği ne kadar yüksek olursa,
                            çelik pas ve korozyona karşı muhteşem bir dayanım gösterir.</p>
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
                                <h3>MARTENSİTİK  PASLANMAZ ÇELİK ÖZELLİKLERİ</h3>
                                <div class="text">Çeliğe paslanmazlık özelliğini kazandıran en önemli element kromdur. Doğada bulunuş şekli
                                    saf halde olmayan anca bir dizi işlemden geçirildikten sonra elde edilen krom, çeliğin dış yüzeyinde
                                    kararlı ve koruyucu bir katman oluşmasına ve  hava ile temasının hemen  kesilmesine neden olmaktadır.
                                    Martensiti paslanmaz çelikler, %10’un üzerinde krom ihtiva ederler. Bu amalgam içinde belli bir oranda
                                    krom ve karbonda bulunmaktadır. Karbonun çelikteki görevi alaşımı sertleştirmektir. Karbon miktarının yüksek olması,
                                    çeliğin korozyona dayanımı yüksek  ölçüde artmış olur. Ancak bu kolay kırılabilme gibi bir obstrüksiyonun ortaya
                                    çıkmasına yol açmaktadır. Diğer taraftan Martensitik çelikler işlenebilen ve kolaylıkla şekillendirilebilen bir
                                    yapıları bulunmaktadır. Orta düzeyde korozyon direncine sahiptir. Ayrıca Martensitik çeliğin ısıya karşı yüksek
                                    dayanım değerleri ile ön plana çıkarlar. Kaynak yapılabilirliği açısından Martensiti çelikler düşük termik iletkenliğe sahiptir.</div>
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
                            <div class="acc-btn"><div class="icon-outer"><span class="fas fa-plus"></span></div>Martensitik Paslanmaz Çelik Kullanım Alanları</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Martensitik paslanmaz çeliğin diğerlerinden daha sert ve dayanıklılık açısından da oldukça iyi bir
                                        yapıya sahip olması nedeniyle kullanım alanları oldukça genişlemiştir.  Tıpkı diğer çelik türlerinde olduğu gibi,
                                        Martensitik çeliklerde endüstride en yaygın olarak kullanılmaktadır. Orta düzeyde korozyona uğrama yatkınlığı olmasına
                                        rağmen, yüksek düzeyde dayanımının ihtiyaç duyulduğu alanlarda Martensitik paslanmaz çeliğe rastlamak mümkündür.
                                        Isı direnci çok yüksek olması nedeniyle termik santrallerde Martensitik çeliklerden yararlanılmaktadır. Martensitik
                                        çeliğin kullanım yerleri içinde en çok mutfak malzemeleri gelmektedir. Mutfak malzemeleri ile kaşık-çatal-bıçak takımlarının
                                        üretiminde kullanılmaktadır.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="fas fa-plus"></span></div>Martensitik Paslanmaz Çelik Fiyatları</div>
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
                            <div class="acc-btn"><div class="icon-outer"><span class="fas fa-plus"></span></div> Martensitik Paslanmaz Çelik Ağırlık Hesaplama Nasıl Yapılır?</div>
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
