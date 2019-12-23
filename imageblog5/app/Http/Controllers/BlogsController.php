<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Storage;



class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index',['blogs'=>$blogs]);
    }
    public function store(Request $request)
    {
        $blog = new Blog;
        $path = Storage::putfile('public',$request->file('files'));
        $url = Storage::url($path);
        $blog->image=$url;
        $blog->title = $request->title;
        $blog->content=$request->content;
        $blog->save();
        return redirect()->route('blogs_path');
    }

    public function create()
    {
        return view('blogs.create');
    }

}
