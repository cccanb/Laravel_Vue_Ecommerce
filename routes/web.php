<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// })->name('home');

// Route::get('/category', function () {
//     return view('category');
// })->name('category');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

// Route::get('/product', function () {
//     return view('product');
// })->name('product');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '^((?!admin).)*$');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/new', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/new', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::patch('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/new', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::patch('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product', [ProductController::class, 'delete'])->name('product.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
