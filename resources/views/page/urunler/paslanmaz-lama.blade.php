@extends('page.urunler.layouts')

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
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ LAMA.jpeg')}}" alt="PASLANMAZ LAMA"></div>

                    <div class="text">Paslanmaz lama piyasa adıyla silme malzeme, olarak bilinen. Paslanmaz çelik ürünlerindendir.
                        Paslanmaz lama/silme, İçi boş metal çabuk çürüyeceği ve paslanacağı için çok farklı alanlarda kullanılabilen
                        bir üründür. Paslanmaz lamalar bilinen diğer adıyla paslanmaz silmeler dikdörtgen bir şekle ve 90° açılı kenarlara
                        sahip olan özel ürünlerdir. Lamalar sıcak haddeleme ile şekillendirilirler.   Sıcak haddeleme: bu slabın veya kütük
                        diye nitelendirilen yarı mamulün tekrardan ısı verilerek, sıcak halde kesitinin veya da ebadının değiştirilmesi işlemine
                        verilen isimdir. Öncelikle istenilen kaliteye göre oluşturulan formüle göre paslanmaz çelik hurdaları eritilir.
                        İlk olarak istenilen kaliteye uygun olan formüllere göre paslanmaz çelik hurdaları eritilir.  Bu eritme sırasında
                        kayıplar olması durumda formüle göre amalgam elementleri ilave edilerek paslanmaz kütükleri dökülür. Dökülen kütükler
                        sıcak haddelemeye alınır ve sıcak haldeki kütükler makaralar arasından geçirilerek istenilen  boyda kesilir ve sonuç elde edilir </div>
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
