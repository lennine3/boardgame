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
//Shop
Route::prefix('/')->group(function () {
    Route::get('/','App\Http\Controllers\shopController@index')->name('home');
    Route::get('login-page','App\Http\Controllers\shopController@loginPage')->name('loginPage');
    Route::get('category','App\Http\Controllers\shopController@category')->name('category');
    Route::get('add-to-cart/{id}','App\Http\Controllers\CartController@AddCart')->name('add-cart');
    Route::get('remove-item-cart/{id}','App\Http\Controllers\CartController@DeleteItemCart')->name('remove-cart');
    Route::get('remove-Listitem-cart/{id}','App\Http\Controllers\CartController@DeleteListItemCart')->name('remove-list-cart');
    Route::get('update-Listitem-cart/{id}/{quanty}','App\Http\Controllers\CartController@UpdateListItemCart')->name('update-list-cart');
    Route::get('shopping-cart',function(){
        return view('shop.shopping-cart');
    });
    Route::get('list-cart',function(){
        return view('shop.ListCart');
    });

    Route::get('single',function(){
        return view('shop.single');
    })->name('single');
    
    Route::get('cart',function(){
        return view('shop.cart');
    })->name('cart');
    Route::get('about-us',function(){
        return view('shop.about-us');
    })->name('about-us');
    Route::get('invoice',function(){
        return view('shop.invoice');
    })->name('invoice');
    Route::get('checkout',function(){
        return view('shop.checkout');
    })->name('checkout')->middleware('checkLogin');
    Route::get('confirmation',function(){
        return view('shop.confirmation');
    })->name('confirmation');

});

/*Admin*/
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/index');
    })->name('admin');
    //User
    Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
    Route::get('/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('editUser');
    Route::PUT('/edit-user/{id}', 'App\Http\Controllers\UserController@update')->name('updateUser');
    //role
    Route::get('/role', 'App\Http\Controllers\RoleController@index')->name('role');
    //role-store
    Route::post('/role-store', 'App\Http\Controllers\RoleController@roleStore')->name('roleStore');
    //profile
    Route::get('/profile', function () {
        return view('admin/user/profile');
    })->name('profile');
    //Permission
    Route::get('/permission', function () {
        return view('admin/user/permission');
    })->name('permission');
    //supplier
    Route::resource('/supplier', App\Http\Controllers\supplierController::class);
    //Product Type
    Route::get('/productType', 'App\Http\Controllers\productTypeController@index')->name('productType-index');
    Route::post('/productType-store', 'App\Http\Controllers\productTypeController@store')->name('productType-store');
    Route::get('/productType-edit/{id}', 'App\Http\Controllers\productTypeController@edit')->name('productType-edit');
    Route::post('/productType-update/{id}', 'App\Http\Controllers\productTypeController@update')->name('productType-update');
    Route::delete('/productType-delete/{id}', 'App\Http\Controllers\productTypeController@destroy')->name('productType-destroy');
    //Staff
    Route::resource('/staffs', App\Http\Controllers\StaffController::class);
    Route::get('/staffs', 'App\Http\Controllers\StaffController@index')->name('staff-index');
    Route::post('/staffs-update', 'App\Http\Controllers\StaffController@update')->name('staff-update');
    Route::Delete('/staffs-destroy/{id}', 'App\Http\Controllers\StaffController@destroy')->name('staffs.destroy');
    //Product
    Route::resource('/product', App\Http\Controllers\productController::class);
    Route::post('/product-update/{id}','App\Http\Controllers\productController@update')->name('product-update');
    //Product Image
    Route::get('/product-image', 'App\Http\Controllers\productImageController@index')->name('product-img');
    Route::post('/product-image-store', 'App\Http\Controllers\productImageController@store')->name('product-img-store');
    //invoice
    Route::get('/invoice', function () {
        return view('admin.invoice.invoice');
    })->name('invoice');
    //order
    Route::get('/order', function () {
        return view('admin.order.order');
    })->name('order');
    Route::get('/order-detail', function () {
        return view('admin.order.orderDetail');
    })->name('order-detail');
    //promotion
    Route::get('promotion', function () {
        return view('admin/promotion/promotion');
    })->name('promotion');
});

Route::post('/user-create', 'App\Http\Controllers\Auth\RegisterController@create')->name('create');
Route::post('/user-login', 'App\Http\Controllers\Auth\LoginController@checkLogin')->name('UserLogin');
Route::get('/test', 'App\Http\Controllers\Auth\LoginController@test')->name('test');
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
