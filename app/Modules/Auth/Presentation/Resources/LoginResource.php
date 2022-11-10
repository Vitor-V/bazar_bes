<?php

namespace App\Modules\Auth\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('auth.login'),
            'session' => SessionResource::make($this->resource)
        ];
    }
}
