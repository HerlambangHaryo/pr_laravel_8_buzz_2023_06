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

use App\Models\api_football_player_statistic;

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
            $model      = Football_odd::where('id', '=', $id);
                                     
            $model->update([     
                'one'   => 1
            ]);
            
        // ----------------------------------------------------------- Send  
            return redirect()  
                ->route('One.index')
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
            $model      = Football_odd::where('id', '=', $id);
                                     
            $model->update([     
                'oneye'   => 1
            ]);
            
        // ----------------------------------------------------------- Send  
            return redirect()  
                ->route('Oneye.index')
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

            if(is_null($row->end_ah_pattern) && is_null($row->end_gou_pattern) )
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
            elseif(!is_null($row->end_ah_pattern) && !is_null(!$row->end_gou_pattern) )
            {
                $pattern    = Football_pattern_from::select(
                                    '*' 
                                )   
                                ->where('leagueapi_id', '=', $leagueapi_id)

                                ->where('pre_ah_pattern', '=', $row->pre_ah_pattern)  
                                ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)    

                                ->where('end_ah_pattern', '=', $row->end_ah_pattern)  
                                ->where('end_gou_pattern', '=', $row->end_gou_pattern)    

                                ->whereNull('deleted_at')   
                                ->first();

                                
                $pattern_mirror    = Football_pattern_from::select(
                                        '*' 
                                    )   
                                    ->where('leagueapi_id', '=', $leagueapi_id)

                                    ->where('pre_ah_pattern', '=', $row->pre_ah_pattern_mirror)  
                                    ->where('pre_gou_pattern', '=', $row->pre_gou_pattern)    

                                    ->where('end_ah_pattern', '=', $row->end_ah_pattern_mirror)  
                                    ->where('end_gou_pattern', '=', $row->end_gou_pattern)    

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
            $row           = Football_odd::select(
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
 
    public function dataonlypre($leagueapi_id, $season, $fixtureapi_id)
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
            $row            = Football_odd::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') 
                                )   
                                ->where('leagueapi_id', '=', $leagueapi_id)
                                ->where('season', '=', $season)   
                                ->where('fixtureapi_id', '=', $fixtureapi_id)   

                                ->whereNull('deleted_at')   
                                ->first();
 
            $data0          = Football_odd::select(
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

                            
            $data1           = Football_odd::select(
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
}
