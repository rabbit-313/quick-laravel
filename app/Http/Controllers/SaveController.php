<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SaveController extends Controller
{
    public function create(){
        return view('save.create');
    }

    public function store(Request $request){
        $this->validate($request, Book::$rules);
        $book = new Book();
        $book->fill($request->except('_token'))->save();
        return redirect('save/create');
    }

    public function edit($id){
        return view('save.edit',[
            'book' => Book::findOrFail($id)
        ]);
    }
    public function update(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->fill($request->except('_token','_method'))->save();
        return redirect('hello/list');
    }
    public function show($id){
        return view('save.show',[
            'book' => Book::findOrFail($id)
        ]);
    }
    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('hello/list');
    }   
}
