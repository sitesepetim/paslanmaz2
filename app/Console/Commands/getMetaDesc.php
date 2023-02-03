<?php

namespace App\Console\Commands;

use App\Models\makaleAi;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class getMetaDesc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getMetaDesc {id}';

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

        $id = $this->argument()['id'];




        $data = makaleAi::where('id','=',$id)->get()[0];

        $text=$data['gelen_makale'].' Bu makalenin meta açıklamasını yaparmısın en fazla 20 kelime olsun daha uzun olmasın';

      $text=str_replace(array("\r", "\n"), '',$text);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.openai.com/v1/completions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 3000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "\n{\n\n  \"prompt\": \" ".$text." \",\n\t \"model\": \"text-davinci-003\",\n\t\"max_tokens\":2000,\n\t \"temperature\": 0.8\n\t\n \n}\n",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer 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",
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
echo $response;
        $data=json_decode($response,true);



        try {


        $meta=str_replace('Meta açıklaması: ','',$data['choices'][0]['text']);






        makaleAi::where('id','=',$id)->update([
            "meta"=>$meta,
        ]);




        }catch (\Exception $exception){

            Artisan::call('command:getMetaDesc '.$id);
        }



    }
}
