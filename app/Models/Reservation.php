<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'trip', 'arrived'];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function tripDetail()
    {
        return $this->belongsTo(DriverTrip::class, 'trip');
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public static function getCount()
    {
        return self::count();
    }
}


