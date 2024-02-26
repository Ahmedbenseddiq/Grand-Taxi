<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['driver_trip_id', 'client_id', 'date'];

    public function driverTrip()
    {
        return $this->belongsTo(DriverTrip::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public static function getCount()
    {
        return self::count();
    }
}


