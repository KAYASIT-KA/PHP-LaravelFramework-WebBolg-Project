@extends('layouts.app')
@section('title')
    Web_Dev_Blog
@endsection
@section('content')
<style>
    .container {
        font-family: "Prompt", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>
<div class="container">
    <br>
    <h4>บทความล่าสุด</h4>
    <hr>
    @foreach ($blogs as $item)
        <h5>{!!$item->title!!}</h5>
        <p>{!!Str::limit($item->content,200)!!}</p>
        <a href="/detail/{{$item->id}}">อ่านเพิ่มเติม</a>
        <hr>    
    @endforeach
</div>
@endsection
