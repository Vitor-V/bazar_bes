<?php

namespace App\Modules\Store\Data\Dao;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class UserStore extends Model
{
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }


    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
