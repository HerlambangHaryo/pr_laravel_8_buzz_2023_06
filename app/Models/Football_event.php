<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Football_event extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsToMany(Football_player::class,'playerapi_id') ;
    }
}
