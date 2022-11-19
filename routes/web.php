<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
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

Route::resource('/review', ReviewController::class);

Route::resource('/report', ReportController::class);

Route::post('/like', [LikeController::class, 'store'])->name('like.store');

Route::get('/{category:slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/{place}/{slug}', [PlaceController::class, 'show'])->name('place.show');




// Route::get('/search', [searchController::class, 'autoComplete'])->name('auto-complete');
