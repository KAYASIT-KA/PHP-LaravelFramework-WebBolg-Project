@extends('layouts.app')
@section('title')
    {{$blogs->title}}
@endsection
@section('content')
<style>
    .fontstyle {
        font-family: "Prompt", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

<div class="fontstyle">
    <br>
    <h3>{!!$blogs->title!!}</h3>
    <hr>
    <p>{!!$blogs->content!!}</p>
</div>
@endsection
