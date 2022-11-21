<?php

namespace App\Modules\Store\Domain\UseCases;

use App\Modules\Store\Data\Dao\Store;
use Illuminate\Http\Request;

class ListStoreUseCase
{
    public function execute(Request $request)
    {
        $store = $request->user()->store;

        return $store;
    }
}
