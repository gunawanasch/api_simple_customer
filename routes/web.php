<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserV1Controller;
use App\Http\Controllers\CustomerInfoV1Controller;
use App\Http\Controllers\ProductInfoV1Controller;
use App\Http\Controllers\UserV2Controller;
use App\Http\Controllers\CustomerInfoV2Controller;
use App\Http\Controllers\ProductInfoV2Controller;

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

Route::post('v1/register', [UserV1Controller::class, 'register']);
Route::post('v1/login', [UserV1Controller::class, 'login']);
Route::get('v1/getAllCustomerInfo', [CustomerInfoV1Controller::class, 'getAllCustomerInfo']);
Route::post('v1/getCustomerInfoById', [CustomerInfoV1Controller::class, 'getCustomerInfoById']);
Route::get('v1/getAllProductInfo', [ProductInfoV1Controller::class, 'getAllProductInfo']);
Route::post('v1/getProductInfoById', [ProductInfoV1Controller::class, 'getProductInfoById']);

Route::post('v2/register', [UserV2Controller::class, 'register']);
Route::post('v2/login', [UserV2Controller::class, 'login']);
Route::get('v2/getAllCustomerInfo', [CustomerInfoV2Controller::class, 'getAllCustomerInfo']);
Route::post('v2/getCustomerInfoById', [CustomerInfoV2Controller::class, 'getCustomerInfoById']);
Route::get('v2/getAllProductInfo', [ProductInfoV2Controller::class, 'getAllProductInfo']);
Route::post('v2/getProductInfoById', [ProductInfoV2Controller::class, 'getProductInfoById']);