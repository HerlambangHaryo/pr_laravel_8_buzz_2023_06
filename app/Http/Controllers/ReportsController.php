<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Football_odd; 

class ReportsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Reports';
    public $type        = 'backend';
 
    public function undone()
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

            $view_file      = 'undone';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $data           = Football_odd::select(
                                    'leagueapi_id', 
                                    DB::raw('count(*) as counter')
                                )
                                ->where('pre_response', '!=', 3)
                                ->where('end_response', '!=', 3)
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])
                                ->groupby('leagueapi_id')
                                ->orderby(DB::raw('count(*)'), 'desc')
                                ->limit(10)
                                ->get();
                                  
            $undone         = Football_odd::where('pre_response', '!=', 3)
                                ->where('end_response', '!=', 3)
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])
                                ->count();
                                    
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
                    'undone',  
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
}
