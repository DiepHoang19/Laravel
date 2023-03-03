<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
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

    Route::prefix('/posts')->controller(PostController::class)->name('post.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/trash/{id}', 'trash')->name('trash');
        Route::post('/update/{id}', 'update')->name('update');
    });

    Route::prefix('/orders')->controller(OrderController::class)->name('order.')->group(function () {
        Route::get('/', 'index')->name('index');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/post-login',  'postLogin')->name('postLogin');
    Route::get('/registration',  'registration')->name('registration');
    Route::post('/post-registration',  'postRegistration')->name('postRegistration');
    Route::get('/verify-account', 'verifyAccount')->name('verify_account');
});

Route::prefix('/')->controller(PageController::class)->name('page.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-detail/{id}', 'blogDetail')->name('blogDetail');


    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');

    Route::get('/page-success', 'pageSuccess')->name('pageSuccess');
});

Route::prefix('/')->controller(AccountController::class)->name('authen.')->group(function () {
    Route::get('/auth-register', 'register')->name('register');
    Route::post('/post-register', 'postRegister')->name('postRegister');

    Route::get('/auth-login', 'login')->name('login');
    Route::post('/post-login-auth', 'postLoginAuth')->name('postLoginAuth');

    Route::get('/auth-logout', 'authLogout')->name('authLogout');
    Route::get('/auth-manager', 'manager')->name('manager');
});

Route::prefix('/')->controller(CartController::class)->name('store.')->group(function () {
    Route::get('/shopping-cart', 'shoppingCart')->name('shoppingCart');

    Route::get('/checkout', 'checkout')->name('checkout');
    Route::post('/checkout', 'postCheckout')->name('postCheckout');

    Route::get('/shop-wishlist', 'wishlist')->name('wishlist');
    Route::post('/add-to-cart', 'addToCart')->name('addToCart');
    Route::get('/remove-cart-item/{id}', 'removeCartItem')->name('removeCartItem');
    Route::post('/update-cart', 'updateCart')->name('updateCart');

    Route::get('/product-detail/{id}', 'detail')->name('detail');
});
