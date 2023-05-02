<?php

namespace App\Services\Blog;

Interface BlogServiceInterface
{
    public function store($request);

    public function update($request,$id);

    public function delete($id);
   
}