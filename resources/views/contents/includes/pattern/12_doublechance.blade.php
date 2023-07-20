@if($pattern->double_chance_home_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '12_doublechance_home/draw',
        ])}}"
    >
        Home/Draw / 
        @if(!is_null($row->end_double_chance_home_draw))
            {{$row->end_double_chance_home_draw}}
        @elseif(!is_null($row->pre_double_chance_home_draw))
            {{$row->pre_double_chance_home_draw}}
        @endif
        => {{ $pattern->double_chance_home_draw_perc * 100 }}%
    </a>
@elseif($pattern->double_chance_home_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '12_doublechance_home/away',
        ])}}"
    >
        Home/Away / 
        @if(!is_null($row->end_double_chance_home_away))
            {{$row->end_double_chance_home_away}}
        @elseif(!is_null($row->pre_double_chance_home_away))
            {{$row->pre_double_chance_home_away}}
        @endif
        => {{ $pattern->double_chance_home_away_perc * 100 }}%
    </a>
@elseif($pattern->double_chance_draw_away_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '12_doublechance_draw/away',
        ])}}"
    >
        Draw/Away / 
        @if(!is_null($row->end_double_chance_draw_away))
            {{$row->end_double_chance_draw_away}}
        @elseif(!is_null($row->pre_double_chance_draw_away))
            {{$row->pre_double_chance_draw_away}}
        @endif
        => {{ $pattern->double_chance_draw_away_perc * 100 }}%
    </a>
@endif