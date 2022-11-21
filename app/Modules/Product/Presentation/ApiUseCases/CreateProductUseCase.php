<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use App\Modules\Auth\Domain\Exceptions\LoginException;
use App\Modules\Product\Data\Dao\Product;
use App\Modules\Product\Domain\Exceptions\AnyStoreException;
use Illuminate\Validation\ValidationException;

class CreateProductUseCase
{
    public function execute(CreateProductRequest $request)
    {
        if (!$request->user()->store_id) {
            throw new AnyStoreException('Você ainda não possui nehuma loja vinculada, cadastre primeiro uma loja antes de cadastrar um produto');
        }


        $product = new Product($request->validated());
        $product->store_id = $request->user()->store_id;
        $product->save();

        return $product;
    }
}
