@extends('layouts.helloapp')

@section('title','Index')
@endsection
@section('menubar')
    @parent 
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <table>
        @foreach($data as $item)
        <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
        @endforeach
        </table>
    @endsection
    <p>必要なだけ記述できます。</p>

    @include('components.message', ['msg_title'=>'OK',
    'msg_content'=>'サブビューです。'])


@component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。
    @endslot

@endcomponent

@endsection

@section('footer')
copyright 2022 kanouao.
@endsection