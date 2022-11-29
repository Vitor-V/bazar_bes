<?php

namespace App\Modules\Product\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Data\Dao\Comment;
use App\Modules\Product\Presentation\CreateComment\CreateCommentRequest;
use App\Modules\Product\Presentation\CreateComment\CreateCommentResource;
use App\Modules\Product\Presentation\CreateComment\CreateCommentUseCase;
use App\Modules\Product\Presentation\DestroyComment\DestroyCommentResource;
use App\Modules\Product\Presentation\DestroyComment\DestroyCommentUseCase;
use App\Modules\Product\Presentation\LikeComment\LikeCommentRequest;
use App\Modules\Product\Presentation\LikeComment\LikeCommentResource;
use App\Modules\Product\Presentation\LikeComment\LikeCommentUseCase;
use App\Modules\Product\Presentation\Resources\CommentResource;
use App\Modules\Product\Presentation\UnlikeComment\UnlikeCommentResource;
use App\Modules\Product\Presentation\UnlikeComment\UnlikeCommentUseCase;
use App\Modules\Product\Presentation\UpdateComment\UpdateCommentRequest;
use App\Modules\Product\Presentation\UpdateComment\UpdateCommentResource;
use App\Modules\Product\Presentation\UpdateComment\UpdateCommentUseCase;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index(Request $request)
    {
        return CommentResource::collection(Comment::query()
            ->where('customer_id', $request->user()->id)
            ->get()
        );
    }

    public function show(Request $request, int $id)
    {
        return CommentResource::make(Comment::query()
            ->where('customer_id', $request->user()->id)
            ->findOrFail($id)
        );
    }

    public function store(CreateCommentUseCase $useCase, CreateCommentRequest $request)
    {
        return CreateCommentResource::make($useCase->execute($request));
    }

    public function destroy(DestroyCommentUseCase $useCase, Request $request, int $id)
    {
        return DestroyCommentResource::make($useCase->execute($request, $id));
    }

    public function update(UpdateCommentUseCase $useCase, UpdateCommentRequest $request, int $id)
    {
        return UpdateCommentResource::make($useCase->execute($request, $id));
    }

    public function like(LikeCommentUseCase $useCase, LikeCommentRequest $request)
    {
        return LikeCommentResource::make($useCase->execute($request));
    }

    public function unlike(UnlikeCommentUseCase $useCase, LikeCommentRequest $request)
    {
        return UnlikeCommentResource::make($useCase->execute($request));
    }
}
