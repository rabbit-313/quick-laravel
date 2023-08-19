@extends('layouts.base')
@section('title', 'Create Save')
@section('main')
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li class="text-danger">{{$err}}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="/save">
    @csrf
    <div class="pl-2">
        <label for="isbn">ISBNコード</label><br />
        <input id="isbn" name="isbn" type="text" size="15" value="{{old('isbn')}}" />
    </div>
    <div class="pl-2">
        <label for="title">書名</label><br />
        <input id="title" name="title" type="text" size="30" value="{{old('title')}}" />
    </div>
    <div class="pl-2">
        <label for="price">価格</label><br />
        <input id="price" name="price" type="text" size="5" value="{{old('price')}}" />
    </div>
    <div class="pl-2">
        <label for="publisher">出版社</label><br />
        <input id="publisher" name="publisher" type="text" size="10" value="{{old('publisher')}}" />
    </div>
    <div class="pl-2">
        <label for="published">刊行日</label><br />
        <input id="published" name="published" type="text" size="10" value="{{old('published')}}" />
    </div>
    <div class="pl-2">
        <input type="submit" value="送信" />
    </div>
</form>
@endsection