<?php

namespace App\Modules\Product\Presentation\CreateComment;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'content' => 'required|min:5',
            'product_id' => 'required|exists:products,id'
        ];
    }
}
