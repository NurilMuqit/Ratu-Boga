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
    return view('home');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<<<<<<< HEAD
// route only for Admin
Route::middleware(['auth:sanctum', 'verified', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/products', function () {
        return view('admin.products');
    })->name('admin.products');
    Route::get('/admin/Orders', function () {
        return view('admin.Orders');
    })->name('admin.Orders');
    Route::get('/admin/Customers', function () {
        return view('admin.Customers');
    })->name('admin.Customers');
    Route::get('/admin/Finance', function () {
        return view('admin.Finance');
    })->name('admin.Finance');
    Route::get('/admin/Settings', function () {
        return view('admin.Settings');
    })->name('admin.Settings');
    Route::get('/admin/Profile', function () {
        return view('admin.Profile');
    })->name('admin.Profile');
});

// route for AllUser
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
=======
Route::get('/home', function() {
    return view('home');
})->name('home');
>>>>>>> f45015a2c934accfe0808118bfcffa0019a33379

Route::get('/menu', function() {
    return view('menu');
})->name('menu');

<<<<<<< HEAD
Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');
=======
Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::get('/redirect',[HomeController::class,'redirect']);

>>>>>>> f45015a2c934accfe0808118bfcffa0019a33379
