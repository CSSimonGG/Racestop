<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new Driver.
     */
    public function create()
    {
        return view('f1.drivers.management.create-driver');
    }

    /**
     * Store a newly created Driver in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'active' => 'required',
            'name' => 'required',
            'driver_number' => 'required',
            'f1team_id' => 'required',
            'country_id' => 'required',
            'podiums' => 'required',
            'world_championship_points' => 'required',
            'grand_prix_entered' => 'required',
            'world_championships' => 'required',
            'highest_race_finish' => 'required',
            'highest_race_finish_times' => 'required',
            'pole_positions' => 'required',
            'fastest_laps' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'biography' => 'required',
        ]);

        Driver::create([
            'active' => $request->input('active'),
            'name' => $request->input('name'),
            'driver_number' => $request->input('driver_number'),
            'f1team_id' => $request->input('f1team_id'),
            'country_id' => $request->input('country_id'),
            'podiums' => $request->input('podiums'),
            'world_championship_points' => $request->input('world_championship_points'),
            'grand_prix_entered' => $request->input('grand_prix_entered'),
            'world_championships' => $request->input('world_championships'),
            'highest_race_finish' => $request->input('highest_race_finish'),
            'highest_race_finish_times' => $request->input('highest_race_finish_times'),
            'pole_positions' => $request->input('pole_positions'),
            'fastest_laps' => $request->input('fastest_laps'),
            'birth_date' => $request->input('birth_date'),
            'birth_place' => $request->input('birth_place'),
            'biography' => $request->input('biography'),
        ]);

        return redirect('/f1/drivers');
    }

    /**
     * Display the specified Driver.
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified Driver.
     */
    public function edit($id)
    {
        $driver = Driver::where('id', $id)->first();

        if ($driver) {
            return view('f1.drivers.management.edit-driver')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Update the specified Driver in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'active' => 'required',
            'name' => 'required',
            'driver_number' => 'required',
            'f1team_id' => 'required',
            'country_id' => 'required',
            'podiums' => 'required',
            'world_championship_points' => 'required',
            'grand_prix_entered' => 'required',
            'world_championships' => 'required',
            'highest_race_finish' => 'required',
            'highest_race_finish_times' => 'required',
            'pole_positions' => 'required',
            'fastest_laps' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'biography' => 'required',
        ]);

        Driver::where('id', $id)
            ->update([
                'active' => $request->input('active'),
                'name' => $request->input('name'),
                'driver_number' => $request->input('driver_number'),
                'f1team_id' => $request->input('f1team_id'),
                'country_id' => $request->input('country_id'),
                'podiums' => $request->input('podiums'),
                'world_championship_points' => $request->input('world_championship_points'),
                'grand_prix_entered' => $request->input('grand_prix_entered'),
                'world_championships' => $request->input('world_championships'),
                'highest_race_finish' => $request->input('highest_race_finish'),
                'highest_race_finish_times' => $request->input('highest_race_finish_times'),
                'pole_positions' => $request->input('pole_positions'),
                'fastest_laps' => $request->input('fastest_laps'),
                'birth_date' => $request->input('birth_date'),
                'birth_place' => $request->input('birth_place'),
                'biography' => $request->input('biography'),
            ]);

        return redirect('/f1/drivers');
    }

    /**
     * Remove the specified Driver from storage.
     * Function does not delete, but set driver to not active
     */
    public function destroy($id)
    {
//        $category = Driver::where('id', $id);
//        $category->delete();

        Driver::where('id', $id)
            ->update([
                'active' => 0,
            ]);

        return redirect('/f1/drivers');
    }
}
