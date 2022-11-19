<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\searchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [PlaceController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/search', [SearchController::class, 'autoComplete'])->name('auto-complete');

Route::post('search', [searchController::class, 'show'])->name('search');

Route::resource('/report', ReportController::class);


Route::get('/{category:slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/{place}/{slug}', [PlaceController::class, 'show'])->name('place.show');

Route::resource('/review', ReviewController::class);



// Route::get('/search', [searchController::class, 'autoComplete'])->name('auto-complete');
