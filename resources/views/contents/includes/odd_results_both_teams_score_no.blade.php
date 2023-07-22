<div>
    <span class="badge bg-gray-700 mt-2" > 
        home - draw - away
        <br/>
        {{ $row->pre_results_both_teams_score_home_no }} - {{ $row->pre_results_both_teams_score_draw_no }} - {{ $row->pre_results_both_teams_score_away_no }}
    </span>   
</div>  

<div class="text-center">
    <span class="badge bg-gray-800 mt-2" > 
        home - draw - away 
    </span> 

    <br/>
 
    <small>
        <a    
            @if(!is_null($row->end_results_both_teams_score_home_no))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id, 
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 1,
                    'value'             => 'Home', 
                    'odd'               => $row->end_results_both_teams_score_home_no, 
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_results_both_teams_score_home_no }}
        </a> 
    </small>
    <small>
        <a    
            @if(!is_null($row->end_results_both_teams_score_draw_no))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id, 
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 2,
                    'value'             => 'Draw', 
                    'odd'               => $row->end_results_both_teams_score_draw_no, 
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_results_both_teams_score_draw_no }}
        </a> 
    </small>
    <small>
        <a    
            @if(!is_null($row->end_results_both_teams_score_away_no))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id, 
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 3,
                    'value'             => 'Away', 
                    'odd'               => $row->end_results_both_teams_score_away_no, 
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_results_both_teams_score_away_no }}
        </a> 
    </small>
</div>