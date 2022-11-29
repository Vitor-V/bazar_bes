<?php

namespace App\Modules\Product\Presentation\DestroyComment;

use App\Modules\Product\Data\Dao\Comment;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DestroyCommentUseCase
{
    public function execute(Request $request, int $id)
    {
        $comment = Comment::query()->findOrFail($id);
        if ($comment->customer_id != $request->user()->id) {
            throw new ModelNotFoundException();
        }

        $comment->delete();
        return $comment;
    }
}
