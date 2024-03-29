@extends('layouts.app')
@section('title')
    บทความ
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
        @if (count($blogs)>0)
        <br>
        <h3 class="text-center">บทความ</h3> 
        <p>
        </p>
        <table class="table table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">ชื่อบทความ</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">ลบบทความ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td>{{ $item->title }} <a href="{{route('edit',$item->id)}}" class="text-decoration-none text-decoration-underline"><p>แก้ไข</p></a></td>
                        <td>
                            @if ($item->status == true)
                                <a href="{{route('change',$item->id)}}" class="btn btn-success" onclick="return confirm('ต้องการเปลี่ยนสถานะบทความ {{$item->title}} จากเผยแพร่เป็นฉบับร่างหรือไม่')">เผยแพร่</a>
                            @else
                                <a href="{{route('change',$item->id)}}" class="btn btn-warning" onclick="return confirm('ต้องการเปลี่ยนสถานะบทความ {{$item->title}} จากฉบับร่างเป็นเผยแพร่หรือไม่')">ฉบับร่าง</a>
                            @endif
                        </td>

                        <td><a href="{{route('delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('ต้องการลบบทความ {{$item->title}} หรือไม่')">ลบบทความ</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$blogs->links()}}
        @else
            <br>
            <h3 class="text text-center py-2">ไม่มีบทความ</h3>
        @endif
    </div>
@endsection