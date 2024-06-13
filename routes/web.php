<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ParfumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\Admin\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::controller(AuthenController::class)->group(function(){
    Route::get('/registration','registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user','registerUser')->name('register-user');
    Route::get('/login','login')->middleware('alreadyLoggedIn');
    Route::post('/login-user','loginUser')->name('login-user');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::get('/logout','logout');
});
// category
// Route::get('admin/categories/index', 'Admin\CategoryController@index')->name('admin.categories.index');

Route::prefix('admin')->group(function () {
    Route::get('categories/index', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    Route::get('categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('parfums/index', [ParfumController::class, 'index'])->name('admin.parfums.index');
    Route::get('parfums/create', [ParfumController::class, 'create'])->name('admin.parfums.create');
    Route::post('parfums', [ParfumController::class, 'store'])->name('admin.parfums.store');
    Route::get('parfums/{id}/edit', [ParfumController::class, 'edit'])->name('admin.parfums.edit');
    Route::put('parfums/{id}', [ParfumController::class, 'update'])->name('admin.parfums.update');
    Route::delete('parfums/{id}', [ParfumController::class, 'destroy'])->name('admin.parfums.destroy');
    Route::get('parfums/{id}', [ParfumController::class, 'show'])->name('admin.parfums.show');
    Route::get('promotions/index', [PromotionController::class, 'index'])->name('admin.promotion.index');
    Route::get('promotions/create', [PromotionController::class, 'create'])->name('admin.promotion.create');
    Route::post('promotions', [PromotionController::class, 'store'])->name('admin.promotion.store');
    Route::get('promotions/{id}/edit', [PromotionController::class, 'edit'])->name('admin.promotion.edit');
    Route::put('promotions/{id}', [PromotionController::class, 'update'])->name('admin.promotion.update');
    Route::delete('promotions/{id}', [PromotionController::class, 'destroy'])->name('admin.promotion.destroy');
    Route::get('promotions/{id}', [PromotionController::class, 'show'])->name('admin.promotion.show');
    Route::get('order/index',  [OrderController::class, 'index'])->name('admin.order.index');
     Route::get('order/{id}/show', [OrderController::class, 'show'])->name('admin.order.show');

});

// Route::get('User/index', 'UserController@index')->name('User.index');
Route::get('User/index', [UserController::class, 'index'])->name('User.index');



Route::prefix('front')->group(function () {
    Route::get('/includes/{id}/parfum', [FrontController::class, 'view'])->name('front.includes.parfum');
    Route::get('/includes/{id}/detailParfum', [FrontController::class,'detailParfums'])->name('front.includes.detailParfum');



});

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.store');
Route::delete('remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::patch('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');


// commande 
Route::get('/front/checkout', [checkoutController::class, 'checkout'])->name('front.includes.checkout');
Route::post('/front/checkout/store', [checkoutController::class, 'store'])->name('front.store.checkout');

//orderline admin

