<?php

namespace App\Modules\Customer\Presentation\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:customers,email',
            'cpf' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',

            'zip_code' => 'sometimes|string',
            'address' => 'sometimes|string',
            'address_number' => 'sometimes|string',
            'address_district' => 'sometimes|string',
            'city' => 'sometimes|string',
            'state' => 'sometimes|string',
        ];
    }
}
