<?php

namespace App\Console\Commands;

use App\HelperSystem\genelfnc;
use App\Models\indexAt;
use Illuminate\Console\Command;

class indexApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:indexApi';

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

        $indexapi = \App\Models\indexapi::where('limit','!=',0)->where('durum','!=','forbidden')->get();

        foreach (indexAt::where('status','!=',1)->get() as $key=> $value){





        genelfnc::api($indexapi[0]['json'], $value['link']);

        indexAt::where('link','=',$value['link'])->update(['status'=>1]);


        $indexapilimits = intval($indexapi[0]['limit']);

        $indexapilimits--;
        $indexApiData = \App\Models\indexapi::find($indexapi[0]['id']);
        $indexApiData->limit=$indexapilimits;
        $indexApiData->save();

        }

    }
}
