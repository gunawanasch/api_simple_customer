<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\CustomerInfoController;
use App\Http\Controllers\v1\ProductInfoController;

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

Route::post('v1/register', [UserController::class, 'register']);
Route::post('v1/login', [UserController::class, 'login']);
Route::get('v1/getAllCustomerInfo', [CustomerInfoController::class, 'getAllCustomerInfo']);
Route::post('v1/getCustomerInfoById', [CustomerInfoController::class, 'getCustomerInfoById']);
Route::get('v1/getAllProductInfo', [TokenController::class, 'getAllProductInfo']);
Route::post('v1/getProductInfoById', [TokenController::class, 'getProductInfoById']);