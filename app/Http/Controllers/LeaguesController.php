<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_fixture;
use App\Models\Football_league;
use App\Models\Football_odd;
use App\Models\Apiaccount;
use App\Models\Api_football_league_standing;

use App\Models\Football_pattern_from;

class LeaguesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Leagues';
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
            $data           = Football_league::whereNull('deleted_at')
                                ->orderby('leagueapi_id')
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

    public function create()
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

            $view_file      = 'create';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data           = array();

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

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

            $leagueapi_id   = $request->leagueapi_id;

            $apiaccount     = Apiaccount::where('active', '=', 1)->first();

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/leagues?id=$leagueapi_id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->apikey"
                ],
            ]);

        // ----------------------------------------------------------- Action
            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err)
            {
                echo "cURL Error #:" . $err;
            }
            else
            {
                $data = $response;
                $decode = json_decode($data, true);


                // Using dd() to print the debug output
                // dd($decode);
                // die();

                foreach ($decode['response'] as $row)
                {
                    // $leagueapi_id       = $row['league']['id'];
                    $leagueapi_name     = $row['league']['name'];
                    $leagueapi_type     = $row['league']['type'];
                    $leagueapi_logo     = $row['league']['logo'];
                    $country_name       = $row['country']['name'];

                }

                $apiaccount_model = Apiaccount::where('active', '=', 1);

                $apiaccount_model->update([
                        'counter'        => $apiaccount->counter - 1,
                    ]);

                //get post by ID
                $data = Football_league::create([
                    'leagueapi_id'      => $leagueapi_id,
                    'name'              => $leagueapi_name,
                    'type'              => $leagueapi_type,
                    'logo'              => $leagueapi_logo,
                    'country_name'      => $country_name,
                ]);
            }
        // ----------------------------------------------------------- Send
            return redirect()
                ->route($content.'.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }

    public function edit($id)
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

            $view_file      = 'edit';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data           = Football_league::findOrFail($id);

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

    public function update(Request $request, $id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

            $leagueapi_id   = $request->leagueapi_id;

            $apiaccount     = Apiaccount::where('active', '=', 1)->first();

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/leagues?id=$leagueapi_id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->apikey"
                ],
            ]);

        // ----------------------------------------------------------- Action
            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err)
            {
                echo "cURL Error #:" . $err;
            }
            else
            {
                $data = $response;
                $decode = json_decode($data, true);

                foreach ($decode['response'] as $row)
                {
                    // $leagueapi_id       = $row['league']['id'];
                    $leagueapi_name     = $row['league']['name'];
                    $leagueapi_type     = $row['league']['type'];
                    $leagueapi_logo     = $row['league']['logo'];
                    $country_name       = $row['country']['name'];

                }

                $apiaccount_model = Apiaccount::where('active', '=', 1);

                $apiaccount_model->update([
                        'counter'        => $apiaccount->counter - 1,
                    ]);

                //get post by ID
                $data = Football_league::findOrFail($id);

                //update post
                $data->update([
                    'leagueapi_id'      => $leagueapi_id,
                    'name'              => $leagueapi_name,
                    'type'              => $leagueapi_type,
                    'logo'              => $leagueapi_logo,
                    'country'           => $country_name,
                ]);
            }
        // ----------------------------------------------------------- Send
            return redirect()
                ->route($content.'.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }

    public function country()
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
                                    'country'
                                )
                                ->groupby('country')
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

    public function today($leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'today';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'notstarted';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)

                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)

                                ->whereNull('deleted_at')
                                ->orderby('date')
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
                    'leagueapi_id',
                    'season',
                    'league',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function notstarted($leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'notstarted';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'notstarted';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end_15");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_fixture::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)

                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)

                                ->whereNull('deleted_at')
                                ->orderby('date')
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
                    'leagueapi_id',
                    'season',
                    'league',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function matchfinished($leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'matchfinished';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'round';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_fixture::select(
                                    'leagueapi_id',
                                    'season',
                                    'round',
                                )

                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])

                                ->whereNull('deleted_at')
                                ->groupby('leagueapi_id')
                                ->groupby('season')
                                ->groupby('round')
                                ->orderby('date')
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
                    'leagueapi_id',
                    'league',
                    'season',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function detailround($leagueapi_id, $season, $round)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'matchfinished';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'detailround';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $round_str_replace  = str_replace('_', ' ', $round);

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_fixture::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )

                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)
                                ->where('round', '=', $round_str_replace)
                                ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])

                                ->whereNull('deleted_at')
                                ->orderby('date')
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
                    'leagueapi_id',
                    'league',
                    'season',
                    'round',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function standing($leagueapi_id, $season, $stats)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'standing';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'standing_'.$stats;
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Api_football_league_standing::select(
                                    '*'
                                )

                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)

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
                    'leagueapi_id',
                    'season',
                    'league',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function pecheck($leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'pecheck';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'pecheck';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_fixture::select(
                                    'pre_response',
                                    'end_response',
                                    'fixture_status',
                                    'season'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                // ->where('season', '=', $season)
                                ->groupby('pre_response')
                                ->groupby('end_response')
                                ->groupby('fixture_status')
                                ->groupby('season')
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
                    'leagueapi_id',
                    'season',
                    'league',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function pattern_odd($leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'pattern';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'pattern_odd';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Football_fixture::select(
                                    'pre_ah_pattern',
                                    'pre_gou_pattern',
                                    'end_ah_pattern',
                                    'end_gou_pattern',
                                    DB::raw('count(*) as counter')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->whereNotNull('pre_ah_pattern')
                                ->whereNotNull('pre_gou_pattern')
                                ->whereNotNull('end_ah_pattern')
                                ->whereNotNull('end_gou_pattern')
                                // ->where('pre_ah_pattern', '!=', 'H')
                                // ->where('end_ah_pattern', '!=', 'H')
                                // ->where('pre_gou_pattern', '!=', 'G')
                                // ->where('end_gou_pattern', '!=', 'G')
                                ->whereIN('fixture_status', ['Match Finished Ended', 'Match Finished'])
                                ->groupby('pre_ah_pattern')
                                ->groupby('pre_gou_pattern')
                                ->groupby('end_ah_pattern')
                                ->groupby('end_gou_pattern')
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
                    'leagueapi_id',
                    'season',
                    'league',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function pattern_preend($leagueapi_id, $season)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'pattern';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'pattern_preend';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_pattern_from::select(
                                    'pre_ah_pattern',
                                    'pre_gou_pattern',
                                    'end_ah_pattern',
                                    'end_gou_pattern',
                                    'total_fixtures',
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
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
                    'leagueapi_id',
                    'season',
                    'league',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function patternfixtures($leagueapi_id, $season, $pre_ah_pattern, $pre_gou_pattern, $end_ah_pattern, $end_gou_pattern)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'patternfixtures ';

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'patternfixtures';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();

            $data           = Football_fixture::select(
                                    '*'
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $pre_gou_pattern)
                                ->where('end_ah_pattern', '=', $end_ah_pattern)
                                ->where('end_gou_pattern', '=', $end_gou_pattern)
                                ->whereIN('fixture_status', ['Match Finished Ended', 'Match Finished'])
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
                    'leagueapi_id',
                    'league',
                    'season',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function setbookmakers_league($bookmakersapi_id, $leagueapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

            if($bookmakersapi_id == 8)
            {
                $bookmakers_name = 'Bet365';
            }
            elseif($bookmakersapi_id == 11)
            {
                $bookmakers_name = '1xBet';
            }
            elseif($bookmakersapi_id == 2)
            {
                $bookmakers_name = 'Marathon';
            }
            elseif($bookmakersapi_id == 28)
            {
                $bookmakers_name = 'ComeOn';
            }
        // ----------------------------------------------------------- Action
            $model      = Football_league::where('leagueapi_id', '=', $leagueapi_id);

            $model->update([
                'bookmakersapi_id'      => $bookmakersapi_id,
                'bookmakers_name'       => $bookmakers_name
            ]);

        // ----------------------------------------------------------- Send
            return redirect()
                ->route('Leagues.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    }
}
