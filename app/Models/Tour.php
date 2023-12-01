<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillable = [
        'name', 'description', 'address', 'large_area', 'photo', 'longitude', 'latitude', 'price_ticket_on_weekday', 'price_ticket_on_weekend'
    ];
}
