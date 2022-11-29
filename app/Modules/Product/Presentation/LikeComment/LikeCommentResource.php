<?php

namespace App\Modules\Product\Presentation\LikeComment;

use Illuminate\Http\Resources\Json\JsonResource;

class LikeCommentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('app.like.store.success'),
            'like' => $this->resource
        ];
    }
}
