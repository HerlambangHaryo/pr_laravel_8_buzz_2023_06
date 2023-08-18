<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_fixture;
use App\Models\Football_league;
use App\Models\Football_team;

use App\Models\Football_player_squad;

class TeamsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Teams';
    public $type        = 'backend';

    public function show($id)
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

            $view_file      = 'show';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_end       = define_date("end");

            $data           = Football_team::select(
                                    '*',
                                )
                                ->where('teamapi_id', '=', $id)
                                ->first();

            $fixtures0       = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y-%m-%d") as tanggal'),
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H:%i:%s") as jam')
                                )
                                ->where('teams_homeapi_id', '=', $id)
                                ->where('date', '>=', $date_end)
                                ->limit(2);

            $fixtures       = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y-%m-%d") as tanggal'),
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H:%i:%s") as jam')
                                )
                                ->where('teams_awayapi_id', '=', $id)
                                ->where('date', '>=', $date_end)
                                ->limit(2)
                                ->union($fixtures0)
                                ->orderby('date')
                                ->get();

            $result0       = Football_fixture::select(
                                '*',
                                DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y-%m-%d") as tanggal'),
                                DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H:%i:%s") as jam')
                            )
                            ->where('teams_homeapi_id', '=', $id)
                            ->where('date', '<=', $date_end)
                            ->limit(2)
                            ->orderby('date','desc');

            $result       = Football_fixture::select(
                                '*',
                                DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y-%m-%d") as tanggal'),
                                DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H:%i:%s") as jam')
                            )
                            ->where('teams_awayapi_id', '=', $id)
                            ->where('date', '<=', $date_end)
                            ->limit(2)
                            ->orderby('date','desc')
                            ->union($result0)
                            ->orderby('date','desc')
                            ->get();


            $player_squad       = Football_player_squad::where('teamapi_id', '=', $id)
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
                    'fixtures',
                    'result',
                    'player_squad'
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
