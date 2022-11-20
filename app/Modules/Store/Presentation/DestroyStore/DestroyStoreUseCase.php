<?php

namespace App\Modules\Store\Presentation\DestroyStore;

use App\Modules\Store\Data\Dao\Store;

class DestroyStoreUseCase
{
    public function execute(int $id)
    {
        $store = Store::query()->findOrFail($id);
        $store->delete();
        return $store;
    }
}
