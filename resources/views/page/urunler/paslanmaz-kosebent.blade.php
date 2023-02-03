@extends('page.urunler.layouts')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>PASLANMAZ KÖŞEBENT</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                        <li>PASLANMAZ KÖŞEBENT</li>
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
                    <h2>PASLANMAZ KÖŞEBENT</h2>
                    <div class="image mb-40"><img src="{{asset('assets/images/resource/PASLANMAZ KÖŞEBENT.jpeg')}}" alt="PASLANMAZ KÖŞEBENT"></div>

                    <div class="text">Farklı sektörlerde kullanım alanına sahip paslanmaz köşebent içi dolu paslanmaz çeliğin 90 derece bükülmesiyle
                        şekillendirilir. Üretim süreci paslanmaz lamalara benzemektedir. Öncelikle hurda çelikler eritilerek lama haline getirilmekte
                        ve sonrasında da istenilen ölçülere getirildikten sonra çeşitli kalıplardan geçirilir. İsteğinden şekle gelen köşebentler talep
                        edilen uzunlukta kesilerek hazırlanır. Geniş kullanım alanlarına sahiptir. Geniş kullanım yelpazesi olan bu ürün pek çok farklı
                        ölçüde kullanıma sahiptir. Birbirinden değişik  ölçülerde çeşitleri bulunur.</div>
                    <h3>PASLANMAZ KÖŞEBENT ÖZELLİKLERİ VE MALZEMELERİ</h3>
                    <div class="text">Yüksek oranda ostenitik çelik içeren köşebent çeşitlerimiz,  tamamı sertifikalıdır. Uzun süre kullanma avantajı sunar.
                        Paslanmaz köşebentler manyetik değildir. Yüksek ısıya karşı  gösterdikleri yüksek mukavemet nedeniyle bu ürünler, kaynak edilebilme
                        özelliğiyle ayrım yaratmaktadır. Paslanmaz köşebentler, özel makineler ve ekipmanlarla istenen ölçüler doğrultusunda bükülerek son
                        şekline kavuşur. Maksimum 6 metre boyunda köşebent çeşitleri bulabileceğiniz firmamızda ayrıca stok tedarikine de sahip olmanın da
                        ayrıcalığına sahibiz. Huzey Metal paslanmaz çelik güvencesi ile uygun fiyatlarla sipariş vermek için hemen bizimle iletişime
                        geçebilirsiniz.</div>
                    <h3> PASLANMAZ KÖŞEBENT NERELERDE KULLANILIR?</h3>
                    <div class="text">Paslanmaz köşebentler  birçok alanda en çok tercih edilen ürünler içinde yer almaktadırlar. Paslanmaz köşebentlerin
                        bu kadar yaygın olarak tercih edilmesinin neden, yüksek korozyon dayanımıdır. Birçok sektörde yaygın olarak kullanılan paslanmaz
                        köşebentlerin kullanıldığı alanlardan kısaca bahsetmek gerekirse; Makine imalatında paslanmaz köşebent kullanılmaktadır.
                        Genellikle makine şasesi olarak adlandırılan makinenin ana gövdesinde kullanılır. 316 kalite köşebentler taşıyıcı kolonlara
                        destek amacıyla  gemi yapımında da  kullanılmaktadır. Gıda sanayisinde pek çok alanda kullanılan köşebentler karıştırıcı bıçakları
                        imalatında da kullanılmaktadır. Gıda sanayinde yaygın olarak kullanılan paslanmaz köşebentler kazan ve depolarda destekleyici
                        amaçlarla da kullanılmaktadır. Otomotiv kimya, enerji, sektörünün birçok alanında kullanılan paslanmaz köşebent, mimari gibi
                        alanlarda yaygın olarak kullanılmaktadır. Paslanamaz köşebent ile ilgili merak ettiğiniz, merak ettiğiniz ve detaylarına ulaşmak
                        istediğiniz bilgiler için Huzey Metal Paslanmaz Çelik firması ile iletişime geçebilirsiniz.</div>
                    <h3> PASLANMAZ KÖŞEBENT FİYATLARI</h3>
                    <div class="text">Özellikleri çeşitlerine ve kullanım alanlarına göre paslanmaz köşebent fiyatlarının değişiklikler
                        gösterdiği bilinmektedir. Satın almak isteyeceğiniz, üretim aşamasında kullanılan malzemelere göre farklılık gösterdiği
                        söylenebilir. Korozyona karşı dayanıklı olması sayesinde  fiyatlarının buna göre değiştirme olanağı vardır. Konusunda uzman
                        ve profesyonel olan ekip tarafından yapılan çalışmalar sonrasında satışa sunulan köşebentler için anında fiyat teklifi alabilirsiniz.</div>
                </div>
            </div>
        </div>
    </section>


@endsection
