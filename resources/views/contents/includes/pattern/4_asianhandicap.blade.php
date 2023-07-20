@if($pattern->asian_handicap_home_min_675_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-675',
        ])}}"
    >
        Home -6.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_675))
            {{$row->end_asian_handicap_home_min_675}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_675))
            {{$row->pre_asian_handicap_home_min_675}}
        @endif
        => {{ $pattern->asian_handicap_home_min_675_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_65_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-65',
        ])}}"
    >
        Home -6.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_65))
            {{$row->end_asian_handicap_home_min_65}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_65))
            {{$row->pre_asian_handicap_home_min_65}}
        @endif
        => {{ $pattern->asian_handicap_home_min_65_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_625_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-625',
        ])}}"
    >
        Home -6.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_625))
            {{$row->end_asian_handicap_home_min_625}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_625))
            {{$row->pre_asian_handicap_home_min_625}}
        @endif
        => {{ $pattern->asian_handicap_home_min_625_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_6_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-6',
        ])}}"
    >
        Home -6 / 
        @if(!is_null($row->end_asian_handicap_home_min_6))
            {{$row->end_asian_handicap_home_min_6}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_6))
            {{$row->pre_asian_handicap_home_min_6}}
        @endif
        => {{ $pattern->asian_handicap_home_min_6_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_575_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-575',
        ])}}"
    >
        Home -5.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_575))
            {{$row->end_asian_handicap_home_min_575}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_575))
            {{$row->pre_asian_handicap_home_min_575}}
        @endif
        => {{ $pattern->asian_handicap_home_min_575_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_55_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-55',
        ])}}"
    >
        Home -5.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_55))
            {{$row->end_asian_handicap_home_min_55}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_55))
            {{$row->pre_asian_handicap_home_min_55}}
        @endif
        => {{ $pattern->asian_handicap_home_min_55_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_525_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-525',
        ])}}"
    >
        Home -5.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_525))
            {{$row->end_asian_handicap_home_min_525}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_525))
            {{$row->pre_asian_handicap_home_min_525}}
        @endif
        => {{ $pattern->asian_handicap_home_min_525_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_5_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-5',
        ])}}"
    >
        Home -5 / 
        @if(!is_null($row->end_asian_handicap_home_min_5))
            {{$row->end_asian_handicap_home_min_5}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_5))
            {{$row->pre_asian_handicap_home_min_5}}
        @endif
        => {{ $pattern->asian_handicap_home_min_5_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_475_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-475',
        ])}}"
    >
        Home -4.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_475))
            {{$row->end_asian_handicap_home_min_475}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_475))
            {{$row->pre_asian_handicap_home_min_475}}
        @endif
        => {{ $pattern->asian_handicap_home_min_475_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_45_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-45',
        ])}}"
    >
        Home -4.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_45))
            {{$row->end_asian_handicap_home_min_45}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_45))
            {{$row->pre_asian_handicap_home_min_45}}
        @endif
        => {{ $pattern->asian_handicap_home_min_45_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_425_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-425',
        ])}}"
    >
        Home -4.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_425))
            {{$row->end_asian_handicap_home_min_425}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_425))
            {{$row->pre_asian_handicap_home_min_425}}
        @endif
        => {{ $pattern->asian_handicap_home_min_425_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_4_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-4',

        ])}}"
    >
        Home -4 / 
        @if(!is_null($row->end_asian_handicap_home_min_4))
            {{$row->end_asian_handicap_home_min_4}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_4))
            {{$row->pre_asian_handicap_home_min_4}}
        @endif
        => {{ $pattern->asian_handicap_home_min_4_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_375_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-375',
        ])}}"
    >
        Home -3.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_375))
            {{$row->end_asian_handicap_home_min_375}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_375))
            {{$row->pre_asian_handicap_home_min_375}}
        @endif
        => {{ $pattern->asian_handicap_home_min_375_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_35_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-35',
        ])}}"
    >
        Home -3.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_35))
            {{$row->end_asian_handicap_home_min_35}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_35))
            {{$row->pre_asian_handicap_home_min_35}}
        @endif
        => {{ $pattern->asian_handicap_home_min_35_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_325_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-325',
        ])}}"
    >
        Home -3.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_325))
            {{$row->end_asian_handicap_home_min_325}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_325))
            {{$row->pre_asian_handicap_home_min_325}}
        @endif
        => {{ $pattern->asian_handicap_home_min_325_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_3_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-3',
        ])}}"
    >
        Home -3 / 
        @if(!is_null($row->end_asian_handicap_home_min_3))
            {{$row->end_asian_handicap_home_min_3}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_3))
            {{$row->pre_asian_handicap_home_min_3}}
        @endif
        => {{ $pattern->asian_handicap_home_min_3_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_275_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-275',
        ])}}"
    >
        Home -2.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_275))
            {{$row->end_asian_handicap_home_min_275}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_275))
            {{$row->pre_asian_handicap_home_min_275}}
        @endif
        => {{ $pattern->asian_handicap_home_min_275_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_25_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-25',
        ])}}"
    >
        Home -2.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_25))
            {{$row->end_asian_handicap_home_min_25}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_25))
            {{$row->pre_asian_handicap_home_min_25}}
        @endif
        => {{ $pattern->asian_handicap_home_min_25_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_225_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-225',
        ])}}"
    >
        Home -2.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_225))
            {{$row->end_asian_handicap_home_min_225}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_225))
            {{$row->pre_asian_handicap_home_min_225}}
        @endif
        => {{ $pattern->asian_handicap_home_min_225_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_2_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-2',
        ])}}"
    >
        Home -2 / 
        @if(!is_null($row->end_asian_handicap_home_min_2))
            {{$row->end_asian_handicap_home_min_2}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_2))
            {{$row->pre_asian_handicap_home_min_2}}
        @endif
        => {{ $pattern->asian_handicap_home_min_2_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_175_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-175',
        ])}}"
    >
        Home -1.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_175))
            {{$row->end_asian_handicap_home_min_175}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_175))
            {{$row->pre_asian_handicap_home_min_175}}
        @endif
        => {{ $pattern->asian_handicap_home_min_175_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_15_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-15',
        ])}}"
    >
        Home -1.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_15))
            {{$row->end_asian_handicap_home_min_15}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_15))
            {{$row->pre_asian_handicap_home_min_15}}
        @endif
        => {{ $pattern->asian_handicap_home_min_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_125_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-125',
        ])}}"
    >
        Home -1.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_125))
            {{$row->end_asian_handicap_home_min_125}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_125))
            {{$row->pre_asian_handicap_home_min_125}}
        @endif
        => {{ $pattern->asian_handicap_home_min_125_perc * 100 }}%

    </a>
@elseif($pattern->asian_handicap_home_min_1_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-1',
        ])}}"
    >
        Home -1 / 
        @if(!is_null($row->end_asian_handicap_home_min_1))
            {{$row->end_asian_handicap_home_min_1}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_1))
            {{$row->pre_asian_handicap_home_min_1}}
        @endif
        => {{ $pattern->asian_handicap_home_min_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_075_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-075',
        ])}}"
    >
        Home -0.75 / 
        @if(!is_null($row->end_asian_handicap_home_min_075))
            {{$row->end_asian_handicap_home_min_075}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_075))
            {{$row->pre_asian_handicap_home_min_075}}
        @endif
        => {{ $pattern->asian_handicap_home_min_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_05_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-05',
        ])}}"
    >
        Home -0.5 / 
        @if(!is_null($row->end_asian_handicap_home_min_05))
            {{$row->end_asian_handicap_home_min_05}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_05))
            {{$row->pre_asian_handicap_home_min_05}}
        @endif
        => {{ $pattern->asian_handicap_home_min_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_min_025_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_-025',
        ])}}"
    >
        Home -0.25 / 
        @if(!is_null($row->end_asian_handicap_home_min_025))
            {{$row->end_asian_handicap_home_min_025}}
        @elseif(!is_null($row->pre_asian_handicap_home_min_025))
            {{$row->pre_asian_handicap_home_min_025}}
        @endif
        => {{ $pattern->asian_handicap_home_min_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_0_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+0',
        ])}}"
    >
        Home +0 / 
        @if(!is_null($row->end_asian_handicap_home_plus_0))
            {{$row->end_asian_handicap_home_plus_0}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_0))
            {{$row->pre_asian_handicap_home_plus_0}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_0_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_025_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+025',
        ])}}"
    >
        Home +0.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_025))
            {{$row->end_asian_handicap_home_plus_025}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_025))
            {{$row->pre_asian_handicap_home_plus_025}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_05_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+05',
        ])}}"
    >
        Home +0.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_05))
            {{$row->end_asian_handicap_home_plus_05}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_05))
            {{$row->pre_asian_handicap_home_plus_05}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_075_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+075',
        ])}}"
    >
        Home +0.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_075))
            {{$row->end_asian_handicap_home_plus_075}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_075))
            {{$row->pre_asian_handicap_home_plus_075}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_1_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+1',
        ])}}"
    >
        Home +1 / 
        @if(!is_null($row->end_asian_handicap_home_plus_1))
            {{$row->end_asian_handicap_home_plus_1}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_1))
            {{$row->pre_asian_handicap_home_plus_1}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_125_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+125',
        ])}}"
    >
        Home +1.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_125))
            {{$row->end_asian_handicap_home_plus_125}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_125))
            {{$row->pre_asian_handicap_home_plus_125}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_125_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_15_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+15',
        ])}}"
    >
        Home +1.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_15))
            {{$row->end_asian_handicap_home_plus_15}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_15))
            {{$row->pre_asian_handicap_home_plus_15}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_175_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+175',

        ])}}"
    >
        Home +1.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_175))
            {{$row->end_asian_handicap_home_plus_175}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_175))
            {{$row->pre_asian_handicap_home_plus_175}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_175_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_2_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+2',
        ])}}"
    >
        Home +2 / 
        @if(!is_null($row->end_asian_handicap_home_plus_2))
            {{$row->end_asian_handicap_home_plus_2}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_2))
            {{$row->pre_asian_handicap_home_plus_2}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_2_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_225_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+225',
        ])}}"
    >
        Home +2.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_225))
            {{$row->end_asian_handicap_home_plus_225}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_225))
            {{$row->pre_asian_handicap_home_plus_225}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_225_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_25_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+25',
        ])}}"
    >
        Home +2.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_25))
            {{$row->end_asian_handicap_home_plus_25}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_25))
            {{$row->pre_asian_handicap_home_plus_25}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_25_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_275_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+275',
        ])}}"
    >
        Home +2.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_275))
            {{$row->end_asian_handicap_home_plus_275}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_275))
            {{$row->pre_asian_handicap_home_plus_275}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_275_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_3_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+3',
        ])}}"
    >
        Home +3 / 
        @if(!is_null($row->end_asian_handicap_home_plus_3))
            {{$row->end_asian_handicap_home_plus_3}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_3))
            {{$row->pre_asian_handicap_home_plus_3}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_3_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_325_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+325',
        ])}}"
    >
        Home +3.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_325))
            {{$row->end_asian_handicap_home_plus_325}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_325))
            {{$row->pre_asian_handicap_home_plus_325}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_325_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_35_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+35',
        ])}}"
    >
        Home +3.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_35))
            {{$row->end_asian_handicap_home_plus_35}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_35))
            {{$row->pre_asian_handicap_home_plus_35}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_35_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_375_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+375',
        ])}}"
    >
        Home +3.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_375))
            {{$row->end_asian_handicap_home_plus_375}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_375))
            {{$row->pre_asian_handicap_home_plus_375}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_375_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_4_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+4',
        ])}}"
    >
        Home +4 / 
        @if(!is_null($row->end_asian_handicap_home_plus_4))
            {{$row->end_asian_handicap_home_plus_4}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_4))
            {{$row->pre_asian_handicap_home_plus_4}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_4_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_425_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+425',
        ])}}"
    >
        Home +4.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_425))
            {{$row->end_asian_handicap_home_plus_425}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_425))
            {{$row->pre_asian_handicap_home_plus_425}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_425_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_45_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+45',
        ])}}"
    >
        Home +4.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_45))
            {{$row->end_asian_handicap_home_plus_45}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_45))
            {{$row->pre_asian_handicap_home_plus_45}}
        @endif

        => {{ $pattern->asian_handicap_home_plus_45_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_475_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+475',
        ])}}"
    >
        Home +4.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_475))
            {{$row->end_asian_handicap_home_plus_475}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_475))
            {{$row->pre_asian_handicap_home_plus_475}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_475_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_5_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+5',
        ])}}"
    >
        Home +5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_5))
            {{$row->end_asian_handicap_home_plus_5}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_5))
            {{$row->pre_asian_handicap_home_plus_5}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_5_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_525_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+525',
        ])}}"
    >
        Home +5.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_525))
            {{$row->end_asian_handicap_home_plus_525}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_525))
            {{$row->pre_asian_handicap_home_plus_525}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_525_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_55_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+55',
        ])}}"
    >
        Home +5.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_55))
            {{$row->end_asian_handicap_home_plus_55}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_55))
            {{$row->pre_asian_handicap_home_plus_55}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_55_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_575_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+575',
        ])}}"
    >
        Home +5.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_575))
            {{$row->end_asian_handicap_home_plus_575}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_575))
            {{$row->pre_asian_handicap_home_plus_575}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_575_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_6_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+6',
        ])}}"
    >
        Home +6 / 
        @if(!is_null($row->end_asian_handicap_home_plus_6))
            {{$row->end_asian_handicap_home_plus_6}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_6))
            {{$row->pre_asian_handicap_home_plus_6}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_6_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_625_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+625',
        ])}}"
    >
        Home +6.25 / 
        @if(!is_null($row->end_asian_handicap_home_plus_625))
            {{$row->end_asian_handicap_home_plus_625}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_625))
            {{$row->pre_asian_handicap_home_plus_625}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_625_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_65_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+65',
        ])}}"
    >
        Home +6.5 / 
        @if(!is_null($row->end_asian_handicap_home_plus_65))
            {{$row->end_asian_handicap_home_plus_65}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_65))
            {{$row->pre_asian_handicap_home_plus_65}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_65_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_home_plus_675_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_home_+675',
        ])}}"
    >
        Home +6.75 / 
        @if(!is_null($row->end_asian_handicap_home_plus_675))
            {{$row->end_asian_handicap_home_plus_675}}
        @elseif(!is_null($row->pre_asian_handicap_home_plus_675))
            {{$row->pre_asian_handicap_home_plus_675}}
        @endif
        => {{ $pattern->asian_handicap_home_plus_675_perc * 100 }}%
    </a>
@endif

@if($pattern->asian_handicap_away_min_675_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-675',
        ])}}"
    >
        Away -6.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_675))
            {{$row->end_asian_handicap_away_min_675}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_675))
            {{$row->pre_asian_handicap_away_min_675}}
        @endif
        => {{ $pattern->asian_handicap_away_min_675_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_65_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-65',
        ])}}"
    >
        Away -6.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_65))
            {{$row->end_asian_handicap_away_min_65}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_65))
            {{$row->pre_asian_handicap_away_min_65}}
        @endif
        => {{ $pattern->asian_handicap_away_min_65_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_625_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-625',
        ])}}"
    >
        Away -6.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_625))
            {{$row->end_asian_handicap_away_min_625}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_625))
            {{$row->pre_asian_handicap_away_min_625}}
        @endif
        => {{ $pattern->asian_handicap_away_min_625_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_6_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-6',
        ])}}"
    >
        Away -6 / 
        @if(!is_null($row->end_asian_handicap_away_min_6))
            {{$row->end_asian_handicap_away_min_6}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_6))
            {{$row->pre_asian_handicap_away_min_6}}
        @endif
        => {{ $pattern->asian_handicap_away_min_6_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_575_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-575',
        ])}}"
    >
        Away -5.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_575))
            {{$row->end_asian_handicap_away_min_575}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_575))
            {{$row->pre_asian_handicap_away_min_575}}
        @endif
        => {{ $pattern->asian_handicap_away_min_575_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_55_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-55',
        ])}}"
    >
        Away -5.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_55))
            {{$row->end_asian_handicap_away_min_55}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_55))
            {{$row->pre_asian_handicap_away_min_55}}
        @endif
        => {{ $pattern->asian_handicap_away_min_55_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_525_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-525',
        ])}}"
    >
        Away -5.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_525))
            {{$row->end_asian_handicap_away_min_525}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_525))
            {{$row->pre_asian_handicap_away_min_525}}
        @endif
        => {{ $pattern->asian_handicap_away_min_525_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_5_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-5',
        ])}}"
    >
        Away -5 / 
        @if(!is_null($row->end_asian_handicap_away_min_5))
            {{$row->end_asian_handicap_away_min_5}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_5))
            {{$row->pre_asian_handicap_away_min_5}}
        @endif
        => {{ $pattern->asian_handicap_away_min_5_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_475_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-475',
        ])}}"
    >
        Away -4.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_475))
            {{$row->end_asian_handicap_away_min_475}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_475))
            {{$row->pre_asian_handicap_away_min_475}}
        @endif
        => {{ $pattern->asian_handicap_away_min_475_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_45_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-45',
        ])}}"
    >
        Away -4.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_45))
            {{$row->end_asian_handicap_away_min_45}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_45))
            {{$row->pre_asian_handicap_away_min_45}}
        @endif
        => {{ $pattern->asian_handicap_away_min_45_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_425_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-425',
        ])}}"
    >
        Away -4.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_425))
            {{$row->end_asian_handicap_away_min_425}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_425))
            {{$row->pre_asian_handicap_away_min_425}}
        @endif
        => {{ $pattern->asian_handicap_away_min_425_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_4_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-4',

        ])}}"
    >
        Away -4 / 
        @if(!is_null($row->end_asian_handicap_away_min_4))
            {{$row->end_asian_handicap_away_min_4}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_4))
            {{$row->pre_asian_handicap_away_min_4}}
        @endif
        => {{ $pattern->asian_handicap_away_min_4_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_375_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-375',
        ])}}"
    >
        Away -3.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_375))
            {{$row->end_asian_handicap_away_min_375}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_375))
            {{$row->pre_asian_handicap_away_min_375}}
        @endif
        => {{ $pattern->asian_handicap_away_min_375_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_35_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-35',
        ])}}"
    >
        Away -3.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_35))
            {{$row->end_asian_handicap_away_min_35}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_35))
            {{$row->pre_asian_handicap_away_min_35}}
        @endif
        => {{ $pattern->asian_handicap_away_min_35_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_325_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-325',
        ])}}"
    >
        Away -3.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_325))
            {{$row->end_asian_handicap_away_min_325}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_325))
            {{$row->pre_asian_handicap_away_min_325}}
        @endif
        => {{ $pattern->asian_handicap_away_min_325_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_3_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-3',
        ])}}"
    >
        Away -3 / 
        @if(!is_null($row->end_asian_handicap_away_min_3))
            {{$row->end_asian_handicap_away_min_3}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_3))
            {{$row->pre_asian_handicap_away_min_3}}
        @endif
        => {{ $pattern->asian_handicap_away_min_3_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_275_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-275',
        ])}}"
    >
        Away -2.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_275))
            {{$row->end_asian_handicap_away_min_275}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_275))
            {{$row->pre_asian_handicap_away_min_275}}
        @endif
        => {{ $pattern->asian_handicap_away_min_275_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_25_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-25',
        ])}}"
    >
        Away -2.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_25))
            {{$row->end_asian_handicap_away_min_25}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_25))
            {{$row->pre_asian_handicap_away_min_25}}
        @endif
        => {{ $pattern->asian_handicap_away_min_25_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_225_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-225',
        ])}}"
    >
        Away -2.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_225))
            {{$row->end_asian_handicap_away_min_225}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_225))
            {{$row->pre_asian_handicap_away_min_225}}
        @endif
        => {{ $pattern->asian_handicap_away_min_225_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_2_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-2',
        ])}}"
    >
        Away -2 / 
        @if(!is_null($row->end_asian_handicap_away_min_2))
            {{$row->end_asian_handicap_away_min_2}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_2))
            {{$row->pre_asian_handicap_away_min_2}}
        @endif
        => {{ $pattern->asian_handicap_away_min_2_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_175_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-175',
        ])}}"
    >
        Away -1.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_175))
            {{$row->end_asian_handicap_away_min_175}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_175))
            {{$row->pre_asian_handicap_away_min_175}}
        @endif
        => {{ $pattern->asian_handicap_away_min_175_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_15_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-15',
        ])}}"
    >
        Away -1.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_15))
            {{$row->end_asian_handicap_away_min_15}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_15))
            {{$row->pre_asian_handicap_away_min_15}}
        @endif
        => {{ $pattern->asian_handicap_away_min_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_125_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-125',
        ])}}"
    >
        Away -1.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_125))
            {{$row->end_asian_handicap_away_min_125}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_125))
            {{$row->pre_asian_handicap_away_min_125}}
        @endif
        => {{ $pattern->asian_handicap_away_min_125_perc * 100 }}%

    </a>
@elseif($pattern->asian_handicap_away_min_1_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-1',
        ])}}"
    >
        Away -1 / 
        @if(!is_null($row->end_asian_handicap_away_min_1))
            {{$row->end_asian_handicap_away_min_1}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_1))
            {{$row->pre_asian_handicap_away_min_1}}
        @endif
        => {{ $pattern->asian_handicap_away_min_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_075_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-075',
        ])}}"
    >
        Away -0.75 / 
        @if(!is_null($row->end_asian_handicap_away_min_075))
            {{$row->end_asian_handicap_away_min_075}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_075))
            {{$row->pre_asian_handicap_away_min_075}}
        @endif
        => {{ $pattern->asian_handicap_away_min_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_05_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-05',
        ])}}"
    >
        Away -0.5 / 
        @if(!is_null($row->end_asian_handicap_away_min_05))
            {{$row->end_asian_handicap_away_min_05}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_05))
            {{$row->pre_asian_handicap_away_min_05}}
        @endif
        => {{ $pattern->asian_handicap_away_min_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_min_025_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_-025',
        ])}}"
    >
        Away -0.25 / 
        @if(!is_null($row->end_asian_handicap_away_min_025))
            {{$row->end_asian_handicap_away_min_025}}
        @elseif(!is_null($row->pre_asian_handicap_away_min_025))
            {{$row->pre_asian_handicap_away_min_025}}
        @endif
        => {{ $pattern->asian_handicap_away_min_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_0_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+0',
        ])}}"
    >
        Away +0 / 
        @if(!is_null($row->end_asian_handicap_away_plus_0))
            {{$row->end_asian_handicap_away_plus_0}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_0))
            {{$row->pre_asian_handicap_away_plus_0}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_0_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_025_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+025',
        ])}}"
    >
        Away +0.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_025))
            {{$row->end_asian_handicap_away_plus_025}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_025))
            {{$row->pre_asian_handicap_away_plus_025}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_025_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_05_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+05',
        ])}}"
    >
        Away +0.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_05))
            {{$row->end_asian_handicap_away_plus_05}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_05))
            {{$row->pre_asian_handicap_away_plus_05}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_05_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_075_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+075',
        ])}}"
    >
        Away +0.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_075))
            {{$row->end_asian_handicap_away_plus_075}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_075))
            {{$row->pre_asian_handicap_away_plus_075}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_075_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_1_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+1',
        ])}}"
    >
        Away +1 / 
        @if(!is_null($row->end_asian_handicap_away_plus_1))
            {{$row->end_asian_handicap_away_plus_1}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_1))
            {{$row->pre_asian_handicap_away_plus_1}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_1_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_125_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+125',
        ])}}"
    >
        Away +1.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_125))
            {{$row->end_asian_handicap_away_plus_125}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_125))
            {{$row->pre_asian_handicap_away_plus_125}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_125_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_15_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+15',
        ])}}"
    >
        Away +1.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_15))
            {{$row->end_asian_handicap_away_plus_15}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_15))
            {{$row->pre_asian_handicap_away_plus_15}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_15_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_175_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+175',

        ])}}"
    >
        Away +1.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_175))
            {{$row->end_asian_handicap_away_plus_175}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_175))
            {{$row->pre_asian_handicap_away_plus_175}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_175_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_2_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+2',
        ])}}"
    >
        Away +2 / 
        @if(!is_null($row->end_asian_handicap_away_plus_2))
            {{$row->end_asian_handicap_away_plus_2}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_2))
            {{$row->pre_asian_handicap_away_plus_2}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_2_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_225_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+225',
        ])}}"
    >
        Away +2.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_225))
            {{$row->end_asian_handicap_away_plus_225}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_225))
            {{$row->pre_asian_handicap_away_plus_225}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_225_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_25_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+25',
        ])}}"
    >
        Away +2.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_25))
            {{$row->end_asian_handicap_away_plus_25}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_25))
            {{$row->pre_asian_handicap_away_plus_25}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_25_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_275_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+275',
        ])}}"
    >
        Away +2.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_275))
            {{$row->end_asian_handicap_away_plus_275}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_275))
            {{$row->pre_asian_handicap_away_plus_275}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_275_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_3_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+3',
        ])}}"
    >
        Away +3 / 
        @if(!is_null($row->end_asian_handicap_away_plus_3))
            {{$row->end_asian_handicap_away_plus_3}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_3))
            {{$row->pre_asian_handicap_away_plus_3}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_3_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_325_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+325',
        ])}}"
    >
        Away +3.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_325))
            {{$row->end_asian_handicap_away_plus_325}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_325))
            {{$row->pre_asian_handicap_away_plus_325}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_325_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_35_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+35',
        ])}}"
    >
        Away +3.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_35))
            {{$row->end_asian_handicap_away_plus_35}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_35))
            {{$row->pre_asian_handicap_away_plus_35}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_35_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_375_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+375',
        ])}}"
    >
        Away +3.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_375))
            {{$row->end_asian_handicap_away_plus_375}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_375))
            {{$row->pre_asian_handicap_away_plus_375}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_375_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_4_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+4',
        ])}}"
    >
        Away +4 / 
        @if(!is_null($row->end_asian_handicap_away_plus_4))
            {{$row->end_asian_handicap_away_plus_4}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_4))
            {{$row->pre_asian_handicap_away_plus_4}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_4_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_425_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+425',
        ])}}"
    >
        Away +4.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_425))
            {{$row->end_asian_handicap_away_plus_425}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_425))
            {{$row->pre_asian_handicap_away_plus_425}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_425_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_45_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+45',
        ])}}"
    >
        Away +4.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_45))
            {{$row->end_asian_handicap_away_plus_45}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_45))
            {{$row->pre_asian_handicap_away_plus_45}}
        @endif

        => {{ $pattern->asian_handicap_away_plus_45_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_475_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+475',
        ])}}"
    >
        Away +4.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_475))
            {{$row->end_asian_handicap_away_plus_475}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_475))
            {{$row->pre_asian_handicap_away_plus_475}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_475_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_5_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+5',
        ])}}"
    >
        Away +5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_5))
            {{$row->end_asian_handicap_away_plus_5}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_5))
            {{$row->pre_asian_handicap_away_plus_5}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_5_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_525_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+525',
        ])}}"
    >
        Away +5.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_525))
            {{$row->end_asian_handicap_away_plus_525}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_525))
            {{$row->pre_asian_handicap_away_plus_525}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_525_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_55_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+55',
        ])}}"
    >
        Away +5.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_55))
            {{$row->end_asian_handicap_away_plus_55}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_55))
            {{$row->pre_asian_handicap_away_plus_55}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_55_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_575_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+575',
        ])}}"
    >
        Away +5.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_575))
            {{$row->end_asian_handicap_away_plus_575}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_575))
            {{$row->pre_asian_handicap_away_plus_575}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_575_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_6_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+6',
        ])}}"
    >
        Away +6 / 
        @if(!is_null($row->end_asian_handicap_away_plus_6))
            {{$row->end_asian_handicap_away_plus_6}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_6))
            {{$row->pre_asian_handicap_away_plus_6}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_6_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_625_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+625',
        ])}}"
    >
        Away +6.25 / 
        @if(!is_null($row->end_asian_handicap_away_plus_625))
            {{$row->end_asian_handicap_away_plus_625}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_625))
            {{$row->pre_asian_handicap_away_plus_625}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_625_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_65_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+65',
        ])}}"
    >
        Away +6.5 / 
        @if(!is_null($row->end_asian_handicap_away_plus_65))
            {{$row->end_asian_handicap_away_plus_65}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_65))
            {{$row->pre_asian_handicap_away_plus_65}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_65_perc * 100 }}%
    </a>
@elseif($pattern->asian_handicap_away_plus_675_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '4_asianhandicap_away_+675',
        ])}}"
    >
        Away +6.75 / 
        @if(!is_null($row->end_asian_handicap_away_plus_675))
            {{$row->end_asian_handicap_away_plus_675}}
        @elseif(!is_null($row->pre_asian_handicap_away_plus_675))
            {{$row->pre_asian_handicap_away_plus_675}}
        @endif
        => {{ $pattern->asian_handicap_away_plus_675_perc * 100 }}%
    </a>
@endif

