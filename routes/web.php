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
Route::get('/checkout',function(){
    return view('shop.checkout');
})->name('checkout');
Route::get('/checkout/confirmation',function(){
    return view('shop.confirmation');
})->name('confirmation');

/*Admin*/
Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');
Route::get('/admin/user', function () {
    return view('admin/user/user');
})->name('user');
Route::get('/admin/role', function () {
    return view('admin/user/role');
})->name('role');
Route::get('/admin/permission', function () {
    return view('admin/user/permission');
})->name('permission');
Route::get('/admin/supplier', function () {
    return view('admin/supplier/supplier');
})->name('supplier');
Route::get('/admin/productType', function () {
    return view('admin/product/productType');
})->name('productType');
Route::get('/admin/promotion', function () {
    return view('admin/promotion/promotion');
})->name('promotion');
