@if($pattern->homeaway_home_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '2_homeaway_home',
        ])}}"
    >
        Home / 
        @if(!is_null($row->end_homeaway_home))
            {{$row->end_homeaway_home}}
        @elseif(!is_null($row->pre_homeaway_home))
            {{$row->pre_homeaway_home}}
        @endif
        => {{ $pattern->homeaway_home_perc * 100 }}%
    </a>
@elseif($pattern->homeaway_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '2_homeaway_away',
        ])}}"
    >
        Away / 
        @if(!is_null($row->end_homeaway_away))
            {{$row->end_homeaway_away}}
        @elseif(!is_null($row->pre_homeaway_away))
            {{$row->pre_homeaway_away}}
        @endif
        => {{ $pattern->homeaway_away_perc * 100 }}%
    </a>
@endif

