@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
    {{-- <x-my-alert type="success" :alert-title="$title">
        コンポーネントは普通のビューのように.blade.phpファイルを定義できます!
    </x-my-alert> --}}

    <x-dynamic-component :component="$comp" type="success" :alert-title="$title" >
        コンポーネントは普通のビューのように.blade.phpファイルを定義できます!
    </x-dynamic-component>
@endsection