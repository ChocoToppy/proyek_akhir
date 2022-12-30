<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function (){
    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('tampil-buyer',[BuyerController::class,'show']);
    Route::get('input-buyer',[BuyerController::class,'index']);
    Route::post('kirim-buyer', [BuyerController::class, 'input']);
    Route::get('delete-buyer/{id}',[BuyerController::class,'delete']);
    Route::get('edit-buyer/{id}',[BuyerController::class,'edit']);
    Route::post('update-buyer/{id}',[BuyerController::class,'update']);

    Route::get('input-order',[OrderController::class,'index']);
    Route::post('kirim-order', [OrderController::class, 'input']);
    Route::get('tampil-order',[OrderController::class,'show']);
    Route::get('delete-order/{id}',[OrderController::class,'delete']);
    Route::get('edit-order/{id}',[OrderController::class,'edit']);
    Route::post('update-order/{id}',[OrderController::class,'update']);

    Route::get('input-seller',[SellerController::class,'index']);
    Route::post('kirim-seller', [SellerController::class, 'input']);
    Route::get('tampil-seller',[SellerController::class,'show']);
    Route::get('delete-seller/{id}',[SellerController::class,'delete']);
    Route::get('edit-seller/{id}',[SellerController::class,'edit']);
    Route::post('update-seller/{id}',[SellerController::class,'update']);

    Route::post('logout',[LoginController::class,'logout']);

    Route::get('pengaturan',[AkunController::class,'index']);
    Route::post('update-password',[AkunController::class,'update']);
    Route::post('delete',[AkunController::class,'delete']);

});
Route::middleware('guest')->group(function (){
    Route::get('registrasi',[RegistrasiController::class,'index']);
    Route::post('registrasi-user',[RegistrasiController::class,'register']);

    Route::get("/",[LoginController::class,'index'])->name('login');
    Route::post("login",[LoginController::class,'authenticate']);
});
