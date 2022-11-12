<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use App\Modules\Product\Data\Dao\Product;

class CreateProductUseCase
{
    public function execute(CreateProductRequest $request)
    {
        $product = new Product($request->validated());
        $product->store_id = $request->validated()['store_id'];
        $product->save();

        return $product;
    }
}
