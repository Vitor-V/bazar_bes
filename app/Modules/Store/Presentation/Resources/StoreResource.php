<?php

namespace App\Modules\Store\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    public function toArray($request)
    {
        return $this->resource;
    }

}
