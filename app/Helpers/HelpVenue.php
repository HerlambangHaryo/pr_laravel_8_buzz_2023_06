<?php 

    if(!function_exists('define_venue'))
    {
        function define_venue($id, $link)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = '/public/buzz/venues/default.png';

            // ----------------------------------------------------------- Action   
                if($id == '')
                { 
                    $isi = '<img src="'.asset($isi).'" class="card-img" />';
                } 
                else
                {
                    $isi = '<img src="'.asset($link).'" class="card-img" />'; 
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 