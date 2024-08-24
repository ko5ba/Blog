<?php

use App\Http\Controllers\Admin\Main\PostController as AdminPostController;
use App\Http\Controllers\Main\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);

Route::group(['prefix' => 'admin'], function(){
    Route::resource('/posts', AdminPostController::class);
});