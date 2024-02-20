<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\LoginController;
use Modules\User\App\Http\Controllers\LoginOutController;
use Modules\User\App\Http\Controllers\UserInfoController;

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

Route::prefix('v1')->prefix('auth')->name('api.auth.')->group(function () {
    Route::post('login', LoginController::class)->name('login');

    Route::middleware('auth')->group(function () {
        Route::post('login-out', LoginOutController::class)->name('login');
    });
    Route::prefix('user')->group(function () {
        Route::get('{user}', UserInfoController::class)->name('info');
    });
});
