
@extends('page.hizmetler.layouts')

@section('title')Paslanmaz Boru Ağırlık Hesaplama | Huzey Metal
@endsection

@section('desc')
    Paslanmaz boru ağırlık hesaplama aracımız ile kolayca boru ağırlığını hesaplayın. Huzey Metal kalitesiyle uygun fiyatlarla hizmetinizdeyiz.@endsection


    @section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Paslanmaz Boru Ağırlık Hesaplama
                        </h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>Paslanmaz Boru Ağırlık Hesaplama</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row">
                @include('page.agirlik.sidebar')
                <div class="col-lg-8">
                    <h2>Paslanmaz Boru Ağırlık Hesaplama
                    </h2>


                    <div class="row">
                        <div class="col-6">  <img src="assets/images/resource/tube.jpg" name="pictures" width="200"></div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <label for="dis_cap"><b>Dış çap (mm)</b></label>
                                    <input id="dis_cap" type="text" placeholder="milimetre olarak giriniz. örn 10cm 100mm şeklinde" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="ic_cap"><b>İç çap (mm)(Et kalınlığı)</b></label>
                                    <input id="ic_cap" type="text" placeholder="milimetre olarak giriniz. örn 10cm 100mm şeklinde" name="" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="uzunluk"><b>Uzunluk (m)</b></label>
                                    <input id="uzunluk" type="text" placeholder="metre olarak giriniz" name="" class="form-control">
                                </div>


                            </div>
                            <br>
                            <button onclick="hesapla()" class="btn btn-primary">Hesapla</button>
                            <script>function hesapla(){



                                    var dis_cap = document.getElementById('dis_cap').value;
                                    var ic_cap = document.getElementById('ic_cap').value;
                                    var uzunluk = document.getElementById('uzunluk').value;
                                    var sonuc = document.getElementById('sonuc');



                                    var sonuc2=(dis_cap-ic_cap)*ic_cap*0.02464*uzunluk;

                                    console.log("Sonuç: "+sonuc2.toString().substring(0, 6)+" KG");
                                    sonuc.textContent="Sonuç: "+sonuc2.toString().substring(0, 7)+" KG";



                                }</script>

                        </div>
                    </div>


                    <br>
                    <div  class="text-center"><h3 id="sonuc">Sonuç:</h3></div>




                </div>
            </div>
        </div>
    </section>

@endsection
