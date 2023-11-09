<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class F1DriversController extends Controller
{
    // F1 Drivers
    public function drivers()
    {
        $drivers = Driver::where('active', true)->orderby('id', 'ASC')->get();

        if ($drivers->isNotEmpty()) {

            return view('f1/drivers/drivers')
                ->with('drivers', $drivers);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Max Verstappen 1
    public function maxverstappen()
    {
        $driver = Driver::where('id', 1)->first();

        if ($driver) {
            return view('f1/drivers/max-verstappen')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Sergio Perez 2
    public function sergioperez()
    {
        $driver = Driver::where('id', 2)->first();

        if ($driver) {
            return view('f1/drivers/sergio-perez')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Charles Leclerc 3
    public function charlesleclerc()
    {
        $driver = Driver::where('id', 3)->first();

        if ($driver) {
            return view('f1/drivers/charles-leclerc')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Carlos Sainz 4
    public function carlossainz()
    {
        $driver = Driver::where('id', 4)->first();

        if ($driver) {
            return view('f1/drivers/carlos-sainz')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Lewis Hamilton 5
    public function lewishamilton()
    {
        $driver = Driver::where('id', 5)->first();

        if ($driver) {
            return view('f1/drivers/lewis-hamilton')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // George Russell 6
    public function georgerussell()
    {
        $driver = Driver::where('id', 6)->first();

        if ($driver) {
            return view('f1/drivers/george-russell')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Lando Norris 7
    public function landonorris()
    {
        $driver = Driver::where('id', 7)->first();

        if ($driver) {
            return view('f1/drivers/lando-norris')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Oscar Piastri 8
    public function oscarpiastri()
    {
        $driver = Driver::where('id', 8)->first();

        if ($driver) {
            return view('f1/drivers/oscar-piastri')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Fernando Alonso 9
    public function fernandoalonso()
    {
        $driver = Driver::where('id', 9)->first();

        if ($driver) {
            return view('f1/drivers/fernando-alonso')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Lance Stroll 10
    public function lancestroll()
    {
        $driver = Driver::where('id', 10)->first();

        if ($driver) {
            return view('f1/drivers/lance-stroll')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Pierre Gasly 11
    public function pierregasly()
    {
        $driver = Driver::where('id', 11)->first();

        if ($driver) {
            return view('f1/drivers/pierre-gasly')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Esteban Ocon 12
    public function estebanocon()
    {
        $driver = Driver::where('id', 12)->first();

        if ($driver) {
            return view('f1/drivers/esteban-ocon')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Alexander Albon 13
    public function alexanderalbon()
    {
        $driver = Driver::where('id', 13)->first();

        if ($driver) {
            return view('f1/drivers/alexander-albon')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Logan Sargeant 14
    public function logansargeant()
    {
        $driver = Driver::where('id', 14)->first();

        if ($driver) {
            return view('f1/drivers/logan-sargeant')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Daniel Ricciardo 15
    public function danielricciardo()
    {
        $driver = Driver::where('id', 15)->first();

        if ($driver) {
            return view('f1/drivers/daniel-ricciardo')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Yuki Tsunoda 16
    public function yukitsunoda()
    {
        $driver = Driver::where('id', 16)->first();

        if ($driver) {
            return view('f1/drivers/yuki-tsunoda')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Valtteri Bottas 17
    public function valtteribottas()
    {
        $driver = Driver::where('id', 17)->first();

        if ($driver) {
            return view('f1/drivers/valtteri-bottas')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Guanyu Zhou 18
    public function guanyuzhou()
    {
        $driver = Driver::where('id', 18)->first();

        if ($driver) {
            return view('f1/drivers/guanyu-zhou')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Nico Hulkenberg 19
    public function nicohulkenberg()
    {
        $driver = Driver::where('id', 19)->first();

        if ($driver) {
            return view('f1/drivers/nico-hulkenberg')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }

    // Kevin Magnussen 20
    public function kevinmagnussen()
    {
        $driver = Driver::where('id', 20)->first();

        if ($driver) {
            return view('f1/drivers/kevin-magnussen')
                ->with('driver', $driver);
        }
        else
        {
            return response()->view('errors.404', [], 404);
        }
    }
}
