<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


// LOGIN ISLEMLERI
Route::get('giris',[AuthController::class,'login_page'])->name('login_page');

Route::post('giris',[AuthController::class,'login'])->name('login');

Route::get('logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');

// end login

Route::get('home',[PostController::class, 'index'])->name('home');


Route::get('post/{post}',[PostController::class, 'view_post'])->name('post_view');


Route::get('categories/{id}',[PostController::class,'categories'])->name('categories');


//admins route
Route::get('admin_home',[PostController::class, 'index'])->name('admin_home');

Route::get('update_post/{post}',[PostController::class, 'edit'])->name('update_post')->middleware('auth');
Route::put('update_post/{post}',[PostController::class, 'update'])->name('update')->middleware('auth');


Route::get('create_post',[PostController::class, 'create'])->name('create')->middleware('auth');
Route::post('create_post',[PostController::class, 'store'])->name('create_post')->middleware('auth');


Route::Delete('delete_post/{post}',[PostController::class,'destroy'])->name('destroy')->middleware('auth');

Route::get('about',[PostController::class,'about'])->name('about');

    