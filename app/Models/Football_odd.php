<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Football_league;   
use App\Models\Football_team;   
use App\Models\Football_venue;  
use App\Models\Football_statistic;  
use App\Models\Api_football_standing;
use App\Models\Football_pattern_from;

use Awobaz\Compoships\Compoships;


class Football_odd extends Model
{
    use HasFactory;
    use Compoships;
 
    public function preend()
    {         
        return $this->belongsTo(Football_pattern_from::class, 
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern', 'end_ah_pattern', 'end_gou_pattern'], 
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern', 'end_ah_pattern', 'end_gou_pattern'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function preend_mirror()
    {         
        return $this->belongsTo(Football_pattern_from::class, 
                ['leagueapi_id', 'pre_ah_pattern_mirror', 'pre_gou_pattern', 'end_ah_pattern_mirror', 'end_gou_pattern'], 
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern', 'end_ah_pattern', 'end_gou_pattern'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function prepre()
    {         
        return $this->belongsTo(Football_pattern_from::class, 
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern', 'pre_ah_pattern', 'pre_gou_pattern'], 
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern', 'end_ah_pattern', 'end_gou_pattern'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function prepre_mirror()
    {         
        return $this->belongsTo(Football_pattern_from::class, 
                ['leagueapi_id', 'pre_ah_pattern_mirror', 'pre_gou_pattern', 'pre_ah_pattern_mirror', 'pre_gou_pattern'], 
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern', 'end_ah_pattern', 'end_gou_pattern'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function statistic()
    {         
        return $this->belongsTo(Football_statistic::class, 
                ['fixtureapi_id', 'leagueapi_id', 'season'], 
                ['fixtureapi_id', 'leagueapi_id', 'season'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function home_stats()
    {         
        return $this->belongsTo(Api_football_standing::class, 
                ['leagueapi_id', 'season', 'teams_homeapi_id'], 
                ['leagueapi_id', 'season', 'teamapi_id'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function away_stats()
    {         
        return $this->belongsTo(Api_football_standing::class, 
                ['leagueapi_id', 'season', 'teams_awayapi_id'], 
                ['leagueapi_id', 'season', 'teamapi_id'], 
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function venue()
    {         
        return $this->belongsTo(Football_venue::class,'venueapi_id', 'venueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

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
