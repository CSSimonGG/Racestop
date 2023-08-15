<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ChampionshipsController extends Controller
{
    // Championships
    public function championships()
    {
        return view('championships/championships');
    }

    // MotoGP
    public function motogp()
    {
        return view('championships/motogp')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // F2
    public function F2()
    {
        return view('championships/f2')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // F3
    public function f3()
    {
        return view('championships/f3')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // Formula E 
    public function fe()
    {
        return view('championships/fe')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // Indycar
    public function indycar()
    {
        return view('championships/indycar')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // Nascar
    public function nascar()
    {
        return view('championships/nascar')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }

    // Endurance Racing
    public function enduranceracing()
    {
        return view('championships/enduranceracing')
            ->with('posts', Post::orderBy('id', 'DESC')->get());
    }
}
