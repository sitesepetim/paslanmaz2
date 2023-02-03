<div class="col-lg-4">
    <aside class="col-lg-12 sidebar service-sidebar">
        <div class="widget category-widget-two">
            <ul class="widget cat-list">
                <li class="{{request()->is("baklava-desen") ? "active":""}}" ><a href="{{route('baklava_desen')}}">Baklava Desen</a></li>
                <li class="{{request()->is("gozyasi-desen") ? "active":""}}"><a href="{{route('gozyasi_desen')}}">Gözyaşı Desen</a></li>
                <li class="{{request()->is("ceta-desen") ? "active":""}}"><a href="{{route('ceta_desen')}}">Çeta Desen</a></li>

            </ul>
        </div>

        <div class="widget consult-widget">
            <div class="icon"><span class="fa fa-phone"></span></div>
            <div class="text">BİZE <br> ULAŞABİLİRSİNİZ</div>
            <div class="phone"><a href="tel:+905445073848">+90 (544) 507 38 48</a></div>
        </div>
    </aside>
</div>
