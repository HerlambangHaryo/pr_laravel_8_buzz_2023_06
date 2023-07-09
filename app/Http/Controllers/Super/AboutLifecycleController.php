<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Aboutapp; 

class AboutLifecycleController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'AboutLifecycle';
    public $type        = 'backend_super';

    public function setcycle($status)
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

            if($status == "Prod")
            {
                $lifecycle = 1;
            }
            elseif($status == "Dev")
            {
                $lifecycle = 0;
            }
        // ----------------------------------------------------------- Action   
            $data->update([     
                'lifecycle'         => $lifecycle,
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
