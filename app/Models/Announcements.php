<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Announcements extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'cover_image',
        'city',
        'price',
        'bathrooms',
        'propertyType',
        'propertyStatus',
        'bedrooms',
        'sqft',
        'neighborhood',
        'bhk',
        'rating',
        'announcementStatus',
        'aminities'
    ];

    public function scopeForRent($query)
    {
        return $query->where('announcementStatus','for rent');
    }

    public function scopeForSell($query)
    {
        return $query->where('announcementStatus','for sell');
    }


}
