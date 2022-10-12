<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }//one to many docs laravels
}

