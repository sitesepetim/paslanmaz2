<div class="col-lg-4">
    <aside class="col-lg-12 sidebar service-sidebar">
        <div class="widget category-widget-two">
            <ul class="widget cat-list">
                <li class="{{request()->is("urunler/paslanmaz-celik") ? "active":""}}" ><a href="{{route('paslanmaz_celik')}}">PASLANMAZ ÇELİK</a></li>
                <li class="{{request()->is("urunler/paslanmaz-mil-cubuk") ? "active":""}}"><a href="{{route('paslanmaz-mil-cubuk')}}">PASLANMAZ MİL (ÇUBUK)</a></li>
                <li class="{{request()->is("urunler/paslanmaz-kare*") ? "active":""}}"><a href="{{route('paslanmaz-kare')}}">PASLANMAZ KARE PROFİL</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-tel") ? "active":""}}" ><a href="{{route('paslanmaz-tel')}}">PASLANMAZ TEL </a></li>
                <li  class="{{request()->is("urunler/paslanmaz-lama") ? "active":""}}" ><a href="{{route('paslanmaz-lama')}}">PASLANMAZ LAMA</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-fitting") ? "active":""}}" ><a href="{{route('paslanmaz-fitting')}}">PASLANMAZ FİTTİNGS</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-kupeste") ? "active":""}}" ><a href="{{route('paslanmaz-kupeste')}}">PASLANMAZ KÜPEŞTE</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-kosebent") ? "active":""}}" ><a href="{{route('paslanmaz-kosebent')}}">PASLANMAZ KÖŞEBENT</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-profil") ? "active":""}}" ><a href="{{route('paslanmaz-profil')}}">PASLANMAZ PROFİL</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-boru") ? "active":""}}" ><a href="{{route('paslanmaz-boru')}}">PASLANMAZ BORU</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-sac") ? "active":""}}" ><a href="{{route('paslanmaz-sac')}}">PASLANMAZ SAC</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-rulo") ? "active":""}}" ><a href="{{route('paslanmaz-rulo')}}">PASLANMAZ RULO</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-serit") ? "active":""}}" ><a href="{{route('paslanmaz-serit')}}">PASLANMAZ ŞERİT</a></li>
                <li  class="{{request()->is("urunler/paslanmaz-serit") ? "active":""}}" ><a href="{{route('paslanmaz-cekme')}}">PASLANMAZ ÇEKME ŞERİT</a></li>
            </ul>
        </div>

        <div class="widget consult-widget">
            <div class="icon"><span class="fa fa-phone"></span></div>
            <div class="text">BİZE <br> ULAŞABİLİRSİNİZ</div>
            <div class="phone"><a href="tel:+905445073848">+90 (544) 507 38 48</a></div>
        </div>
    </aside>
</div>
