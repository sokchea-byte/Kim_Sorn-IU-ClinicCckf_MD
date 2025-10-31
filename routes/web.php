<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrondController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(FrondController::class)->group(function () {
    Route::get('/', 'index')->name('frond.index');
    Route::get('/category/{id}', 'category')->name('category.show');
    Route::get('/subcategory/{id}', 'subcategory')->name('subcategory.show');
    Route::get('/detail/{id}', 'detail')->name('detail.show');
    Route::get('/post', 'post')->name('post.show');
});
// 🔹 Backend routes (require login)
Route::middleware('auth')->group(function () {
// Category
    Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::get('/', 'index')->name('category.index');
        Route::get('/create', 'create')->name('category.create');
        Route::post('/store', 'store')->name('category.store');
        Route::get('/edit/{id}', 'edit')->name('category.edit');
        Route::put('/update/{id}', 'update')->name('category.update');
        Route::delete('/delete/{id}', 'delete')->name('category.delete');
    });
     // SubCategory
    Route::controller(SubCategoryController::class)->prefix('subcategory')->group(function () {
        Route::get('/', 'index')->name('subcategory.index');
        Route::get('/create', 'create')->name('subcategory.create');
        Route::post('/store', 'store')->name('subcategory.store');
        Route::get('/edit/{id}', 'edit')->name('subcategory.edit');
        Route::put('/update/{id}', 'update')->name('subcategory.update');
        Route::delete('/delete/{id}', 'delete')->name('subcategory.delete');
    });
    Route::controller(PostController::class)->group(function () {
    Route::prefix('post')->group(function () {
        Route::get('/', 'index')->name('post.index');
        Route::get('/create', 'create')->name('post.create');
        Route::post('/store', 'store')->name('post.store');
        Route::get('/edit/{id}', 'edit')->name('post.edit');
        Route::post('/update/{id}', 'update')->name('post.update');
        Route::get('/delete/{id}', 'delete')->name('post.delete');
        //ajax get subcategory by category

Route::get('/get-subcategory/{id}', [PostController::class, 'getSubcategory'])->name('post.getSubcategory');

    });
   Route::controller(UserController::class)->group(function () {
       Route::prefix('user')->group(function () {
           Route::get('/', 'index')->name('user.index');
           Route::post('/store', 'store')->name('user.store');
           Route::put('/update/{id}', 'update')->name('user.update');
           Route::delete('/delete/{id}', 'delete')->name('user.delete');
           //profile
           Route::get('/user', 'profile')->name('user.profile');
           Route::post('/profile', 'profileUpdate')->name('user.profile.update');
       });
   });
});

});
