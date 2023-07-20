@if($pattern->first_half_winner_home_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '13_firsthalfwinner_home',
        ])}}"
    >
        Home / 
        @if(!is_null($row->end_first_half_winner_home))
            {{$row->end_first_half_winner_home}}
        @elseif(!is_null($row->pre_first_half_winner_home))
            {{$row->pre_first_half_winner_home}}
        @endif
        => {{ $pattern->first_half_winner_home_perc * 100 }}%
    </a>
@elseif($pattern->first_half_winner_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '13_firsthalfwinner_draw',
        ])}}"
    >
        Draw / 
        @if(!is_null($row->end_first_half_winner_draw))
            {{$row->end_first_half_winner_draw}}
        @elseif(!is_null($row->pre_first_half_winner_draw))
            {{$row->pre_first_half_winner_draw}}
        @endif
        => {{ $pattern->first_half_winner_draw_perc * 100 }}%
    </a>
@elseif($pattern->first_half_winner_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '13_firsthalfwinner_away',
        ])}}"
    >
        Away / 
        @if(!is_null($row->end_first_half_winner_away))
            {{$row->end_first_half_winner_away}}
        @elseif(!is_null($row->pre_first_half_winner_away))
            {{$row->pre_first_half_winner_away}}
        @endif
        => {{ $pattern->first_half_winner_away_perc * 100 }}%
    </a>
@endif