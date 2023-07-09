<?php 

    if(!function_exists('define_date'))
    {
        function define_date($status)
        {
            // ----------------------------------------------------------- Initialize 
                // $start = date("Y-m-d", strtotime("+ 0 day")); 
                $start = date("Y-m-d h:i:s", strtotime("- 7 hour"));
                // $end = date("Y-m-d", strtotime("+ 1 day"));
                $end = date("Y-m-d h:i:s", strtotime("+ 1 day"));

            // ----------------------------------------------------------- Action   
                if($status == 'start')
                {
                    $isi = $start;
                }
                elseif($status == 'end')
                { 
                    $isi = $end;
                }  
                elseif($status == 'view')
                { 
                    $isi = '<div class="col-12 text-center mt-2">';
                    $isi .= '<span class="badge bg-gray-800 mt-2">';
                    $isi .= 'Start: '.$start;
                    $isi .= ' / ';
                    $isi .= 'End: '.$end;
                    $isi .= '</span>';
                    $isi .= '</div>';
                }  

                       
                    

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 