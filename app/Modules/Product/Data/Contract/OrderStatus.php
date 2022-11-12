<?php

namespace App\Modules\Product\Data\Contract;

enum OrderStatus:int
{
    case open = 1;
    case paid = 2;
    case shipped = 3;
    case done = 4;
    case cancelled = 5;
    case expired = 6;
}
