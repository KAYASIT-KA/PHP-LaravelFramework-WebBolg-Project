@extends('layouts.app')
@section('title')
    ผู้เขียน
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>ผู้เขียน</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/">หน้าแรก</a>
                    <a href="/author/blogs">บทความ</a>
                    <a href="/author/form">เขียนบทความ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
