<?php 

    if(!function_exists('define_date'))
    {
        function define_date($status)
        {
            // ----------------------------------------------------------- Initialize 
                // PLUS
                    $start_plus_1 = date("Y-m-d h:i:s", strtotime("+ 1 day"));
                    $end_plus_2 = date("Y-m-d h:i:s", strtotime("+ 2 day"));

                // MINUS


                $start_0 = date("Y-m-d h:i:s", strtotime("+ 5 hour"));

                // $start = date("Y-m-d", strtotime("+ 0 day")); 
                $start = date("Y-m-d h:i:s", strtotime("- 7 hour"));

                // $start = date("Y-m-d", strtotime("+ 0 day")); 
                $start_1 = date("Y-m-d h:i:s", strtotime("- 1 day"));

                // $start = date("Y-m-d", strtotime("+ 0 day")); 
                $start_2 = date("Y-m-d h:i:s", strtotime("- 2 day"));

                // $end = date("Y-m-d", strtotime("+ 1 day"));
                $end = date("Y-m-d h:i:s", strtotime("+ 1 day"));

                $end_0 = date("Y-m-d h:i:s");

                
                // $start_7 = date("Y-m-d", strtotime("+ 0 day")); 
                $start_7 = date("Y-m-d h:i:s", strtotime("- 7 day"));
                // $end = date("Y-m-d", strtotime("+ 1 day"));
                $end_1 = date("Y-m-d h:i:s", strtotime("- 1 day"));

                $end_15 = date("Y-m-d h:i:s", strtotime("+ 15 day"));
            // ----------------------------------------------------------- Action   
                if($status == 'start')
                {
                    $isi = $start;
                }
                elseif($status == 'start_plus_1')
                { 
                    $isi = $start_plus_1;
                }  
                elseif($status == 'end_plus_2')
                { 
                    $isi = $end_plus_2;
                }  


                elseif($status == 'start_0')
                { 
                    $isi = $start_0;
                }  
                elseif($status == 'end_0')
                { 
                    $isi = $end_0;
                }  
                elseif($status == 'end')
                { 
                    $isi = $end;
                }  
                elseif($status == 'start_7')
                {
                    $isi = $start_7;
                }
                elseif($status == 'start_1')
                {
                    $isi = $start_1;
                }
                elseif($status == 'start_2')
                {
                    $isi = $start_2;
                }
                elseif($status == 'end_1')
                { 
                    $isi = $end_1;
                }  
                elseif($status == 'end_15')
                { 
                    $isi = $end_15;
                }  
                elseif($status == 'view_tomorrow')
                { 
                    $isi = '<div class="col-12 text-center mt-2">';
                        $isi .= '<div class="btn-group me-3">';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">+1 Day</button>';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">'.$start_plus_1.'</button>'; 
                        $isi .= '</div>';  
 
                        $isi .= '<div class="btn-group ms-3">';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">+2 Days</button>';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">'.$end_plus_2.'</button>'; 
                        $isi .= '</div>';   
                    $isi .= '</div>';
                }  
                elseif($status == 'view')
                { 
                    $isi = '<div class="col-12 text-center mt-2">';
                        $isi .= '<div class="btn-group me-3">';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">+5 Hours</button>';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">'.$start_0.'</button>'; 
                        $isi .= '</div>';  
 
                        $isi .= '<div class="btn-group ms-3">';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">+1 Day</button>';
                            $isi .= '<button type="button" class="btn btn-sm btn-secondary">'.$end.'</button>'; 
                        $isi .= '</div>';   
                    $isi .= '</div>';
                }  
                elseif($status == 'view_notstarted')
                { 
                    $isi = '<div class="col-12 text-center mt-2">';
                    // $isi .= '<span class="badge bg-gray-800 mt-2">';
                    $isi .= 'Start: '.$start;
                    $isi .= ' / ';
                    $isi .= 'End: '.$end_15;
                    // $isi .= '</span>';
                    $isi .= '</div>';
                }  
                elseif($status == 'view_end')
                { 
                    $isi = '<div class="col-12 text-center mt-2">';
                    // $isi .= '<span class="badge bg-gray-800 mt-2">';
                    $isi .= 'Start: '.$start_7;
                    $isi .= ' / ';
                    $isi .= 'End: '.$end_1;
                    // $isi .= '</span>';
                    $isi .= '</div>';
                }  
                elseif($status == 'view_end_0')
                { 
                    $isi = '<div class="col-12 text-center mt-2">';
                    // $isi .= '<span class="badge bg-gray-800 mt-2">';
                    $isi .= 'Start: '.$start_7;
                    $isi .= ' / ';
                    $isi .= 'End: '.$end_0;
                    // $isi .= '</span>';
                    $isi .= '</div>';
                }  

                       
                    

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 