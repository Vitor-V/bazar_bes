<?php


use App\Modules\Customer\Presentation\Controllers\CustomersController;
use App\Modules\Product\Presentation\Controllers\OrdersController;
use App\Modules\Product\Presentation\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::post('session', [CustomersController::class, 'login']);

Route::apiResource('customer', CustomersController::class)->only('store');

// Cliente autenticado
Route::middleware(['auth:sanctum', 'abilities:customer'])
    ->group(function () {
        Route::apiResource('order', OrdersController::class)->only('store');

        Route::apiResource('product', ProductsController::class)->only('index');
    });

