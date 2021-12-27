<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function submit(Request $req)
    {
       
        $pass = array(
            "foo" => "bar",
            "bar" => "foo",
        );
        $mail = array(
            "test2@mail.com" => "test@mail.com",
            "test@mail.com" => "test2@mail.com",
        );

        $validation = $req->validate([
            'Email' => 'required|email:filter',
            'Password' => 'required|min:3|max:15',
            ]);
                $i = 0;
            foreach ($mail as $key => $val) {
                if($req->input('Email') == $mail[$val])
                {
                    $i=1;
                }
            }

        foreach ($pass as $key => $val) {
            if(($req->input('Password') == $pass [$val]) && ($i == 1))
            {
                return view('main');
            }
            else
            {
                return view('login');
            }
        }  

        
    }

}