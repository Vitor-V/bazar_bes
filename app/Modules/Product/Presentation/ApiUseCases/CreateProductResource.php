<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use App\Modules\Product\Presentation\Resources\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateProductResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.product.store.success'),
            'product' => ProductResource::make($this->resource)
        ];
    }

}
