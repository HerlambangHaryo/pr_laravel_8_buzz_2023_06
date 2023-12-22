<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Football_team;
use App\Models\Football_league;


use App\Models\Api_football_league_standing;

use Awobaz\Compoships\Compoships;

class Football_fixture extends Model
{
    use HasFactory;
    use Compoships;


    public function standingsx()
    {
        return $this->belongsTo(Api_football_league_standing::class,
                ['fixtureapi_id', 'leagueapi_id', 'season'],
                ['fixtureapi_id', 'leagueapi_id', 'season'],
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

    public function odd()
    {
        return $this->belongsTo(Football_odd::class,
                ['leagueapi_id', 'season', 'fixtureapi_id'],
                ['leagueapi_id', 'season', 'fixtureapi_id'],
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

    public function league()
    {
        return $this->belongsTo(Football_league::class,'leagueapi_id', 'leagueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function eye()
    {
        return $this->belongsTo(football_set_eye::class,'fixtureapi_id', 'fixtureapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function arya()
    {
        return $this->hasMany(football_arya_tip::class,'fixtureapi_id', 'fixtureapi_id') ;
    }
}
