<?php

namespace App\Listeners;

use App\Events\ProcesCSVEvent;
use App\Models\Email;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Arr;

class ProcessCSVListener 
{
    public $timeout = 50000;
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
     * @param  object  $event
     * @return void
     */
    public function handle(ProcesCSVEvent $event)
    {
        set_time_limit(2*3600);
        foreach ($event as $data) {
    
            foreach (Arr::flatten($data) as $v) {

                   Email::create(['emails'=>$v]);

            }
          
        }
    }
}
