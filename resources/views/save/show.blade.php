@extends('layouts.base')
@section('title', 'Show detail')
@section('main')
<form method="POST" action="/save/{{$book->id}}"
    @csrf
    @method('DELETE')
    <div class="pl-2">
        <span id="isbn">ISBNコード</span> <br />
        {{$book->isbn}}
    </div>
    <div class="pl-2">
        <span id="title">書名</span> <br />
        {{$book->title}}
    </div>
    <div class="pl-2">
        <span id="price">価格</span> <br />
        {{$book->price}}
    </div>
    <div class="pl-2">
        <span id="publisher">出版社</span> <br />
        {{$book->publisher}}
    </div>
    <div class="pl-2">
        <span id="published">刊行日</span> <br />
        {{$book->published}}
    </div>
    <div class="pl-2">
        <input type="submit" value="削除" />
    </div>
</form>
@endsection