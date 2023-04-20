<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{

    public function index()
    {

        $data = Blog::all();

        // dd($data);

        return view('backend.blogs.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request)->all();

        // Blog::create([
        //     'name'=> $request->name,
        //     'description'=> $request->description,
        // ]);

        Blog::create($request->all());

        return redirect()->route('blogs.index');

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
        $result = Blog::where('id',$id)->first();

        return view('backend.blogs.view',compact('result'));
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
        $result = Blog::where('id',$id)->first();

        return view('backend.blogs.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Blog::where('id',$id)->first();

        // $data->update([
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        // ]);
        $data->update($request->all());

        return redirect()->route('blogs.index');

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
        $data = Blog::where('id',$id)->first();
        $data->delete();

        return redirect()->route('blogs.index');

    }
}