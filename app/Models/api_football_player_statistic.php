<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Football_player;   

class api_football_player_statistic extends Model
{
    use HasFactory;

    public function player()
    {         
        return $this->belongsTo(Football_player::class,'playerapi_id', 'playerapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
