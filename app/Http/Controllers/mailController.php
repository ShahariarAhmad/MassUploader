<?php

namespace App\Http\Controllers;

use App\Jobs\ProcesCSV;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Events\ProcesCSVEvent;
use App\Models\User;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class mailController extends Controller
{
    function home()
    {
        return view('mailgun');
    }



    function table()
    {

         
         if (Email::first()) {
            $bool = true;
         } else {
            $bool = false;
         }
         
        //  return count($bool);
        $emails = Email::paginate(50);
// return $emails;
        // return count($emails->data);        
        return view('table', compact('emails', 'bool'));
    }

    function show()
    {

        return view('upload');
    }
    function store(Request $request)
    {

        $chunk = array_chunk(file($request->file), 100);
   

        $batch  = Bus::batch([])->dispatch();


        foreach ($chunk as $d) {
         
            $batch->add(new ProcesCSV($d));
        }

      

        session()->put('batchId', $batch->id);

        // ProcesCSVEvent::dispatch($chunk);
        return back(); 
    }
}
