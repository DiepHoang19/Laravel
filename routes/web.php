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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/create', [HomeController::class, 'create'])->name('product.create');
Route::post('/products', [HomeController::class, 'store'])->name('product.store');
Route::get('/products/{id}/edit', [HomeController::class, 'edit'])->name('product.edit');
Route::post('/products/{id}/update', [HomeController::class, 'update'])->name('product.update');
Route::get('/products/{id}/trash', [HomeController::class, 'trash'])->name('product.trash');
