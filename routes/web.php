<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuDisplayController;
use App\Http\Controllers\MenusController;
use App\Http\Middleware\AdminMiddleware;

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

// route only for Admin
Route::middleware(['auth:sanctum', 'verified', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/products', [MenusController::class,'shows'])->name('admin.products');
    
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

Route::get('/daftar-menu', [MenuDisplayController::class, 'menuDisplay'])->name('daftar-menu');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

Route::get('/category', [CategoriesController::class, 'category']);
Route::post('/store', [CategoriesController::class, 'store']);
Route::get('/destroy/{id}', [CategoriesController::class, 'destroy']);

Route::get('/menus', [MenusController::class,'menus']);
Route::post('/add_menu', [MenusController::class,'add_menu']);