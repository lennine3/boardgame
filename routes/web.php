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
    return view('index');
})->name('home');

Route::get('/single',function(){
    return view('shop.single');
})->name('single');
Route::get('/category',function(){
    return view('shop.category');
})->name('category');
Route::get('/cart',function(){
    return view('shop.cart');
})->name('cart');
Route::get('/about-us',function(){
    return view('shop.about-us');
})->name('about-us');
Route::get('/invoice',function(){
    return view('shop.invoice');
})->name('invoice');
Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');
Route::get('/admin/user', function () {
    return view('admin/user/user');
})->name('user');
Route::get('/checkout',function(){
    return view('shop.checkout');
})->name('checkout');
