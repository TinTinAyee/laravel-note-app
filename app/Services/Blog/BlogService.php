<?php


namespace App\Services\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogService implements BlogServiceInterface
{
    public function store($request)
    {
        if($request['image'])
        {
            //first way to upload image in public folder

            // $imageName = time().'.'.$request->image->extension();

            // $request->image->move(public_path('blog_image'),$imageName);

            //This is second way to upload image in storage folder to link public folder

            $imageName = time().'.'.$request['image']->extension();
            $request['image']->storeAs('public',$imageName);
            $request['image'] = $imageName;

        }

        return Blog::create($request);

    }

    public function update($request, $id)
    {
        $blog = Blog::where('id',$id)->first();
        // dd($blog);

        if($request['image'] ?? false)
            {
                Storage::delete('public/'.$blog->image);
                $imageName = time().'.'.$request['image']->extension();
                $request['image']->storeAs('public',$imageName);
                $request['image'] = $imageName;
            }

        return $blog->update($request);

    }

    public function delete($id)
   {
        $data = Blog::where('id',$id)->first();

        Storage::delete('public/'.$data->image);

        return $data->delete();
    }
}