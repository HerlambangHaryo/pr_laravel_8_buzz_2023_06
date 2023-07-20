<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Football_team;   

use Awobaz\Compoships\Compoships;

class Api_football_standing extends Model
{
    use HasFactory;
    use Compoships;

    public function team()
    {         
        return $this->belongsTo(Football_team::class,'teamapi_id', 'teamapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
