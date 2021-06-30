<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
    Route::get('register-page','App\Http\Controllers\shopController@registerPage')->name('registerPage');
    Route::get('profile','App\Http\Controllers\shopController@profile')->name('profile-user');
    Route::get('profile-user','App\Http\Controllers\shopController@profile_ajax');
    Route::post('profile-user-update','App\Http\Controllers\shopController@user_update')->name('profile-user-update');
    Route::post('profile-staff-update','App\Http\Controllers\shopController@staff_update')->name('profile-staff-update');
    Route::get('category/{type}','App\Http\Controllers\shopController@category')->name('category');
    Route::get('category-type/{type}/{id}','App\Http\Controllers\shopController@category_type')->name('category');
    Route::get('category-render/{number}','App\Http\Controllers\shopController@category_render')->name('category-render');

    Route::get('add-to-cart/{id}','App\Http\Controllers\CartController@AddCart')->name('add-cart');
    Route::get('/single/add-to-cart/{id}','App\Http\Controllers\CartController@AddCart')->name('add-cart-single');
    Route::get('remove-item-cart/{id}','App\Http\Controllers\CartController@DeleteItemCart')->name('remove-cart');
    Route::get('/single/remove-item-cart/{id}','App\Http\Controllers\CartController@DeleteItemCart')->name('remove-cart-single');
    Route::get('remove-Listitem-cart/{id}','App\Http\Controllers\CartController@DeleteListItemCart')->name('remove-list-cart');
    Route::get('update-Listitem-cart/{id}/{quanty}','App\Http\Controllers\CartController@UpdateListItemCart')->name('update-list-cart');
    Route::get('shopping-cart',function(){
        return view('shop.shopping-cart');
    });
    Route::get('shopping-cart-clear','App\Http\Controllers\CartController@clearAll')->name('clear-cart');
    Route::get('list-cart',function(){
        return view('shop.ListCart');
    });
    Route::get('single/{id}','App\Http\Controllers\shopController@single')->name('single');

    Route::get('cart',function(){
        return view('shop.cart');
    })->name('cart');
    Route::get('about-us',function(){
        return view('shop.about-us');
    })->name('about-us');
    //Invoice
    Route::get('invoice','App\Http\Controllers\shopController@invoice')->name('invoice-shop');
    Route::post('invoice-store','App\Http\Controllers\shopController@invoice_store')->name('invoice-store');
    Route::get('invoice-user',function(){
        return view('shop.invoice.invoice-ajax');
    });
    Route::get('checkout','App\Http\Controllers\shopController@checkout')->name('checkout')->middleware('checkCostumer');

    Route::get('confirmation',function(){
        return view('shop.confirmation');
    })->name('confirmation');
    //comment
    Route::get('comment-store/{id}','App\Http\Controllers\shopController@comment_store')->name('comment-store');
    Route::get('comment-page/{id}','App\Http\Controllers\shopController@comment_page');
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
    Route::get('/permission', 'App\Http\Controllers\RoleController@assignRole')->name('permission');
    Route::post('/permission-store', 'App\Http\Controllers\RoleController@assignRole_store')->name('permission_store');
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
    Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->name('customer-index');
    Route::post('/staffs-update', 'App\Http\Controllers\StaffController@update')->name('staff-update');
    Route::Delete('/staffs-destroy/{id}', 'App\Http\Controllers\StaffController@destroy')->name('staffs.destroy');
    //Product
    Route::resource('/product', App\Http\Controllers\productController::class);
    Route::post('/product-update/{id}','App\Http\Controllers\productController@update')->name('product-update');
    //Product Image
    Route::get('/product-image', 'App\Http\Controllers\productImageController@index')->name('product-img');
    Route::post('/product-image-store', 'App\Http\Controllers\productImageController@store')->name('product-img-store');
    //Product Detail
    Route::get('/product-detail', 'App\Http\Controllers\productController@productDetail')->name('product-detail');
    Route::get('/product-detail-create', 'App\Http\Controllers\productController@productDetailCreate')->name('product-detail-create');
    Route::post('/product-detail-store', 'App\Http\Controllers\productController@productDetailStore')->name('product-detail-store');
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
