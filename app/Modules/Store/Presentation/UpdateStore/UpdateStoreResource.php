<?php

namespace App\Modules\Store\Presentation\UpdateStore;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateStoreResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('app.store.update.success'),
            'store' => $this->resource
        ];
    }
}
