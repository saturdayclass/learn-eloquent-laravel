<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\SalamController;
use \App\Http\Controllers\HandphoneController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\BookController;
use \App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function(){
    return "Hello world!";
});

Route::group(['prefix' => 'latihan/kategori'], function(){
    Route::get('/all', [CategoryController::class, "index"]);
    Route::get('/search', [CategoryController::class, "search"]);
    Route::get('/{id}/delete', [CategoryController::class, "delete"]);
    Route::get('/{id}/restore', [CategoryController::class, "restore"]);
    Route::get('/{id}/permanent-delete', [CategoryController::class, "deletePermanent"]);
    Route::view('layouts', 'child');
});

Route::get('/ucapkan-salam', [SalamController::class, "index"]);

Route::get('/handphone', [HandphoneController::class, "index"]);
Route::get('/users', [UserController::class, "index"]);
Route::get('/book', [BookController::class, "index"]);
Route::get('/order', [OrderController::class, "index"]);
Route::get('/add-phone', [HandphoneController::class, "create"]);