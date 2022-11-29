<?php

namespace App\Modules\Product\Data\Dao;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'content',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    protected function getLikesAttribute()
    {
        return $this->likes()->count();
    }
}
