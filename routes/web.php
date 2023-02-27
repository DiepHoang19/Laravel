<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::prefix('admin')->middleware(['auth', 'verified.custom'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('index');
    });

    Route::prefix('products')->controller(ProductController::class)->name('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/update', 'update')->name('update');
        Route::get('/{id}/trash', 'trash')->name('trash');
    });

    Route::prefix('categories')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::post('/{id}/update', 'update')->name('update');
        Route::get('/{id}/trash', 'trash')->name('trash');
        Route::get('/{id}/edit', 'edit')->name('edit');
    });


    Route::prefix('accounts')->controller(AuthController::class)->name('account.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/store',  'store')->name('store');
        Route::post('/register',  'register')->name('register');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/update', 'update')->name('update');
        Route::get('/{id}/trash', 'trash')->name('trash');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/profile', 'profile')->name('profile');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/post-login',  'postLogin')->name('postLogin');
    Route::get('/registration',  'registration')->name('registration');
    Route::post('/post-registration',  'postRegistration')->name('postRegistration');
    Route::get('/verify-account', 'verifyAccount')->name('verify_account');
});

Route::prefix('/')->controller(ClientController::class)->name('client.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/shopping-card', 'shoppingcard')->name('shoppingcard');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/auth-login', 'login')->name('login');
    Route::get('/auth-register', 'register')->name('register');
    Route::get('/account-manager', 'account')->name('account');
    Route::get('/shop-cart', 'cart')->name('cart');
});
