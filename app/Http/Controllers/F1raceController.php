<?php

namespace App\Http\Controllers;

use App\Models\F1race;
use Illuminate\Http\Request;

class F1raceController extends Controller
{
    /**
     * Display a listing of the calendar items (f1races).
     */
    public function index()
    {
        return view('f1.calendar.calendar');
    }
    /**
     * Manage calendar items (f1races)
     */

    public function manage()
    {
        return view('f1.calendar.manage-calendar');
    }

    /**
     * Show the form for creating a new calendar item (f1race).
     */
    public function create()
    {
        return view('f1.calendar.create-calendar');
    }

    /**
     * Store a newly created calendar item (f1race) in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required', // CHANGE
        ]);

        F1race::create([
            'category' => $request->input('category'), // CHANGE
        ]);

        return redirect('/f1/calendar/manage');
    }

    /**
     * Display the specified calendar item (f1race).
     */
    public function show(F1race $f1race)
    {
        //
    }

    /**
     * Show the form for editing the specified calendar item (f1race).
     */
    public function edit($id)
    {
        $f1race = F1race::where('id', $id)->first();

        if ($f1race) {
            return view('f1.calendar.edit-calendar')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Update the specified calendar item (f1race) in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required', // CHANGE
        ]);

        F1race::where('id', $id)
            ->update([
                'category' => $request->input('category'), // CHANGE
            ]);

        return redirect('/calendar');
    }

    /**
     * Remove the specified calendar item (f1race) from storage.
     */
    public function destroy($id)
    {
        $category = F1race::where('id', $id);
        $category->delete();

        return redirect('/f1/calendar/manage');
    }
}
