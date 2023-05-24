<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use App\Models\User;
use App\Models\Univers;
use App\Models\Type;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;


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

    public function type()
    {
        return $this->hasMany(AnnoncementsType::class);
    }

    public function univers()
    {
        return $this->hasManyThrough(Univers::class, AnnoncementsType::class);
    }



}
