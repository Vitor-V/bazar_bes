<?php

namespace App\Modules\Product\Presentation\DestroyProduct;

use App\Modules\Product\Presentation\Resources\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DestroyProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('app.product.destroy.success'),
            'product' => ProductResource::make($this->resource)
        ];
    }
}
