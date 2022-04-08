<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    

    public function submit(Request $req)
    {
       
       /* $pass = array(
            "foo" => "foo",
            "bar" => "bar",      
        );
        $mail = array(
            "test@mail.com" => "test@mail.com",
            "test2@mail.com" => "test2@mail.com",
        );
            */
        $i = 0;
        $mailBD = DB::table('login_infs') -> where('pas', '=', 'foo')->get('pas');
        if($mailBD == 'foo')
        {
            echo $i;
        }
        else {
            
            echo $mailBD;
        }
        

       /* $validation = $req->validate([
            'Email' => 'bail|required',
            'Password' => 'bail|required|min:3|max:15',
            ]);
                $i = 0;
            foreach ($mail as $key => $val) {
                if($req->input('Email') == DB::table('login_infs') -> where('log', '=', 'test@mail.com'))
                {
                    $i=1;
                }
            }
                */
       
            if($i = 1)
            { 
                //dd($req);
                return view('main');
            }
            else
            {
                return view('login');
            }
        }  
        //dd($req);
        
    

}