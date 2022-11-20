<?php

namespace App\Modules\Auth\Presentation\Logout;

use Illuminate\Http\Resources\Json\JsonResource;

class LogoutResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('auth.logout')
        ];
    }
}
