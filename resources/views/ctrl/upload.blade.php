@extends('layouts.base')
@section('title', 'ファイルアップロード')
@section('main')
    <form method="POST" action="/ctrl/uploadfile" enctype="multipart/form-data">
        @csrf
        {{-- <label for="photo">写真:</label> --}}
        <input id="upfile" name="upfile" type="file"/>
        <input type="submit" value="送信"/>
        <p>{{ $result }}</p>
    </form>      
@endsection