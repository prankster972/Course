<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(Request $req)
    {
       // dd($req);
       return 'okay';
       //echo $req->input('calendar');

       //return view('eventList');
    }

    public function event2(Request $req)
    {
        //dd($req);
       //return view ('eventList');
       //echo $req->input('calendar');
       //$reqs;
       //foreach ($product as $p) {
         // code
        // }
       $req = $req->input('Calendar');
       return view('eventList', compact('req'));
       //return view('eventList');
    }

    public function MRList(Request $id)
   {
      dd($req);
      //$req = 'calendar';
      //return view('event-list-id');
      
   }
}
