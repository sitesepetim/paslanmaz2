<div class="col-lg-4">
    <aside class="col-lg-12 sidebar service-sidebar">
        <div class="widget category-widget-two">
            <ul class="widget cat-list">
                <li class="{{request()->is("hizmet/paslanmaz-celik-boy-kesme") ? "active":""}}" ><a href="{{route('kesme')}}">Paslanmaz Çelİk Boy Kesme</a></li>
                <li class="{{request()->is("hizmet/paslanmaz-celik-taslama") ? "active":""}}"><a href="{{route('taslama')}}">Paslanmaz Çelİk Taşlama</a></li>
                <li class="{{request()->is("hizmet/paslanmaz-celik-dilme") ? "active":""}}"><a href="{{route('dilme')}}">Paslanmaz Çelİk Dİlme </a></li>
                <li  class="{{request()->is("hizmet/paslanmaz-celik-lazer-kesim") ? "active":""}}" ><a href="{{route('lazer')}}">Paslanmaz Çelİk Lazer Kesİm</a></li>

            </ul>
        </div>

        <div class="widget consult-widget">
            <div class="icon"><span class="fa fa-phone"></span></div>
            <div class="text">BİZE <br> ULAŞABİLİRSİNİZ</div>
            <div class="phone"><a href="tel:+905445073848">+90 (544) 507 38 48</a></div>
        </div>
    </aside>
</div>
