<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Apiaccount; 
use App\Models\Football_Fixture;
use App\Models\League;
use App\Models\Football_team;
use App\Models\Football_venue;

class RapidapiController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Rapidapi';
    public $type        = 'backend';

    public function index()
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

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);
            
        // ----------------------------------------------------------- Action 
            $data           = Apiaccount::whereNull('deleted_at')   
                                ->get();
                                    
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

    public function reset($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent 

        // ----------------------------------------------------------- Initialize  
            $model_NON_Apiaccount       = Apiaccount::where('active', '=', 1); 

            $model_NON_Apiaccount->update([  
                'active'       => 4,      
            ]);       
 
            
        // ----------------------------------------------------------- Action  
            $first_Apiaccount           = Apiaccount::where('id', '=', $id)
                                            ->first(); 

             
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/timezone",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: api-football-v1.p.rapidapi.com", 
                    "X-RapidAPI-Key: $first_Apiaccount->apikey"
                ],
                CURLOPT_HEADER => true,
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
 
            // Get the response headers size
            $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #: " . $err;
            } else {
                // Extract the response headers
                $responseHeaders = substr($response, 0, $headerSize);
                
                // Print the response headers  
                $temp_responseHeaders = explode("X-RateLimit-requests-Remaining: ", $responseHeaders );

                $temp_responseHeaders2 = explode("X-RateLimit-requests-Reset", $temp_responseHeaders[1] );
                
                $counter_NEW = $temp_responseHeaders2[0]; 
            }

            $model_Apiaccount           = Apiaccount::where('id', '=', $id); 

            $model_Apiaccount->update([ 
                'counter'               => $counter_NEW,
                'active'                => 1,    
                'reset_date_at'         => now(),        
            ]);              
 
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route('Rapidapi.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    } 

    public function on($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
 
            $model_NON_Apiaccount       = Apiaccount::where('active', '=', 1); 
            $model_NON_Apiaccount->update([  
                'active'       => 4,      
            ]);       


        // ----------------------------------------------------------- Action  
            
            $model_Apiaccount           = Apiaccount::where('id', '=', $id); 
            $model_Apiaccount->update([  
                'active'       => 1,      
            ]);              

            

        // ----------------------------------------------------------- Send 
        
            return redirect()
                ->route('Rapidapi.index')
                ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    } 

    public function teams($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
            $model_Apiaccount       = Apiaccount::where('active', '=', 1)
                                            ->first();   
  
        // ----------------------------------------------------------- Action    
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/teams?id=$id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: api-football-v1.p.rapidapi.com",
                    "X-RapidAPI-Key: $model_Apiaccount->apikey"
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } 
            else 
            {
                  
                $decode             = json_decode($response, true); 
                $decode_response    = $decode['response'];
                // dump($decode_response);
                // die;
                $data = Football_team::where('teamapi_id', '=', $id);

                $venueapi_id        = $decode['response'][0]['venue']['id'];
                // dump($venueapi_id);
                // die;

                $data->update([     
                    'code'          => $decode['response'][0]['team']['code'],
                    'country'       => $decode['response'][0]['team']['country'],
                    'founded'       => $decode['response'][0]['team']['founded'],
                    'logo'          => $decode['response'][0]['team']['logo'],
                    'venueapi_id'   => $venueapi_id, 
                ]);

                $data2 = Football_venue::where('venueapi_id', '=', $venueapi_id);
                
                $data2->update([     
                    'name'          => $decode['response'][0]['venue']['name'], 
                    'address'       => $decode['response'][0]['venue']['address'], 
                    'city'          => $decode['response'][0]['venue']['city'], 
                    // 'country'          => $decode['response'][0]['venue']['country'], 
                    'capacity'      => $decode['response'][0]['venue']['capacity'], 
                    'image'         => $decode['response'][0]['venue']['image'], 
                    'surface'       => $decode['response'][0]['venue']['surface'], 
                ]);
                
            }
            

        // ----------------------------------------------------------- Send  
            return back();
            // return redirect()
            //     ->route('Teams.show', $id)
            //     ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    } 

    public function venues($id)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize  
            $model_Apiaccount       = Apiaccount::where('active', '=', 1)
                                            ->first();   
  
        // ----------------------------------------------------------- Action    
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/venues?id=$id", 
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: api-football-v1.p.rapidapi.com",
                    "X-RapidAPI-Key: $model_Apiaccount->apikey"
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } 
            else 
            {
                  
                $decode             = json_decode($response, true); 
                $decode_response    = $decode['response'];
                // dump($decode_response);
                // die; 

                $data2 = Football_venue::where('venueapi_id', '=', $id);
                
                $data2->update([     
                    'name'          => $decode['response'][0]['name'], 
                    'address'       => $decode['response'][0]['address'], 
                    'city'          => $decode['response'][0]['city'], 
                    'country'       => $decode['response'][0]['country'], 
                    'capacity'      => $decode['response'][0]['capacity'], 
                    'image'         => $decode['response'][0]['image'], 
                    'surface'       => $decode['response'][0]['surface'], 
                ]);
                
            }
            

        // ----------------------------------------------------------- Send  
            return back();
            // return redirect()
            //     ->route('Teams.show', $id)
            //     ->with(['saved_data' => define_messages('saved_data')]);
        ///////////////////////////////////////////////////////////////
    } 
}
