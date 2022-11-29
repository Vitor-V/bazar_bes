<?php

namespace App\Modules\Product\Data\Dao;

use App\Modules\Product\Data\Contract\OrderStatus;
use App\Modules\Product\Data\Contract\ProductType;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'type',
        'value',
    ];

//    protected $casts = [
//        'type' => ProductType::class
//    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected function type(): Attribute
    {
        return Attribute::make( function ($value) {
            return ProductType::get($value);
        });
    }
}
