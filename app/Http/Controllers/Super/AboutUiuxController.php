<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Aboutapp; 

class AboutUiuxController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'AboutUiux';
    public $type        = 'backend_super';
 
    public function setmobile($status)
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
        // ----------------------------------------------------------- Initialize    
            $data          = Aboutapp::where('id', '=', define_aboutapp_team()); 

            if($status == "Yes")
            {
                $cycle = 1;
            }
            elseif($status == "No")
            {
                $cycle = 0;
            }
        // ----------------------------------------------------------- Action   
            $data->update([     
                'uiux_mobile'         => $cycle,
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
    public function settablet($status)
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
        // ----------------------------------------------------------- Initialize    
            $data          = Aboutapp::where('id', '=', define_aboutapp_team()); 

            if($status == "Yes")
            {
                $cycle = 1;
            }
            elseif($status == "No")
            {
                $cycle = 0;
            }
        // ----------------------------------------------------------- Action   
            $data->update([     
                'uiux_tablet'         => $cycle,
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
