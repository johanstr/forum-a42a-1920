<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $threads = Thread::all();

        return view('home.index')->with('threads', $threads);
    }
}
