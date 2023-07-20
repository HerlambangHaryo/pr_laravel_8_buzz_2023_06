<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_league;
use App\Models\Football_odd;
use App\Models\Apiaccount;
use App\Models\Api_football_standing;

use App\Models\Football_pattern_from; 
use App\Models\Football_pattern_only;

class PatternsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Patterns';
    public $type        = 'backend';
 
    public function pre_only($leagueapi_id, $season, $fixtureapi_id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'pre_only';  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
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

            if(is_null($row->end_ah_pattern) && is_null($row->end_ah_pattern) )
            {
                $pattern    = Football_pattern_from::select(
                                    '*' 
                                )   
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)  
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)    

                                ->where('end_ah_pattern', '=', $row->pre_ah_pattern)  
                                ->where('end_gou_pattern', '=', $row->pre_gou_pattern)    

                                ->whereNull('deleted_at')   
                                ->first();

                                
                $pattern_mirror    = Football_pattern_from::select(
                                        '*' 
                                    )   
                                    ->where('leagueapi_id', '=', $leagueapi_id)

                                    ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)  
                                    ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)    

                                    ->where('end_ah_pattern', '=', $row->pre_ah_pattern_mirror)  
                                    ->where('end_gou_pattern', '=', $row->pre_gou_pattern)    

                                    ->whereNull('deleted_at')   
                                    ->first();
            }
                                    
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
                    'pattern',  
                    'pattern_mirror'  
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function odd($leagueapi_id, $season, $fixtureapi_id, $odd)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();   

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = 'odd';  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = $odd;
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
}
