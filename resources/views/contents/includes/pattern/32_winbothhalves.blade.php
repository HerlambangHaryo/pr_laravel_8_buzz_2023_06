@if($pattern->win_both_halves_home_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '32_winbothhalves_home',
        ])}}"
    >
        Home / 
        @if(!is_null($row->end_win_both_halves_home))
            {{$row->end_win_both_halves_home}}
        @elseif(!is_null($row->pre_win_both_halves_home))
            {{$row->pre_win_both_halves_home}}
        @endif
        => {{ $pattern->win_both_halves_home_perc * 100 }}%
    </a>
@elseif($pattern->win_both_halves_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '32_winbothhalves_away',
        ])}}"
    >
        Away / 
        @if(!is_null($row->end_win_both_halves_away))
            {{$row->end_win_both_halves_away}}
        @elseif(!is_null($row->pre_win_both_halves_away))
            {{$row->pre_win_both_halves_away}}
        @endif
        => {{ $pattern->win_both_halves_away_perc * 100 }}%
    </a>
@endif