<?php

namespace App\Listeners;

use App\Events\mail_send;
use App\Models\musteri;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class mailsendlisten
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\mail_send  $event
     * @return void
     */
    public function handle(mail_send $event)
    {



        $site=asset("/");

        $route=route('admin.blog.ai2');
        $data['site']=asset("/");
        $data['route']=route('admin.blog.ai2');




        Mail::send('page.email', $data,  function($message) use ($route,$site) {

            $message->to("sitesepetim@gmail.com", $site)->subject
            ($site.' sitesinin makalesi hazırdır.');
            $message->from('abdurrahman@atalaytasarim.com','Site Sepetim');
        });
    }
}
