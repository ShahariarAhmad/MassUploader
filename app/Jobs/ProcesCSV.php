<?php

namespace App\Jobs;

use App\Models\Email;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;

class ProcesCSV implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $timeout = 3600 * 2;
    public $failOnTimeout = true;
    public $chunk;
    /**
     * Create a new job instance.
     *
     * @return void
     */


    public function __construct($chunk)
    {
        $this->chunk = $chunk;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {


        
        foreach ($this->chunk as $data) {
            Email::create(['emails' => $data]);

        }



    }
}
