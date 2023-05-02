<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Models\Author;
use App\Repository\Blog\BlogRepoInterface;
use App\Services\Blog\BlogServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller

{
    // //
    // function get(){
    //     return "Hello blog";
    // }

    private $blogRepo,$blogService;

    public function __construct(BlogRepoInterface $blogRepo,BlogServiceInterface $blogService)
    {
        $this->blogRepo = $blogRepo;
        $this->blogService = $blogService;
        $this->middleware('permission:blogList',['only'=>['index']]);
        $this->middleware('permission:blogCreate',['only'=>['create,store']]);
        $this->middleware('permission:blogShow',['only'=>['show']]);
        $this->middleware('permission:blogEdit',['only'=>['edit,update']]);
        $this->middleware('permission:blogDelete',['only'=>['destroy']]);
        $this->middleware('auth');
    }


    public function index()
    {

        $data = $this->blogRepo->get();

        return view('backend.blog.index',compact('data'));
    }

    public function create()
    {
        $authors= Author::all();

        // dd($authors);

        return view('backend.blog.create',compact('authors'));
    }

    public function store(BlogRequest $request)
    {
        $this->blogService->store($request->validated());

        return redirect()->route('blog.index');
    }

    // public function show(Blog $blog)
    public function show($id)
    {
        // $blog = $this->blogRepo->show($blog->id);

        $blog = $this->blogRepo->show($id);

        return view('backend.blog.view',compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $authors = Author::all();

        return view('backend.blog.edit',compact('blog','authors'));
    }

    // public function update(BlogRequest $request,Blog $blog)
    public function update(BlogRequest $request,$id)
    {
        $this->blogService->update($request->validated(),$id);

        return redirect()->route('blog.index');
    }

    public function destroy(Blog $blog)
    {
        // $blog->delete();

        $this->blogService->delete($blog->id);

        return redirect()->route('blog.index');
    }
}