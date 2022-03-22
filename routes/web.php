<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/static/{page}', function ($page) {
  return Inertia::render("Static/$page");
}); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('property', PropertyController::class);
    Route::get('property-detail/{id}', [PropertyController::class , 'property_detail']);
    // Route::post('property/upload-images', [PropertyController::class , 'uploadImages']);

    //user Routes.
    Route::resource('user', UserController::class);
});


