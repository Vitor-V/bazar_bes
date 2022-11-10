<?php

namespace App\Modules\Store\Presentation\Api;

use App\Modules\Store\Presentation\Resources\StoreResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateStoreResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.store.store.success'),
            'store ' => StoreResource::make($this->resource)
        ];
    }
}
