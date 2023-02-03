<?php

namespace App\Console\Commands;

use App\Events\mail_send;
use App\Models\makaleAi;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class getMakale extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getMakale';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {



       $data =  makaleAi::where('status','=',0)->get();

       foreach ($data as $key=> $value){

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.openai.com/v1/completions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 3000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "\n{\n\n  \"prompt\": \" ".$value['makale_istegi']." \",\n\t \"model\": \"text-davinci-003\",\n\t\"max_tokens\":2000,\n\t \"temperature\": 0.8\n\t\n \n}\n",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer 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",
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $data=json_decode($response,true);




        $datas['gelen_makale']=str_replace('\n\n','</br>',$data['choices'][0]['text']);


        $datas['token']=$data['usage']['total_tokens'];
        $datas['status']=1;




        makaleAi::where('id','=',$value['id'])->update($datas);
           $site=asset("/");

           $route=route('admin.blog.ai2');
           $data['site']=asset("/");
           $data['route']=str_replace('/admin','/newseo/admin',route('blog_view',['id'=>$value['id'],'Auth=1']));





           Mail::send('page.email', $data,  function($message) use ($route,$site) {

               $message->to("sitesepetim@gmail.com", $site)->subject
               ($site.' sitesinin makalesi hazırdır.');
               $message->from('abdurrahman@atalaytasarim.com','Site Sepetim');
           });
        Artisan::call('command:getMetaDesc '.$value['id']);





       }





    }
}
