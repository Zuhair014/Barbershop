<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'nama_layanan',
        'harga',
        'durasi',
        'deskripsi',
        'gambar'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}