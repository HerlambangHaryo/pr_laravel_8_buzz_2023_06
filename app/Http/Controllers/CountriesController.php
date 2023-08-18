<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\football_odd;
use App\Models\football_league;
use App\Models\country;

class CountriesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Countries';
    public $type        = 'backend';

    public function index()
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

            $view_file      = 'country';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data           = Football_league::select(
                                    'country_name'
                                )
                                ->groupby('country_name')
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
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function leagues($country)
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

            $view_file      = 'leagues';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data_country   = Country::where('name', '=', $country)
                                ->first();

            $data           = Football_league::select(
                                    'football_fixtures.leagueapi_id',
                                    'football_fixtures.season',
                                    'football_leagues.name',
                                    'football_leagues.type',
                                    'football_leagues.bookmakersapi_id',
                                    'football_leagues.bookmakers_name',
                                )
                                ->join('football_fixtures', 'football_fixtures.leagueapi_id', '=', 'football_leagues.leagueapi_id')
                                    ->where('football_leagues.country_name', '=', $country)
                                    ->whereNull('football_leagues.deleted_at')
                                    ->groupby(
                                        'football_fixtures.leagueapi_id',
                                        'football_fixtures.season',
                                        'football_leagues.name',
                                        'football_leagues.type',
                                        'football_leagues.bookmakersapi_id',
                                        'football_leagues.bookmakers_name',
                                    )
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
                    'data_country',
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
