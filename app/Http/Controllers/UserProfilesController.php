<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\User; 

class UserProfilesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'UserProfiles';
    public $type        = 'backend';
    
    public function editdata()
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

            $view_file      = 'edit';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action  
            $data           = User::findOrFail($user->id);

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

    public function update(Request $request, User $id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action   
            //get post by ID
            $data = User::findOrFail(1);

            //check if logo is uploaded
            if ($request->hasFile('profile_photo_path')) {

                //upload new logo
                $image = $request->file('profile_photo_path');
                $image->storeAs('public/userprofiles', $image->hashName());

                //delete old logo
                Storage::delete('public/userprofiles/'.$data->logo); 
 
                //update post with new image
                $data->update([
                    'name'                      => $request->name,  
                    'profile_photo_path'        => $image->hashName(), 
                ]); 
            } 
            else 
            { 
                //update post 
                $data->update([
                    'name'      => $request->name,   
                ]);  
            }
 
        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route('Dashboard.index')
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
