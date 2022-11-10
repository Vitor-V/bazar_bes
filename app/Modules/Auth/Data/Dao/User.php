<?php

namespace App\Modules\Auth\Data\Dao;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'access_tokens',
    ];


    protected $casts = [
        'access_tokens' => 'array',
        'last_sign_in_at' => 'datetime'
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i d-m-Y');
    }
}
