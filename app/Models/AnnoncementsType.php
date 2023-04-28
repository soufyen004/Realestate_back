<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnoncementsType extends Model
{
    use HasFactory;

    protected $casts = [
        'updated_at' => 'date:m/d/Y',
        'created_at' => 'date:m/d/Y',
    ];

    public function type()
    {
        return $this->hasMany(Univers::class);
    }
}
