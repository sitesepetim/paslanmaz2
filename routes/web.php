<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cache', function () {

    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');

})->name('cache');

Route::get('/', function () {
    return view('page.index');
})->name('index');

Route::get('/hakkimizda2', function () {
    return view('page.hakkimizda');
})->name('hakkimizda');

Route::get('/iletisim', function () {
    return view('page.iletisim');
})->name('iletisim');


Route::get('/hizmetlerimiz', function () {
    return view('page.hizmetlerimiz');
})->name('hizmetlerimiz');


Route::get('/hizmet/paslanmaz-celik-imalati', function () {
    return view('page.hizmetler.paslanmaz-celik-imalati');
})->name('imalat');


Route::get('/hizmet/paslanmaz-celik-boy-kesme', function () {
    return view('page.hizmetler.paslanmaz-celik-boy-kesme');
})->name('kesme');


Route::get('/hizmet/paslanmaz-celik-taslama', function () {
    return view('page.hizmetler.taslama');
})->name('taslama');

Route::get('/hizmet/paslanmaz-celik-dilme', function () {
    return view('page.hizmetler.dilme');
})->name('dilme');

Route::get('/hizmet/paslanmaz-celik-lazer-kesim', function () {
    return view('page.hizmetler.lazer');
})->name('lazer');


Route::get('/kaliteler', function () {
    return view('page.kalite');
})->name('kaliteler');

Route::get('/blog', function () {
    return view('page.blog');
})->name('blog');

Route::get('/urunler', function () {
    return view('page.urunler');
})->name('urunler');


Route::get('/desenler', function () {
    return view('page.desenler');
})->name('desenler');


Route::get('/dekoratif-desenler', function () {
    return view('page.dekor_desenler');
})->name('dekor_desenler');


Route::get('/endustriyel-desenler', function () {
    return view('page.endus_desenler');
})->name('endus_desenler');

Route::get('/satine-desen', function () {
    return view('page.desenler.satine_desen');
})->name('satine_desen');

Route::get('/kare-desen', function () {
    return view('page.desenler.kare_desen');
})->name('kare_desen');


Route::get('/nokta-desen', function () {
    return view('page.desenler.nokta_desen');
})->name('nokta_desen');


Route::get('/deri-desen', function () {
    return view('page.desenler.deri_desen');
})->name('deri_desen');

Route::get('/baklava-desen', function () {
    return view('page.desenler.baklava_desen');
})->name('baklava_desen');


Route::get('/ceta-desen', function () {
    return view('page.desenler.ceta_desen');
})->name('ceta_desen');


Route::get('/gozyasi-desen', function () {
    return view('page.desenler.gozyasi_desen');
})->name('gozyasi_desen');


Route::get('/kaliteler/201-paslanmaz-celik', function () {
    return view('page.kalite.201');
})->name('201');


Route::get('/kaliteler/202-paslanmaz-celik', function () {
    return view('page.kalite.202');
})->name('202');


Route::get('/kaliteler/303-paslanmaz-celik', function () {
    return view('page.kalite.303');
})->name('303');


Route::get('/kaliteler/304-paslanmaz-celik', function () {
    return view('page.kalite.304');
})->name('304');

Route::get('/kaliteler/304-ddq-paslanmaz-celik', function () {
    return view('page.kalite.304-dd');
})->name('304-dd');

Route::get('/kaliteler/304-l-paslanmaz-celik', function () {
    return view('page.kalite.304-l');
})->name('304-l');

Route::get('/kaliteler/309-s-paslanmaz-celik', function () {
    return view('page.kalite.309-s');
})->name('309-s');

Route::get('/kaliteler/309-paslanmaz-celik', function () {
    return view('page.kalite.309');
})->name('309');


Route::get('/kaliteler/310-paslanmaz-celik', function () {
    return view('page.kalite.310');
})->name('310');



Route::get('/kaliteler/310-s-paslanmaz-celik', function () {
    return view('page.kalite.310-s');
})->name('310-s');


Route::get('/kaliteler/316-paslanmaz-celik', function () {
    return view('page.kalite.316');
})->name('316');


Route::get('/kaliteler/316-l-paslanmaz-celik', function () {
    return view('page.kalite.316-l');
})->name('316-l');

Route::get('/kaliteler/316-ti-paslanmaz-celik', function () {
    return view('page.kalite.316-ti');
})->name('316-ti');


Route::get('/kaliteler/321-paslanmaz-celik', function () {
    return view('page.kalite.321');
})->name('321');


Route::get('/kaliteler/409-paslanmaz-celik', function () {
    return view('page.kalite.409');
})->name('409');


Route::get('/kaliteler/420-paslanmaz-celik', function () {
    return view('page.kalite.420');
})->name('420');



Route::get('/kaliteler/430-paslanmaz-celik', function () {
    return view('page.kalite.430');
})->name('430');



Route::get('/kaliteler/431-paslanmaz-celik', function () {
    return view('page.kalite.431');
})->name('431');



Route::get('/kaliteler/440-m-paslanmaz-celik', function () {
    return view('page.kalite.440-m');
})->name('440-m');



Route::get('/kaliteler/439-paslanmaz-celik', function () {
    return view('page.kalite.439');
})->name('439');



Route::get('/kaliteler/4418-paslanmaz-celik', function () {
    return view('page.kalite.4418');
})->name('4418');



Route::get('/kaliteler/630-paslanmaz-celik', function () {
    return view('page.kalite.630');
})->name('630');



Route::get('/kaliteler/ostenitik-paslanmaz-celik', function () {
    return view('page.kalite.oztentitik');
})->name('oztentitik');



Route::get('/kaliteler/martensitik-paslanmaz-celik', function () {
    return view('page.kalite.martensitik');
})->name('martensitik');

Route::get('/kaliteler/ferritik-paslanmaz-celik', function () {
    return view('page.kalite.ferritik');
})->name('ferritik');


Route::get('/kaliteler/14507-paslanmaz-celik', function () {
    return view('page.kalite.14507');
})->name('14507');

////urunler

Route::get('/urunler/paslanmaz-celik', function () {
    return view('page.urunler.paslanmaz-celik');
})->name('paslanmaz_celik');


Route::get('/urunler/paslanmaz-mil-cubuk', function () {
    return view('page.urunler.paslanmaz-mil');
})->name('paslanmaz-mil-cubuk');



Route::get('/urunler/paslanmaz-kare-profil', function () {
    return view('page.urunler.paslanmaz-kare');
})->name('paslanmaz-kare');



Route::get('/urunler/paslanmaz-kosebent', function () {
    return view('page.urunler.paslanmaz-kosebent');
})->name('paslanmaz-kosebent');



Route::get('/urunler/paslanmaz-kupeste', function () {
    return view('page.urunler.paslanmaz-kupeste');
})->name('paslanmaz-kupeste');



Route::get('/urunler/paslanmaz-lama', function () {
    return view('page.urunler.paslanmaz-lama');
})->name('paslanmaz-lama');



Route::get('/urunler/paslanmaz-profil', function () {
    return view('page.urunler.paslanmaz-profil');
})->name('paslanmaz-profil');



Route::get('/urunler/paslanmaz-rulo', function () {
    return view('page.urunler.paslanmaz-rulo');
})->name('paslanmaz-rulo');


Route::get('/urunler/paslanmaz-sac', function () {
    return view('page.urunler.paslanmaz-sac');
})->name('paslanmaz-sac');



Route::get('/urunler/paslanmaz-serit', function () {
    return view('page.urunler.paslanmaz-serit');
})->name('paslanmaz-serit');



Route::get('/urunler/paslanmaz-tel', function () {
    return view('page.urunler.paslanmaz-tel');
})->name('paslanmaz-tel');




Route::get('/urunler/paslanmaz-boru', function () {
    return view('page.urunler.paslanmaz-boru');
})->name('paslanmaz-boru');



Route::get('/urunler/paslanmaz-fitting', function () {
    return view('page.urunler.paslanmaz-fitting');
})->name('paslanmaz-fitting');



Route::get('/urunler/paslanmaz-cekme-boru', function () {
    return view('page.urunler.paslanmaz-cekme');
})->name('paslanmaz-cekme');


//ağırık hesaplama


Route::get('/agirlik-hesaplama', function () {
    return view('page.fiyat_hesapla');
})->name('fiyat_hesaplamaa');


Route::get('/paslanmaz-boru-agirlik-hesaplama', function () {
    return view('page.agirlik.boru');
})->name('boru_agirlik');
Route::get('/paslanmaz-cubuk-agirlik-hesaplama', function () {
    return view('page.agirlik.cubuk');
})->name('cubuk_agirlik');
Route::get('/paslanmaz-kosebent-agirlik-hesaplama', function () {
    return view('page.agirlik.kosebent');
})->name('kosebent_agirlik');
Route::get('/paslanmaz-lama-agirlik-hesaplama', function () {
    return view('page.agirlik.lama');
})->name('lama_agirlik');
Route::get('/paslanmaz-sac-agirlik-hesaplama', function () {
    return view('page.agirlik.sac');
})->name('sac_agirlik');
Route::get('/paslanmaz-kutu-profil-agirlik-hesaplama', function () {
    return view('page.agirlik.kutu');
})->name('kutu_agirlik');
Route::get('/paslanmaz-kare-profil-agirlik-hesaplama', function () {
    return view('page.agirlik.kare');
})->name('kare_agirlik');


Route::get('/sitemap.xml', [\App\Http\Controllers\SiteMapXmlController::class, 'index']);

Route::get('/fiyat-listesi', function () {
    return view('page.fiyat.index');
})->name('fiyat_listesi');

Route::get('/fiyat-listesi/304-sac-fiyat-listesi', function () {
    return view('page.fiyat.304-sac');
})->name('304_sac_fiyat');

Route::get('/fiyat-listesi/316-sac-fiyat-listesi', function () {
    return view('page.fiyat.316-sac');
})->name('316_sac_fiyat');


Route::get('/fiyat-listesi/430-sac-fiyat-listesi', function () {
    return view('page.fiyat.430-sac');
})->name('430_sac_fiyat');



Route::get('/fiyat-listesi/309-sac-fiyat-listesi', function () {
    return view('page.fiyat.309-sac');
})->name('309_sac_fiyat');

Route::get('/fiyat-listesi/310-sac-fiyat-listesi', function () {
    return view('page.fiyat.310-sac');
})->name('310_sac_fiyat');

Route::get('/fiyat-listesi/304-boru-fiyat-listesi', function () {
    return view('page.fiyat.304-boru');
})->name('304_boru_fiyat');


Route::get('/fiyat-listesi/304-kare-fiyat-listesi', function () {
    return view('page.fiyat.304-kare');
})->name('304_kare_fiyat');



Route::get('/fiyat-listesi/304-dikdortgen-fiyat-listesi', function () {
    return view('page.fiyat.304-dik');
})->name('304_dik_fiyat');

Route::get('/fiyat-listesi/304-cubuk-fiyat-listesi', function () {
    return view('page.fiyat.304-cubuk');
})->name('304_cubuk_fiyat');


Route::get('/fiyat-listesi/316-cubuk-fiyat-listesi', function () {
    return view('page.fiyat.316-cubuk');
})->name('316_cubuk_fiyat');


Route::get('/fiyat-listesi/304-lama-fiyat-listesi', function () {
    return view('page.fiyat.304-lama');
})->name('304_lama_fiyat');


Route::get('/fiyat-listesi/304-kose-fiyat-listesi', function () {
    return view('page.fiyat.304-kose');
})->name('304_kose_fiyat');



//
//Route::get('/blog/{say?}', function ($say=1) {
//    if (str_contains($say,"search")){
//        $key= str_replace("search=",'',$say);
//
//
//        $data = \App\Models\blogs::where('title', 'like', '%' . $key . '%')->take(10)->offset((2 - 1) * 15)->get();
//        return view('page.blog',['data'=>$data]);
//    }else{
//        $data = \App\Models\blogs::take(10)->offset(($say - 1) * 10)->get();
//        return view('page.blog',['data'=>$data]);
//    }
//
//})->name('blog');
//
//
//Route::get('kategori/{slug}', function ($slug) {
//
//
//    if ( \App\Models\categories::where('slug','=',$slug)->count()>0){
//
//    $dat = \App\Models\categories::where('slug','=',$slug)->get()[0]['id'];
//
//
//
//    $data = \App\Models\blogs::where('categories','=',$dat)->paginate(35);
//
//    }else{
//        $data=[];
//    }
//
//    return view('page.blog',['data'=>$data]);
//})->name('blog2');
//Route::get('etiket/{slug}', function ($slug) {
//
//
//    if ( \App\Models\tags::where('slug','=',$slug)->count()>0){
//
//    $dat = \App\Models\tags::where('slug','=',$slug)->get()[0]['id'];
//
//
//
//
//    $data = \App\Models\blogs::where('tags','like','%'.$dat.'%')->paginate(35);
//
//    }else{
//        $data=[];
//    }
//
//    return view('page.blog',['data'=>$data]);
//})->name('blog3');
//




Route::get('/test', function () {
 \App\HelperSystem\genelfnc::api(\App\Models\indexapi::all()[0]['json'],'https://guldentaltourism.com/');
})->name('muhendis');




    Route::middleware(['auth'])->group(function () {

        Route::get('/admin', function () {
            return view('backend.index');
        })->name('admin');

        Route::middleware([\App\Http\Middleware\ctrlRole::class])->group(function () {





        Route::get('/admin/police', function () {
            return view('backend.police');
        })->name('admin.police');


    Route::get('/admin/musteri', function () {
            return view('backend.musteri');
        })->name('admin.musteri');

 Route::get('/admin/musteri/ekle', function () {
            return view('backend.musteri_create');
        })->name('admin.musteri_ekle');
 Route::get('/admin/musteri/ekle/excel', function () {
            return view('backend.musteri_create_excel');
        })->name('admin_musteri_create_excel');

 Route::post('/admin/musteri/ekle',[\App\Http\Controllers\musteriController::class,'store'])->name('musteri_create');
 Route::get('/admin/musteri/sil/{id}',[\App\Http\Controllers\musteriController::class,'musteri_sil'])->name('musteri_sil');
 Route::get('/admin/musteri/duzenle/{id}',[\App\Http\Controllers\musteriController::class,'musteri_duzenle'])->name('musteri_duzenle');
 Route::post('/admin/musteri/duzenle',[\App\Http\Controllers\musteriController::class,'musteri_duzenle_post'])->name('musteri_duzenle_post');
 Route::post('/admin/musteri/ekle/excel',[\App\Http\Controllers\musteriController::class,'musteri_create_excel'])->name('musteri_create_excel');


Route::get('/admin/blog', function () {
    return view('backend.blog');
})->name('admin.blog');


Route::get('/admin/ai/blog', function () {
    return view('backend.aiseo.blog');
})->name('admin.blog.ai2');



Route::get('/admin/blog/ekle', function () {
    return view('backend.blog_create');
})->name('admin.blog.create');



Route::get('/admin/blog/ai/ekle', function () {
    return view('backend.aiseo.blog_ai');
})->name('admin.blog.ai');

 Route::post('admin/blog/ai/create',[\App\Http\Controllers\Blogcontroller::class,'store_ai'])->name('store_ai');
 Route::get('admin/blog/ai/view/{id}',[\App\Http\Controllers\Blogcontroller::class,'blog_view'])->name('blog_view');
 Route::post('admin/blog/ai/view/atama/onay',[\App\Http\Controllers\Blogcontroller::class,'blog_view_atama_onay'])->name('blog_view_atama_onay');





Route::get('/admin/blog/duzenle/{id}', function ($id) {

     $data = \App\Models\blogs::where('id','=',$id)->get()[0];

    return view('backend.blog_update',['data'=>$data]);
})->name('admin.blog.update');


        Route::get('/admin/kategori', function () {
            return view('backend.categories');
        })->name('admin.categories');

        Route::get('/admin/etiket', function () {
            return view('backend.tags');
        })->name('admin.tags');

        Route::get('/admin/index', function () {
            return view('backend.indexApi');
        })->name('admin.index');


        Route::get('/admin/spin', function () {
            return view('backend.spin');
        })->name('admin_spin');


        Route::get('/admin/spin/ekle', function () {
            return view('backend.spin_create');
        })->name('admin_spin_ekle');



        Route::get('/admin/index/at/{slug}', function ($slug) {

            $link = \route('detay.blog',['slug'=>$slug]);


            \App\Models\indexAt::create(['link'=>$link]);

            return redirect()->back()->with('index','index');


        })->name('admin_index_ekle');

        Route::get('/admin/fiyat-listesi/', function () {


            return view('backend.fiyat');


        })->name('backend_fiyat');


        Route::get('/admin/fiyat-listesi/ekle', function () {


            return view('backend.fiyat_ekle');


        })->name('backend_fiyat_ekle');

            Route::post('fiyat_creates',[\App\Http\Controllers\Blogcontroller::class,'fiyat_creates'])->name('fiyat_creates');




        Route::post('admin/blog/create',[\App\Http\Controllers\Blogcontroller::class,'store'])->name('blog_create');
        Route::post('admin/blog/create_spin',[\App\Http\Controllers\Blogcontroller::class,'blog_create_post_spin'])->name('blog_create_post_spin');
        Route::post('admin/blog/update',[\App\Http\Controllers\Blogcontroller::class,'store_update'])->name('store_update');
        Route::post('admin/kategori/create',[\App\Http\Controllers\Blogcontroller::class,'store_categories'])->name('store_categories');
        Route::post('admin/etiket/create',[\App\Http\Controllers\Blogcontroller::class,'store_tags'])->name('store_tags');
        Route::post('admin/kategori/update',[\App\Http\Controllers\Blogcontroller::class,'update_categories'])->name('update_categories');
        Route::post('admin/etiket/update',[\App\Http\Controllers\Blogcontroller::class,'tags_categories'])->name('tags_categories');
        Route::get('admin/kategori/delete/{id}',[\App\Http\Controllers\Blogcontroller::class,'categories_delete'])->name('categories_delete');
        Route::get('admin/blog/delete/{id}',[\App\Http\Controllers\Blogcontroller::class,'blog_delete'])->name('blog_delete');
        Route::get('admin/etiket/delete/{id}',[\App\Http\Controllers\Blogcontroller::class,'tags_delete'])->name('tags_delete');

        Route::get('admin/teksms',[\App\Http\Controllers\Blogcontroller::class,'smstek'])->name('smstek');
        Route::post('admin/teksms/gonder',[\App\Http\Controllers\Blogcontroller::class,'smstek_Store'])->name('smstek_Store');
        });


        Route::get('panel/police-takip',[\App\Http\Controllers\Blogcontroller::class,'basit_police'])->name('basit_police');
        Route::get('panel/police-takip/ekle',[\App\Http\Controllers\Blogcontroller::class,'basit_police_ekle'])->name('basit_police_ekle');
        Route::get('panel/police-takip/duzenle/{id}',[\App\Http\Controllers\Blogcontroller::class,'basit_police_duzenle'])->name('basit_police_duzenle');
        Route::post('panel/police-takip/duzenle',[\App\Http\Controllers\Blogcontroller::class,'basit_police_duzenle_post'])->name('basit_police_duzenle_post');
        Route::post('panel/police-takip/ekle',[\App\Http\Controllers\Blogcontroller::class,'basit_police_ekle_post'])->name('basit_police_ekle_post');

        Route::get('/admin/iletisim/atama/{id}',[\App\Http\Controllers\musteriController::class,'iletisim_atama_id'])->name('iletisim_atama_id');


    });


Route::get('/admin/iletisim', function () {
    return view('backend.iletisim');
})->name('admin.iletisim.formu');


Route::get('/admin/cikis-yap', function () {

    \Illuminate\Support\Facades\Auth::logout();

    return redirect()->route('login');
})->name('cikis.yap');



Route::post('/iletisim-formu',[\App\Http\Controllers\musteriController::class,'iletisim_formu'])->name('iletisim_create');



///

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
