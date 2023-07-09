<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Apiaccount; 
use App\Models\Football_Fixture;
use App\Models\League;

class RapidapiController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Rapidapi';
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
            $data           = Apiaccount::whereNull('deleted_at')   
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

    public function reset($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
            $model_NON_Apiaccount       = Apiaccount::where('active', '=', 1); 

            $model_NON_Apiaccount->update([  
                'active'       => 4,      
            ]);       
 
        // ----------------------------------------------------------- Action  
            $model_Apiaccount           = Apiaccount::where('id', '=', $id); 

            $model_Apiaccount->update([ 
                'counter'      => 99,
                'active'       => 1,    
                'reset_date_at'       => now(),        
            ]);              
 
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route('Rapidapi.index')
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    } 

    public function on($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
 
            $model_NON_Apiaccount       = Apiaccount::where('active', '=', 1); 
            $model_NON_Apiaccount->update([  
                'active'       => 4,      
            ]);       


        // ----------------------------------------------------------- Action  
            
            $model_Apiaccount           = Apiaccount::where('id', '=', $id); 
            $model_Apiaccount->update([  
                'active'       => 1,      
            ]);              

            

        // ----------------------------------------------------------- Send 
        
            return redirect()
                ->route('Rapidapi.index')
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    } 
}
