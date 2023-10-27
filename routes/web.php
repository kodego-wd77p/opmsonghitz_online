<?php

use App\Http\Controllers\BandController;
use App\Http\Controllers\SongController;
use App\Models\Band;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function(){
    return view('auth.login');
});

//SongsController routes
Route::get('/songs', [SongController::class, 'index'])->name('song.index');
Route::get('/songs/create', [SongController::class, 'create'])->name('song.create');

Route::get('/songs/{id}', [SongController::class, 'show'])->name('song.show');
Route::get('/songs/{id}/edit', [SongController::class, 'edit'])->name('song.edit');
Route::get('/songs/{id}/play', [SongController::class, 'play'])->name('song.play');

Route::post('/songs', [SongController::class, 'store'])->name('song.store');
Route::put('/songs/{id}/edit', [SongController::class, 'update'])->name('song.update');
Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('song.destroy');

//search route
Route::post('/songs/search/', [SongController::class, 'search'])->name('song.search');















// BandController routes
Route::get('/bands', [BandController::class, 'index']);
Route::get('/band/{id}', [BandController::class, 'show']);
