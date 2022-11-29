<?php

namespace App\Modules\Product\Presentation\LikeComment;

use App\Modules\Product\Data\Dao\Like;
use App\Modules\Product\Domain\Exceptions\CommentException;

class LikeCommentUseCase
{
    public function execute(LikeCommentRequest $request)
    {
        $like = Like::withTrashed()
            ->where('customer_id', $request->user()->id)
            ->where('comment_id', $request->validated()['comment_id'])
            ->first();

        if ($like) {
            if ($like->deleted_at) {
                $like->deleted_at = null;
            } else {
                throw new CommentException('Você já curtiu esse comentário');
            }
        } else {
            $like = new Like();
            $like->comment_id = $request->validated()['comment_id'];
            $like->customer_id = $request->user()->id;
        }

        $like->save();
        return $like;
    }
}
