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
       //$time = $time->input('appt-time');
       //$data = $data->input('Calendar');
       //$task = $task->input('TaskText');
       //$req = $req->input('Calendar');
       $req = $req->input('appt-time');
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
