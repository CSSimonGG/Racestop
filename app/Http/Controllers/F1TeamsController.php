<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class F1TeamsController extends Controller
{
    // F1 Teams
    public function teams()
    {
        return view('f1/teams/teams');
    }

    // Red Bull Racing
    public function redbullracing()
    {
        return view('f1/teams/red-bull-racing');
    }

    // Ferrari
    public function ferrari()
    {
        return view('f1/teams/ferrari');
    }

    // Merecedes
    public function mercedes()
    {
        return view('f1/teams/mercedes');
    }

    // Aston Martin 
    public function astonmartin()
    {
        return view('f1/teams/aston-martin');
    }

    // McLaren
    public function mclaren()
    {
        return view('f1/teams/mclaren');
    }

    // Alpine
    public function alpine()
    {
        return view('f1/teams/alpine');
    }

    // Alfa Romeo 
    public function alfaromeo()
    {
        return view('f1/teams/alfa-romeo');
    }

    // Haas
    public function haas()
    {
        return view('f1/teams/haas');
    }

    // Williams
    public function williams()
    {
        return view('f1/teams/williams');
    }

    // AlphaTauri
    public function alphatauri()
    {
        return view('f1/teams/alphatauri');
    }
}
