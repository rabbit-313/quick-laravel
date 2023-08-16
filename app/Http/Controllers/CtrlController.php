<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function plain(){
        return response('こんにちは、世界！', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function header(){
        return response()
            ->view('ctrl.header', ['msg'=>'こんにちは、世界！'], 200)
            ->header('Content-Type', 'text/xml');
    }

    public function outJson(){
        return response()
            -> json([
                'name' => 'Ito, Ru',
                'sex' => 'male',
                'age' => '23'
            ]);
    }

    public function outFile(){
        return response()
            ->download('/Users/raivc/Downloads/1.pdf', '1.pdf',
            ['content-type' => 'text/pdf']);
    }

    public function outImage(){
        return response()
            ->file('/Users/raivc/Documents/1.jpeg', [
                'content-type' => 'image/jpeg',
            ]);
    }

    public function redirectBasic(){
        // return redirect('/hello/list');
        return redirect()->route('list');
    }

    public function index(Request $req){
        return 'リクエストパス：' . $req->path();
    }

    public function form(){
        return view('ctrl.form', ['result'=>'']);
    }

    public function result(Request $req){
        $name = $req->name;
        return view('ctrl.form', ['result'=>'こんにちは、' . $name . 'さん！']);
    }

    public function upload(){
        return view('ctrl.upload', ['result'=>'']);
    }

    public function uploadfile(Request $req){
        if (!$req->hasFile('upfile')){
            return 'ファイルを指定してください。';
        }

        $file = $req->upfile;

        if (!$file->isValid()){
            return 'アップロードに失敗しました。';
        }

        $name = $file->getClientOriginalName();

        $file->storeAs('files', $name);
        return view('ctrl.upload', ['result'=>$name . 'をアップロードしました。']);
    }
}
