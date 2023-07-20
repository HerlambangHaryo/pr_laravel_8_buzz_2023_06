@if($pattern->oddeven_odd_perc >= 0.8)
    <a
        class="badge None"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '21_oddeven_odd',
        ])}}"
    >
        Odd / 
        @if(!is_null($row->end_oddeven_odd))
            {{$row->end_oddeven_odd}}
        @elseif(!is_null($row->pre_oddeven_odd))
            {{$row->pre_oddeven_odd}}
        @endif
        => {{ $pattern->oddeven_odd_perc * 100 }}%
    </a>
@elseif($pattern->oddeven_even_perc >= 0.8)
    <a
        class="badge None"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '21_oddeven_even',
        ])}}"
    >
        Even / 
        @if(!is_null($row->end_oddeven_even))
            {{$row->end_oddeven_even}}
        @elseif(!is_null($row->pre_oddeven_even))
            {{$row->pre_oddeven_even}}
        @endif
        => {{ $pattern->oddeven_even_perc * 100 }}%
    </a>
@endif