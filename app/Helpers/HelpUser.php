<?php 
use App\Models\Aboutapp;

    if(!function_exists('define_userteam'))
    {
        function define_userteam($id)
        {
            // ----------------------------------------------------------- Initialize   
                $isi = "";

            // ----------------------------------------------------------- Action    
                if($id == 1)
                {
                    $isi = '
                    <br/>
                    <span class="badge bg-danger " 
                        style="min-width: 60px;">
                        Super
                    </span>';
                }   
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 

    if(!function_exists('define_aboutuser'))
    {
        function define_aboutuser($status)
        {
            // ----------------------------------------------------------- Initialize  
                $user = auth()->user();  
                
                $link   = '/storage/app/public/userprofiles';
                $link2  = '/public/starter';
            // ----------------------------------------------------------- Action   
                if($status == 'profile_header')
                {
                    if(!is_null($user->profile_photo_path) )
                    { 
                        $isi = '
                        <img 
                            src="'.asset($link.'/'.$user->profile_photo_path).'"  
                            alt="" 
                            class="ms-100 mh-100 rounded-circle"> ';
                    }
                    else
                    {
                        $isi = '
                        <img 
                            src="'.asset($link2).'/photo_profile.png"  
                            alt="" 
                            class="ms-100 mh-100 rounded-circle"> ';
                    }
                }
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }