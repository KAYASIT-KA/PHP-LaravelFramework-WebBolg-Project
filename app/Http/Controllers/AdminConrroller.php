<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;


class AdminConrroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $name = "Kayasitkaanma";
        $blogs = Blog::paginate(7);
        return view('blogs', compact('blogs'));
    }
    

    function form()
    {
        return view('form');
    }

    function insert(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ],
        [
            'title.required' => 'ใส่ชื่อบทความ',
            'content.required' => 'ใส่เนื้อหา'
        ]);
        $data = [
            'title'=>$request->title,
            'content'=>$request->content
        ];
        Blog::insert($data);
        return redirect('/author/blogs');
    }

    function delete($id) {
        Blog::find($id)->delete();
        return redirect()->back();
    }

    function change($id) {
        $blogs = Blog::find($id);
        $data = [
            'status'=>!$blogs->status
        ];
        $blogs = Blog::find($id)->update($data);
        return redirect()->back();
    }

    function edit($id) {
        $blogs = Blog::find($id);
        return view('edit',compact('blogs'));
    }

    function update(Request $request,$id) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ],
        [
            'title.required' => 'ใส่ชื่อบทความ',
            'content.required' => 'ใส่เนื้อหา'
        ]);
        $data = [
            'title'=>$request->title,
            'content'=>$request->content
        ];
        Blog::find($id)->update($data);
        return redirect('/author/blogs');
    }
}
