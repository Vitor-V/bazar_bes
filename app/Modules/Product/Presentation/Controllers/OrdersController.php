<?php

namespace App\Modules\Product\Presentation\Controllers;

use App\Modules\Product\Data\Dao\Order;
use App\Modules\Product\Presentation\ApiUseCases\CreateOrderRequest;
use App\Modules\Product\Presentation\ApiUseCases\CreateOrderResource;
use App\Modules\Product\Presentation\ApiUseCases\CreateOrderUseCase;
use App\Modules\Product\Presentation\Resources\OrderResource;
use Illuminate\Http\Request;
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

    public function index(Request $request)
    {
        return OrderResource::collection(
            Order::query()
                ->where('customer_id', $request->user()->id)
                ->with(['products', 'products.comments'])
                ->get());
    }
}
