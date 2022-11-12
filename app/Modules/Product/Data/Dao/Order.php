<?php

namespace App\Modules\Product\Data\Dao;

use App\Modules\Product\Data\Contract\OrderStatus;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'value',
        'net_value',
        'discount',
    ];

    protected $casts = [
        'type' => OrderStatus::class
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }
}
