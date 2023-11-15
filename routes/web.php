<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', [HomeController::class,'index'])->name('home');
Route::get('aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('contactUs', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('productDetailsRagi', [HomeController::class, 'productDetailsRagi'])->name('productDetailsRagi');
Route::get('productDetailsBanana', [HomeController::class, 'productDetailsBanana'])->name('productDetailsBanana');
Route::get('productDetailsRiceBanana', [HomeController::class, 'productDetailsRiceBanana'])->name('productDetailsRiceBanana');
Route::get('productDetailsKannakaya', [HomeController::class, 'productDetailsKannakaya'])->name('productDetailsKannakaya');
