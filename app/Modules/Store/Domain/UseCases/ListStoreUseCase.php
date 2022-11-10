<?php

namespace App\Modules\Store\Domain\UseCases;

use App\Modules\Store\Data\Dao\Store;
use Illuminate\Http\Request;

class ListStoreUseCase
{
    public function execute(Request $request)
    {
        $stores = Store::query()
            ->join('user_stores', 'user_stores.store_id', '=', 'stores.id')
            ->where('user_stores.user_id', $request->user()->id)
            ->get();

        return $stores;
    }
}
