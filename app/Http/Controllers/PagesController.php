<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderby('id', 'ASC')->get();
        if ($posts->isNotEmpty()) {

            return view('home')
                ->with('posts', $posts)
                ->with('categories');
        }
        else
        {
            return response()->view('errors.500', [], 500);
        }
    }

    public function admin()
    {
        return view('admin');
    }
}
