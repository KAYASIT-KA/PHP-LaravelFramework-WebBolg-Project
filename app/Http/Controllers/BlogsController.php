<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    function index(){
        $blogs = Blog::orderByDesc('id')->where('status',true)->get();
        return view('hero',compact('blogs'));
    }
    function detail($id){
        $blogs = Blog::find($id);
        return view('detail',compact('blogs'));
    }
}
