<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\MainControleer::class, 'index'])->name('admin');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contact');

Route::get('/', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/catalog', [App\Http\Controllers\ProductController::class,'index']);

Route::get('/addtocart/{id}', [App\Http\Controllers\ProductController::class,'addtocart']);

Route::get('/cart', [App\Http\Controllers\ProductController::class,'cart']);

Route::get('/cartadd/{id}', [App\Http\Controllers\CartController::class,'addbtn']);

Route::get('/cartrem/{id}', [App\Http\Controllers\CartController::class,'removebtn']);

Route::get('/cartall/{id}', [App\Http\Controllers\CartController::class,'removeall']);

Route::get('/filter', [App\Http\Controllers\ProductController::class,'filter']);

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class,'getProduct']);

Route::post('/admin/create_category', [App\Http\Controllers\AdminController::class, 'create_category'])->name('create_cat');

Route::post('/admin/create_product', [App\Http\Controllers\AdminController::class, 'create_product'])->name('create_prod');
