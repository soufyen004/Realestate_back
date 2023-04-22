<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'adId',
        'garage',
        'yard',
        'surveillance',
        'balcon',
        'wifi',
        'security',
        'elevator',
        'furnished',
        'kitchenReady',
        'swimingPool',
        'airConditioner',
        'babiesBedroom',
    ];
}
