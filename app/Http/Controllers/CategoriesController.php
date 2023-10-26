<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        return view('categories.categories')
            ->with('categories', Category::orderBy('id')->get());
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('categories.create-categories');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);

        Category::create([
            'category' => $request->input('category'),
        ]);

        return redirect('/categories');
    }

    /**
     * Display the specified category.
     */
    public function show(Category $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();

        if ($category) {
            return view('categories.edit-categories')
                ->with('category', $category);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ]);

        Category::where('id', $id)
            ->update([
                'category' => $request->input('category'),
            ]);

        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id);
        $category->delete();

        return redirect('/categories');
    }
}
