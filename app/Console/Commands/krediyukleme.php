<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class krediyukleme extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:krediyukleme';

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
        foreach (\App\Models\indexapi::all() as $key=> $value){

            $data=  \App\Models\indexapi::where('id','=',$value['id'])->update([
                'limit'=>200,
                'durum'=>'on'
            ]);



        }

    }
}
