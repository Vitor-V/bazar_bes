<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string|min:5',
            'description' => 'required|string|min:5',
            'type' => 'required|integer',
            'value' => 'required|numeric',
        ];
    }
}
