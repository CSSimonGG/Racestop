<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Formula1Controller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('admin', [PagesController::class, 'admin']);

// Show Home Page
Route::get('/', [PagesController::class, 'index']);

/**
 * Blog Routes
 */

// News Page
Route::get('/news', [PostsController::class, 'index']);

// Create New Blog Post
Route::get('/news/create', [PostsController::class, 'create']);

// Store New Blog Post
Route::post('/', [PostsController::class, 'store']);

// Show Blog Post
Route::get('/news/{slug}', [PostsController::class, 'show']);

// Edit Blog Post
Route::get('/news/{slug}/edit', [PostsController::class, 'edit']);

// Update Blog Post
Route::put('/news/{slug}', [PostsController::class, 'update']);

// Delete Blog Post
Route::delete('/news/{slug}/delete', [PostsController::class, 'destroy']);

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

// F1 Teams
Route::get('/f1/teams', [Formula1Controller::class, 'teams']);

// F1 drivers
Route::get('/f1/drivers', [Formula1Controller::class, 'drivers']);

// F1 Home
Route::get('/f1/live', [Formula1Controller::class, 'live']);

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
