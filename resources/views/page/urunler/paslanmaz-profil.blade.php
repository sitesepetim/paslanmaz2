@extends('page.urunler.layouts')

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
