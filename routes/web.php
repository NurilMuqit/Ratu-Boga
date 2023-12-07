<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuDisplayController;
use App\Http\Controllers\MenusController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DashboardController;



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
    Route::get('/admin/dashboard', [DashboardController::class, 'show'])->name('admin.dashboard');

    Route::get('/admin/products', [MenusController::class, 'shows'])->name('admin.products');

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
    Route::get('admin/products/category', [CategoriesController::class, 'category'])->name('admin.category');
    Route::post('/store', [CategoriesController::class, 'store']);
    Route::get('/destroy/{id}', [CategoriesController::class, 'destroy']);

    Route::post('/add_menu', [MenusController::class, 'add_menu']);
    Route::get('/delete/{id}', [MenusController::class, 'delete']);

    Route::get('/edit_menu/{id}', [MenusController::class, 'edit_menu']);
    Route::post('edit_menu_confirm/{id}', [MenusController::class, 'edit_menu_confirm']);

    Route::get('/edit_category/{id}', [CategoriesController::class, 'edit_category']);
    Route::post('/edit_category_confirm/{id}', [CategoriesController::class, 'edit_category_confirm']);
});

// General Routes
Route::get('/daftar-menu', [MenuDisplayController::class, 'menuDisplay'])->name('daftar-menu');
Route::get('/menu-detail/{id}', [MenuDisplayController::class, 'menuDetail'])->name('menuDetail');
Route::get('/search', [MenuDisplayController::class, 'search'])->name('search');
Route::post('/add-to-cart', [MenuDisplayController::class, 'addToCart'])->name('addToCart');
Route::get('/cart-list', [MenuDisplayController::class, 'cartList'])->middleware('auth')->name('cart-list');
Route::get('/remove-cart/{id}', [MenuDisplayController::class, 'removeCart'])->name('remove-cart');


Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
