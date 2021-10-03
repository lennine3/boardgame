<?php

use Illuminate\Http\Request;
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
//Shop
Route::prefix('/')->group(function () {
    Route::get('/', 'App\Http\Controllers\shopController@index')->name('home');
    Route::get('login-page', 'App\Http\Controllers\shopController@loginPage')->name('loginPage');
    Route::get('register-page', 'App\Http\Controllers\shopController@registerPage')->name('registerPage');
    Route::get('profile', 'App\Http\Controllers\shopController@profile')->name('profile-user');
    Route::get('profile-user', 'App\Http\Controllers\shopController@profile_ajax');
    Route::post('profile-user-update', 'App\Http\Controllers\shopController@user_update')->name('profile-user-update');
    Route::post('profile-staff-update', 'App\Http\Controllers\shopController@staff_update')->name('profile-staff-update');
    /*Category*/
    Route::get('category/{type}', 'App\Http\Controllers\shopController@category')->name('category');
    Route::get('category-type/{type}/{id}', 'App\Http\Controllers\shopController@category_type')->name('category');
    Route::get('category-render/{number}', 'App\Http\Controllers\shopController@category_render')->name('category-render');
    Route::get('category-price-render/{price1}/{price2}', 'App\Http\Controllers\shopController@categoryPrice_render');

    Route::get('add-to-cart/{id}', 'App\Http\Controllers\CartController@AddCart')->name('add-cart');
    Route::get('/single/add-to-cart/{id}', 'App\Http\Controllers\CartController@AddCart')->name('add-cart-single');
    Route::get('category/add-to-cart/{id}', 'App\Http\Controllers\CartController@AddCart');
    Route::get('category-type/1/add-to-cart/{id}', 'App\Http\Controllers\CartController@AddCart');
    Route::get('category-type/2/add-to-cart/{id}', 'App\Http\Controllers\CartController@AddCart');
    Route::get('category-type/3/add-to-cart/{id}', 'App\Http\Controllers\CartController@AddCart');
    Route::get('remove-item-cart/{id}', 'App\Http\Controllers\CartController@DeleteItemCart')->name('remove-cart');
    Route::get('/single/remove-item-cart/{id}', 'App\Http\Controllers\CartController@DeleteItemCart')->name('remove-cart-single');
    Route::get('remove-Listitem-cart/{id}', 'App\Http\Controllers\CartController@DeleteListItemCart')->name('remove-list-cart');
    Route::get('update-Listitem-cart/{id}/{quanty}', 'App\Http\Controllers\CartController@UpdateListItemCart')->name('update-list-cart');
    Route::get('shopping-cart', function () {
        return view('shop.shopping-cart');
    });
    Route::get('shopping-cart-clear', 'App\Http\Controllers\CartController@clearAll')->name('clear-cart');
    Route::get('list-cart', function () {
        return view('shop.ListCart');
    });
    Route::get('single/{id}', 'App\Http\Controllers\shopController@single')->name('single');

    /* Favorite */
    Route::get('favorite', 'App\Http\Controllers\FavoriteController@index')->name('favorite');
    Route::get('add-favorite/{product}', 'App\Http\Controllers\FavoriteController@store');
    Route::get('remove-favorite/{product}', 'App\Http\Controllers\FavoriteController@destroy');

    /* Search */
    Route::get('search', 'App\Http\Controllers\SearchController@search')->name('search');

    Route::get('cart', 'App\Http\Controllers\shopController@cartPage')->name('cart');
    Route::get('about-us', 'App\Http\Controllers\shopController@aboutPage')->name('about-us');
    //Invoice
    Route::get('invoice', 'App\Http\Controllers\shopController@invoice')->name('invoice-shop')->middleware('checkCostumer');
    Route::get('invoice-keep-order', 'App\Http\Controllers\shopController@keepProduct')->middleware('checkCostumer');
    Route::post('invoice-keep-store', 'App\Http\Controllers\shopController@keepProductStore');
    Route::get('invoice-detail/{invoice}', 'App\Http\Controllers\shopController@invoiceDetail')->name('invoice-detail');
    Route::post('invoice-store', 'App\Http\Controllers\shopController@invoice_store')->name('invoice-store');
    Route::get('invoice-user', function () {
        return view('shop.invoice.invoice-ajax');
    });
    Route::get('checkout', 'App\Http\Controllers\shopController@checkout')->name('checkout')->middleware('checkCostumer');

    Route::get('confirmation', 'App\Http\Controllers\shopController@confirmation')->name('confirmation');
    //comment
    Route::get('comment-store/{id}', 'App\Http\Controllers\shopController@comment_store')->name('comment-store');
    Route::get('comment-page/{id}', 'App\Http\Controllers\shopController@comment_page');
    Route::get('notification-status/{id}', 'App\Http\Controllers\shopController@notificationStatus');
    Route::get('notification-all-status', 'App\Http\Controllers\shopController@notificationAllStatus');
});

/*Admin*/
Route::prefix('/admin')->group(function () {
    /* Route::get('/', function () {
        return view('admin/index');
    })->name('admin'); */
    //index dashboard
    Route::get('/', 'App\Http\Controllers\adminController@index')->name('admin');

    Route::get('mail-test','App\Http\Controllers\adminController@mailTest');

    Route::post('to-do-store','App\Http\Controllers\adminController@saveTodo');
    Route::get('to-do-check/{id}','App\Http\Controllers\adminController@checkDone');
    Route::get('to-do-page','App\Http\Controllers\adminController@listUserPage');
    //User
    Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
    Route::get('/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('editUser');
    Route::PUT('/edit-user/{id}', 'App\Http\Controllers\UserController@update')->name('updateUser');
    Route::get('/user-lock/{id}', 'App\Http\Controllers\UserController@lockUser');
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
    Route::post('/staffs-update', 'App\Http\Controllers\StaffController@update')->name('staff-update');
    Route::Delete('/staffs-destroy/{id}', 'App\Http\Controllers\StaffController@destroy')->name('staffs.destroy');
    //Customer
    Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->name('customer-index');
    Route::get('/customer-edit/{id}', 'App\Http\Controllers\CustomerController@customerEdit');
    Route::post('/customer-update', 'App\Http\Controllers\CustomerController@update');
    //Product
    Route::resource('/product', App\Http\Controllers\productController::class);
    Route::post('/product-update/{id}', 'App\Http\Controllers\productController@update')->name('product-update');
    //Product Image
    Route::get('/product-image', 'App\Http\Controllers\productImageController@index')->name('product-img');
    Route::post('/product-image-store', 'App\Http\Controllers\productImageController@store')->name('product-img-store');
    Route::get('product-image-delete/{id}','App\Http\Controllers\productImageController@deleteImg');
    Route::get('product-image-edit/{id}','App\Http\Controllers\productImageController@editImg');
    //Product Detail
    Route::get('/product-detail', 'App\Http\Controllers\productController@productDetail')->name('product-detail');
    Route::get('/product-detail-create', 'App\Http\Controllers\productController@productDetailCreate')->name('product-detail-create');
    Route::post('/product-detail-store', 'App\Http\Controllers\productController@productDetailStore')->name('product-detail-store');
    //invoice
    Route::get('/invoice', 'App\Http\Controllers\adminController@invoicePage')->name('invoice');
    Route::get('/invoice-lock/{id}', 'App\Http\Controllers\adminController@invoiceLock');
    Route::get('/invoice-order-status/{id}', 'App\Http\Controllers\adminController@invoiceChange');
    //order
    Route::get('/order', function () {
        return view('admin.order.order');
    })->name('order');
    Route::get('/order-detail', function () {
        return view('admin.order.orderDetail');
    })->name('order-detail');
    //promotion
    Route::get('/promotion', 'App\Http\Controllers\promotionController@index')->name('promotion-index');
    Route::post('/promotion-store', 'App\Http\Controllers\promotionController@store')->name('promotion-store');
    Route::get('/turtorial', 'App\Http\Controllers\turtorialController@index')->name('turtorial');
    Route::get('/turtorial-create', 'App\Http\Controllers\turtorialController@create')->name('turtorial-create');
    Route::post('/turtorial-store', 'App\Http\Controllers\turtorialController@store')->name('turtorial-store');
    Route::get('/productContent-destroy/{id}', 'App\Http\Controllers\turtorialController@destroy');
    Route::post('/img-upload', 'App\Http\Controllers\turtorialController@upload')->name('Img-Upload');



});

Route::post('/user-create', 'App\Http\Controllers\Auth\RegisterController@create')->name('create');

Route::post('/user-login', 'App\Http\Controllers\Auth\LoginController@checkLogin')->name('UserLogin');
Route::get('/test', 'App\Http\Controllers\Auth\LoginController@test')->name('test');
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
