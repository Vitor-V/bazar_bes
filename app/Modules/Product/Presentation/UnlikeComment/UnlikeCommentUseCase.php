<?php

namespace App\Modules\Product\Presentation\UnlikeComment;

use App\Modules\Product\Data\Dao\Like;
use App\Modules\Product\Domain\Exceptions\CommentException;
use App\Modules\Product\Presentation\LikeComment\LikeCommentRequest;

class UnlikeCommentUseCase
{
    public function execute(LikeCommentRequest $request)
    {
        $like = Like::query()
            ->where('customer_id', $request->user()->id)
            ->where('comment_id',$request->validated()['comment_id'])
            ->firstOrFail();

        $like->delete();

        return $like;
    }
}
