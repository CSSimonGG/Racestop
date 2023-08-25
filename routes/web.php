<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\F1TeamsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Formula1Controller;
use App\Http\Controllers\F1DriversController;
use App\Http\Controllers\ChampionshipsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin Dashboard
Route::get('admin', [PagesController::class, 'admin'])->middleware('role:admin');

// Show Home Page
Route::get('/', [PagesController::class, 'index']);

/**
 * Blog Routes
 */

// News Page
Route::get('/news', [PostsController::class, 'index']);

// Show Blog Post
Route::get('/news/{slug}', [PostsController::class, 'show']);

// Blog Posts Editor Authentication
Route::middleware('auth', 'role:writer')->group(
    function () {
        // Create New Blog Post
        Route::get('/create', [PostsController::class, 'create']);

        // Store New Blog Post
        Route::post('/', [PostsController::class, 'store']);

        // Edit Blog Post
        Route::get('/news/{slug}/edit', [PostsController::class, 'edit']);

        // Update Blog Post
        Route::put('/news/{slug}', [PostsController::class, 'update']);

        // Delete Blog Post
        Route::delete('/news/{slug}/delete', [PostsController::class, 'destroy']);
    }
);

/**
 * Legal and Contact Routes
 */

// Show Contact Page
Route::get('/contact', [ContactController::class, 'index']);

// Show About Us Page
Route::get('/about-us', [AboutusController::class, 'index']);

/**
 * F1 Routes
 */

// F1 Home
Route::get('/f1', [Formula1Controller::class, 'index']);

// F1 Redirect Home
Route::get('/f1/home', function () {
    return redirect('/f1');
});

// F1 News
Route::get('/f1/news', [Formula1Controller::class, 'news']);

// F1 Calender
Route::get('/f1/calender', [Formula1Controller::class, 'calender']);

// F1 Statistics
Route::get('/f1/statistics', [Formula1Controller::class, 'stats']);

// F1 Results
Route::get('/f1/results', [Formula1Controller::class, 'results']);

// F1 Standings
Route::get('/f1/standings', [Formula1Controller::class, 'standings']);

// F1 Home
Route::get('/f1/live', [Formula1Controller::class, 'live']);

/**
 * F1 Drivers Routes
 */

// F1 Drivers
Route::get('/f1/drivers', [F1DriversController::class, 'drivers']);

// Max Verstappen 
Route::get('/f1/drivers/max-verstappen', [F1DriversController::class, 'maxverstappen']);

// Sergio Perez
Route::get('/f1/drivers/sergio-perez', [F1DriversController::class, 'sergioperez']);

// Charles Leclerc
Route::get('/f1/drivers/charles-leclerc', [F1DriversController::class, 'charlesleclerc']);

// Carlos Sainz
Route::get('/f1/drivers/carlos-sainz', [F1DriversController::class, 'carlossainz']);

// George Russel
Route::get('/f1/drivers/george-russel', [F1DriversController::class, 'georgerussell']);

// Lewis Hamilton
Route::get('/f1/drivers/lewis-hamilton', [F1DriversController::class, 'lewishamilton']);

// Esteban Ocon
Route::get('/f1/drivers/esteban-ocon', [F1DriversController::class, 'estebanocon']);

// Pierre Gasly
Route::get('/f1/drivers/pierre-gasly', [F1DriversController::class, 'pierregasly']);

// Lando Norris
Route::get('/f1/drivers/lando-norris', [F1DriversController::class, 'landonorris']);

// Oscar Piastri
Route::get('/f1/drivers/oscar-piastri', [F1DriversController::class, 'oscarpiastri']);

// Valtteri Bottas
Route::get('/f1/drivers/valtteri-bottas', [F1DriversController::class, 'valtteribottas']);

// Guanyu Zhou
Route::get('/f1/drivers/guanyu-zhou', [F1DriversController::class, 'guanyuzhou']);

// Fernando Alonso
Route::get('/f1/drivers/fernando-alonso', [F1DriversController::class, 'fernandoalonso']);

// Lance Stroll
Route::get('/f1/drivers/lance-stroll', [F1DriversController::class, 'lancestroll']);

// Kevin Magnussen
Route::get('/f1/drivers/kevin-magnussen', [F1DriversController::class, 'kevinmagnussen']);

// Nico Hulkenberg
Route::get('/f1/drivers/nico-hulkenberg', [F1DriversController::class, 'nicohulkenberg']);

// Alexander Albon
Route::get('/f1/drivers/alexander-albon', [F1DriversController::class, 'alexanderalbon']);

// Logan Sargeant
Route::get('/f1/drivers/logan-sargeant', [F1DriversController::class, 'logansargeant']);

// Yuki Tsunoda
Route::get('/f1/drivers/yuki-tsunoda', [F1DriversController::class, 'yukitsunoda']);

// Daniel Ricciardo
Route::get('/f1/drivers/daniel-ricciardo', [F1DriversController::class, 'danielricciardo']);

/**
 * F1 Teams Routes
 */

// F1 Teams
Route::get('/f1/teams', [F1TeamsController::class, 'teams']);

// Red Bull Racing
Route::get('/f1/teams/red-bull-racing', [F1TeamsController::class, 'redbullracing']);

// Ferrari
Route::get('/f1/teams/ferrari', [F1TeamsController::class, 'ferrari']);

// Mercedes
Route::get('/f1/teams/mercedes', [F1TeamsController::class, 'mercedes']);

// Aston martin
Route::get('/f1/teams/aston-martin', [F1TeamsController::class, 'astonmartin']);

// McLaren
Route::get('/f1/teams/mclaren', [F1TeamsController::class, 'mclaren']);

// Alpine
Route::get('/f1/teams/alpine', [F1TeamsController::class, 'alpine']);

// Alfa Romeo
Route::get('/f1/teams/alfa-romeo', [F1TeamsController::class, 'alfaromeo']);

// Haas
Route::get('/f1/teams/haas', [F1TeamsController::class, 'haas']);

// Williams
Route::get('/f1/teams/williams', [F1TeamsController::class, 'williams']);

// AlphaTauri
Route::get('/f1/teams/alphatauri', [F1TeamsController::class, 'alphatauri']);

/**
 * Championships Routes
 */

// Championships
Route::get('/championships', [ChampionshipsController::class, 'championships']);


// MotoGP 
Route::get('/motogp', [ChampionshipsController::class, 'motogp']);

// F2
Route::get('/f2', [ChampionshipsController::class, 'f2']);

// F3
Route::get('/f3', [ChampionshipsController::class, 'f3']);

// Formula E
Route::get('/fe', [ChampionshipsController::class, 'fe']);

// Indycar
Route::get('/indycar', [ChampionshipsController::class, 'indycar']);

// Nascar
Route::get('/nascar', [ChampionshipsController::class, 'nascar']);

// Endurance Racing
Route::get('/endurance-racing', [ChampionshipsController::class, 'enduranceracing']);

/**
 * Policy Pages
 */

// Privacy Policy
Route::get('/privacy-policy', [PolicyController::class, 'index']);

// User Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// User Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
