<?php

use Illuminate\Support\Facades\Route;
use Modules\Message\App\Http\Controllers\MessageController;

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

Route::prefix('message')->name('message.')->group(function () {
    Route::get('', [MessageController::class, 'index'])->name('all');

    Route::group([], function (){
//    Route::middleware('auth')->group(function (){
       Route::get('/create', [MessageController::class, 'create'])->name('create');
    });
});
