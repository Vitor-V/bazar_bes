<?php


use App\Modules\Customer\Presentation\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;





Route::post('session',[CustomersController::class, 'login']);

Route::apiResource('customer', CustomersController::class)->only('store');

