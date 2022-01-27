<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'reservation_date',
        'start_time',
        'end_time',
        'tenant_name',
        'reservation_id',
        'amount',
        'contact_number'
    ];

    public function facility(){
        return $this->belongsTo(Facilities::class, 'room_id', 'id');
    }

}

