<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univers extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(AnnoncementsType::class, 'type_id');
    }
}

