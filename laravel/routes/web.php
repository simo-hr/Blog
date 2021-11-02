<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieAuthenticationController;

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

Route::prefix('api')->group(function () {
    Route::post('login', [CookieAuthenticationController::class, 'login'])->name('login');
    Route::post('logout', [CookieAuthenticationController::class, 'logout'])->name('logout');
});
