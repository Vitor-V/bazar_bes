<?php

namespace App\Modules\Store\Presentation\UpdateStore;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'email' => [
                'required',
                'email',
                Rule::unique('stores', 'email')->ignore($this->route('store'))
            ],
            'phone' => 'sometimes|string',

            'zip_code' => 'sometimes|string',
            'address' => 'sometimes|string',
            'address_number' => 'sometimes|string',
            'address_district' => 'sometimes|string',
            'city' => 'sometimes|string',
            'state' => 'sometimes|string',
        ];
    }
}
