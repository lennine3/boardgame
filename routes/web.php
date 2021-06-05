<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/admin/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('editUser');
Route::PUT('/admin/edit-user/{id}', 'App\Http\Controllers\UserController@update')->name('updateUser');

Route::get('/admin/role', 'App\Http\Controllers\RoleController@index')->name('role');
Route::post('/admin/role-store', 'App\Http\Controllers\RoleController@roleStore')->name('roleStore');

Route::get('/admin/profile', function () {
    return view('admin/user/profile');
})->name('profile');


Route::get('/admin/permission', function () {
    return view('admin/user/permission');
})->name('permission');

Route::resource('/admin/supplier', App\Http\Controllers\supplierController::class);
Route::get('/admin/productType', 'App\Http\Controllers\productTypeController@index')->name('productType-index');
Route::post('/admin/productType-store', 'App\Http\Controllers\productTypeController@store')->name('productType-store');
Route::get('/admin/productType-edit/{id}', 'App\Http\Controllers\productTypeController@edit')->name('productType-edit');
Route::post('/admin/productType-update/{id}', 'App\Http\Controllers\productTypeController@update')->name('productType-update');
Route::delete('/admin/productType-delete/{id}', 'App\Http\Controllers\productTypeController@destroy')->name('productType-destroy');

Route::resource('/admin/staffs', App\Http\Controllers\StaffController::class);
Route::get('/admin/staffs', 'App\Http\Controllers\StaffController@index')->name('staff-index');
Route::post('/admin/staffs-update', 'App\Http\Controllers\StaffController@update')->name('staff-update');
Route::Delete('/admin/staffs-destroy/{id}', 'App\Http\Controllers\StaffController@destroy')->name('staffs.destroy');

Route::resource('/admin/product', App\Http\Controllers\productController::class);
Route::post('/admin/product-update/{id}','App\Http\Controllers\productController@update')->name('product-update');


/* Route::get('/admin/product', function () {
    return view('admin.product.product');
})->name('product'); */

Route::get('/admin/product-image', function () {
    return view('admin.product.productImage');
})->name('product-img');

Route::get('/admin/invoice', function () {
    return view('admin.invoice.invoice');
})->name('invoice');

Route::get('/admin/order', function () {
    return view('admin.order.order');
})->name('order');
Route::get('/admin/order-detail', function () {
    return view('admin.order.orderDetail');
})->name('order-detail');

Route::get('/admin/promotion', function () {
    return view('admin/promotion/promotion');
})->name('promotion');

Route::post('/user-create', 'App\Http\Controllers\Auth\RegisterController@create')->name('create');
Route::post('/user-login', 'App\Http\Controllers\Auth\LoginController@checkLogin')->name('UserLogin');
Route::get('/test', 'App\Http\Controllers\Auth\LoginController@test')->name('test');
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
