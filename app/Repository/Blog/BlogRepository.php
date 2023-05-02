<?php


namespace App\Repository\Blog;

use App\Models\Blog;

class BlogRepository implements BlogRepoInterface
{
    public function get()
    {
        $data = Blog::with('author')->get();

        return $data;

    }

    public function show($id)
    {
        $blod = Blog::where('id',$id)->first();
        return $blod;
    }
}