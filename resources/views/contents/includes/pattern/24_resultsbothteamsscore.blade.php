@if($pattern->results_both_teams_score_away_no_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '24_resultsbothteamsscore_away/no',
        ])}}"
    >
        Away/No / 
        @if(!is_null($row->end_results_both_teams_score_away_no))
            {{$row->end_results_both_teams_score_away_no}}
        @elseif(!is_null($row->pre_results_both_teams_score_away_no))
            {{$row->pre_results_both_teams_score_away_no}}
        @endif
        => {{ $pattern->results_both_teams_score_away_no_perc * 100 }}%
    </a>
@elseif($pattern->results_both_teams_score_draw_no_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '24_resultsbothteamsscore_draw/no',
        ])}}"
    >
        Draw/No / 
        @if(!is_null($row->end_results_both_teams_score_draw_no))
            {{$row->end_results_both_teams_score_draw_no}}
        @elseif(!is_null($row->pre_results_both_teams_score_draw_no))
            {{$row->pre_results_both_teams_score_draw_no}}
        @endif
        => {{ $pattern->results_both_teams_score_draw_no_perc * 100 }}%
    </a>
@elseif($pattern->results_both_teams_score_home_no_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '24_resultsbothteamsscore_home/no',
        ])}}"
    >
        Home/No / 
        @if(!is_null($row->end_results_both_teams_score_home_no))
            {{$row->end_results_both_teams_score_home_no}}
        @elseif(!is_null($row->pre_results_both_teams_score_home_no))
            {{$row->pre_results_both_teams_score_home_no}}
        @endif
        => {{ $pattern->results_both_teams_score_home_no_perc * 100 }}%
    </a>
@elseif($pattern->results_both_teams_score_away_yes_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '24_resultsbothteamsscore_away/yes',
        ])}}"
    >
        Away/Yes / 
        @if(!is_null($row->end_results_both_teams_score_away_yes))
            {{$row->end_results_both_teams_score_away_yes}}
        @elseif(!is_null($row->pre_results_both_teams_score_away_yes))
            {{$row->pre_results_both_teams_score_away_yes}}
        @endif
        => {{ $pattern->results_both_teams_score_away_yes_perc * 100 }}%
    </a>
@elseif($pattern->results_both_teams_score_draw_yes_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '24_resultsbothteamsscore_draw/yes',
        ])}}"
    >
        Draw/Yes / 
        @if(!is_null($row->end_results_both_teams_score_draw_yes))
            {{$row->end_results_both_teams_score_draw_yes}}
        @elseif(!is_null($row->pre_results_both_teams_score_draw_yes))
            {{$row->pre_results_both_teams_score_draw_yes}}
        @endif
        => {{ $pattern->results_both_teams_score_draw_yes_perc * 100 }}%
    </a>
@elseif($pattern->results_both_teams_score_home_yes_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '24_resultsbothteamsscore_home/yes',
        ])}}"
    >
        Home/Yes / 
        @if(!is_null($row->end_results_both_teams_score_home_yes))
            {{$row->end_results_both_teams_score_home_yes}}
        @elseif(!is_null($row->pre_results_both_teams_score_home_yes))
            {{$row->pre_results_both_teams_score_home_yes}}
        @endif
        => {{ $pattern->results_both_teams_score_home_yes_perc * 100 }}%
    </a>
@endif