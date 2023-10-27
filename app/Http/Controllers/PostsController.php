<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create')
            ->with('categories', Category::orderBy('id')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'category_id' => 'required'
        ]);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => $newImageName,
            'category_id' => $request->input('category_id'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/create')->with('message', 'Succesfully Posted New Blog');
    }

    /**
     * Display the specified resource.
     *
     * @param string  $slug
     * @param int $id
     * @ return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if ($post) {
            return view('news.show')
                ->with('post', $post);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @ return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if ($post) {
            return view('news.edit')
                ->with('post', $post)
                ->with('categories', Category::orderBy('id')->get());
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @ return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'category_id' => 'required'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'image_path' => $newImageName,
                'category_id' => $request->input('category_id'),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/')
            ->with('message', 'Your post has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/');
    }
}
