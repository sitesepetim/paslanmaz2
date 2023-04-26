@extends('page.urunler.layouts')

@section('title')
   Paslanmaz Sac | Huzey Metal
@endsection

@section('desc')
    ÖSTENİTİK Paslanmaz ÇELİK
@endsection

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ SAC</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ SAC</li>
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
                    <h2>PASLANMAZ SAC</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ SAC.jpeg')}}" alt="PASLANMAZ SAC"></div>

                    <div class="text">Parlak görüntüye sahip olmasıyla bilinen, uzun ömürlü bir kullanım imkânı sunan, paslanmaz sac, birçok farklı
                        sektörde yoğun olarak kullanılan  dekoratif olarak da tercih edilen ürünler arasındadır. İlk üretim aşamasında mat bir yüzey
                        görüşünü verir. Çeşitli müdahaleler ile parlak   bir görünüm elde edilebilir. Bu aşamadan sonra,  kullanım alanları her
                        geçen gün genişliyor. Parlak ve paslanmaz özelliğe sahip olması nedeniyle mutfak alanlarında, gıda ve tıp endüstri alanlarında,
                        mutfak, mimari yapılarda vb. birçok sektörde tercih edilmektedir. Herhangi bir darbe ya da çarpmaya bağlı deforme meydana
                        geldiğinde, kendi kendini onarabilme özelliğine sahiptir. Herhangi bir darbe aldığında ya da onarabilme özelliğine sahip
                        olması ekstra maliyetlerinden kaçınma fırsatı sunmaktadır. Hayatımızın çoğu noktasında yoğun olarak kullandığımız paslanmaz
                        saclar pratik ve uzun süre kullanıma uygundur.  </div>
                    <h3>PASLANMAZ SACLARIN KULLANIM ALANLARI NELERDİR?</h3>
                    <div class="text">Paslanmaz çeliklerde olduğu gibi bu ürünler  avantajları sayesinde çok farklı alanlarda kullanılabilir.
                        Suyla daimi olarak temas halinde olan  yerler, korozyon istenmeyen ama estetik bir sonuç beklenen alanlarda doğru sonuç verir.
                        Çelik alaşımının bir ürünü olarak bilinen paslanmaz sac farklı sektörde kullanılan  ürünlerin yapımında  tercih edilmektedir.
                        Hayatı kolaylaştıran bu ürünler, farklı  çelik amalgamlar olarak karşımıza çıkar. Yapı ve malzeme olarak dayanıklı olması sebebi
                        ile yapısal ve sanayi gibi alanlarda tercih edilmektedirler. En sık kullanılan alanlardan birisi otomotivdir. Ayrıca hijyen
                        gerektiren tüm alanlarda kullanımı sağlanmaktadır. Yüksek sıcaklığa ve mukavemete dayanıklı olduğu için  gıda sanayiden,
                        tıp endüstrisine, evye yapımına, endüstriyel mutfak ve otomotiv sektörüne kadar  kadar çok sayıda kullanım alanı vardır.
                        Paslanmaz sacların kullanım alanlarını genişleten en belirgin özelliği hem dayanıklı hem de hijyenik ve uzun ömürlü olmasıdır.</div>
                    <h3>PASLANMAZ SAC KOROZYON DAYANIKLILIĞI</h3>
                    <div class="text">Günlük hayatta hemen hemen her alanda kullanılmasıyla bilinen paslanmaz saclar, çeşitli sektörlerde tercih edilen bir
                        üründür. Korozyon dayanımı çok iyi olan paslanmaz sac  kaliteli bir yapıya sahiptir. Korozyon dayanımı  daha yüksek olduğundan daha
                        yaygın kullanım alanına sahiptirler. Su temasında saclar paslanma ve kararma gösterebilmektedir. Oldukça değişik kullanım alanlarına
                        sahip olan paslanmaz çelik sac  su ile teması paslanma ve kararma olmaz. Dayanım ve korozyona karşı dayanıklılık bakımından yıllar içinde
                        korunmuş olması olarak tanımlanabilir. Paslanmaz sac, karbon malzemelerinin kullanımı ile üretildiğinden yüksek ısıya da dayanıklılık
                        gösterebilir.</di
                </div>
            </div>
        </div>
    </section>


@endsection
