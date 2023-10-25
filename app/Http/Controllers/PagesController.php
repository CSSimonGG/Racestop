<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home')
            ->with('posts', Post::orderBy('id', 'DESC')->get())
            ->with('categories');
    }

    public function admin()
    {
        return view('admin');
    }
}
