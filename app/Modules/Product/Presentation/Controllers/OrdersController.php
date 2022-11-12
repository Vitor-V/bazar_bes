<?php

namespace App\Modules\Product\Presentation\Controllers;

use App\Modules\Product\Presentation\ApiUseCases\CreateOrderRequest;
use App\Modules\Product\Presentation\ApiUseCases\CreateOrderResource;
use App\Modules\Product\Presentation\ApiUseCases\CreateOrderUseCase;
use Illuminate\Support\Facades\DB;

class OrdersController
{

    public function store(CreateOrderUseCase $useCase, CreateOrderRequest $request)
    {
        return DB::transaction(function () use ($useCase, $request) {
            try {
                return CreateOrderResource::make($useCase->execute($request));
            } catch (\Exception $exception) {
                DB::rollBack();
                throw $exception;
            }
        });
    }
}
