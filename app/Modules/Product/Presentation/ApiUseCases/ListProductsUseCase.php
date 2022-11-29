<?php

namespace App\Modules\Product\Presentation\ApiUseCases;

use App\Modules\Product\Data\Dao\Product;
use Illuminate\Http\Request;

class ListProductsUseCase
{
    public function execute(Request $request)
    {
        $products = Product::query()
            ->with(['comments', 'comments.likes'])
            ->get();

        return $products;
    }
}
