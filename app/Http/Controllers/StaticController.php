<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        return view('blog');
    }

    public function booking()
    {
        return view('booking');
    }

    public function listings()
    {
        return view('listings');
    }

    public function contact()
    {
        return view('contact');
    }
}
