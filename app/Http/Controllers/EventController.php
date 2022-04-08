<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
      $week['day'] = $req->input('Calendar'); $week['data'] = $req->input('TaskText');
      DB::table('weeks')->insert($week);
      //$req = $req->input('appt-time');
      return view('eventList', compact('req'));
       
    }

    public function MRList(Request $id)
   {
      dd($req);
      //$req = 'calendar';
      //return view('event-list-id');
      
   }
}
