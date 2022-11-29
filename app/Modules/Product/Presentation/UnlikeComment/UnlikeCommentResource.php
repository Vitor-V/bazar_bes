<?php

namespace App\Modules\Product\Presentation\UnlikeComment;

use Illuminate\Http\Resources\Json\JsonResource;

class UnlikeCommentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => trans('app.like.destroy.success'),
            'like' => $this->resource
        ];
    }
}
