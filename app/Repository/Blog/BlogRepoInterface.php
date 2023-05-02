<?php

namespace App\Repository\Blog;

Interface BlogRepoInterface
{
    public function get();

    public function show($id);

}