<?php

namespace App\Modules\Customer\Data\Dao;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',

        'zip_code',
        'address',
        'address_number',
        'address_district',
        'city',
        'state',
    ];

    protected $hidden = [
        'password',
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
