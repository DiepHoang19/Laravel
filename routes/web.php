<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadImageController;

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
Route::get('/upload', [UploadImageController::class, 'index'])->name('upload.image');
Route::post('/save', [UploadImageController::class, 'save'])->name('upload.save');
Route::prefix('products')->controller(ProductController::class)->name('product.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');
    Route::get('/{id}/trash', 'trash')->name('trash');
});

Route::prefix('accounts')->controller(AuthController::class)->name('account.')->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/post-login',  'postLogin')->name('postLogin');
    Route::get('/registration',  'registration')->name('register');
    Route::post('/post-registration',  'postRegistration')->name('postRegistration');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/profile', 'profile')->name('profile');
});

Route::prefix('categories')->controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/{id}/update', 'update')->name('update');
    Route::get('/{id}/trash', 'trash')->name('trash');
    Route::get('/{id}/edit', 'edit')->name('edit');
});
