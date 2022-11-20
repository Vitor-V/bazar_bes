<?php

namespace App\Modules\Store\Data\Dao;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',

        'zip_code',
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
