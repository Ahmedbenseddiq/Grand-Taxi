<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id', 'license_plate', 'vehicle_type', 'status', 'payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
    

    public function driverTrips()
    {
        return $this->hasMany(DriverTrip::class);
    }
}
