<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Football_league;  

use App\Models\Football_team;  

class Football_odd extends Model
{
    use HasFactory;

    public function league()
    {         
        return $this->belongsTo(Football_league::class,'leagueapi_id', 'leagueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function home()
    {         
        return $this->belongsTo(Football_team::class,'teams_homeapi_id', 'teamapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function away()
    {         
        return $this->belongsTo(Football_team::class,'teams_awayapi_id', 'teamapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
