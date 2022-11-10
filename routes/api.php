<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group([
    'prefix' => 'session'
],
    function () {
        Route::post('create', [\App\Modules\Auth\Presentation\Controllers\SessionController::class, 'store'])
            ->name('session.store');
    }
);


Route::group([
    'prefix' => 'user'
],
    function () {
        Route::post('create', [\App\Modules\Auth\Presentation\Controllers\UsersController::class, 'store'])
            ->name('user.store');
    }
);

Route::middleware('auth:sanctum')
    ->group(
        function () {
            Route::apiResource('store', \App\Modules\Store\Presentation\Controllers\StoresController::class);
        }
    );



