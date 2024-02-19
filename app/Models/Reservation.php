<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'client_id',
        'schedule_id',
        'trip_id',
        'status',
        'arrived',
    ];

    // Define relationships
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    // Method to count reservations
    public static function getCount()
    {
        return self::count();
    }
}


