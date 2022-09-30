<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\Admin;
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
//frontend
Route::get('/',[Front\HomeController::class, 'index']);
Route::get('/search',[Front\SearchController::class, 'getsearch']);
Route::get('/service',[Front\ServiceController::class, 'getservice']);

Route::get('/shop/product/{id}', [Front\ShopController::class, 'show']);

Route::get('/shop/overall', [Front\OverallController::class, 'overall']);

Route::prefix('cart')->group(function (){
    Route::get('add/{id}', [Front\CartController::class,'add']);
    Route::get('/',[Front\CartController::class,'index']);
    Route::get('delete/{rowId}',[Front\CartController::class,'delete']);
    Route::get('/destroy',[Front\CartController::class,'destroy']);
});

Route::prefix('checkout')->group(function (){
    Route::get('/',[Front\CheckOutController::class,'index']);
    Route::post('/',[Front\CheckOutController::class,'addOrder']);

});

//Coupon
Route::post('/check-coupon',[Front\CartController::class,'check_coupon']);
Route::get('/check-coupon',[Front\CheckOutController::class,'check_coupon']);


//backend
Route::get('/admin/add-coupon', [Admin\CouponController::class,'insert_coupon']);
Route::get('/admin/list-coupon', [Admin\CouponController::class,'list_coupon']);
Route::get('/admin/delete-coupon/{coupon_id}', [Admin\CouponController::class,'delete_coupon']);
Route::post('/admin/add-coupon-code', [Admin\CouponController::class,'insert_coupon_code']);


Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function (){
    Route::get('/',[Admin\LoginController::class, 'getLogin']);
    Route::post('/',[Admin\LoginController::class, 'postLogin']);
});
Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function (){
    Route::get('/home',[Admin\HomeController::class, 'getHome']);
    Route::group(['prefix'=>'category'],function (){
        Route::get('/',[Admin\CategoryController::class, 'getCate']);
        Route::post('/',[Admin\CategoryController::class, 'postCate']);

        Route::get('edit/{id}',[Admin\CategoryController::class, 'getEditCate']);
        Route::post('edit/{id}',[Admin\CategoryController::class, 'postEditCate']);

        Route::get('delete/{id}',[Admin\CategoryController::class, 'getDeleteCate']);
    });
    Route::group(['prefix'=>'product'],function (){
        Route::get('/',[Admin\ProductController::class, 'getProduct']);
        Route::get('add',[Admin\ProductController::class, 'getAddProduct']);
        Route::post('add',[Admin\ProductController::class, 'postAddProduct']);

        Route::get('edit/{id}',[Admin\ProductController::class, 'getEditProduct']);
        Route::post('edit/{id}',[Admin\ProductController::class, 'postEditProduct']);

        Route::get('delete/{id}',[Admin\ProductController::class, 'getDeleteProduct']);
    });
    //order
    Route::group(['prefix'=>'order'],function () {
        Route::get('/', [Admin\OrderController::class, 'getOrder']);
        Route::get('delete/{order_id}',[Admin\OrderController::class, 'getDeleteOrder']);
    });
    //user
    Route::group(['prefix'=>'user'],function (){
        Route::get('/',[Admin\UserController::class, 'getUser']);
        Route::get('add',[Admin\UserController::class, 'getAddUser']);
        Route::post('add',[Admin\UserController::class, 'postAddUser']);

        Route::get('edit/{id}',[Admin\UserController::class, 'getEditUser']);
        Route::post('edit/{id}',[Admin\UserController::class, 'postEditUser']);

        Route::get('delete/{id}',[Admin\UserController::class, 'getDeleteUser']);
    });
});
Route::get('/logout',[Admin\HomeController::class, 'getLogout']);

