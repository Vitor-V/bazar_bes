<?php

namespace App\Modules\Product\Presentation\UpdateComment;

use App\Modules\Product\Data\Dao\Comment;

class UpdateCommentUseCase
{
    public function execute( $request, int $id)
    {
        $comment = Comment::query()->findOrFail($id);

        $comment->fill($request->validated());
        $comment->save();
        return $comment;
    }
}
