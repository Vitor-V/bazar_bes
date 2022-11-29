<?php

namespace App\Modules\Product\Presentation\DestroyComment;

use App\Modules\Product\Presentation\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DestroyCommentResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.comment.destroy.success'),
            'comment' => CommentResource::make($this->resource)
        ];
    }
}
