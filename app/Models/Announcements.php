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
        'propertytype',
        'propertystatus',
        'bedrooms',
        'sqft',
        'neighborhood',
        'bhk',
        'rating',
        'listingType',
        'aminities'
    ];

    public function scopeForRent($query)
    {
        return $query->where('listingType','for rent');
    }

    public function scopeForSell($query)
    {
        return $query->where('listingType','for sell');
    }
}
