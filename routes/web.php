<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/table', function () {
    return view('table', [
        "title" => "Table"
    ]);
});

Route::get('/form', function () {
    return view('form', [
        "title" => "FORM"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",

    ]);
});

Route::middleware(['auth', 'can:accessGame'])->group(function () {
    Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
    Route::post('/games', [GameController::class, 'store'])->name('games.store');
    Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
    Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
    });
    

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


