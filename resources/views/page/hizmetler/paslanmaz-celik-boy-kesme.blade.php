@extends('page.hizmetler.layouts')

@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ ÇELİK BOY KESME</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>PASLANMAZ ÇELİK BOY KESME</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">
              @include('page.hizmetler.sidebar')
                <div class="col-lg-8">
                    <h2>PASLANMAZ ÇELİK BOY KESME</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ ÇELİK.jpg')}}" alt="PASLANMAZ ÇELİK"></div>

                    <div class="text">Paslanmaz çelik; demir ve karbon alaşımı olmasına karsın, bileşiminde karbondan başka minimal
                        %10,5 krom elementi içermektedir.  Krom elementi  çeliği paslanmaya karşı koruyan temel bileşendir. Paslanmaz
                        çeliğin içindeki  erimiş kromun varlığı iyi analiz edilmelidir. Doğru yerlerde doğru amaçlarla kullanılması
                        gerekmektedir. Diğer türlü elinizde bulunan bir üründen herhangi bir fayda sağlayamazsınız. Bu nedenle
                        mühendisler paslanmaz çelik üretimi öncesi, kullanma şekli göz önünde tutularak  tasarlamalar yapmalıdır.
                        Kullanım yerleri ve paslanmaz çelik malzemenin içindeki krom oranı veya ayrı bileşiklerin varlığına göre
                        paslanmaz çelikler belli gruplara ayrılmışlardır. Temel paslanmaz çelik alaşımlarında ağırlığa göre minimum
                        %10.5 krom bulunur). Paslanmaz çelikteki krom elementi Oksijenle teması halinde yüzeyinde malzemeyi korozyondan
                        koruyan çok ince krom-oksit tabakası oluşturur. Ayrıca, bu katman yırtıldığında, açıldığında veya herhangi bir
                        nedenle çizilmesi halinde atman tekrar kendini yeniler ve açığı kapatır. Bu görüngüye pasivasyon adı verilir ve
                        titanyum gibi bir kısım diğer metallerde de görülür. Toplamda 150 'nin üzerinde paslanmaz çelik kalitesi  vardır
                        ve bunlardan 15’i birçok sektörde kendine yer bulmaktadır. Paslanmaz çelikler boru ve yassı ürün şekillerinde
                        üretilebilirler. Bu şekilde birçok gıda sektöründe,  otomotiv, beyaz eşya,  inşaat, yapısal uygulamalarda,
                        tıbbi aletlerde kendine yer bulmaktadır.  Başlıca paslanmaz çelik türleri beş ana grupta toplanır. Çeliğe nikel
                        ilave edilmesi halinde,  manyetik olmayan bu tip çelikler, soğuk şekil verme sırasında daha az kırılgan hale getirir.
                        Bu gruplar 5 ana gruba ayrılır;
                        <br>
                        <br>
                        <ul class="list">
                            <li>1.	Östenitik Paslanmaz Çelikler</li>
                            <li>2.	Ferritik Paslanmaz Çelikler</li>
                            <li>3.	Martensitik Paslanmaz Çelikler</li>
                            <li>4.	Dubleks Paslanmaz Çellikler</li>
                            <li>5.	Çökelmeyle Sertleştirilebilen Paslanmaz Çelikler</li>
                        </ul>
                    </div>
                    <h3>PASLANMAZ ÇELİK KULLANIM ALANLARI</h3>
                    <div class="text">Tüm paslanmaz çelikler arasında en yaygın kullanılan 304 kalite paslanmaz çelik fark etmesek bile
                        neredeyse her noktada yer alır.  Kimyasal ürünler elde etmede, petrokimya, tencere ve ev aletleri, çatal ve bıçak
                        takımları, düdüklü tencereler, pişirme kapları, endüstriyel mutfak sektöründe, İlaç ve tıp endüstrisinde kullanılmaktadır.
                        Ayrıca lavabolar, gıda ve içecek sanayi gibi pek çok sektörün yanı sıra evye yapımında yaygınlıkla da tercih edilmektedir.</div>

                </div>
            </div>
        </div>
    </section>

@endsection
