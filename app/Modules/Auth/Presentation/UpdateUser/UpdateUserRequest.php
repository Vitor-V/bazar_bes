<?php

namespace App\Modules\Auth\Presentation\UpdateUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->route('user'))
            ],
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ];
    }

}
