<?php

namespace App\Modules\Product\Presentation\LikeComment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LikeCommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'comment_id' => [
                'required',
                Rule::exists('comments', 'id')->whereNull('deleted_at')
            ],
        ];
    }
}
