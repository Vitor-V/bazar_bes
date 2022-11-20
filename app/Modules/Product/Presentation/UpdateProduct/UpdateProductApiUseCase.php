<?php

namespace App\Modules\Product\Presentation\UpdateProduct;

use App\Modules\Product\Data\Dao\Product;

class UpdateProductApiUseCase
{
    public function execute(UpdateProductRequest $request, int $id)
    {
        $product = Product::query()->findOrFail($id);
        $product->fill($request->validated());
        $product->save();
        return $product;
    }
}
