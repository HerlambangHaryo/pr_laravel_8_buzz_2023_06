<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_fixture;
use App\Models\Football_league;
use App\Models\Football_odd;
use App\Models\Apiaccount;
use App\Models\Api_football_standing;

use App\Models\Football_pattern_from;
use App\Models\Football_pattern_only;

use App\Models\api_football_player_statistic;

use App\Models\Football_set_one;
use App\Models\Football_set_eye;

class FixturesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Fixtures';
    public $type        = 'backend';

    public function setone($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $first      = Football_fixture::where('id', '=', $id)
                            ->first();


            //get post by ID
            Football_set_one::create([
                'football_fixture_id'   => $id,
                'leagueapi_id'          => $first->leagueapi_id,
                'season'                => $first->season,
                'fixtureapi_id'         => $first->fixtureapi_id,
                'status'                => 1,
            ]);

        // ----------------------------------------------------------- Send
            return redirect()
                ->route('Dashboard.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }

    public function setoneye($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $first      = Football_fixture::where('id', '=', $id)
                            ->first();


            //get post by ID
            Football_set_eye::create([
                'football_fixture_id'   => $id,
                'leagueapi_id'          => $first->leagueapi_id,
                'season'                => $first->season,
                'fixtureapi_id'         => $first->fixtureapi_id,
                'status'                => 1,
            ]);

        // ----------------------------------------------------------- Send
            return redirect()
                ->route('Dashboard.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }

    public function setoneyefixture($fixture)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $first      = Football_fixture::where('fixtureapi_id', '=', $fixture)
                            ->first();


            //get post by ID
            Football_set_eye::create([
                'football_fixture_id'   => $first->id,
                'leagueapi_id'          => $first->leagueapi_id,
                'season'                => $first->season,
                'fixtureapi_id'         => $first->fixtureapi_id,
                'status'                => 1,
            ]);

        // ----------------------------------------------------------- Send
            return redirect()
                ->route('Eye.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }

    public function information($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'information';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();
        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function headtohead($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'headtohead';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row           = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data0          = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('teams_homeapi_id', '=', $row->teams_homeapi_id)
                                ->where('teams_awayapi_id', '=', $row->teams_awayapi_id)
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended']);

            $data          = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('teams_homeapi_id', '=', $row->teams_awayapi_id)
                                ->where('teams_awayapi_id', '=', $row->teams_homeapi_id)
                                ->union($data0)
                                ->limit(5)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function statistics($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'statistics';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row           = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function players($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'players';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row           = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $home           = api_football_player_statistic::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)
                                ->where('teamapi_id', '=', $row->teams_homeapi_id)

                                ->whereNull('deleted_at')
                                ->get();

            $away           = api_football_player_statistic::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)
                                ->where('teamapi_id', '=', $row->teams_awayapi_id)

                                ->whereNull('deleted_at')
                                ->get();
        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'home',
                    'away',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function prepre($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'prepre';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data           = Football_odd::data_pattern_prepre($leagueapi_id,
                                        $fixtureapi_id,

                                        $row->pre_ah_pattern,
                                        $row->pre_ah_pattern_mirror,
                                        $row->pre_gou_pattern,

                                        $row->end_ah_pattern,
                                        $row->end_ah_pattern_mirror,
                                        $row->end_gou_pattern
                                    );

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preprecountry($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'prepre';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $league0         = Football_league::select('country_name')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $league1         = Football_league::select('leagueapi_id')
                                ->where('country_name', '=', $league0->country_name);

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');

            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function prepreworld($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'prepre';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

            $row            = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->where('season', '=', $season)
                        ->where('fixtureapi_id', '=', $fixtureapi_id)

                        ->whereNull('deleted_at')
                        ->first();

                $league0         = Football_league::select('country_name')
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->first();

                $league1         = Football_league::select('leagueapi_id')
                        ->where('country_name', '=', $league0->country_name);

                $data_1          = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                        ->whereNull('deleted_at');

                $data0          = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                        ->where('end_ah_pattern', '=', $row->pre_ah_pattern)
                        ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                        ->whereNull('deleted_at');


                $data           = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )

                        ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                        ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                        ->where('end_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                        ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                        ->whereNull('deleted_at')
                        ->union($data0)
                        ->union($data_1)
                        ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preend($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'preend';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                    DB::raw('"Ori" as statusx')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');


            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                    DB::raw('"Ori" as statusx')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal'),
                                    DB::raw('"Mir" as statusx')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preendcountry($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'preend';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $league0         = Football_league::select('country_name')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $league1         = Football_league::select('leagueapi_id')
                                ->where('country_name', '=', $league0->country_name);

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');

            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

            $row_pattern = $row->preend;

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data',
                    'row_pattern'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preendworld($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'preend';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

            $row            = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->where('season', '=', $season)
                        ->where('fixtureapi_id', '=', $fixtureapi_id)

                        ->whereNull('deleted_at')
                        ->first();

                $league0         = Football_league::select('country_name')
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->first();

                $league1         = Football_league::select('leagueapi_id')
                        ->where('country_name', '=', $league0->country_name);

                $data_1          = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                        ->whereNull('deleted_at');

                $data0          = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                        ->where('end_ah_pattern', '=', $row->end_ah_pattern)
                        ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                        ->whereNull('deleted_at');


                $data           = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )

                        ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                        ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                        ->where('end_ah_pattern', '=', $row->end_ah_pattern_mirror)
                        ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                        ->whereNull('deleted_at')
                        ->union($data0)
                        ->union($data_1)
                        ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preend_four($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'preend_four';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');


            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern_4', '=', $row->pre_ah_pattern_mirror_4)
                                ->where('pre_gou_pattern_4', '=', $row->pre_gou_pattern_4)

                                ->where('end_ah_pattern_4', '=', $row->end_ah_pattern_mirror_4)
                                ->where('end_gou_pattern_4', '=', $row->end_gou_pattern_4)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preend_fourcountry($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'preend_four';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $league0         = Football_league::select('country_name')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $league1         = Football_league::select('leagueapi_id')
                                ->where('country_name', '=', $league0->country_name);

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');

            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern_4', '=', $row->pre_ah_pattern_4)
                                ->where('pre_gou_pattern_4', '=', $row->pre_gou_pattern_4)

                                ->where('end_ah_pattern_4', '=', $row->pre_ah_pattern_4)
                                ->where('end_gou_pattern_4', '=', $row->end_gou_pattern_4)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern_4', '=', $row->pre_ah_pattern_mirror_4)
                                ->where('pre_gou_pattern_4', '=', $row->pre_gou_pattern_4)

                                ->where('end_ah_pattern_4', '=', $row->end_ah_pattern_mirror_4)
                                ->where('end_gou_pattern_4', '=', $row->end_gou_pattern_4)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function preend_fourworld($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'preend_four';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

            $row            = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->where('season', '=', $season)
                        ->where('fixtureapi_id', '=', $fixtureapi_id)

                        ->whereNull('deleted_at')
                        ->first();

                $league0         = Football_league::select('country_name')
                        ->where('leagueapi_id', '=', $leagueapi_id)
                        ->first();

                $league1         = Football_league::select('leagueapi_id')
                        ->where('country_name', '=', $league0->country_name);

                $data_1          = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                        ->whereNull('deleted_at');

                $data0          = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )
                        ->where('pre_ah_pattern_4', '=', $row->pre_ah_pattern_4)
                        ->where('pre_gou_pattern_4', '=', $row->pre_gou_pattern_4)

                        ->where('end_ah_pattern_4', '=', $row->end_ah_pattern_4)
                        ->where('end_gou_pattern_4', '=', $row->end_gou_pattern_4)

                        ->whereNull('deleted_at');


                $data           = Football_odd::select(
                            '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                        )

                        ->where('pre_ah_pattern_4', '=', $row->pre_ah_pattern_mirror_4)
                        ->where('pre_gou_pattern_4', '=', $row->pre_gou_pattern_4)

                        ->where('end_ah_pattern_4', '=', $row->end_ah_pattern_mirror_4)
                        ->where('end_gou_pattern_4', '=', $row->end_gou_pattern_4)

                        ->whereNull('deleted_at')
                        ->union($data0)
                        ->union($data_1)
                        ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }







    public function dataonlyprecountry($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'dataonlypre';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $league0         = Football_league::select('country_name')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $league1         = Football_league::select('leagueapi_id')
                                ->where('country_name', '=', $league0->country_name);

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');

            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->whereIN('leagueapi_id', $league1)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function dataonlypreworld($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'dataonlypre';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');

            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                // ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                // ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function datapreend($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'datapreend';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data_1          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('fixtureapi_id', '=', $row->fixtureapi_id)
                                ->whereNull('deleted_at');


            $data0          = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at');


            $data           = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)

                                ->whereNull('deleted_at')
                                ->union($data0)
                                ->union($data_1)
                                ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function otherpattern($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'otherpattern';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data0          = Football_fixture::select(
                                'pre_ah_pattern',
                                'pre_gou_pattern',
                                'end_ah_pattern',
                                'end_gou_pattern',
                                DB::raw('count(*) as counter'))
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)
                                ->whereNull('deleted_at')
                                ->groupBy('pre_ah_pattern')
                                ->groupBy('pre_gou_pattern')
                                ->groupBy('end_ah_pattern')
                                ->groupBy('end_gou_pattern')
                                ->get();


            $data1           = Football_fixture::select(
                                    'pre_ah_pattern',
                                    'pre_gou_pattern',
                                    'end_ah_pattern',
                                    'end_gou_pattern',
                                    DB::raw('count(*) as counter'))
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)


                                ->whereNull('deleted_at')
                                ->groupBy('pre_ah_pattern')
                                ->groupBy('pre_gou_pattern')
                                ->groupBy('end_ah_pattern')
                                ->groupBy('end_gou_pattern')
                                ->get();


        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data0',
                    'data1'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function onlypre($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'onlypre';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('fixtureapi_id', '=', $fixtureapi_id)

                                ->whereNull('deleted_at')
                                ->first();

            $data           = Football_odd::data_pattern_onlypre($leagueapi_id,
                                        $row->fixtureapi_id,

                                        $row->pre_ah_pattern,
                                        $row->pre_ah_pattern_mirror,
                                        $row->pre_gou_pattern,

                                        $row->end_ah_pattern,
                                        $row->end_ah_pattern_mirror,
                                        $row->end_gou_pattern
                                    );

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'row',
                    'leagueapi_id',
                    'season',
                    'data'
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
