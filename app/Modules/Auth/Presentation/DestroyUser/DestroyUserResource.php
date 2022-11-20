<?php

namespace App\Modules\Auth\Presentation\DestroyUser;

use App\Modules\Auth\Presentation\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DestroyUserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('app.user.destroy.success'),
            'user' => UserResource::make($this->resource)
        ];
    }
}
