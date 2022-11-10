<?php

namespace App\Modules\Store\Data\Dao;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'address_number',
        'address_district',
        'city',
        'state'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }
}
