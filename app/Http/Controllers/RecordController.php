<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class RecordController extends Controller
{
    public function find(){
        return Book::find(1)->title;
    }

    public function where(){
        $result = Book::where('publisher', '優丸')->get();
        // $result = Book::where('price','<', '3000')->get();
        $result = Book::where('title', 'LIKE', '%Java%')->get();
        return view('hello.list', ['records' => $result]);
    }

    public function hasmany(){
        return view('record.hasmany',[
            'book' => Book::find(1)
        ]);
    }
}
