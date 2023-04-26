<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    /**
     * Get the user that owns the Amenities
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function announcement(): BelongsTo
    {
        return $this->belongsTo(Announcements::class, 'adId');
    }



}
