<?php

namespace App\Modules\Product\Presentation\CreateComment;

use App\Modules\Product\Data\Dao\Comment;

class CreateCommentUseCase
{
    public function execute(CreateCommentRequest $request)
    {
        $comment = new Comment($request->validated());

        $comment->customer_id = $request->user()->id;
        $comment->product_id = $request->validated()['product_id'];
        $comment->save();

        return $comment;
    }
}
