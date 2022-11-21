<?php

namespace App\Modules\Store\Presentation\Requests;

use App\Modules\Product\Domain\Exceptions\AnyStoreException;
use Illuminate\Foundation\Http\FormRequest;

class CreateStoreRequest extends FormRequest
{
    public function rules()
    {
        if (request()->user()->store_id) {
            throw new AnyStoreException('Você já possui loja vinculada, só é possível vincular uma loja por usuário');
        }

        return [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:stores,email',
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
