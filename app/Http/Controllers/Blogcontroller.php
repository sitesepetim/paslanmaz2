<?php

namespace App\Http\Controllers;

use App\helper\smsSend;
use App\Imports\Importfiyat;
use App\Imports\Importfiyat_304_boru;
use App\Imports\Importfiyat_304_cubuk;
use App\Imports\Importfiyat_304_dik;
use App\Imports\Importfiyat_304_kare;
use App\Imports\Importfiyat_304_kose;
use App\Imports\Importfiyat_304_lama;
use App\Imports\Importfiyat_309_sac;
use App\Imports\Importfiyat_310_sac;
use App\Imports\Importfiyat_316_cubuk;
use App\Imports\Importfiyat_316_sac;
use App\Imports\Importfiyat_430_sac;
use App\Models\blogs;
use App\Models\categories;
use App\Models\fiyatListesi;
use App\Models\ilceler;
use App\Models\iller;
use App\Models\indexAt;
use App\Models\makaleAi;
use App\Models\musteri;
use App\Models\policeBasit;
use App\Models\smsmSend;
use App\Models\tags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

function slugOlustur($string)
{
    //Türkçeye özgü harfleri değiştirme
    $string = str_replace('ü','u',$string);
    $string = str_replace('Ü','U',$string);

    $string = str_replace('ğ','g',$string);
    $string = str_replace('Ğ','G',$string);

    $string = str_replace('ş','s',$string);
    $string = str_replace('Ş','S',$string);

    $string = str_replace('ç','c',$string);
    $string = str_replace('Ç','C',$string);

    $string = str_replace('ö','o',$string);
    $string = str_replace('Ö','O',$string);

    $string = str_replace('ı','i',$string);
    $string = str_replace('İ','I',$string);

    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);


    return strtolower($slug);
}

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function fiyat_creates(Request $request)
    {

        $all=$request->except('_token');

        if ($all['type']=="304_sac"){
            fiyatListesi::where('type','=',"304_sac")->delete();

            Excel::import(new Importfiyat,$request->file);



        }

        elseif ($all['type']=="304_boru"){
            fiyatListesi::where('type','=',"304_boru")->delete();
            Excel::import(new Importfiyat_304_boru,$request->file);
        }

        elseif ($all['type']=="304_cubuk"){
            fiyatListesi::where('type','=',"304_cubuk")->delete();
            Excel::import(new Importfiyat_304_cubuk,$request->file);
        }

        elseif ($all['type']=="304_dik"){
            fiyatListesi::where('type','=',"304_dik")->delete();
            Excel::import(new Importfiyat_304_dik,$request->file);
        }

        elseif ($all['type']=="304_kare"){
            fiyatListesi::where('type','=',"304_kare")->delete();
            Excel::import(new Importfiyat_304_kare,$request->file);
        }

        elseif ($all['type']=="304_kose"){
            fiyatListesi::where('type','=',"304_kose")->delete();
            Excel::import(new Importfiyat_304_kose,$request->file);
        }

        elseif ($all['type']=="304_lama"){
            fiyatListesi::where('type','=',"304_lama")->delete();
            Excel::import(new Importfiyat_304_lama,$request->file);
        }

        elseif ($all['type']=="309_sac"){
            fiyatListesi::where('type','=',"309_sac")->delete();
            Excel::import(new Importfiyat_309_sac,$request->file);
        }

        elseif ($all['type']=="310_sac"){

            fiyatListesi::where('type','=',"310_sac")->delete();
            Excel::import(new Importfiyat_310_sac,$request->file);
        }

        elseif ($all['type']=="316_sac"){
            fiyatListesi::where('type','=',"316_sac")->delete();
            Excel::import(new Importfiyat_316_sac,$request->file);
        }

        elseif ($all['type']=="316_cubuk"){
            fiyatListesi::where('type','=',"316_cubuk")->delete();
            Excel::import(new Importfiyat_316_cubuk,$request->file);
        }

        elseif ($all['type']=="430_sac"){
            fiyatListesi::where('type','=',"430_sac")->delete();
            Excel::import(new Importfiyat_430_sac,$request->file);
        }
        return redirect()->route('backend_fiyat');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $all = $request->except('_token');

      unset(  $all['avatar_remove']);
        $bytes = random_bytes(25);
        $byt=bin2hex($bytes);

       $filename= $byt.'.'.$request->avatar->extension();

       $fullpath = "media/blog/".$filename;

       $datas['tags']=implode(',',$all['tags']);
       $datas['categories']=$all['categories'];
       $datas['image_path']=$fullpath;
       $datas['title']=$all['name'];
       $datas['meta_desc']=$all['meta_desc'];
       $datas['slug']=slugOlustur($all['name']);
       $datas['content']=$all['content'];
        $request->avatar->move(public_path('media/blog/'),$filename);

       blogs::create($datas);



        return redirect()->route('admin.blog')->with('create','kategories');





    }

    public function blog_view($id){

        if (isset($_GET['Auth'])){

            if (!Auth::check()){
                Auth::loginUsingId($_GET['Auth']);
            }
        }

        $data = makaleAi::where('id','=',$id)->get()[0];

        return view('backend.aiseo.blog_view',['data'=>$data]);

    }
    public function blog_view_atama_onay(Request $request){


        $all=$request->except('_token');

       $id= $all['makale_id'];

        if ($all['atama_id']==1){

            makaleAi::where('id','=',$id)->update(['status'=>2]);



        }


        if ($all['atama_id']==2){
            $data_token =  makaleAi::where('id','=',$id)->get()[0]['token'];
            makaleAi::where('id','=',$id)->update(['status'=>0,'gelen_makale'=>null]);

        }

        if ($all['atama_id']==3){

            $data =  makaleAi::where('id','=',$id)->get()[0]['makale_istegi'];
            $data = $data.' ek olarak'. $all['detay'];
            makaleAi::where('id','=',$id)->update(['status'=>0,'gelen_makale'=>null,'makale_istegi'=>$data]);

        }

        return redirect()->route('admin.blog.ai2')->with('status_okeys','status_okeys');


//
//        $data = makaleAi::where('id','=',$id)->get()[0];
//
//        return view('backend.aiseo.blog_view',['data'=>$data]);

    }
    public function store_ai(Request $request)
    {




        $all = $request->except('_token');

        $datalas=json_decode($all['tags'],true);






        $tags=str_replace(array('value','"','{',':','}','[',']'),'',$all['tags']);
        $all['tags']=str_replace(array('value','"','{',':','}','[',']'),'',$all['tags']);


        $file= $request->file('image');
        $bytes = random_bytes(30);
       $name= bin2hex($bytes).'.'.$file->getClientOriginalExtension();
        $file-> move(public_path('images'), $name);





        $text="Blog Başlığı ".$all['name'].' olsun en az 300 kelime olsun seo uyumlu olsun html ve türkçe olsun makale detayı  '.$all['content'].' . '.$tags.' Bu anahtar kelimeleri kullan ama en fazla 2 veya 3 defa kullan Lütfen html çevirip yollarmısınız. ';

        $datalar['makale_istegi']=$text;
        $datalar['date']=$all['dates'];
        $datalar['baslik']=$all['name'];
        $datalar['tags']=$all['tags'];
        $datalar['image_alt']=$all['text_alt'];
        $datalar['image']=$name;
        makaleAi::create($datalar);




        return redirect()->route('admin.blog.ai2')->with('create','kategories');





    }
    public function blog_create_post_spin(Request $request)
    {



        $all = $request->except('_token');



$data_bolge=[];
if ($all['il_id']!=0){
    array_push($data_bolge,iller::where('id','=',$all['il_id'])->get()[0]['il_adi']);

    foreach (ilceler::where('il_id','=',$all['il_id'])->get() as $key=> $value ){

        array_push($data_bolge,$value['ilce_adi']);
    }
}else{

    foreach (iller::all()as $key=> $value ){

        array_push($data_bolge,$value['il_adi']);
    }

    foreach (ilceler::all()as $key=> $value ){

        array_push($data_bolge,$value['ilce_adi']);
    }
}


        $data_Resim=[];


        foreach ($request->avatar as $key=> $value){
            $bytes = random_bytes(25);
            $byt=bin2hex($bytes);
            $filename= $byt.'.'.$value->extension();

            $fullpath = "media/blog/".$filename;
            array_push($data_Resim,$fullpath);





            $value->move(public_path('media/blog/'),$filename);

        }

            foreach ($data_bolge as $key=> $value){



        $data_nlog = blogs::where('id','=',$all['blog_id'])->get()[0];

        $name = str_replace($all['name'],$value,$data_nlog['title']);
        $name_Slug = slugOlustur(str_replace($all['name'],$value,$data_nlog['title']));

        $text = str_replace($all['name'],$value,$data_nlog['content']);
        $meta = str_replace($all['name'],$value,$data_nlog['meta_desc']);







                $rnd= random_int(0,count($data_Resim)-1);











                $datas['tags']=implode(',',$all['tags']);
       $datas['categories']=$all['categories'];
       $datas['image_path']=$data_Resim[$rnd];
       $datas['title']=$name;

       $datas['meta_desc']=$meta;
       $datas['slug']=$name_Slug;
       $datas['content']=$text;
       $datas['spin']=1;

       $path = route('detay.blog',['slug'=>$name_Slug]);


       indexAt::create(['link'=>$path,"status"=>0]);


       blogs::create($datas);


            }
        return redirect()->route('admin.blog')->with('create','kategories');





    }
    public function store_update(Request $request)
    {




        $all = $request->except('_token');
        $id = $all['id'];
        unset($all['id']);


        unset(  $all['avatar_remove']);
        $bytes = random_bytes(25);
        $byt=bin2hex($bytes);

        if (isset($all['avatar'])){


            $image_path=public_path(blogs::where('id','=',$id)->get()[0]['image_path']);
          File::delete($image_path);


       $filename= $byt.'.'.$request->avatar->extension();

       $fullpath = "media/blog/".$filename;


       $datas['tags']=implode(',',$all['tags']);
       $datas['categories']=$all['categories'];
       $datas['image_path']=$fullpath;
            $datas['meta_desc']=$all['meta_desc'];
       $datas['title']=$all['name'];
       $datas['slug']=slugOlustur($all['name']);
       $datas['content']=$all['content'];
        $request->avatar->move(public_path('media/blog/'),$filename);

       blogs::where('id','=',$id)->update($datas);
        }else{

            $datas['tags']=implode(',',$all['tags']);
            $datas['categories']=$all['categories'];
            $datas['meta_desc']=$all['meta_desc'];
            $datas['title']=$all['name'];
            $datas['slug']=slugOlustur($all['name']);
            $datas['content']=$all['content'];


            blogs::where('id','=',$id)->update($datas);

        }


        return redirect()->route('admin.blog')->with('update','update');





    }
    public function store_categories(Request $request)
    {

        $all = $request->except('_token');

       $all['slug']=slugOlustur($all['name']);

       categories::create($all);

       return redirect()->back()->with('kategories','kategories');

    }
    public function store_tags(Request $request)
    {

        $all = $request->except('_token');

       $all['slug']=slugOlustur($all['name']);

       tags::create($all);

       return redirect()->back()->with('kategories','kategories');

    }
    public function update_categories(Request $request)
    {

        $all = $request->except('_token');


        if (isset($all['status'])){
            unset($all['status']);
            $all['status']=1;
        }else{

            $all['status']=0;



        }
        $id = $all['id'];
        unset($all['id']);

        categories::where('id','=',$id)->update($all);

       return redirect()->back()->with('kategories_edit','kategories_edit');

    }
    public function tags_categories(Request $request)
    {

        $all = $request->except('_token');


        if (isset($all['status'])){
            unset($all['status']);
            $all['status']=1;
        }else{

            $all['status']=0;



        }
        $id = $all['id'];
        unset($all['id']);

        tags::where('id','=',$id)->update($all);

       return redirect()->back()->with('kategories_edit','kategories_edit');

    }
    public function categories_delete($id)
    {


        categories::where('id','=',$id)->delete();

       return redirect()->back()->with('kategories_delete','kategories_delete');

    }
    public function blog_delete($id)
    {


        blogs::where('id','=',$id)->delete();

       return redirect()->back()->with('blog_delete','blog_delete');

    }
    public function smstek(){
        return view('backend.smsone');

    }
    public function basit_police(){
        return view('backend.police_basit');

    }
    public function basit_police_ekle(){
        return view('backend.police_basit_create');

    }
    public function basit_police_duzenle($id){
       $data =   policeBasit::where('id','=',$id)->get()[0];
        return view('backend.police_basit_edit',['data'=>$data]);

    }
    public function basit_police_ekle_post(Request $request){
        $all = $request->except('_token');


        policeBasit::create($all);

        return  redirect()->route('basit_police')->with('status_ok','status_ok');

        return view('backend.police_basit_create');

    }
    public function basit_police_duzenle_post(Request $request){
        $all = $request->except('_token');



        $id= $all['id'];
        unset($all['id']);
        policeBasit::where('id','=',$id)->update($all);

        return  redirect()->route('basit_police')->with('status_update','status_update');

        return view('backend.police_basit_create');

    }
    public function smstek_Store(Request $request){

        $all =$request->except('_token');


        if ($all['type']==1)
        {
            $data = musteri::where('id','=',$all['user_id'])->get()[0]['phone'];
            smsSend::sendMessage(str_replace(" ","",$data),$all['mesaj']);

            $datas['number']=$data;
            $datas['text']=$all['mesaj'];
            $datas['type']=$all['type'];
            $datas['user_id']=$all['user_id'];

            smsmSend::create($datas);

            return  redirect()->back()->with('successtype1','successtype1');


        }
        elseif ($all['type']==2){
            $data = $all['number'];
            smsSend::sendMessage(str_replace(" ","",$data),$all['mesaj']);

            $datas['number']=$data;
            $datas['text']=$all['mesaj'];
            $datas['type']=$all['type'];

            smsmSend::create($datas);

            return  redirect()->back()->with('successtype2','successtype2');

        }
        elseif ($all['type']==3){


            foreach ($all['user_id'] as $key=> $value)
            {

                $data = musteri::where('id','=',$value)->get()[0]['phone'];
                smsSend::sendMessage(str_replace(" ","",$data),$all['mesaj']);

                $datas['number']=$data;
                $datas['text']=$all['mesaj'];
                $datas['type']=$all['type'];
                $datas['user_id']=$value;

                smsmSend::create($datas);

                return  redirect()->back()->with('successtype3','successtype3');




            }

        }

        return view('backend.smsone');

    }
    public function tags_delete($id)
    {


        tags::where('id','=',$id)->delete();

       return redirect()->back()->with('kategories_delete','kategories_delete');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
