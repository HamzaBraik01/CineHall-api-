<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_id',
        'row_number',
        'seat_number',
        'status'
    ];

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservations_seats')
            ->withTimestamps();
    }
}
