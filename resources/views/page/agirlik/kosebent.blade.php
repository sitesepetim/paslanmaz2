

@extends('page.hizmetler.layouts')

@section('title') Paslanmaz Köşebent Ağırlık Hesaplama | Huzey Metal
@endsection

@section('desc')
    Paslanmaz köşebent ağırlık hesaplama aracımızla köşebentlerin ağırlığını hesaplayın. Huzey Metal kalitesi ve uygun fiyatları kaçırmayın.@endsection

@section('content')

    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-9.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Paslanmaz Köşebent Ağırlık Hesaplama
                        </h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('index')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('hizmetlerimiz')}}">HİZMETLERİMİZ</a></li>
                        <li>Paslanmaz Köşebent Ağırlık Hesaplama</li>
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
                    <h2>Paslanmaz Köşebent Ağırlık Hesaplama
                    </h2>


                    <div class="row">
                        <div class="col-6">  <img src="assets/images/resource/kosebent.jpg" name="pictures" width="200"></div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <label for="c"><b>Kalınlık t (mm)</b></label>
                                    <input id="c" type="text" placeholder="milimetre olarak giriniz. örn 10cm 100mm şeklinde" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="a"><b>Yükseklik L1 (mm)</b></label>
                                    <input id="a" type="text" placeholder="milimetre olarak giriniz. örn 10cm 100mm şeklinde" name="" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="b"><b>Genişlik L2 (mm)</b></label>
                                    <input id="b" type="text" placeholder="milimetre olarak giriniz. örn 10cm 100mm şeklinde" name="" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="uzunluk"><b>Uzunluk (m)</b></label>
                                    <input id="uzunluk" type="text" placeholder="metre olarak giriniz" name="" class="form-control">
                                </div>


                            </div>
                            <br>
                            <button onclick="hesapla()" class="btn btn-primary">Hesapla</button>
                            <script>function hesapla(){



                                    var a = document.getElementById('a').value;
                                    var b = document.getElementById('b').value;
                                    var c = document.getElementById('c').value;
                                    var uzunluk = document.getElementById('uzunluk').value;
                                    var sonuc = document.getElementById('sonuc');



                                    console.log();
                                    var sonuc2=((parseInt(a)+parseInt(b)-parseInt(c))*parseInt(c)*78*(uzunluk*1000))/10000000;

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
