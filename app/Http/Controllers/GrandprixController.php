<?php

namespace App\Http\Controllers;

use App\Models\Grandprix;
use Illuminate\Http\Request;

class GrandprixController extends Controller
{
    /**
     * Display a listing of the Grand Prixs.
     */
    public function index()
    {
        return view('f1.grand-prixs.management.grand-prixs')
            ->with('grandprixs', Grandprix::orderBy('id')->get());
    }

    /**
     * Show the form for creating a new Grand Prix.
     */
    public function create()
    {
        return view('f1.grand-prixs.management.create-grand-prix');
    }

    /**
     * Store a newly created Grand Prix in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required',
            'grand_prix' => 'required',
        ]);

        Grandprix::create([
            'country_id' => $request->input('country_id'),
            'grand_prix' => $request->input('grand_prix'),
        ]);

        return redirect('/f1/grand-prixs/manage');
    }

    /**
     * Display the specified Grand Prix.
     */
    public function show(Grandprix $grandprix)
    {
        //
    }

    /**
     * Show the form for editing the specified Grand Prix.
     */
    public function edit($id)
    {
        $grandprix = Grandprix::where('id', $id)->first();

        if ($grandprix) {
            return view('f1.grand-prixs.management.edit-grand-prix')
                ->with('grandprix', $grandprix);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Update the specified Grand Prix in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'country_id' => 'required',
            'grand_prix' => 'required',
        ]);

        Grandprix::where('id', $id)
            ->update([
                'country_id' => $request->input('country_id'),
                'grand_prix' => $request->input('grand_prix'),
            ]);

        return redirect('/f1/grand-prixs/manage');
    }

    /**
     * Remove the specified Grand Prix from storage.
     */
    public function destroy($id)
    {
        $category = Grandprix::where('id', $id);
        $category->delete();

        return redirect('/f1/grand-prixs/manage');
    }
}
