<?php 
use App\Models\Aboutapp;

    if(!function_exists('define_aboutapp'))
    {
        function define_aboutapp($status)
        {
            // ----------------------------------------------------------- Initialize  
                $data = Aboutapp::findOrFail(define_aboutapp_team());

                $link   = '/storage/app/public/aboutapp';
                $link2  = '/public/starter';
            // ----------------------------------------------------------- Action   
                if($status == 'name')
                {
                    $isi = $data->name;
                }
                elseif($status == 'logo')
                { 
                    if(!is_null($data->ico))
                    {
                        $isi = '<img 
                                src="'.asset($link.'/'.$data->logo).'" 
                                alt="" height="20" />'; 
                    }
                    else
                    {
                        $isi = '<img 
                                src="'.asset($link2.'/logo.png').'" 
                                alt="" height="20" />';  
                    }
                } 
                elseif($status == 'ico')
                { 
                    if(!is_null($data->ico))
                    {
                        $isi = '<link 
                                rel="icon" 
                                type="image/x-icon" 
                                href="'.asset($link.'/'.$data->logo).'"  
                                >';
                    }
                    else
                    { 
                        $isi = '<link 
                                rel="icon" 
                                type="image/x-icon" 
                                href="'.asset($link2.'/ico.ico').'"  
                                >'; 
                    }
                }  
                elseif($status == 'color')
                {
                    $isi = $data->color;
                }
                elseif($status == 'mode')
                {
                    $isi = $data->mode;
                } 
                elseif($status == 'domain')
                {
                    $isi = $data->domain;
                } 
                elseif($status == 'super')
                {
                    if($data->current_team_id == 1)
                    {
                        $isi = '
                        <br/>
                        <span class="badge bg-danger " 
                            style="min-width: 60px;">
                            Super
                        </span>';
                    }  
                } 
                elseif($status == 'mobile')
                {
                    $isi = $data->uiux_mobile;
                }
                elseif($status == 'tablet')
                {
                    $isi = $data->uiux_tablet;
                } 
                elseif($status == 'google')
                {
                    $isi = $data->auth_google;
                }
                elseif($status == 'github')
                {
                    $isi = $data->auth_github;
                }
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 

    if(!function_exists('define_aboutapp_team'))
    {
        function define_aboutapp_team()
        {
            // ----------------------------------------------------------- Initialize  
                $isi = 1;

            // ----------------------------------------------------------- Action   

            // ----------------------------------------------------------- Send
                $word = $isi;  
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }  