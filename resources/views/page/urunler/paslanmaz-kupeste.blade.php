@extends('page.urunler.layouts')

@section('title')
    Paslanmaz Küpeşte | Huzey Metal
@endsection

@section('desc')
    Paslanmaz küpeşte çözümlerimiz, uzun ömürlü ve dayanıklıdır. Huzey Metal'den en uygun fiyatlarla paslanmaz küpeşte seçeneklerine göz atın.@endsection

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ KÜPEŞTE</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ KÜPEŞTE</li>
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
                    <h2>PASLANMAZ KÜPEŞTE</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ KÜPEŞTE.jpeg')}}" alt="PASLANMAZ KÜPEŞTE"></div>

                    <div class="text">Paslanmaz küpeşte balkon, teras merdiven, korkuluk teraslarda paslanmaz çelik ve benzeri malzemelerden yapılan elemanlar
                        genellikle  korkuluk  olarak adlandırılmaktadır. Cazip ve avantajlı çözümleri parlak görüntüsü ile küpeşte modelleri yaşam
                        alanlarınızda yaşlılar çocuklar ile engelliler için  sizlere yardımcı olacak birçok özelliğe sahiptir. Küpeşte modelleri;
                        cazip görüntüsünün yanında güvenlik açısından içiniz her zaman rahat edecektir. Engelli bireylerin kendi ihtiyaçlarını
                        kendilerinin karşılamasına yardımcı olacaktır. Yaşlı bireylerin yürümekte zorlandığı alanlarda küpeşteler devreye girecektir.
                        Bu anlamda siz değerli müşterilerimizin isteklerine fazlasıyla cevap verebilecek ve yapılarınıza şıklık ve güven katacak
                        “Paslanmaz Küpeşte” modellerini önerebiliriz.
                        <br>
                        <br>
                        Küpeşte ile eş anlamlı olan korkuluk sistemleri balkonlarda, teraslarda ve  hayatımızın her yerinde karşımıza çıkabiliyor.
                        Emniyetli, estetik görünümlü küpeşte modelleri, Huzey Metal Paslanmaz Çelik engin bilgileri ve tecrübesiyle bulunduğunuz
                        her alana rahatlıkla uygulanabilir. Hem hayatınızda hem de evinizin her alanında yaşlılar, çocuklar ve fiziksel engelli
                        kişilere küpeşte modelleri yardımcı olacak özelliklerdedir. Bu özellikleri  ortaya konan bu önemi düşününce üretim kalitesinin
                        ve sorunsuz bir işçiliğin ne kadar ince düşünülmesi gerektiği ortaya çıkmaktadır.
                        <br>
                        <br>
                        Müşteri odaklı yüksek üretim standartları doğrultusunda hizmet anlayışını prensip edinmiş Huzey Metal Paslanmaz Çelik uzmanlığı
                        ve profesyonel bakış açısı ile titiz çalışmaları ile sizlere vermeye hazır.  Dayanıklı olması, uzun ömürlü olması, estetik görünümüyle
                        paslanmaz  küpeşte modelleri, sizlerin isteklerine fazlasıyla cevap verebilecektir.
                    </div>
                    <h3>PASLANMAZ KÜPEŞTE NERELERDE KULLANILIR?</h3>
                    <div class="text">Yaşam alanlarına şıklık ve sağlamlık katan  paslanmaz küpeşteleri kullanabilirsiniz. Konutlar başta olmak üzere toplu
                        kullanım noktalarında kullanılabilir. Ortak kullanım alanı olan toplu taşıma, okul, hastane, alışveriş merkezleri, metro, fabrika gibi
                        alanlarda da kullanılmaktadır.  Balkon, teras ya da merdiven sahanlıklarında güvenle tercih edilebilen paslanmaz küpeşteler bölme
                        uygulamalarında da kullanılabilir. Huzey Metal Paslanmaz Çelik olarak paslanmaz küpeşteleri genellikle bina girişlerinde, merdivenlerde,
                        balkonlarda, traslarda asma katlarda, bahçelerde ve havuz kenarlarında uygulayabilmekteyiz. Huzey Metal Paslanmaz Çelik olarak korkuluk
                        ve küpeşte sistemleri konusunda uzman bir firmayız projelerinizin, istediğiniz doğrultuda ve sürede gerçekleşmesi için, gereken her
                        türlü çalışmayı yapmaktayız. . Bu alanda her türlü projelerinizde bize ulaşmaktan çekinmeyiniz. Sizlere hizmet vermekten
                        gurur duyacağız.</div>
                </div>
            </div>
        </div>
    </section>


@endsection
