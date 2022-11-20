<?php

namespace App\Modules\Product\Presentation\DestroyProduct;

use App\Modules\Product\Data\Dao\Product;
use Illuminate\Http\Request;

class DestroyProductUseCase
{
    public function execute(Request $request, int $id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
        return $product;
    }
}
