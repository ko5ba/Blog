<?php

use App\Http\Controllers\Admin\Category\IndexController;
use App\Http\Controllers\Main\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class);
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', IndexController::class);
    });
});
