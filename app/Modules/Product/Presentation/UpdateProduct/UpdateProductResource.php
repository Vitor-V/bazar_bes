<?php

namespace App\Modules\Product\Presentation\UpdateProduct;

use App\Modules\Product\Presentation\Resources\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UpdateProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'messsage' => trans('app.product.update.success'),
            'product' => ProductResource::make($this->resource)
        ];
    }
}
