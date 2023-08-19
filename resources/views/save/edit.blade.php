@extends('layouts.base')
@section('title', 'Edit Save')
@section('main')
<form method="POST" action="/save/{{$book->id}}">
    @csrf
    @method('PATCH')
    <div class="pl-2">
        <label for="isbn">ISBNコード</label><br />
        <input id="isbn" name="isbn" type="text" size="15" value="{{old('isbn',$book->isbn)}}" />
    </div>
    <div class="pl-2">
        <label for="title">書名</label><br />
        <input id="title" name="title" type="text" size="30" value="{{old('title',$book->title)}}" />
    </div>
    <div class="pl-2">
        <label for="price">価格</label><br />
        <input id="price" name="price" type="text" size="5" value="{{old('price',$book->price)}}" />
    </div>
    <div class="pl-2">
        <label for="publisher">出版社</label><br />
        <input id="publisher" name="publisher" type="text" size="10" value="{{old('publisher', $book->publisher)}}" />
    </div>
    <div class="pl-2">
        <label for="published">刊行日</label><br />
        <input id="published" name="published" type="text" size="10" value="{{old('published', $book->published)}}" />
    </div>
    <div class="pl-2">
        <input type="submit" value="更新" />
    </div>
</form>
@endsection