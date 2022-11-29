<?php

namespace App\Modules\Product\Data\Dao;

use App\Modules\Product\Data\Contract\OrderStatus;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'value',
        'net_value',
        'discount',
    ];

//    protected $casts = [
//        'status' => OrderStatus::class
//    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }


    protected function status(): Attribute
    {
        return Attribute::make( function ($value) {
            return OrderStatus::get($value);
        });
    }
}
