<?php

namespace App\Http\Controllers;

use App\Models\F1team;
use Illuminate\Http\Request;

class F1teamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new F1 Team.
     */
    public function create()
    {
        return view('f1.teams.management.create-team');
    }

    /**
     * Store a newly created F1 Team in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'active' => 'required',
            'name' => 'required',
            'logo_path' => 'required',
            'team_hex_color' => 'required',
            'country_id' => 'required',
            'team_chief' => 'required',
            'power_unit'  => 'required',
            'world_championships' => 'required',
            'world_championship_points' => 'required',
            'highest_race_finish' => 'required',
            'highest_race_finish_times' => 'required',
            'podiums' => 'required',
            'pole_positions' => 'required',
            'fastest_laps' => 'required',
            'information' => 'required',
        ]);

        F1team::create([
            'active' => $request->input('active'),
            'name' => $request->input('name'),
            'logo_path' => $request->input('logo_path'),
            'team_hex_color' => $request->input('team_hex_color'),
            'country_id' => $request->input('country_id'),
            'team_chief' => $request->input('team_chief'),
            'power_unit' => $request->input('power_unit'),
            'world_championships' => $request->input('world_championships'),
            'world_championship_points' => $request->input('world_championship_points'),
            'highest_race_finish' => $request->input('highest_race_finish'),
            'highest_race_finish_times' => $request->input('highest_race_finish_times'),
            'podiums' => $request->input('podiums'),
            'pole_positions' => $request->input('pole_positions'),
            'fastest_laps' => $request->input('fastest_laps'),
            'information' => $request->input('information'),
        ]);

        return redirect('/f1/teams');
    }

    /**
     * Display the specified F1 Team.
     */
    public function show(F1team $f1team)
    {
        //
    }

    /**
     * Show the form for editing the specified F1 Team.
     */
    public function edit($id)
    {
        $f1team = F1team::where('id', $id)->first();

        if ($f1team) {
            return view('f1.teams.management.edit-team')
                ->with('f1team', $f1team);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Update the specified F1 Team in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'active' => 'required',
            'name' => 'required',
            'logo_path' => 'required',
            'team_hex_color' => 'required',
            'country_id' => 'required',
            'team_chief' => 'required',
            'power_unit'  => 'required',
            'world_championships' => 'required',
            'world_championship_points' => 'required',
            'highest_race_finish' => 'required',
            'highest_race_finish_times' => 'required',
            'podiums' => 'required',
            'pole_positions' => 'required',
            'fastest_laps' => 'required',
            'information' => 'required',
        ]);

        F1team::where('id', $id)
            ->update([
                'active' => $request->input('active'),
                'name' => $request->input('name'),
                'logo_path' => $request->input('logo_path'),
                'team_hex_color' => $request->input('team_hex_color'),
                'country_id' => $request->input('country_id'),
                'team_chief' => $request->input('team_chief'),
                'power_unit' => $request->input('power_unit'),
                'world_championships' => $request->input('world_championships'),
                'world_championship_points' => $request->input('world_championship_points'),
                'highest_race_finish' => $request->input('highest_race_finish'),
                'highest_race_finish_times' => $request->input('highest_race_finish_times'),
                'podiums' => $request->input('podiums'),
                'pole_positions' => $request->input('pole_positions'),
                'fastest_laps' => $request->input('fastest_laps'),
                'information' => $request->input('information'),
            ]);

        return redirect('/f1/teams');
    }

    /**
     * Remove the specified F1 Team from storage.
     */
    public function destroy($id)
    {
        $category = F1team::where('id', $id);
        $category->delete();

        return redirect('/f1/teams');
    }
}
