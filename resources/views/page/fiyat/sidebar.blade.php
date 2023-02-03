<div class="col-lg-3">
    <aside class="col-lg-12 sidebar service-sidebar">
        <div class="widget category-widget-two">
            <ul class="widget cat-list">
                <li class="{{request()->is("fiyat-listesi/304-sac*") ? "active":""}}" ><a href="{{route('304_sac_fiyat')}}">304 Paslanmaz Sac Fiyatları</a></li>
                <li class="{{request()->is("fiyat-listesi/316-sac*") ? "active":""}}"><a href="{{route('316_sac_fiyat')}}">316 Paslanmaz Sac Fiyatları</a></li>
                <li class="{{request()->is("fiyat-listesi/430-sac*") ? "active":""}}"><a href="{{route('430_sac_fiyat')}}">430 Paslanmaz Sac Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/309-sac*") ? "active":""}}" ><a href="{{route('309_sac_fiyat')}}">309 Paslanmaz Sac Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/310-sac*") ? "active":""}}" ><a href="{{route('310_sac_fiyat')}}">310 Paslanmaz Sac Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/304-boru*") ? "active":""}}" ><a href="{{route('304_boru_fiyat')}}">304 Paslanmaz Boru Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/304-kare*") ? "active":""}}" ><a href="{{route('304_kare_fiyat')}}">304 Paslanmaz Kare Profil Fiyat Listesi</a></li>
                <li  class="{{request()->is("fiyat-listesi/304-dik*") ? "active":""}}" ><a href="{{route('304_dik_fiyat')}}">304 Paslanmaz Dikdörtgen Profil Fiyat Listesi</a></li>
                <li  class="{{request()->is("fiyat-listesi/304-cubuk*") ? "active":""}}" ><a href="{{route('304_cubuk_fiyat')}}">304 Paslanmaz Çubuk Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/316-cubuk*") ? "active":""}}" ><a href="{{route('316_cubuk_fiyat')}}">316 Paslanmaz Çubuk Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/304-lama*") ? "active":""}}" ><a href="{{route('304_lama_fiyat')}}">304 Paslanmaz Lama Fiyatları</a></li>
                <li  class="{{request()->is("fiyat-listesi/304-kose*") ? "active":""}}" ><a href="{{route('304_kose_fiyat')}}">304 Paslanmaz Köşebent Fiyatları</a></li>
            </ul>
        </div>

        <div class="widget consult-widget">
            <div class="icon"><span class="fa fa-phone"></span></div>
            <div class="text">BİZE <br> ULAŞABİLİRSİNİZ</div>
            <div class="phone"><a href="tel:+905445073848">+90 (544) 507 38 48</a></div>
        </div>
    </aside>
</div>
