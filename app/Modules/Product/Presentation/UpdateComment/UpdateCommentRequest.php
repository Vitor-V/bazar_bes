<?php

namespace App\Modules\Product\Presentation\UpdateComment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'content' => 'required|min:5',
        ];
    }
}
