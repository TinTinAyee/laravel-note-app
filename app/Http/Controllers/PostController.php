<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Post::all();

        // dd($data);

        return view('backend.post.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();

       if($request->hasFile('image'))
        {
            //first way to upload image in public folder

            // $imageName = time().'.'.$request->image->extension();

            // $request->image->move(public_path('blog_image'),$imageName);

            //This is second way to upload image in storage folder to link public folder

            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public',$imageName);
            $data['image'] = $imageName;

        }

        $data['is_active']=$request->has('is_active') ? true:false;

        Post::create($data);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $result = Post::where('id',$id)->first();

        return view('backend.post.view',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $result = Post::where('id',$id)->first();
        // dd($result);

        return view('backend.post.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {

        $data = $request->validated();

        if($request->hasFile('image'))
        {
            Storage::delete('public/'.$post->image);
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public',$imageName);
            $data['image'] = $imageName;
        }

        $data['is_active'] = $request->has('is_active') ? true:false;

        $post->update($data);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Post::where('id',$id)->first();
        $data->delete();

        return redirect()->route('post.index');
    }
}
