<div class="col-lg-4">
    <aside class="col-lg-12 sidebar service-sidebar">
        <div class="widget category-widget-two">
            <ul class="widget cat-list">
                <li class="{{request()->is("paslanmaz-boru-agirlik-hesaplama") ? "active":""}}" ><a href="{{route('boru_agirlik')}}">PASLANMAZ BORU AĞIRLIK HESAPLAMA                    </a></li>
                <li class="{{request()->is("paslanmaz-cubuk-agirlik-hesaplama") ? "active":""}}"><a href="{{route('cubuk_agirlik')}}">Paslanmaz Çubuk Ağırlık Hesaplama
                    </a></li>
                <li class="{{request()->is("paslanmaz-kosebent-agirlik-hesaplama") ? "active":""}}"><a href="{{route('kosebent_agirlik')}}">Paslanmaz Köşebent Ağırlık Hesaplama</a></li>
                <li  class="{{request()->is("paslanmaz-lama-agirlik-hesaplama") ? "active":""}}" ><a href="{{route('lama_agirlik')}}">Paslanmaz Lama Ağırlık Hesaplama
                    </a></li>
                <li  class="{{request()->is("paslanmaz-sac-agirlik-hesaplama") ? "active":""}}" ><a href="{{route('sac_agirlik')}}">Paslanmaz Sac Ağırlık Hesaplama

                    </a></li>
                <li  class="{{request()->is("paslanmaz-kutu-profil-agirlik-hesaplama") ? "active":""}}" ><a href="{{route('kutu_agirlik')}}">Paslanmaz Kutu Profil Ağırlık Hesaplama</a></li>
                <li  class="{{request()->is("paslanmaz-kare-profil-agirlik-hesaplama") ? "active":""}}" ><a href="{{route('kare_agirlik')}}">Paslanmaz Kare Profil Ağırlık Hesaplama
                    </a></li>

            </ul>
        </div>

        <div class="widget consult-widget">
            <div class="icon"><span class="fa fa-phone"></span></div>
            <div class="text">BİZE <br> ULAŞABİLİRSİNİZ</div>
            <div class="phone"><a href="tel:+905445073848">+90 (544) 507 38 48</a></div>
        </div>
    </aside>
</div>
