<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Football_odd;
use App\Models\Football_coach;

use Awobaz\Compoships\Compoships;

class Football_statistic extends Model
{
    use HasFactory;
    use Compoships;


    public function venue()
    {
        return $this->belongsTo(Football_venue::class,'venueapi_id', 'venueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function home_stats()
    {
        return $this->belongsTo(Api_football_league_standing::class,
                ['leagueapi_id', 'season', 'teams_homeapi_id'],
                ['leagueapi_id', 'season', 'teamapi_id'],
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function away_stats()
    {
        return $this->belongsTo(Api_football_league_standing::class,
                ['leagueapi_id', 'season', 'teams_awayapi_id'],
                ['leagueapi_id', 'season', 'teamapi_id'],
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function coach_home()
    {
        return $this->belongsTo(Football_coach::class,'lineups_coach_homeapi_id', 'coachapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function coach_away()
    {
        return $this->belongsTo(Football_coach::class,'lineups_coach_awayapi_id', 'coachapi_id')
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
