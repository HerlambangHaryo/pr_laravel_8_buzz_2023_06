<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Football_odd; 

class DashboardController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Dashboard';
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

            $view_file      = 'dashboard';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action   
            $data           = array();
            $date_start     = define_date("start");
            $date_end       = define_date("end");

            
            $date_start_1   = define_date("start_1");
            $date_start_2   = define_date("start_2");
                                  
            $undone         = Football_odd::where('pre_response', '!=', 3)
                                ->where('end_response', '!=', 3)
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])
                                ->count();
                                  
            $today          = Football_odd::where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)    
                                ->count();

            $today_pre_3    = Football_odd::where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)    
                                ->where('pre_response', '=', 3)
                                ->count();
                                    
            $today_pre_non  = Football_odd::where('date', '>=', $date_start)
                                ->where('date', '<=', $date_end)    
                                ->where('pre_response', '!=', 3)
                                ->count();

                                
            $date_start_7     = define_date("start_7");
            $date_end_0       = define_date("end_0");

            $yest           = Football_odd::where('date', '>=', $date_start_7)
                                ->where('date', '<=', $date_end_0)    
                                ->count();

            $yest_pre_3     = Football_odd::where('date', '>=', $date_start_7)
                                ->where('date', '<=', $date_end_0)    
                                ->where('end_response', '=', 3)
                                ->count();
                            
            $yest_pre_non   = Football_odd::where('date', '>=', $date_start_7)
                                ->where('date', '<=', $date_end_0)    
                                ->where('end_response', '!=', 3)
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
                    'today',  
                    'today_pre_3',  
                    'today_pre_non',
                    'yest',  
                    'yest_pre_3',  
                    'yest_pre_non',
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
}
