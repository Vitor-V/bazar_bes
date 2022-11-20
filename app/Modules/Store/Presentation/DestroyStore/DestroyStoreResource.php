<?php

namespace App\Modules\Store\Presentation\DestroyStore;

use Illuminate\Http\Resources\Json\JsonResource;

class DestroyStoreResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('app.store.destroy.success'),
            'store' => $this->resource
        ];
    }
}
