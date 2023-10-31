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
        return view('f1.calendar.calendar')
            ->with('f1races', F1race::orderBy('id', 'ASC')->get());
    }
    /**
     * Manage calendar items (f1races)
     */

    public function manage()
    {
        return view('f1.calendar.manage-calendar')
            ->with('f1races', F1race::orderBy('id', 'ASC')->get());
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
            'grandprix_id' => 'required',
            'circuit' => 'required',
            'circuit_image' => 'required',
            'first_gp' => 'required',
            'laps' => 'required',
            'circuit_length' => 'required',
            'race_distance' => 'required',
            'lap_record' => 'required',
            'lap_record_holder' => 'required',
            'lap_record_year' => 'required',
            'last_winner' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'information' => 'required',
        ]);

        F1race::create([
            'grandprix_id' => $request->input('grandprix_id'),
            'circuit' => $request->input('circuit'),
            'circuit_image' => $request->input('circuit_image'),
            'first_gp' => $request->input('first_gp'),
            'laps' => $request->input('laps'),
            'circuit_length' => $request->input('circuit_length'),
            'race_distance' => $request->input('race_distance'),
            'lap_record' => $request->input('lap_record'),
            'lap_record_holder' => $request->input('lap_record_holder'),
            'lap_record_year' => $request->input('lap_record_year'),
            'last_winner' => $request->input('last_winner'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'information' => $request->input('information'),
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
            'grandprix_id' => 'required',
            'circuit' => 'required',
            'circuit_image' => 'required',
            'first_gp' => 'required',
            'laps' => 'required',
            'circuit_length' => 'required',
            'race_distance' => 'required',
            'lap_record' => 'required',
            'lap_record_holder' => 'required',
            'lap_record_year' => 'required',
            'last_winner' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'information' => 'required',
        ]);

        F1race::where('id', $id)
            ->update([
                'grandprix_id' => $request->input('grandprix_id'),
                'circuit' => $request->input('circuit'),
                'circuit_image' => $request->input('circuit_image'),
                'first_gp' => $request->input('first_gp'),
                'laps' => $request->input('laps'),
                'circuit_length' => $request->input('circuit_length'),
                'race_distance' => $request->input('race_distance'),
                'lap_record' => $request->input('lap_record'),
                'lap_record_holder' => $request->input('lap_record_holder'),
                'lap_record_year' => $request->input('lap_record_year'),
                'last_winner' => $request->input('last_winner'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'information' => $request->input('information'),
            ]);

        return redirect('/f1/calendar/manage');
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
