<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Football_odd; 
use App\Models\Football_league; 

class MatchdoneController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Matchdone';
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
            $view           = define_view($this->template, $this->type, 'Matchfinished', $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $data           = Football_odd::select(
                                    'leagueapi_id',
                                    'season', 
                                    DB::raw('count(*) as counter')
                                )
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)   
                                ->whereNull('deleted_at')   
                                ->orderby('date')    
                                ->groupby('leagueapi_id')  
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
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function timegroup()
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

            $view_file      = 'timegroup';
            $view           = define_view($this->template, $this->type, 'Matchfinished', $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $date_start     = define_date("start");
            $date_end       = define_date("end");
            
            $data           = Football_odd::select(
                                    // DB::raw('year( DATE_ADD(date, INTERVAL 7 HOUR) ) as yearx'), 
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y") as yeary'),

                                    // DB::raw('month( DATE_ADD(date, INTERVAL 7 HOUR) ) as monthx'),
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%m") as monthy'),

                                    // DB::raw('day( DATE_ADD(date, INTERVAL 7 HOUR) ) as dayx'),
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%d") as dayy'),

                                    // DB::raw('hour( DATE_ADD(date, INTERVAL 7 HOUR) ) as hourx'),
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H") as houry'),
                                    
                                    // DB::raw('minute( DATE_ADD(date, INTERVAL 7 HOUR) ) as minutex'), 
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%i") as minutey'),
                                    
                                    DB::raw('count(*) as counter')
                                )
                                ->where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)  
                                ->whereNotNull('special_odds')    
                                ->whereNull('deleted_at')   
                                // ->groupby( DB::raw('year( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                                ->groupby( DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y")') )
                                // ->groupby( DB::raw('month( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                                ->groupby( DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%m")') )
                                // ->groupby( DB::raw('day( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                                ->groupby( DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%d")') )
                                // ->groupby( DB::raw('hour( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                                ->groupby( DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H")') )
                                // ->groupby( DB::raw('minute( DATE_ADD(date, INTERVAL 7 HOUR) )') )
                                ->groupby( DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%i")') )
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
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
    
 
    public function time($year, $month, $day, $hour, $minute)
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
            $view           = define_view($this->template, $this->type, 'Matchfinished', $additional_view, $view_file);
             
        // ----------------------------------------------------------- Action 
            $date_start = define_date("start");
            $date_end = define_date("end"); 
            
            $data       = Football_odd::select(
                                '*',
                                DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                            )
                            ->where( DB::raw('year( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $year) 
                            ->where( DB::raw('month( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $month) 
                            ->where( DB::raw('day( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $day) 
                            ->where( DB::raw('hour( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $hour) 
                            ->where( DB::raw('minute( DATE_ADD(date, INTERVAL 7 HOUR) )'), '=', $minute)  
                            ->whereNotNull('special_odds')    
                            ->whereNull('deleted_at')
                            ->orderby('leagueapi_id')      
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
                )
            );
        ///////////////////////////////////////////////////////////////
    }  
 
    public function leagues($leagueapi_id, $season)
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
            $view           = define_view($this->template, $this->type, 'Matchfinished', $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            $league         = Football_league::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();
                                
            $data           = Football_odd::select( 
                                    '*',
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%Y-%m-%d") as tanggal'),
                                    DB::raw('DATE_FORMAT(DATE_ADD(date, INTERVAL 7 HOUR), "%H:%i:%s") as jam')
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
                    'league',  
                    'season',   
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
}
