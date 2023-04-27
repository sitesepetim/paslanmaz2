@extends('page.fiyat.layouts')

@section('title')
    304 Paslanmaz Lama Fiyatları |  Huzey Metal
@endsection

@section('desc')
    304 paslanmaz lama fiyatları konusunda Huzey Metal sizlere en iyi
    hizmeti sunmak için burada. Çeşitli boyut ve kalınlıklarda lama seçeneklerimizi inceleyin.@endsection

@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>304 PASLANMAZ LAMA FİYATLARI</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('fiyat_listesi')}}">FİYAT LİSTESİ</a></li>
                        <li>304 PASLANMAZ LAMA FİYATLARI</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="image mb-40"><img src="{{asset('assets/images/resource/304 Paslanmaz Lama Fİyatları.jpeg')}}" alt=""></div>
            <div class="row">
                @include('page.fiyat.sidebar')
                <div class="col-lg-9">
                    <h2>304 PASLANMAZ LAMA FİYATLARI</h2>
                    Paslanmaz çelik, korozyona dayanıklı ve estetik görünümü ile yüksek talep gören bir malzemedir.
                    Bu malzeme, gıda sanayi, inşaat, havacılık ve otomotiv gibi birçok sektörde kullanılır. Paslanmaz
                    çelik malzemelerin kalitesi, ölçüsü ve miktarı fiyatın belirlenmesinde etkilidir.
                    <br>
                    <br>
                    Fiyat listemizdeki tüm fiyatlar, dolar cinsindendir. Lütfen bu fiyatların, yerel para
                    birimi cinsinden değerlendirilmesi için gerekli döviz kuru hesaplamalarını yapın.
                    <br>
                    <br>
                    Fiyat listemizdeki tüm fiyatlara, KDV dahil değildir.
                    <br>
                    <br>
                    Detaylı bilgi için iletişim bilgilerimizden bizlere ulaşabilirsiniz.
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>304 PASLANMAZ LAMA FİYAT LİSTESİ</h3>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">KALİTE</th>
                            <th scope="col">KALINLIK</th>
                            <th scope="col">EBAT</th>
                            <th scope="col">KG</th>
                            <th scope="col">BİRİM FİYATI </th>
                            <th scope="col">PLAKA FİYATI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<\App\Models\fiyatListesi::where('type','=',"304_lama")->count();$i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"304_lama")->get()[$i]['kalite']}}</td>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"304_lama")->get()[$i]['kalinlik']}}</td>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"304_lama")->get()[$i]['ebat']}}</td>
                            <td>{{\App\Models\fiyatListesi::where('type','=',"304_lama")->get()[$i]['kg']}}</td>
                            <td>${{\App\Models\fiyatListesi::where('type','=',"304_lama")->get()[$i]['birim']}}</td>
                            <td>${{\App\Models\fiyatListesi::where('type','=',"304_lama")->get()[$i]['plaka']}}</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@endsection
