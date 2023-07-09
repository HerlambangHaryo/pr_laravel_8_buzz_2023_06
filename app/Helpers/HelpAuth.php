<?php  

    if(!function_exists('define_auth'))
    {
        function define_auth($type, $status)
        {
            // ----------------------------------------------------------- Initialize    
                $link = ' 
                <a href="/auth/'.$status.'" 
                    class="btn btn-danger btn-lg d-block w-100 fw-500 mb-3"
                    >
                    <i class="fab fa-'.$status.'"></i>
                    '.$type.' with '.$status.'
                </a>'; 

                $auth = define_aboutapp($status); 
            // ----------------------------------------------------------- Action   

                if($auth == 0)
                {
                    $isi = "";
                }
                if($auth == 1)
                {
                    $isi = $link;
                }
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 