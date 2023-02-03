@extends('page.urunler.layouts')

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
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ BORU.jpeg')}}" alt="PASLANMAZ BORU"></div>
                    <div class="text">İmalat aşamasında paslanmaz çelik kullanılan paslanmaz borular, tek bir standarda göre üretilmediğinden
                        farklı özellikler taşımaktadır. Dayanıklılığı yüksek olan paslanmaz borular süreklilik ve yüksek korozyon direncine
                        sahiptir ve uzun ömürlüdürler. Yüksek sıcaklığa, tuzlu su ve kuvvetli asitler gibi tahriş edici sıvı etkilere gazlara
                        dayanıklıdırlar. Paslanmaz boru dikişli ya da dikişsiz olmak üzere iki farklı şekilde olabilir.</div>
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
