<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Announcements extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'user_id',
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


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
