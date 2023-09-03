<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Football_league;
use App\Models\Football_team;
use App\Models\Football_venue;
use App\Models\Football_statistic;
use App\Models\Api_football_league_standing;
use App\Models\Football_pattern_from;
use App\Models\Football_pattern_only;
use App\Models\Football_forecast_pattern;

use Awobaz\Compoships\Compoships;
use DB;

class Football_odd extends Model
{
    use HasFactory;
    use Compoships;

    public function fixture()
    {
        return $this->belongsTo(Football_fixture::class,
                ['leagueapi_id', 'season', 'fixtureapi_id'],
                ['leagueapi_id', 'season', 'fixtureapi_id'],
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

    public function forecast_pattern()
    {
        return $this->belongsTo(Football_forecast_pattern::class,
                ['leagueapi_id', 'season', 'fixtureapi_id'],
                ['leagueapi_id', 'season', 'fixtureapi_id'],
            )
            ->withDefault([
                'total_fixtures' => 0,
            ]);
    }

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

    public function onlypre()
    {
        return $this->belongsTo(Football_pattern_only::class,
                ['leagueapi_id', 'pre_ah_pattern', 'pre_gou_pattern'],
                ['leagueapi_id', 'end_ah_pattern', 'end_gou_pattern'],
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

    public static function data_pattern_prepre($leagueapi_id,
            $fixtureapi_id,

            $pre_ah_pattern,
            $pre_ah_pattern_mirror,
            $pre_gou_pattern,

            $end_ah_pattern,
            $end_ah_pattern_mirror,
            $end_gou_pattern
        )
    {

        $data_1         = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                DB::raw('"Ori" as statusx')
                            )
                            ->where('fixtureapi_id', '=', $fixtureapi_id)
                            ->whereNull('deleted_at');


        $data0          = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                DB::raw('"Ori" as statusx')
                            )
                            ->where('leagueapi_id', '=', $leagueapi_id)

                            ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                            ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                            ->where('end_ah_pattern', '=', $pre_ah_pattern)
                            ->where('end_gou_pattern', '=', $pre_gou_pattern)

                            ->whereNull('deleted_at');


        $data           = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                DB::raw('"Mir" as statusx')
                            )
                            ->where('leagueapi_id', '=', $leagueapi_id)

                            ->where('pre_ah_pattern', '=', $pre_ah_pattern_mirror)
                            ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                            ->where('end_ah_pattern', '=', $pre_ah_pattern_mirror)
                            ->where('end_gou_pattern', '=', $pre_gou_pattern)

                            ->whereNull('deleted_at')
                            ->union($data0)
                            ->union($data_1)
                            ->get();

        return $data;
    }

    public static function data_pattern_onlypre($leagueapi_id,
            $fixtureapi_id,

            $pre_ah_pattern,
            $pre_ah_pattern_mirror,
            $pre_gou_pattern,

            $end_ah_pattern,
            $end_ah_pattern_mirror,
            $end_gou_pattern
        )
    {

        $data_1         = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                DB::raw('"Ori" as statusx')
                            )
                            ->where('fixtureapi_id', '=', $fixtureapi_id)
                            ->whereNull('deleted_at');


        $data0          = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                DB::raw('"Ori" as statusx')
                            )
                            ->where('leagueapi_id', '=', $leagueapi_id)


                            ->where('end_ah_pattern', '=', $pre_ah_pattern)
                            ->where('end_gou_pattern', '=', $pre_gou_pattern)

                            ->whereNull('deleted_at');


        $data           = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                DB::raw('"Mir" as statusx')
                            )
                            ->where('leagueapi_id', '=', $leagueapi_id)


                            ->where('end_ah_pattern', '=', $pre_ah_pattern_mirror)
                            ->where('end_gou_pattern', '=', $pre_gou_pattern)

                            ->whereNull('deleted_at')
                            ->union($data0)
                            ->union($data_1)
                            ->get();

        return $data;
    }

    public function arya()
    {
        return $this->hasMany(football_arya_tip::class,'fixtureapi_id', 'fixtureapi_id') ;
    }
}
