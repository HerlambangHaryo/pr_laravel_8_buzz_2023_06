<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Football_statistic;

use App\Models\Football_pattern_only;
use App\Models\Football_pattern_from;
use App\Models\Football_odd;

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
            $pattern            = $request->input('pattern'); 

             
            $pre_ah_pattern         = $request->input('pre_ah_pattern'); 
            $pre_ah_pattern_mirror         = $request->input('pre_ah_pattern_mirror'); 
            $pre_gou_pattern        = $request->input('pre_gou_pattern'); 

            $end_ah_pattern         = $request->input('end_ah_pattern'); 
            $end_ah_pattern_mirror         = $request->input('end_ah_pattern_mirror'); 
            $end_gou_pattern        = $request->input('end_gou_pattern'); 
 
        // ----------------------------------------------------------- Action  
            // $data_count         = 0;
            // $mirror_count       = 0;
            if($pattern == 'only')
            {
                $data              = Football_odd::where('leagueapi_id', '=', $leagueapi_id)
                                        ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                                        ->where('end_ah_pattern', '=', $pre_ah_pattern)
                                        ->where('end_gou_pattern', '=', $pre_gou_pattern)
                                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])   
        
                                        ->count();
 
                $data_mirror        = Football_odd::where('leagueapi_id', '=', $leagueapi_id)
                                        ->where('pre_ah_pattern', '=', $pre_ah_pattern_mirror)
                                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                                        ->where('end_ah_pattern', '=', $pre_ah_pattern_mirror)
                                        ->where('end_gou_pattern', '=', $pre_gou_pattern)
                                        ->whereIn('fixture_status', ['Match Finished', 'Match Finished Ended'])   
        
                                        ->count();

                $stats              = Football_pattern_only::where('leagueapi_id', '=', $leagueapi_id)
                                        ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                                        ->where('end_ah_pattern', '=', $pre_ah_pattern)
                                        ->where('end_gou_pattern', '=', $pre_gou_pattern)
                                        ->first();

                $stats_mirror       = Football_pattern_only::where('leagueapi_id', '=', $leagueapi_id)
                                        ->where('pre_ah_pattern', '=', $pre_ah_pattern_mirror)
                                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                                        ->where('end_ah_pattern', '=', $pre_ah_pattern_mirror)
                                        ->where('end_gou_pattern', '=', $pre_gou_pattern)
                                        ->first();

                if(is_null($stats)) 
                {
                    $data_count         = "Null";
                }
                elseif(empty($stats)) 
                {
                    $data_count         = "empty";
                }
                else
                {
                    $data_count         = $stats->total_fixtures;
                }

                if(is_null($stats_mirror)) 
                {
                    $mirror_count         = "Null";
                }
                elseif(empty($stats_mirror)) 
                {
                    $mirror_count         = "empty";
                }
                else
                {
                    $mirror_count         = $stats_mirror->total_fixtures;
                } 
            }
            elseif($pattern == 'preend')
            {
                $stats              = Football_pattern_from::where('leagueapi_id', '=', $leagueapi_id)
                                        ->where('pre_ah_pattern', '=', $pre_ah_pattern)
                                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                                        ->where('end_ah_pattern', '=', $end_ah_pattern)
                                        ->where('end_gou_pattern', '=', $end_gou_pattern)
                                        ->first();

                $stats_mirror       = Football_pattern_from::where('leagueapi_id', '=', $leagueapi_id)
                                        ->where('pre_ah_pattern', '=', $pre_ah_pattern_mirror)
                                        ->where('pre_gou_pattern', '=', $pre_gou_pattern)

                                        ->where('end_ah_pattern', '=', $end_ah_pattern_mirror)
                                        ->where('end_gou_pattern', '=', $end_gou_pattern)
                                        ->first();

                if(!is_null($stats)) 
                {
                    $data_count         = $stats->total_fixtures;
                }

                if(!is_null($stats_mirror)) 
                {
                    $mirror_count       = $stats_mirror->total_fixtures;
                }
            }
             
        // ----------------------------------------------------------- Send 
            $data = [
                'foox' => $data_count."/".$data." == ".$mirror_count."/".$data_mirror, 
                // 'foox' => $pattern, 
                // 'foox' => $stats, 
                'foo' => 'hai'
            ];

            return response()->json($data);
        ///////////////////////////////////////////////////////////////  
    }
 
    public function pattern_from(Request $request)
    {
        // ----------------------------------------------------------- Auth 

        // ----------------------------------------------------------- Agent 

        // ----------------------------------------------------------- Initialize  
 
        // ----------------------------------------------------------- Action    
            $pattern_from   = Football_odd::whereNull('pattern_from')
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])

                                ->whereNotNull('pre_ah_pattern')
                                ->whereNotNull('pre_gou_pattern')
 
                                ->whereNotNull('end_ah_pattern')
                                ->whereNotNull('end_gou_pattern')

                                ->where('pre_ah_pattern', '!=', 'H')
                                ->where('pre_gou_pattern', '!=', 'G')

                                ->where('end_ah_pattern', '!=', 'H')
                                ->where('end_gou_pattern', '!=', 'G') 

                                ->where('pre_response', '=', 3)
                                ->where('end_response', '=', 3) 

                                ->count();
        // ----------------------------------------------------------- Send 
            $data = [
                'foox' => number_format($pattern_from,0,",","."),  
                'foo' => 'hai'
            ];

            return response()->json($data);
        ///////////////////////////////////////////////////////////////  
    }
 
    public function pattern_only(Request $request)
    {
        // ----------------------------------------------------------- Auth 

        // ----------------------------------------------------------- Agent 

        // ----------------------------------------------------------- Initialize  
 
        // ----------------------------------------------------------- Action    
            $pattern_only   = Football_odd::whereNull('pattern_only')
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])

                                ->whereNotNull('pre_ah_pattern')
                                ->whereNotNull('pre_gou_pattern')
 
                                ->whereNotNull('end_ah_pattern')
                                ->whereNotNull('end_gou_pattern')

                                ->where('pre_ah_pattern', '!=', 'H')
                                ->where('pre_gou_pattern', '!=', 'G')

                                ->where('end_ah_pattern', '!=', 'H')
                                ->where('end_gou_pattern', '!=', 'G') 
                                
                                ->where('pre_response', '=', 3)
                                ->where('end_response', '=', 3) 
                                
                                ->count();
        // ----------------------------------------------------------- Send 
            $data = [
                'foox' => number_format($pattern_only,0,",","."),  
                'foo' => 'hai'
            ];

            return response()->json($data);
        ///////////////////////////////////////////////////////////////  
    }
 
    public function undone(Request $request)
    {
        // ----------------------------------------------------------- Auth 

        // ----------------------------------------------------------- Agent 

        // ----------------------------------------------------------- Initialize  
 
        // ----------------------------------------------------------- Action     
            $undone         = Football_odd::where('pre_response', '!=', 3)
                                ->where('end_response', '!=', 3)
                                ->whereIN('fixture_status', ['Match Finished', 'Match Finished Ended'])
                                ->count();
        // ----------------------------------------------------------- Send 
            $data = [
                'foox' => number_format($undone,0,",","."),  
                'foo' => 'hai'
            ];

            return response()->json($data);
        ///////////////////////////////////////////////////////////////  
    }
}
