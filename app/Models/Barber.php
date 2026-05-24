<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $fillable = [
        'nama_barber',
        'spesialis',
        'foto',
        'jadwal'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}