<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Formula1Controller extends Controller
{
    // F1 Home
    public function index()
    {
        return redirect('/f1/news');
        // return view('f1/home');
    }

    // F1 News
    public function news()
    {
        return view('f1/news')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // F1 Calendar
    public function calendar()
    {
        //
    }

    // F1 Statistics
    public function stats()
    {
        return view('f1/statistics');
    }

    // F1 Results
    public function results()
    {
        return view('f1/results');
    }

    // F1 Standings
    public function standings()
    {
        return view('f1/standings');
    }

    // F1 Live
    public function live()
    {
        return view('f1/live');
    }
}
