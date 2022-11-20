<?php

namespace App\Modules\Product\Data\Dao;

use App\Modules\Product\Data\Contract\ProductType;
use DateTimeInterface;
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

    protected $casts = [
        'type' => ProductType::class
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }

}
