<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/markets', [HomeController::class, 'ECommerce'])->name('E-Commerce');
    // ***pages
    Route::get('/static-home', function () {
        return view('E-Commerce.pages.index');
    })->name('static-home');

    Route::get('/about', function () {
        return view('E-Commerce.pages.about');
    })->name('about');

    Route::get('/news', function () {
        return view('E-Commerce.pages.news');
    })->name('news');

    Route::get('/single-news', function () {
        return view('E-Commerce.pages.single-news');
    })->name('single-news');

    Route::get('/contact', function () {
        return view('E-Commerce.pages.contact');
    })->name('contact');

    Route::get('/shop', function () {
        return view('E-Commerce.pages.shop');
    })->name('shop');

    Route::get('/single-product', function () {
        return view('E-Commerce.pages.single-product');
    })->name('single-product');

    Route::get('/cart', function () {
        return view('E-Commerce.pages.cart');
    })->name('cart');

    Route::get('/check-out', function () {
        return view('E-Commerce.pages.checkout');
    })->name('check-out');

    Route::get('/404-page', function () {
        return view('E-Commerce.pages.404-page');
    })->name('404-page');

    Route::resource('category',CategoryController::class);

});