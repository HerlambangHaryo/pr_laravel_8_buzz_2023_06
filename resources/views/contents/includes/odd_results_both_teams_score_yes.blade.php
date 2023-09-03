<div>
    <span class="badge bg-gray-700 mt-2" >
        home - draw - away
        <br/>
        {{ $row->pre_results_both_teams_score_home_yes }} - {{ $row->pre_results_both_teams_score_draw_yes }} - {{ $row->pre_results_both_teams_score_away_yes }}
    </span>
</div>

<div class="text-center">
    <span class="badge bg-gray-800 mt-2" >
        home - draw - away
    </span>

    <br/>

    <small>
        <a
            @if(!is_null($row->end_results_both_teams_score_home_yes))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betapi_id'        => 1,
                    'value'             => 'Home',
                    'odd'               => $row->end_results_both_teams_score_home_yes,
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">
            {{ $row->end_results_both_teams_score_home_yes }}
        </a>
    </small>
    <small>
        <a
            @if(!is_null($row->end_results_both_teams_score_draw_yes))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betapi_id'        => 2,
                    'value'             => 'Draw',
                    'odd'               => $row->end_results_both_teams_score_draw_yes,
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">
            {{ $row->end_results_both_teams_score_draw_yes }}
        </a>
    </small>
    <small>
        <a
            @if(!is_null($row->end_results_both_teams_score_away_yes))
                href="{{route('Mybets.datacreate',[
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                    'betapi_id'        => 3,
                    'value'             => 'Away',
                    'odd'               => $row->end_results_both_teams_score_away_yes,
                ])}}"
            @endif
            target="_blank"
            class=" ms-2 me-2">
            {{ $row->end_results_both_teams_score_away_yes }}
        </a>
    </small>
</div>
