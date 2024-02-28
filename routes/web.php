<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function() {
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('checkout', [CheckoutController::class, 'checkout'])->name('checkout.post');
});
Route::prefix('cart')->group(function() {
    Route::get('', [CartController::class, 'index'])->name('cart');
    Route::get('add/{productId}', [CartController::class, 'add'])->name('cart.add');
    Route::get('remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
});

Route::prefix('user')->group(function() {
    Route::get('login', [UserController::class, 'login'])->name('user.login');
    Route::post('checkLogin', [UserController::class, 'checkLogin'])->name('user.check.login');
    Route::get('register', [UserController::class, 'register'])->name('user.register');
    Route::post('postRegister', [UserController::class, 'postRegister'])->name('user.post.register');
    Route::prefix('/')->middleware('auth')->group(function() {
        Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
    });
});


Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('checkLogin', [AdminController::class, 'checkLogin'])->name('admin.check.login');

    Route::prefix('/')->middleware('admin.auth')->group(function() {
        Route::get('', [AdminController::class, 'index'])->name('admin');
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');


        Route::prefix('products')->group(function() {
            Route::get('', [ProductController::class, 'index'])->name('admin.product');
            Route::get('create', [ProductController::class, 'create'])->name('admin.product.create');
            Route::post('store', [ProductController::class, 'store'])->name('admin.product.store');

            Route::get('delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
        });

        Route::prefix('categories')->group(function() {
            Route::get('', [CategoryController::class, 'index'])->name('admin.category');
            Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
            Route::post('store', [CategoryController::class, 'store'])->name('admin.category.store');
            Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        });

        Route::prefix('orders')->group(function() {
            Route::get('', [OrderController::class, 'index'])->name('admin.order');
            // Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
            // Route::post('store', [CategoryController::class, 'store'])->name('admin.category.store');
            // Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        });
    });
});

