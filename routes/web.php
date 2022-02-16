<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('movies', MovieController::class);
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::get('/movies/edit/{movie}', [MovieController::class, 'edit']);
Route::put('/movies/{movie}', [MovieController::class, 'update']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
