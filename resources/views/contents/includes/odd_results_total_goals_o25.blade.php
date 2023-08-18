<div>
    <span class="badge bg-gray-700 mt-2" >
        home - draw - away
        <br/>
        {{ $row->pre_result_total_goals_home_over_25 }} - {{ $row->pre_result_total_goals_draw_over_25 }} - {{ $row->pre_result_total_goals_away_over_25 }}
    </span>
</div>

<div class="text-center">
    <span class="badge bg-gray-800 mt-2" >
        home - draw - away
    </span>

    <br/>

    <small>
        <a
            @if(!is_null($row->end_result_total_goals_home_over_25))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 1,
                    'value'             => 'Home',
                    'odd'               => $row->end_result_total_goals_home_over_25,
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">
            {{ $row->end_result_total_goals_home_over_25 }}
        </a>
    </small>
    <small>
        <a
            @if(!is_null($row->end_result_total_goals_draw_over_25))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 2,
                    'value'             => 'Draw',
                    'odd'               => $row->end_result_total_goals_draw_over_25,
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">
            {{ $row->end_result_total_goals_draw_over_25 }}
        </a>
    </small>
    <small>
        <a
            @if(!is_null($row->end_result_total_goals_away_over_25))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betsapi_id'        => 3,
                    'value'             => 'Away',
                    'odd'               => $row->end_result_total_goals_away_over_25,
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">
            {{ $row->end_result_total_goals_away_over_25 }}
        </a>
    </small>
</div>
