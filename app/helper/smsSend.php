<?php

namespace App\helper;

class smsSend
{
    static function sendMessage($number,$message){

        $message2 = str_replace(" ","%20",$message);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.senagsm.com.tr/api/smsget/v1?username=5494175787&password=bfe9ba01b164050796a66d01fbe305d1&header=ASAFSIGORTA&gsm=".$number."&message=".$message2,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;


    }
}
