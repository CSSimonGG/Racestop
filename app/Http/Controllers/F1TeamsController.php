<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\F1team;
use Illuminate\Http\Request;

class F1TeamsController extends Controller
{
    // F1 Teams
    public function teams()
    {
        $f1teams = F1team::where('active', true)->orderby('id', 'ASC')->get();
        $drivers = Driver::where('active', true)->orderby('id', 'ASC')->get();

        if ($f1teams->isNotEmpty()) {

            return view('f1/teams/index/teams')
                ->with('f1teams', $f1teams)
                ->with('drivers', $drivers);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Red Bull Racing
    public function redbullracing()
    {
        $f1team = F1team::where('id', 1)->first();
        $driverOne = Driver::where('f1team_id', 1)->first();
        $driverTwo = Driver::where('f1team_id', 1)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/red-bull-racing')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Ferrari
    public function ferrari()
    {
        $f1team = F1team::where('id', 2)->first();
        $driverOne = Driver::where('f1team_id', 2)->first();
        $driverTwo = Driver::where('f1team_id', 2)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/ferrari')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Merecedes
    public function mercedes()
    {
        $f1team = F1team::where('id', 3)->first();
        $driverOne = Driver::where('f1team_id', 3)->first();
        $driverTwo = Driver::where('f1team_id', 3)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/mercedes')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // McLaren
    public function mclaren()
    {
        $f1team = F1team::where('id', 4)->first();
        $driverOne = Driver::where('f1team_id', 4)->first();
        $driverTwo = Driver::where('f1team_id', 4)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/mclaren')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Aston Martin
    public function astonmartin()
    {
        $f1team = F1team::where('id', 5)->first();
        $driverOne = Driver::where('f1team_id', 5)->first();
        $driverTwo = Driver::where('f1team_id', 5)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/aston-martin')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Alpine
    public function alpine()
    {
        $f1team = F1team::where('id', 6)->first();
        $driverOne = Driver::where('f1team_id', 6)->first();
        $driverTwo = Driver::where('f1team_id', 6)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/alpine')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Williams
    public function williams()
    {
        $f1team = F1team::where('id', 7)->first();
        $driverOne = Driver::where('f1team_id', 7)->first();
        $driverTwo = Driver::where('f1team_id', 7)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/williams')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // AlphaTauri
    public function alphatauri()
    {
        $f1team = F1team::where('id', 8)->first();
        $driverOne = Driver::where('f1team_id', 8)->first();
        $driverTwo = Driver::where('f1team_id', 8)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/alphatauri')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Alfa Romeo
    public function alfaromeo()
    {
        $f1team = F1team::where('id', 9)->first();
        $driverOne = Driver::where('f1team_id', 9)->first();
        $driverTwo = Driver::where('f1team_id', 9)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/alfa-romeo')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Haas
    public function haas()
    {
        $f1team = F1team::where('id', 10)->first();
        $driverOne = Driver::where('f1team_id', 10)->first();
        $driverTwo = Driver::where('f1team_id', 10)->skip(1)->first();

        if ($f1team) {
            return view('f1/teams/haas')
                ->with('f1team', $f1team)
                ->with ('driverOne', $driverOne)
                ->with ('driverTwo', $driverTwo);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }
}
