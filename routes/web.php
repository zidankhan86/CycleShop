<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
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

Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/get/registration',[AuthController::class,'getRegistration'])->name('get.registration');
Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/',[IndexController::class,'home'])->name('home');
Route::get('/cycle/category',[IndexController::class,'category'])->name('cycle.category');
Route::post('/category/create',[IndexController::class,'categoryCreate'])->name('category.create');
Route::get('/category/list',[IndexController::class,'categoryList'])->name('category.list');

Route::get('/add/product/form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product/store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product/list',[ProductController::class,'productList'])->name('product.list');

Route::get('/customer',[CustomerController::class,'customer'])->name('customer');

