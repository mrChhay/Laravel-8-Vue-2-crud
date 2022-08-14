<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIs\CustomerController;

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
    return view('layouts.app');
});
Route::group(['prefix' => 'admin-api'], function () {
    Route::get('customer', [CustomerController::class,'index']);
    Route::post('add', [CustomerController::class,'add']);
    Route::get('edit/{id}', [CustomerController::class,'edit']);
    Route::post('update/{id}', [CustomerController::class,'update']);
    Route::delete('delete/{id}', [CustomerController::class,'delete']);
});
