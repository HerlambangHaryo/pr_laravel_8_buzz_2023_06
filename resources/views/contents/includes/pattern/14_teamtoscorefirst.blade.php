@if($pattern->team_to_score_first_home_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '14_teamtoscorefirst_home',
        ])}}"
    >
        Home / 
        @if(!is_null($row->end_team_to_score_first_home))
            {{$row->end_team_to_score_first_home}}
        @elseif(!is_null($row->pre_team_to_score_first_home))
            {{$row->pre_team_to_score_first_home}}
        @endif
        => {{ $pattern->team_to_score_first_home_perc * 100 }}%
    </a>
@elseif($pattern->team_to_score_first_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '14_teamtoscorefirst_draw',
        ])}}"
    >
        Draw / 
        @if(!is_null($row->end_team_to_score_first_draw))
            {{$row->end_team_to_score_first_draw}}
        @elseif(!is_null($row->pre_team_to_score_first_draw))
            {{$row->pre_team_to_score_first_draw}}
        @endif
        => {{ $pattern->team_to_score_first_draw_perc * 100 }}%
    </a>
@elseif($pattern->team_to_score_first_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '14_teamtoscorefirst_away',
        ])}}"
    >
        Away / 
        @if(!is_null($row->end_team_to_score_first_away))
            {{$row->end_team_to_score_first_away}}
        @elseif(!is_null($row->pre_team_to_score_first_away))
            {{$row->pre_team_to_score_first_away}}
        @endif
        => {{ $pattern->team_to_score_first_away_perc * 100 }}%
    </a>
@endif