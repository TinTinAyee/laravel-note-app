<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->Middleware('auth');
    }

    public function index()
    {
        return view('backend.index');
    }

    public function widget()
    {
        return view('backend.widget');
    }
}