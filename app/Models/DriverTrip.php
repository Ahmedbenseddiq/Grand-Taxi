<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTrip extends Model
{
    protected $fillable = ['driver_id', 'trip_id'];

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
