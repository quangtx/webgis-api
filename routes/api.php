<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['auth:api', 'cors']], function () {
    Route::resource('provinces', ProvinceController::class);
    Route::resource('districts', DistrictController::class);
    Route::resource('wards', WardController::class);
});
Route::group(['middleware' => 'cors'], function () {
    Route::post('logout', [UserController::class , 'logout'])->name('logout');
    Route::post('register',[UserController::class ,'register'])->name('register');
    Route::get('check-user',[UserController::class ,'checkExist']);
    Route::post('login', [UserController::class ,'login'])->name('login');
});