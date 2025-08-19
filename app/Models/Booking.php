<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'booking_date',
        'status',
        'room_id', // jangan lupa tambahkan kalau ada kolom room_id di tabel
    ];

    // Relasi ke tabel Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
