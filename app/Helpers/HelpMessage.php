<?php 

    if(!function_exists('define_messages'))
    {
        function define_messages($message)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = "";

            // ----------------------------------------------------------- Action   
                if($message == 'saved_data')
                {
                    $isi = 'All your changes have been saved.';
                } 
                elseif($message == 'logout')
                {
                    $isi = 'You have been logged out.';
                } 
                elseif($message == 'login')
                {
                    $user = auth()->user();  

                    $isi = 'Welcome back, '.$user->name.'!';
                } 
                elseif($message == 'no_permission')
                {
                    $isi = 'You have not permission to access this page.';
                } 
                
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 