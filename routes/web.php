<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\frontend\HomeController;
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

Route::get('/',[HomeController::class,'website'])->name('website');



Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/get/registration',[AuthController::class,'getRegistration'])->name('get.registration');
Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/admin',[IndexController::class,'home'])->name('home');
Route::get('/cycle/category',[IndexController::class,'category'])->name('cycle.category');
Route::post('/category/create',[IndexController::class,'categoryCreate'])->name('category.create');
Route::get('/category/list',[IndexController::class,'categoryList'])->name('category.list');

Route::get('/add/product/form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product/store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product/list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product/edit/{id}',[ProductController::class,'productEdit'])->name('product.Edit');
Route::get('/product/view/{id}',[ProductController::class,'productView'])->name('product.view');
Route::get('/product/delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');

Route::get('/customer/form',[CustomerController::class,'customer'])->name('customer');
Route::post('/customer/store',[CustomerController::class,'customerStore'])->name('customer.store');


