<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller

{
    // //
    // function get(){
    //     return "Hello blog";
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $data = Blog::all();

        return view('backend.blog.index',compact('data'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        Blog::create($data);

        return redirect()->route('blog.index');
    }

    public function show(Blog $blog)
    {

        return view('backend.blog.view',compact('blog'));
    }
    public function edit(Blog $blog)
    {
        return view('backend.blog.edit',compact('blog'));
    }

    public function update(BlogRequest $request,Blog $blog)
    {
        $data = $request->validated();
        $blog->update($data);

        // $blogs->update([
        //     'name'=>$data['name'],
        //     'description'=>$data['description'],
        // ]);

        return redirect()->route('blog.index');
    }

    public function destroy(Blog $blog){
        $blog->delete();

        return redirect()->route('blog.index');
    }
}