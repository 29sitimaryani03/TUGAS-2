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

Route::get('/', function () {
    return view('frontview/welcome');
});

Route::get('/index', function () {
    return view('frontview/index');
});

Route::get('/cart', function () {
    return view('frontview/cart');
});

Route::get('/shop', function () {
    return view('frontview/shop');
});

Route::get('/login', function () {
    return view('frontview/login');
});

Route::get('/single', function () {
    return view('frontview/single');
});
