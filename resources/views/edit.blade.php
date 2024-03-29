@extends('layouts.app')
@section('title', 'แก้ไขบทความ')
@section('content')
<style>
    .fontstyle {
        font-family: "Prompt", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

    <div class="fontstyle">
        <h4 class="text-center">แก้ไขบทความ</h4>
        <form method="POST" action="{{route('update',$blogs->id)}}">
            @csrf
            <div class="form-group" >
                <label for="title"><h5>ชื่อบทความ</h5></label>
                <input type="text" name="title" class="form-control" value="{{$blogs->title}}">
            </div>
            @error('title')
                <div>
                    <span class="text-danger">{{ $message }}</span>
                </div>
            @enderror
            <div class="form-group">
                <p></p>
                <label for="content"><h5>เนื้อหา</h5></label>
                <textarea name="content" class="form-control" rows="8" id="content">{{$blogs->content}}</textarea>
            </div>
            @error('content')
                <div>
                    <span class="text-danger">{{ $message }}</span>
                </div>
            @enderror
            <div>
                <p></p>
                <button type="submit" class="btn btn-primary"><h5>บันทึก</h5></button>
            </div>
        </form>

        <script>
            ClassicEditor
                .create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </div>
@endsection