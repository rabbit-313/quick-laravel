<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{   
    public function recCookie(){
        return response()
        ->view('state.view')
        ->cookie('app_title', 'laravel', 60 * 24 * 30);
    }

    public function readCookie(Request $req){
        return view('state.readcookie',[
            'app_title' => $req->cookie('app_title')
        ]);
    }

    public function session1(Request $req){
        $req->session()->put('session_message', 'This is session message!');
        return 'Save session message.';
    }

    public function session2(Request $req){
        $message = $req->session()->get('session_message','null');
        return 'メッセージ'.$message;
    }
}
