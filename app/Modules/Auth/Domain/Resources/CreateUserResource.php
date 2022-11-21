<?php

namespace App\Modules\Auth\Domain\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreateUserResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.user.store.success'),
            'session' => $this->resource
        ];
    }

}
