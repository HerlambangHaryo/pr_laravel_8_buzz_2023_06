<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_arya_tip;
use App\Models\Football_odd;
use App\Models\Football_fixture;
use App\Models\Football_set_eye;


class AryatipsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Aryatips';
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

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data           = Football_arya_tip::whereNull('deleted_at')
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

    public function tip($leagueapi_id, $season, $fixtureapi_id, $betapi_id, $value, $odd)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            if($odd == 'NONE')
            {
                $first      = Football_odd::where('leagueapi_id', '=', $leagueapi_id)
                                    ->where('season', '=', $season)
                                    ->where('fixtureapi_id', '=', $fixtureapi_id)
                                    ->value('pre_'.$value);

                $odd = $first;
            }

            //get post by ID
            Football_arya_tip::create([
                'leagueapi_id'      => $leagueapi_id,
                'season'            => $season,
                'fixtureapi_id'     => $fixtureapi_id,
                'betapi_id'         => $betapi_id,
                'value'             => $value,
                'odd'               => $odd,
            ]);

            $first      = Football_fixture::where('fixtureapi_id', '=', $fixtureapi_id)
                            ->first();

            //get post by ID
            Football_set_eye::create([
                'football_fixture_id'   => $first->id,
                'leagueapi_id'          => $leagueapi_id,
                'season'                => $season,
                'fixtureapi_id'         => $fixtureapi_id,
                'status'                => 1,
            ]);

        // ----------------------------------------------------------- Send
            return redirect()
                ->route('Aryatips.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }
}
