<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_odd;
use App\Models\Api_football_player_analysis;
use App\Models\Football_fixture;

use App\Models\research_on_anytime_goal_scorer;
use App\Models\research_on_player_to_be_booked;

class PlayersController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Players';
    public $type        = 'backend';

    public function roundratings($leagueapi_id, $season, $round)
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

            $view_file      = 'roundratings';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $pre_data       = Football_fixture::select( 'fixtureapi_id')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('round', '=', str_replace('_', ' ', $round));

            $goalkeeper     = Api_football_player_analysis::whereIN('fixtureapi_id', $pre_data)
                                ->where('position', '=', 'G')
                                ->where('rating', '>=', 7.5)
                                ->whereNull('deleted_at')
                                ->get();

            $defender       = Api_football_player_analysis::whereIN('fixtureapi_id', $pre_data)
                                ->where('position', '=', 'D')
                                ->where('rating', '>=', 7.5)
                                ->whereNull('deleted_at')
                                ->get();

            $midfielder     = Api_football_player_analysis::whereIN('fixtureapi_id', $pre_data)
                                ->where('position', '=', 'M')
                                ->where('rating', '>=', 7.5)
                                ->whereNull('deleted_at')
                                ->get();

            $attacker     = Api_football_player_analysis::whereIN('fixtureapi_id', $pre_data)
                                ->where('position', '=', 'F')
                                ->where('rating', '>=', 7.5)
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
                    'goalkeeper',
                    'defender',
                    'midfielder',
                    'attacker'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function anytimegoalscorers($leagueapi_id, $season, $round)
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

            $view_file      = 'anytimegoalscorers';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $pre_data       = Football_fixture::select( 'fixtureapi_id')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('round', '=', str_replace('_', ' ', $round));

            $data       = research_on_anytime_goal_scorer::whereIN('fixtureapi_id', $pre_data)
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                // ->whereNull('deleted_at')
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
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function today_ags()
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

            $view_file      = 'today_ags';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start_0");
            $date_end       = define_date("end_plus_7");

            $pre_data       = Football_fixture::select( 'fixtureapi_id')
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)
                                ->whereIN('fixture_status',  ['Not Started', 'Not Started Goto', 'Not Started One']);

            $data       = research_on_anytime_goal_scorer::whereIN('fixtureapi_id', $pre_data)
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
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function playertobebooked($leagueapi_id, $season, $round)
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

            $view_file      = 'anytimegoalscorers';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $pre_data       = Football_fixture::select( 'fixtureapi_id')
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('round', '=', str_replace('_', ' ', $round));

            $data           = research_on_player_to_be_booked::whereIN('fixtureapi_id', $pre_data)
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                // ->whereNull('deleted_at')
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
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function today_ptbb()
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

            $view_file      = 'anytimegoalscorers';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start_0");
            $date_end       = define_date("end");

            $pre_data       = Football_fixture::select( 'fixtureapi_id')
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)
                                ->whereIN('fixture_status',  ['Not Started', 'Not Started Goto', 'Not Started One']);

            $data           = research_on_player_to_be_booked::whereIN('fixtureapi_id', $pre_data)
                                // ->whereNull('deleted_at')
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
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

}
