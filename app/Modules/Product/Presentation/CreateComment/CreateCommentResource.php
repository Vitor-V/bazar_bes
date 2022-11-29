<?php

namespace App\Modules\Product\Presentation\CreateComment;

use App\Modules\Product\Presentation\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateCommentResource extends JsonResource
{
    public static $wrap = '';

    public function toArray($request)
    {
        return [
            'message' => trans('app.comment.store.success'),
            'comment' => CommentResource::make($this->resource)
        ];
    }
}
