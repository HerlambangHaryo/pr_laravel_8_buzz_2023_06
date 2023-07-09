<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Jenssegers\Agent\Agent;
use DB;   
 
use App\Models\Aboutapp; 

class AboutAppController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'AboutApp';
    public $type        = 'backend_super';
 
    public function index()
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

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, 'about', $additional_view, $view_file.'_'.$content);
            
        // ----------------------------------------------------------- Action  
            $data           = Aboutapp::where('id', '=', define_aboutapp_team())
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
                    'data',  
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
    
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
            //get post by ID
            $data = Aboutapp::findOrFail(define_aboutapp_team());

            //check if logo is uploaded
            if ($request->hasFile('logo')) {

                //upload new logo
                $logo = $request->file('logo');
                $logo->storeAs('public/aboutapp', $logo->hashName());

                //delete old logo
                Storage::delete('public/aboutapp/'.$data->logo); 

                $logo_status = 1;
            } 
            else 
            {
                $logo_status = 0;
            }
 
            //check if ico is uploaded
            if ($request->hasFile('ico')) {

                //upload new ico
                $ico = $request->file('ico');
                $ico->storeAs('public/aboutapp', $ico->hashName());

                //delete old ico
                Storage::delete('public/aboutapp/'.$data->ico);

                $ico_status = 1;
            } 
            else 
            {
                $ico_status = 0;
            }

            if($logo_status == 1 && $ico_status == 1)
            {
                //update post with new ico
                $data->update([
                    'name'          => $request->name,  
                    'domain'        => $request->domain,  
                    'logo'          => $logo->hashName(),
                    'ico'           => $ico->hashName(),
                ]); 

            }
            else
            { 
                //update post without logo and ico
                $data->update([
                    'name'          => $request->name,  
                    'domain'        => $request->domain,  
                ]); 
            }
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
