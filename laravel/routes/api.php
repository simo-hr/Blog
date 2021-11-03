<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeController;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;

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

Route::get('/sanctum/csrf-cookie', [CsrfCookieController::class, 'show']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/admin/me', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('/articles', ArticleController::class, ['except' => ['index', 'show']]);
    Route::apiResource('/categories', CategoryController::class, ['except' => ['index', 'show']]);
});
Route::apiResource('/articles', ArticleController::class, ['only' => ['index', 'show']]);
Route::apiResource('/categories', CategoryController::class, ['only' => ['index', 'show']]);
Route::get('/hello', function () {
    return 'Hello World';
});
