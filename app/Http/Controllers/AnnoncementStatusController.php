<?php

namespace App\Http\Controllers;

use App\Models\AnnoncementStatus;
use Illuminate\Http\Request;

class AnnoncementStatusController extends Controller
{
    public function getAll()
    {
        $status = new AnnoncementStatus;
        return $status->all();
    }
}
