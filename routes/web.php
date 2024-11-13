<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\FileUploadController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/login', 'login')->name('login.page');
    Route::get('/help', 'help')->name('help');
    Route::get('/inbox', 'inbox')->name('inbox');
    Route::get('/myaccount', 'myaccount')->name('myaccount');
    Route::get('/orders', 'orders')->name('orders');
    Route::get('/save', 'save')->name('save');
    Route::get('/voucher', 'voucher')->name('voucher');
});

Route::get('/formupload', [FileUploadController::class, 'create'])->name('file.upload.form');
Route::post('/formupload', [FileUploadController::class, 'store'])->name('file.upload.store');
Route::post('/product/upload', [FileUploadController::class, 'upload'])->name('product.upload');
Route::get('/', [FileUploadController::class, 'showDisplayImage'])->name('index');
Route::get('/index', [FileUploadController::class, 'showDisplayImage'])->name('index')->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.page');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/loginform', [LoginController::class, 'showLoginForm'])->name('loginform');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

