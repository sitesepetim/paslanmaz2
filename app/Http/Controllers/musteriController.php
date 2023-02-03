<?php

namespace App\Http\Controllers;

use App\helper\smsSend;
use App\Imports\UsersImport;
use App\Models\iletisimFormu;
use App\Models\musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class musteriController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function musteri_sil($id){

        musteri::where('id','=',$id)->delete();

        return  redirect()->back()->with('silindi','silindi');

    }
    public function musteri_duzenle($id){

      $data=   musteri::where('id','=',$id)->get();

        return view('backend.musteri_edit',['data'=>$data]);

    }
    public function store(Request $request)
    {
        $all = $request->except('_token');

        if (isset($all['status'])){

            $all['status']=1;
            $all['type']=4;


            musteri::create($all);

            return  redirect()->route('admin.musteri')->with('status_ok','status_ok');



        }
    }
    public function musteri_create_excel(Request $request)

    {
        Excel::import(new UsersImport(), $request->file('files')->store('temp'));
        return redirect()->route('admin.musteri')->with('eklendii','eklendii');
    }
    public function musteri_duzenle_post(Request $request)

    {
       $all = $request->except('_token');

       if (isset($all['status'])){
           $all['status']=1;
       }else{
           $all['status']=0;
       }

       $id = $all['user_id'];
       unset($all['user_id']);


       musteri::where('id','=',$id)->update($all);

       return redirect()->route('admin.musteri')->with('basarili_d',$all);

    }

    public function iletisim_atama_id($id){

       $type = $_GET['type'];

       if ($type==1){
           iletisimFormu::where('id','=',$id)->update(['status'=>1]);
           return redirect()->back()->with('tamalandı','tm');

       }
       elseif ($type==2){

           iletisimFormu::where('id','=',$id)->update(['status'=>0]);
           return redirect()->back()->with('devam','tm');


       }elseif ($type==3){
           iletisimFormu::where('id','=',$id)->delete();
           return redirect()->back()->with('silindi','tm');


       }

    }
    public function iletisim_formu(Request $request){

        $all = $request->except('_token');


        if (Auth::check()){
            $all['user_id']=Auth::id();

        }



      iletisimFormu::create($all);



        $message = "Merhaba Yeni Bir Teklif Geldi. Teklif Türü: ".$all['type'].', Kişi İsim Soyisim: '.$all['name'].', Telefon Numarası: '.$all['phone'].', Detaylı Bilgi İçin Siteyi Ziyaret Ediniz.';
       smsSend::sendMessage("05494175788",$message);





        return redirect()->back()->with('status_okey','status_okey');



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
