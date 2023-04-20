<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    //
    public function create()
    {
        return view('backend.todoList.create');
    }
}