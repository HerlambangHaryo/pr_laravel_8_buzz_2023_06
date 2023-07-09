<?php 

    if(!function_exists('define_additionalview'))
    {
        function define_additionalview($isDesktop, $isMobile, $isTablet)
        {
            // ----------------------------------------------------------- Initialize 
                $isi = 'desktop';

            // ----------------------------------------------------------- Action   
                if($isTablet == 1)
                { 
                    $uiux_ready = define_aboutapp('tablet');

                    if($uiux_ready == 1)
                    {
                        $isi = 'tablet';
                    }
                } 
                elseif($isMobile == 1)
                { 
                    $uiux_ready = define_aboutapp('mobile');

                    if($uiux_ready == 1)
                    {
                        $isi = 'mobile';
                    }
                }  

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_view'))
    {
        function define_view($template, $type, $content, $additional_view, $view_file)
        {
            // ----------------------------------------------------------- Initialize 

            // ----------------------------------------------------------- Action   
                $isi = 'contents.'.$template.'.'.$type.'.'.$additional_view.'.'.strtolower($content).'.'.$view_file;

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }