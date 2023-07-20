@if($pattern->htft_double_home_home_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_home/home',
        ])}}"
    >
        Home/Home / 
        @if(!is_null($row->end_htft_double_home_home))
            {{$row->end_htft_double_home_home}}
        @elseif(!is_null($row->pre_htft_double_home_home))
            {{$row->pre_htft_double_home_home}}
        @endif
        => {{ $pattern->htft_double_home_home_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_home_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_home/draw',
        ])}}"
    >
        Home/Draw / 
        @if(!is_null($row->end_htft_double_home_draw))
            {{$row->end_htft_double_home_draw}}
        @elseif(!is_null($row->pre_htft_double_home_draw))
            {{$row->pre_htft_double_home_draw}}
        @endif
        => {{ $pattern->htft_double_home_draw_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_home_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_home/away',
        ])}}"
    >
        Home/Away / 
        @if(!is_null($row->end_htft_double_home_away))
            {{$row->end_htft_double_home_away}}
        @elseif(!is_null($row->pre_htft_double_home_away))
            {{$row->pre_htft_double_home_away}}
        @endif
        => {{ $pattern->htft_double_home_away_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_draw_home_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_draw/home',
        ])}}"
    >
        Draw/Home / 
        @if(!is_null($row->end_htft_double_draw_home))
            {{$row->end_htft_double_draw_home}}
        @elseif(!is_null($row->pre_htft_double_draw_home))
            {{$row->pre_htft_double_draw_home}}
        @endif
        => {{ $pattern->htft_double_draw_home_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_draw_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_draw/draw',
        ])}}"
    >
        Draw/Draw / 
        @if(!is_null($row->end_htft_double_draw_draw))
            {{$row->end_htft_double_draw_draw}}
        @elseif(!is_null($row->pre_htft_double_draw_draw))
            {{$row->pre_htft_double_draw_draw}}
        @endif
        => {{ $pattern->htft_double_draw_draw_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_draw_away_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_draw/away',
        ])}}"
    >
        Draw/Away / 
        @if(!is_null($row->end_htft_double_draw_away))
            {{$row->end_htft_double_draw_away}}
        @elseif(!is_null($row->pre_htft_double_draw_away))
            {{$row->pre_htft_double_draw_away}}
        @endif
        => {{ $pattern->htft_double_draw_away_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_away_home_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_away/home',
        ])}}"
    >
        Away/Home / 
        @if(!is_null($row->end_htft_double_away_home))
            {{$row->end_htft_double_away_home}}
        @elseif(!is_null($row->pre_htft_double_away_home))
            {{$row->pre_htft_double_away_home}}
        @endif
        => {{ $pattern->htft_double_away_home_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_away_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_away/draw',
        ])}}"
    >
        Away/Draw / 
        @if(!is_null($row->end_htft_double_away_draw))
            {{$row->end_htft_double_away_draw}}
        @elseif(!is_null($row->pre_htft_double_away_draw))
            {{$row->pre_htft_double_away_draw}}
        @endif
        => {{ $pattern->htft_double_away_draw_perc * 100 }}%
    </a>
@elseif($pattern->htft_double_away_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '7_htftdouble_away/away',
        ])}}"
    >
        Away/Away / 
        @if(!is_null($row->end_htft_double_away_away))
            {{$row->end_htft_double_away_away}}
        @elseif(!is_null($row->pre_htft_double_away_away))
            {{$row->pre_htft_double_away_away}}
        @endif
        => {{ $pattern->htft_double_away_away_perc * 100 }}%
    </a>
@endif