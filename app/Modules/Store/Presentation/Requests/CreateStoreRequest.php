<?php

namespace App\Modules\Store\Presentation\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:stores,email',
            'phone' => 'sometimes|string',
            'address' => 'sometimes|string',
            'address_number' => 'sometimes|string',
            'address_district' => 'sometimes|string',
            'city' => 'sometimes|string',
            'state' => 'sometimes|string',
        ];
    }
}
