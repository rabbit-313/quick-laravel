@extends('layout.base')
@section('title','Relation')
@section('main')
<h3> 「{{ $book->title}}」のレビュー </h3>
<ul>
@foreach ($book->review as $rev)
    <li>{{$rev->body}} ({{$rev->name}}) </li>
@endforeach
</ul>
@endsection