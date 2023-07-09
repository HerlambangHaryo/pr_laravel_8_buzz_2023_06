<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Aboutapp; 

class AboutThemeController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'AboutTheme';
    public $type        = 'backend_super';
   
    public function edit(Aboutapp $id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

            if($user->current_team_id != 1)
            { 
                return redirect()
                    ->route('Dashboard.index')
                    ->with(['no_permission' => define_messages('no_permission')]);
            }   
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
            $view           = define_view($this->template, $this->type, 'about', $additional_view, $view_file.'_'.$content);
            
        // ----------------------------------------------------------- Action  
            $data           = Aboutapp::findOrFail(define_aboutapp_team());

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

    public function update(Request $request, Aboutapp $id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

            if($user->current_team_id != 1)
            { 
                return redirect()
                    ->route('Dashboard.index')
                    ->with(['no_permission' => define_messages('no_permission')]);
            }   
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   
            //get 
            $data = Aboutapp::findOrFail(define_aboutapp_team()); 

            //update 
            $data->update([ 
                'theme'     => $request->theme, 
                'mode'      => $request->mode, 
                'color'     => $request->color
            ]);  
        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route('AboutApp.index')
                    ->with(['saved_data' => define_messages('saved_data')]);
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
