<?php

use App\Modules\Auth\Presentation\Controllers\SessionController;
use App\Modules\Auth\Presentation\Controllers\UsersController;
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

Route::apiResource('session', SessionController::class)->only('store');
Route::apiResource('user', UsersController::class)->only('store');


// Rotas autenticadas
Route::middleware(['auth:sanctum', 'abilities:user'])
    ->group(function () {
        Route::apiResource('store', StoresController::class)->only('store');
    });




