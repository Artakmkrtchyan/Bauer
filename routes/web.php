<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
 use Illuminate\Http\Request;

Route::get('/home',[App\Http\Controllers\MainController::class,'index']);
Route::get('/about',[App\Http\Controllers\MainController::class,'about_us']);
Route::get('/admin',[App\Http\Controllers\MainController::class,'allData']);

// RU
Route::get('/home_ru',[App\Http\Controllers\MainController::class,'home_ru']);
Route::get('/about_ru',[App\Http\Controllers\MainController::class,'about_ru']);
// Route::get('/admin_ru',[App\Http\Controllers\MainController::class,'admin_ru']);

Route::post('public/create_info',[App\Http\Controllers\MainController::class,'add'])->name('info-form');
Route::post('/delete/{id}',[App\Http\Controllers\MainController::class,'delete_product']);

Route::get('/', function () {
     return redirect('/home');
});
