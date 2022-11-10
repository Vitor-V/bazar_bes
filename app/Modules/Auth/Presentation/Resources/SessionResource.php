<?php

namespace App\Modules\Auth\Presentation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
{
    public static $wrap = 'session';

    public function toArray($request)
    {
        return [
            'token' => $this->resource->token,
            'user' => $this->resource->user,
        ];
    }
}
