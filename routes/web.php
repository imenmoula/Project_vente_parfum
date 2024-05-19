<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ParfumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\PromotionController;
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

Route::get('/', function () {
    return view('welcome');
});


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

});

Route::get('User/index', 'UserController@index')->name('User.index');


