<?php

namespace App\Modules\Product\Data\Contract;

enum OrderStatus: int
{
    case open = 1;
    case paid = 2;
    case shipped = 3;
    case done = 4;
    case cancelled = 5;
    case expired = 6;

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
            1 => 'Aberto',
            2 => 'Pago',
            3 => 'Enviado',
            4 => 'Concluido',
            5 => 'Cancelado',
            6 => 'Expirado'
        ];
    }
}
