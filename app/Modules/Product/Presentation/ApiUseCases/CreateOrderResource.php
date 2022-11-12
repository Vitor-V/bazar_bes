<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use App\Modules\Product\Presentation\Resources\OrderResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateOrderResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.order.store.success'),
            'product' => OrderResource::make($this->resource)
        ];
    }

}
