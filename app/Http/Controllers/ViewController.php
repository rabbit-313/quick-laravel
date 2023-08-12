<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function escape(){
        return view('view.escape',[
            'msg'=>'<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
            <p>WINGSへようこそ</p>'
        ]);
    }

    public function if(){
        return view('view.if',[
            'random' => random_int(0, 100)
        ]);
    }

    public function isset(){
        return view('view.isset',[
            'msg'=>'Hello World!'
        ]);
    }

    public function switch(){
        return view('view.switch',[
            'random' => random_int(1,5)
        ]);
    }

    public function foreach_assoc(){
        return view('view.foreach_assoc',[
            'member' => [
                'name' => 'Ito Ru',
                'sex' => '男',
                'birth' => '1923-11-10'
            ]
        ]);
    }

    public function style_class(){
        return view('view.style_class',[
            'isEnable' => true
        ]);
    }

    public function checked(){
        return view('view.checked',[
            'isEnable' => true
        ]);
    }
}
