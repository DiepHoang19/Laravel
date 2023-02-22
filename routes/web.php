<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::prefix('products')->controller(ProductController::class)->name('product.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');
    Route::get('/{id}/trash', 'trash')->name('trash');
});

Route::prefix('accounts')->controller(AuthController::class)->name('account.')->group(function () {
    // giao diện table account
    Route::get('/', 'index')->name('index');
    // end

    // giao diện đăng nhập và đăng nhập tài khoản
    Route::get('/login', 'login')->name('login');
    Route::post('/post-login',  'postLogin')->name('postLogin');
    // end

    // giao diện đăng ký tài khoản và đăng ký tài khoản
    Route::get('/registration',  'registration')->name('registration');
    Route::post('/post-registration',  'postRegistration')->name('postRegistration');
    // end

    // giao diện tạo mới tài khoản trong admin và tạo tài khoản trong admin
    Route::get('/store',  'store')->name('store');
    Route::post('/register',  'register')->name('register');
    // end

    // giao diện và chỉnh sửa thông tin tài khoản
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');
    //end

    // xóa tài khoản
    Route::get('/{id}/trash', 'trash')->name('trash');
    //end

    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');

    // giao diện profile
    Route::get('/profile', 'profile')->name('profile');
    //end
});

Route::prefix('categories')->controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/{id}/update', 'update')->name('update');
    Route::get('/{id}/trash', 'trash')->name('trash');
    Route::get('/{id}/edit', 'edit')->name('edit');
});
