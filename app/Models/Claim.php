<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    #use HasFactory;

    public function find_all()
    {
        return Claim::all();
    }
}
