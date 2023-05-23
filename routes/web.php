<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[IndexController::class,'home'])->name('home');
Route::get('/cycle/category',[IndexController::class,'category'])->name('cycle.category');

Route::get('/add/product/form',[ProductController::class,'productForm'])->name('product.form');
