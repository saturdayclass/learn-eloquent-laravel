<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\SalamController;

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
});

Route::get('/ucapkan-salam', [SalamController::class, "index"]);