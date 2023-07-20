@if($pattern->asian_handicap_first_half_home_min_175_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-175',
        ])}}"
    >
        Home -1.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_175))
            {{$row->end_asian_handicap_first_half_home_min_175}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_175))
            {{$row->pre_asian_handicap_first_half_home_min_175}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_175_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_min_15_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-15',
        ])}}"
    >
        Home -1.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_15))
            {{$row->end_asian_handicap_first_half_home_min_15}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_15))
            {{$row->pre_asian_handicap_first_half_home_min_15}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_min_125_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-125',
        ])}}"
    >
        Home -1.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_125))
            {{$row->end_asian_handicap_first_half_home_min_125}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_125))
            {{$row->pre_asian_handicap_first_half_home_min_125}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_125_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_min_1_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-1',
        ])}}"
    >
        Home -1 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_1))
            {{$row->end_asian_handicap_first_half_home_min_1}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_1))
            {{$row->pre_asian_handicap_first_half_home_min_1}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_min_075_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-075',
        ])}}"
    >
        Home -0.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_075))
            {{$row->end_asian_handicap_first_half_home_min_075}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_075))
            {{$row->pre_asian_handicap_first_half_home_min_075}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_min_05_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-05',
        ])}}"
    >
        Home -0.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_05))
            {{$row->end_asian_handicap_first_half_home_min_05}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_05))
            {{$row->pre_asian_handicap_first_half_home_min_05}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_min_025_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_-025',
        ])}}"
    >
        Home -0.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_min_025))
            {{$row->end_asian_handicap_first_half_home_min_025}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_min_025))
            {{$row->pre_asian_handicap_first_half_home_min_025}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_min_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_0_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+0',
        ])}}"
    >
        Home +0 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_0))
            {{$row->end_asian_handicap_first_half_home_plus_0}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_0))
            {{$row->pre_asian_handicap_first_half_home_plus_0}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_0_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_025_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+025',
        ])}}"
    >
        Home +0.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_025))
            {{$row->end_asian_handicap_first_half_home_plus_025}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_025))
            {{$row->pre_asian_handicap_first_half_home_plus_025}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_05_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+05',
        ])}}"
    >
        Home +0.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_05))
            {{$row->end_asian_handicap_first_half_home_plus_05}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_05))
            {{$row->pre_asian_handicap_first_half_home_plus_05}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_075_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,

            'odd' => '19_asianhandicapfirsthalf_home_+075',
        ])}}"
    >
        Home +0.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_075))
            {{$row->end_asian_handicap_first_half_home_plus_075}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_075))
            {{$row->pre_asian_handicap_first_half_home_plus_075}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_1_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+1',
        ])}}"
    >
        Home +1 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_1))
            {{$row->end_asian_handicap_first_half_home_plus_1}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_1))
            {{$row->pre_asian_handicap_first_half_home_plus_1}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_125_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+125',
        ])}}"
    >
        Home +1.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_125))
            {{$row->end_asian_handicap_first_half_home_plus_125}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_125))
            {{$row->pre_asian_handicap_first_half_home_plus_125}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_125_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_15_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+15',
        ])}}"
    >
        Home +1.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_15))
            {{$row->end_asian_handicap_first_half_home_plus_15}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_15))
            {{$row->pre_asian_handicap_first_half_home_plus_15}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_home_plus_175_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_home_+175',
        ])}}"
    >
        Home +1.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_home_plus_175))
            {{$row->end_asian_handicap_first_half_home_plus_175}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_home_plus_175))
            {{$row->pre_asian_handicap_first_half_home_plus_175}}
        @endif
        => {{ $pattern->asian_handicap_first_half_home_plus_175_perc * 100 }}%
    </a>
@endif


@if($pattern->asian_handicap_first_half_away_min_175_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-175',
        ])}}"
    >
        Away -1.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_175))
            {{$row->end_asian_handicap_first_half_away_min_175}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_175))
            {{$row->pre_asian_handicap_first_half_away_min_175}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_175_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_min_15_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-15',
        ])}}"
    >
        Away -1.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_15))
            {{$row->end_asian_handicap_first_half_away_min_15}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_15))
            {{$row->pre_asian_handicap_first_half_away_min_15}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_min_125_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-125',
        ])}}"
    >
        Away -1.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_125))
            {{$row->end_asian_handicap_first_half_away_min_125}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_125))
            {{$row->pre_asian_handicap_first_half_away_min_125}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_125_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_min_1_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-1',
        ])}}"
    >
        Away -1 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_1))
            {{$row->end_asian_handicap_first_half_away_min_1}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_1))
            {{$row->pre_asian_handicap_first_half_away_min_1}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_min_075_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-075',
        ])}}"
    >
        Away -0.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_075))
            {{$row->end_asian_handicap_first_half_away_min_075}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_075))
            {{$row->pre_asian_handicap_first_half_away_min_075}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_min_05_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-05',
        ])}}"
    >
        Away -0.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_05))
            {{$row->end_asian_handicap_first_half_away_min_05}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_05))
            {{$row->pre_asian_handicap_first_half_away_min_05}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_min_025_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_-025',
        ])}}"
    >
        Away -0.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_min_025))
            {{$row->end_asian_handicap_first_half_away_min_025}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_min_025))
            {{$row->pre_asian_handicap_first_half_away_min_025}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_min_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_0_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+0',
        ])}}"
    >
        Away +0 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_0))
            {{$row->end_asian_handicap_first_half_away_plus_0}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_0))
            {{$row->pre_asian_handicap_first_half_away_plus_0}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_0_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_025_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+025',
        ])}}"
    >
        Away +0.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_025))
            {{$row->end_asian_handicap_first_half_away_plus_025}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_025))
            {{$row->pre_asian_handicap_first_half_away_plus_025}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_05_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+05',
        ])}}"
    >
        Away +0.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_05))
            {{$row->end_asian_handicap_first_half_away_plus_05}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_05))
            {{$row->pre_asian_handicap_first_half_away_plus_05}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_075_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,

            'odd' => '19_asianhandicapfirsthalf_away_+075',
        ])}}"
    >
        Away +0.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_075))
            {{$row->end_asian_handicap_first_half_away_plus_075}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_075))
            {{$row->pre_asian_handicap_first_half_away_plus_075}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_1_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+1',
        ])}}"
    >
        Away +1 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_1))
            {{$row->end_asian_handicap_first_half_away_plus_1}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_1))
            {{$row->pre_asian_handicap_first_half_away_plus_1}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_125_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+125',
        ])}}"
    >
        Away +1.25 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_125))
            {{$row->end_asian_handicap_first_half_away_plus_125}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_125))
            {{$row->pre_asian_handicap_first_half_away_plus_125}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_125_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_15_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+15',
        ])}}"
    >
        Away +1.5 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_15))
            {{$row->end_asian_handicap_first_half_away_plus_15}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_15))
            {{$row->pre_asian_handicap_first_half_away_plus_15}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_first_half_away_plus_175_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '19_asianhandicapfirsthalf_away_+175',
        ])}}"
    >
        Away +1.75 / 
        @if(!is_null($row->end_asian_handicap_first_half_away_plus_175))
            {{$row->end_asian_handicap_first_half_away_plus_175}}
        @elseif(!is_null($row->pre_asian_handicap_first_half_away_plus_175))
            {{$row->pre_asian_handicap_first_half_away_plus_175}}
        @endif
        => {{ $pattern->asian_handicap_first_half_away_plus_175_perc * 100 }}%
    </a>
@endif
