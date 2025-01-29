<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\admin\dashboardcontroller;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\CompanyInfoController;


Route::get('/', function () {
    return view('welcome');
});
// frontend routes
Route::get('frontend/home',[HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// company_info
Route::get('/company-info', [CompanyInfoController::class, 'index'])->name('company-info');
Route::post('/company-info/store', [CompanyInfoController::class, 'store'])->name('company-info.store');


// Backend Route
Route::middleware(['authcheck'])->group(function () {

Route::get('dashboard',[dashboardcontroller::class,'index'])->name('dashboard');
});
Route::get('logout',[dashboardcontroller::class,'logout'])->name('logout');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::post('register/insert',[LoginController::class,'registerInsert'])->name('register.insert');
// login
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login');// logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');