<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FullnameController;

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

Route::get('/',[HomeController::class, 'home'])->name('home');

Route::get('/products',[ProductController::class, 'showProducts'])->name('all-products');
Route::get('/product-detail/{id}',[ProductController::class, 'detailProducts'])->name('detail-products');

Route::get('full-name',[FullnameController::class, 'fullName'])->name('fullname-form');
Route::post('get-fullname',[FullnameController::class, 'getFullName'])->name('get-fullname');
