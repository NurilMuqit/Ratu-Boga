<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', function() {
    return view('home');
})->name('home');

<<<<<<< HEAD
Route::get('/menu', function() {
    return view('menu');
})->name('menu');
=======
Route::get('/redirect',[HomeController::class,'redirect']);
>>>>>>> 2cb5fc4f12ba3071167f12da3d77bc3246fbf133
