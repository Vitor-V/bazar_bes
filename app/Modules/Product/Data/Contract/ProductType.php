<?php

namespace App\Modules\Product\Data\Contract;

enum ProductType : int
{
    case clothing = 1;
    case shoe = 2;
    case jewelry = 3;
}
