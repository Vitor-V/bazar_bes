<?php

namespace App\Modules\Product\Data\Contract;

enum ProductType : int
{
    case clothing = 1;
    case shoe = 2;
    case jewelry = 3;

    static function get($value)
    {
        return [
            'value' => $value,
            'name' => self::translated()[$value]
        ];
    }

    static function translated()
    {
        return [
            1 => 'Roupa',
            2 => 'Calçado',
            3 => 'Joia',
        ];
    }
}
