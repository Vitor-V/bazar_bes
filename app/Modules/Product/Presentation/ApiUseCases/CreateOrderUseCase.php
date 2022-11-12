<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use App\Modules\Product\Data\Contract\OrderStatus;
use App\Modules\Product\Data\Dao\Order;
use App\Modules\Product\Data\Dao\Product;
use Illuminate\Support\Arr;

class CreateOrderUseCase
{
    public function execute(CreateOrderRequest $request)
    {
        $order = new Order($request->validated());

        $product = Product::query()
            ->findOrFail($request->validated()['product_id']);

        $order->product_id = $product->id;
        $order->customer_id = $request->user()->id;
        $order->store_id = $product->store_id;

        $order->net_value = $this->setNetValue(
            $request->validated()['value'],
            Arr::get($request->validated(), 'discount')
        );

        $order->status = OrderStatus::open->value;

        $order->save();

        return $order;
    }


    protected function setNetValue($value, $discount = null)
    {
        return $discount ? $value - $discount : $value;
    }
}
