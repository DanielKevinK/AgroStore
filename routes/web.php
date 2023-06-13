<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
Route::get('/',[userController::class, 'register'])->name("register");

Route::get('/about', function () {
    return view("main/about");
});

Route::get('/homepage', function () {
    return view("main/home");
});

Route::get('/cart', function () {
    return view("main/cart");
});

Route::get('/shop/beans', function () {
    return view("shop/beans/beans");
});

Route::get('/shop/bread', function () {
    return view("shop/bread/bread");
});

Route::get('/shop/fruits', function () {
    return view("shop/fruits/fruits");
});

Route::get('/shop/rice', function () {
    return view("shop/rice/rice");
});

Route::get('/shop/tea', function () {
    return view("shop/tea/tea");
});

Route::get('/shop/vegetables', function () {
    return view("shop/vegetables/vegetables");
});

Route::get('/shop/beans/product1', function () {
    return view("shop/beans/sproduct/product1");
});

