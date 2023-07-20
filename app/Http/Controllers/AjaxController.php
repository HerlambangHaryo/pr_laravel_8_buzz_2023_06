<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_statistic;

class AjaxController extends Controller
{
    //
    public function testing(Request $request)
    {
        // Perform data update logic here
        // You can access the request data using $request->input('key')
        
        // Example response
        $response = [
            'status' => 'success',
            'message' => 'Data updated successfully.',
        ];
        
        return response()->json($response);
    }

    public function data(Request $request)
    {
        // ----------------------------------------------------------- Auth 

        // ----------------------------------------------------------- Agent 

        // ----------------------------------------------------------- Initialize 
            $fixtureapi_id      = $request->input('fixtureapi_id'); 
            $leagueapi_id       = $request->input('leagueapi_id'); 
            $season             = $request->input('season'); 

            $html               = "";
        // ----------------------------------------------------------- Action  
            $stats              = Football_statistic::where('fixtureapi_id', '=', $fixtureapi_id)
                                    ->where('leagueapi_id', '=', $leagueapi_id)
                                    ->where('season', '=', $season)
                                    ->first();
            
            $html       .= '<div class="row mb-2 d-flex justify-content-center">';
                $html       .= '<div class="col-5 text-center">'; 
                $html       .= 'Asian Handicap';
                $html       .= '</div>'; 
                $html       .= '<div class="col-2 text-center">'; 
                $html       .= 'Btts';
                $html       .= '</div>'; 
                $html       .= '<div class="col-5 text-center">'; 
                $html       .= 'Over Under';
                $html       .= '</div>';
            $html       .= '</div>';
        // ----------------------------------------------------------- Send 
            $data = [
                'foox' => $html, 
                'foo' => 'hai'
            ];

            return response()->json($data);
        ///////////////////////////////////////////////////////////////  
    }
}
