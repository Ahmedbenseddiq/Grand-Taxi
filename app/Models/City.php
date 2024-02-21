<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city_name'];

    public function tripsFrom()
    {
        return $this->hasMany(Trip::class, 'pickup_city_id');
    }

    public function tripsTo()
    {
        return $this->hasMany(Trip::class, 'destination_city_id');
    }
}
