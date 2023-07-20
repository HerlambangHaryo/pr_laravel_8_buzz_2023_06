<div>
    <span class="badge bg-gray-700 mt-2" > 
        home - draw - away
        <br/>
        {{ $row->pre_match_winner_home }} - {{ $row->pre_match_winner_draw }} - {{ $row->pre_match_winner_away }}
    </span>   
</div>  

<div>
    <span class="badge bg-gray-800 mt-2" > 
        home - draw - away 
    </span> 

    <br/>
 
    <small>
        <a    
            @if(!is_null($row->end_match_winner_home))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id, 
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 1,
                    'value'             => 'Home', 
                    'odd'               => $row->end_match_winner_home, 
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_match_winner_home }}
        </a> 
    </small>
    <small>
        <a    
            @if(!is_null($row->end_match_winner_draw))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id, 
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 2,
                    'value'             => 'Draw', 
                    'odd'               => $row->end_match_winner_draw, 
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_match_winner_draw }}
        </a> 
    </small>
    <small>
        <a    
            @if(!is_null($row->end_match_winner_away))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id, 
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 3,
                    'value'             => 'Away', 
                    'odd'               => $row->end_match_winner_away, 
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_match_winner_away }}
        </a> 
    </small>
</div>