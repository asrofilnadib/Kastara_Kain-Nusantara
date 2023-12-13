<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mail\MailController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ProductController;
use App\Mail\ContactMessage;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

Auth::routes();

Route::get('/', [HomeController::class, 'index'])
    ->name("home.index");
Route::get('/about', [HomeController::class, 'about'])
    ->name("home.about");
Route::get('/contact', [HomeController::class, 'contact'])
    ->name("home.contact");

Route::post('/contact/send', [MailController::class, 'sendMail'])
  ->name('contact.send');

Route::get('/products', [ProductController::class, 'index'])
    ->name("product.index");
Route::get('/products/{slug}', [ProductController::class, 'show'])
    ->name("product.show");

Route::get('/category', [CategoryController::class, 'index'])
    ->name("category.index");
Route::get('/category/{category:name}', [CategoryController::class, 'show'])
    ->name("category.show");

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::middleware('auth.guest')->group(function () {
    Route::get('/cart/delete', [CartController::class, 'delete'])
        ->name('cart.delete');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])
        ->name("cart.add");
    Route::post('/cart/update/{id}', [CartController::class, 'update'])
        ->name('cart.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', [CartController::class, 'purchase'])
        ->name("cart.purchase");
    Route::get('/my-account/orders', [MyAccountController::class, 'orders'])
        ->name("myaccount.orders");
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])
        ->name("admin.home.index");
    Route::get('/admin/products', [AdminProductController::class, 'index'])
        ->name("admin.product.index");
    Route::post('/admin/products/store', [AdminProductController::class, 'store'])
        ->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])
        ->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', [AdminProductController::class, 'update'])
        ->name("admin.product.update");
    Route::get('/admin/products/checkSlug', [AdminProductController::class, 'checkSlug'])
        ->name('admin.product.checkSlug');
});
