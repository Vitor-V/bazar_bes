<?php

use App\Modules\Auth\Presentation\Controllers\SessionController;
use App\Modules\Auth\Presentation\Controllers\UsersController;
use App\Modules\Product\Presentation\Controllers\ProductsController;
use App\Modules\Store\Presentation\Controllers\StoresController;
use Illuminate\Support\Facades\Route;

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

//LOGIN
Route::post('session', [SessionController::class, 'store']);

Route::apiResource('user', UsersController::class)->only('store');


// Usuário autenticado
Route::middleware(['auth:sanctum', 'abilities:user'])
    ->group(function () {
        //LOGOUT
        Route::delete('session', [SessionController::class, 'destroy']);

        Route::apiResource('user', UsersController::class)->only('index', 'update', 'destroy');
        Route::apiResource('store', StoresController::class);
        Route::apiResource('product', ProductsController::class);
    });

//Route::get('foo', function () {
//    return 'Hello World';
//});
//
//Route::post('foo', function () {
//    info('chegou no post');
//    return 'Hello World';
//});


