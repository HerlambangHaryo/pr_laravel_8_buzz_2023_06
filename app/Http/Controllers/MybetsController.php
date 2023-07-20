<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;    
 
use App\Models\Football_my_bet; 

class MybetsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Mybets';
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
            $data           = Football_my_bet::whereNull('deleted_at')    
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
 
    public function datacreate($leagueapi_id, $season, $fixtureapi_id, $betsapi_id, $value, $odd)
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
                    // 'data',  
                    'leagueapi_id', 
                    'season', 
                    'fixtureapi_id', 
                    'betsapi_id', 
                    'value', 
                    'odd',  
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            
        // ----------------------------------------------------------- Agent
            $content        = $this->content;

        // ----------------------------------------------------------- Initialize
            $id_penelitian = $request->session()->get('id_penelitian');

            $content        = $this->content;

        // ----------------------------------------------------------- Action  
        
            $data = Football_my_bet::create([ 
                'leagueapi_id'      => $request->leagueapi_id,  
                'season'            => $request->season,
                'fixtureapi_id'     => $request->fixtureapi_id,
                'betsapi_id'        => $request->betsapi_id,
                'value'             => $request->value,     
                'odd'               => $request->odd,     
                'investment'        => $request->investment,     
            ]);  

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }
}
