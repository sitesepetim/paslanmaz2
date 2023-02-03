<?php

namespace App\Console\Commands;

use App\helper\smsSend;
use App\HelperSystem\genelfnc;
use App\Models\policeBasit;
use App\Models\User;
use Illuminate\Console\Command;

class hatirlatma extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:hatirlatma';

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
     $data =  policeBasit::all();

     foreach ($data as $key=> $value){


         if (genelfnc::getDatas($value['date'])<=15 && $value['status']==0){

             smsSend::sendMessage(User::where('id','=',$value['user_id'])->get()[0]['phone'],'Poliçe Süresiniz Dolmasına '.genelfnc::getDatas($value['date']).' Gün Kaldı. Yenilemek ve bilgi almak için bizi arayabilirsiniz. 0549 417 57 88 '.route('basit_police'));

             policeBasit::where('id','=',$value['id'])->update(['status'=>1]);

         }


    }

    }
}
