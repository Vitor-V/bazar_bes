<?php

namespace App\Modules\Product\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return $this->resource;
    }

}
