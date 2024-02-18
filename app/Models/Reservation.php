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
}
