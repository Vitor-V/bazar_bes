<?php

namespace App\Modules\Product\Presentation\UpdateComment;

use App\Modules\Product\Presentation\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UpdateCommentResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.comment.update.success'),
            'comment' => CommentResource::make($this->resource)
        ];
    }
}
