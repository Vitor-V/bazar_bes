<?php

namespace App\Modules\Customer\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreateCustomerResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.customer.store.success'),
            'session' => $this->resource
        ];
    }
}
