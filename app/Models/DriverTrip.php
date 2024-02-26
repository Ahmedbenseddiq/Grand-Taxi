<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTrip extends Model
{
    use HasFactory;

    protected $fillable = ['driver_details_id', 'trip_id'];

    public function driverDetail()
    {
        return $this->belongsTo(DriverDetail::class, 'driver_details_id');
    }


    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
