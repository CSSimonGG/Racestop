<?php

namespace App\Http\Controllers;

use App\Models\F1race;
use Illuminate\Http\Request;

class F1GPController extends Controller
{
    // Bahrain GP
    public function bahraingp()
    {
        $f1race = F1race::where('id', 1)->first();

        if ($f1race) {
            return view('f1/circuits/bahrain-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Saudi Arabian GP
    public function saudiarabiangp()
    {
        $f1race = F1race::where('id', 2)->first();

        if ($f1race) {
            return view('f1/circuits/saudi-arabian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Australian GP
    public function australiangp()
    {
        $f1race = F1race::where('id', 3)->first();

        if ($f1race) {
            return view('f1/circuits/australian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Azerbaijan GP
    public function azerbaijangp()
    {
        $f1race = F1race::where('id', 4)->first();

        if ($f1race) {
            return view('f1/circuits/azerbaijan-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Miami GP
    public function miamigp()
    {
        $f1race = F1race::where('id', 5)->first();

        if ($f1race) {
            return view('f1/circuits/miami-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Monaco GP
    public function monacogp()
    {
        $f1race = F1race::where('id', 6)->first();

        if ($f1race) {
            return view('f1/circuits/monaco-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Spanish GP
    public function spanishgp()
    {
        $f1race = F1race::where('id', 7)->first();

        if ($f1race) {
            return view('f1/circuits/spanish-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Canadian GP
    public function canadiangp()
    {
        $f1race = F1race::where('id', 8)->first();

        if ($f1race) {
            return view('f1/circuits/canadian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Austrian GP
    public function austriangp()
    {
        $f1race = F1race::where('id', 9)->first();

        if ($f1race) {
            return view('f1/circuits/austrian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // British GP
    public function britishgp()
    {
        $f1race = F1race::where('id', 10)->first();

        if ($f1race) {
            return view('f1/circuits/british-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }


    // Hungarian GP
    public function hungariangp()
    {
        $f1race = F1race::where('id', 11)->first();

        if ($f1race) {
            return view('f1/circuits/hungarian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Belgian GP
    public function belgiangp()
    {
        $f1race = F1race::where('id', 12)->first();

        if ($f1race) {
            return view('f1/circuits/belgian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Dutch GP
    public function dutchgp()
    {
        $f1race = F1race::where('id', 13)->first();

        if ($f1race) {
            return view('f1/circuits/dutch-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Italian GP
    public function italiangp()
    {
        $f1race = F1race::where('id', 14)->first();

        if ($f1race) {
            return view('f1/circuits/italian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Singapore GP
    public function singaporegp()
    {
        $f1race = F1race::where('id', 15)->first();

        if ($f1race) {
            return view('f1/circuits/singapore-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Japanese GP
    public function japanesegp()
    {
        $f1race = F1race::where('id', 16)->first();

        if ($f1race) {
            return view('f1/circuits/japanese-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Qatar GP
    public function qatargp()
    {
        $f1race = F1race::where('id', 17)->first();

        if ($f1race) {
            return view('f1/circuits/qatar-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // United States GP
    public function usgp()
    {
        $f1race = F1race::where('id', 18)->first();

        if ($f1race) {
            return view('f1/circuits/united-states-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Mexican GP
    public function mexicangp()
    {
        $f1race = F1race::where('id', 19)->first();

        if ($f1race) {
            return view('f1/circuits/mexican-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Brazilian GP
    public function braziliangp()
    {
        $f1race = F1race::where('id', 20)->first();

        if ($f1race) {
            return view('f1/circuits/brazilian-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Las Vegas GP
    public function lasvegasgp()
    {
        $f1race = F1race::where('id', 21)->first();

        if ($f1race) {
            return view('f1/circuits/las-vegas-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Abu Dhabi GP
    public function abudhabigp()
    {
        $f1race = F1race::where('id', 22)->first();

        if ($f1race) {
            return view('f1/circuits/abu-dhabi-gp')
                ->with('f1race', $f1race);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }
}
