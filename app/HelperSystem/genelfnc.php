<?php

namespace App\HelperSystem;

use App\Models\indexapi;
use App\Models\indexAt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

class genelfnc
{

    public static function getYuzde($date)
    {




        $deger = explode('-',$date);





        $now= Carbon::now()->format('Y-m-d');

        if (Carbon::now() >Carbon::parse($date)){
            return 100;

        }

        $now2= Carbon::create($deger[0],$deger[1],$deger[2]);
        if ($date==$now){
            return 100;
        }elseif ($now>$now2){
            return 100;
        }

        $deger3 = explode('-',$now);
        $deger4 = explode('-',$now2);

        $end = Carbon::create(intval($deger3[0]), intval($deger3[1]), intval($deger3[2]), 0, 0, 0, 'Europe/Istanbul');
        $start = Carbon::create(intval($deger4[0]), intval($deger4[1]), intval($deger4[2]), 0, 0, 0, 'Europe/Istanbul');







        //    return $end->diffInDays($start);

        if ($end->diffInDays($start)==0){

            $say=1;
        }else{
            $say= $end->diffInDays($start);

        }



        if ($say<5 && $say>=2 ) {
            return 99;
        }

        if ($say<1 ) {
            return 100;
        }

        if ($say>=5 && $say<10){
            return 95;
        }
        if ($say>=10 && $say<19){
            return 90;
        }

        if ($say>=19 && $say<37){
            return 85;
        }

        if ($say>=37 && $say<54){
            return 80;
        }

        if ($say>=54 && $say<73){
            return 75;
        }


        if ($say>=73 && $say<110){
            return 70;
        }

        if ($say>=110 && $say<129){
            return 65;
        }

        if ($say>=128 && $say<147){
            return 60;
        }

        if ($say>=147 && $say<165){
            return 55;
        }

        if ($say>=165 && $say<183){
            return 45;
        }
        if ($say>=183 && $say<200){
            return 40;
        }
        if ($say>=200 && $say<219){
            return 35;
        }

        if ($say>=219 && $say<238){
            return 30;
        }

        if ($say>=238 && $say<256){
            return 25;
        }

        if ($say>=256 && $say<274){
            return 20;
        }

        if ($say>=274 && $say<292){
            return 15;
        }

        if ($say>=292 && $say<310){
            return 10;
        }

        if ($say>=310 && $say<329){
            return 5;
        }

        if ($say>=329 && $say<340){
            return 7;
        }


        if ($say>=340 && $say<350){
            return 3;
        }

        if ($say>=350){
            return 2;
        }

        if ($say>365){

            return 1;
        }


    }

    static function api($json,$url){




        echo ' '.$json.' ';

        $count = indexapi::all()->sum('limit');



        $client = new \Google_Client();

// service_account_file.json is the private key that you created for your service account.
        $client->setAuthConfig($json);
        $client->addScope('https://www.googleapis.com/auth/indexing');

// Get a Guzzle HTTP Client
        $httpClient = $client->authorize();
        $endpoint = 'https://indexing.googleapis.com/v3/urlNotifications:publish';

// Define contents here. The structure of the content is described in the next step.
        $content = '{
"url": "'.$url.'",
"type": "URL_UPDATED"
}';



        $response = $httpClient->post($endpoint, ['body' => $content]);
        $status_code = $response->getStatusCode();

        echo ' '."$status_code".' ';
        echo "$count".' ';

        if ($status_code==200){

            echo "$url";
            indexAt::where('link','=',$url)->delete();

        }elseif ($status_code==403){
            indexAt::where('link','=',$url)->update(['status'=>3]);

        }elseif ($status_code==429){

            indexAt::where('link','=',$url)->update(['status'=>4]);

            $duurum =  indexapi::where('json','=',$json)->get()[0]['id'];

            echo $duurum;
            $duurum2 =    indexapi::where('id','=',$duurum)->update(['limit'=>0]);


            Artisan::call('command:indexApi');



        }



    }

    public static function getDatas($date){


        $deger = explode('-',$date);

        if (Carbon::now() >= Carbon::parse($date)){
            return "Süresi Doldu.";
        }




        $now= Carbon::now()->format('Y-m-d');
        $now2= Carbon::create($deger[0],$deger[1],$deger[2]);


        $deger3 = explode('-',$now);
        $deger4 = explode('-',$now2);

        $end = Carbon::create(intval($deger3[0]), intval($deger3[1]), intval($deger3[2]), 0, 0, 0, 'Europe/Istanbul');
        $start = Carbon::create(intval($deger4[0]), intval($deger4[1]), intval($deger4[2]), 0, 0, 0, 'Europe/Istanbul');




            return $end->diffInDays($start);










    }
}
