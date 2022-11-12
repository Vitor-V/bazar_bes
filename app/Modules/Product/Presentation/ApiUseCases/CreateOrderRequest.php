<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{

    public function rules()
    {
        return [

            'product_id' => 'required|integer|exists:products,id',
            'value' => 'required|numeric',
            'discount' => 'required|numeric',
        ];
    }
}
