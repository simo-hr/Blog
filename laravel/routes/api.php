<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeController;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;

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

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/admin/me', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('/articles', ArticleController::class);
});
Route::get('/', function () {
    return 'Hello World';
});
