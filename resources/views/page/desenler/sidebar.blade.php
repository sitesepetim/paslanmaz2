<div class="col-lg-4">
    <aside class="col-lg-12 sidebar service-sidebar">
        <div class="widget category-widget-two">
            <ul class="widget cat-list">
                <li class="{{request()->is("satine-desen") ? "active":""}}" ><a href="{{route('satine_desen')}}">Satİne Desen</a></li>
                <li class="{{request()->is("nokta-desen") ? "active":""}}"><a href="{{route('nokta_desen')}}">Nokta Desen</a></li>
                <li class="{{request()->is("kare-desen") ? "active":""}}"><a href="{{route('kare_desen')}}">Kare Desen</a></li>
                <li  class="{{request()->is("deri-desen") ? "active":""}}" ><a href="{{route('deri_desen')}}">Derİ Desen</a></li>

            </ul>
        </div>

        <div class="widget consult-widget">
            <div class="icon"><span class="fa fa-phone"></span></div>
            <div class="text">BİZE <br> ULAŞABİLİRSİNİZ</div>
            <div class="phone"><a href="tel:+905445073848">+90 (544) 507 38 48</a></div>
        </div>
    </aside>
</div>
