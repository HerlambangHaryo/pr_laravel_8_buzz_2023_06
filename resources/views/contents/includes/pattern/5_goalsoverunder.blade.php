@if($pattern->goals_overunder_over_95_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_95',
        ])}}"
    >
        Over 9.5 / 
        @if(!is_null($row->end_goals_overunder_over_95))
            {{$row->end_goals_overunder_over_95}}
        @elseif(!is_null($row->pre_goals_overunder_over_95))
            {{$row->pre_goals_overunder_over_95}}
        @endif
        => {{ $pattern->goals_overunder_over_95_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_85_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_85',
        ])}}"
    >
        Over 8.5 / 
        @if(!is_null($row->end_goals_overunder_over_85))
            {{$row->end_goals_overunder_over_85}}
        @elseif(!is_null($row->pre_goals_overunder_over_85))
            {{$row->pre_goals_overunder_over_85}}
        @endif
        => {{ $pattern->goals_overunder_over_85_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_75_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_75',
        ])}}"
    >
        Over 7.5 / 
        @if(!is_null($row->end_goals_overunder_over_75))
            {{$row->end_goals_overunder_over_75}}
        @elseif(!is_null($row->pre_goals_overunder_over_75))
            {{$row->pre_goals_overunder_over_75}}
        @endif
        => {{ $pattern->goals_overunder_over_75_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_70_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_70',
        ])}}"
    >
        Over 7.0 / 
        @if(!is_null($row->end_goals_overunder_over_70))
            {{$row->end_goals_overunder_over_70}}
        @elseif(!is_null($row->pre_goals_overunder_over_70))
            {{$row->pre_goals_overunder_over_70}}
        @endif
        => {{ $pattern->goals_overunder_over_70_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_675_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_675',
        ])}}"
    >
        Over 6.75 / 
        @if(!is_null($row->end_goals_overunder_over_675))
            {{$row->end_goals_overunder_over_675}}
        @elseif(!is_null($row->pre_goals_overunder_over_675))
            {{$row->pre_goals_overunder_over_675}}
        @endif
        => {{ $pattern->goals_overunder_over_675_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_65_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_65',
        ])}}"
    >
        Over 6.5 / 
        @if(!is_null($row->end_goals_overunder_over_65))
            {{$row->end_goals_overunder_over_65}}
        @elseif(!is_null($row->pre_goals_overunder_over_65))
            {{$row->pre_goals_overunder_over_65}}
        @endif
        => {{ $pattern->goals_overunder_over_65_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_625_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_625',
        ])}}"
    >
        Over 6.25 / 
        @if(!is_null($row->end_goals_overunder_over_625))
            {{$row->end_goals_overunder_over_625}}
        @elseif(!is_null($row->pre_goals_overunder_over_625))
            {{$row->pre_goals_overunder_over_625}}
        @endif
        => {{ $pattern->goals_overunder_over_625_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_60_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_60',
        ])}}"
    >
        Over 6.0 / 
        @if(!is_null($row->end_goals_overunder_over_60))
            {{$row->end_goals_overunder_over_60}}
        @elseif(!is_null($row->pre_goals_overunder_over_60))
            {{$row->pre_goals_overunder_over_60}}
        @endif
        => {{ $pattern->goals_overunder_over_60_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_575_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_575',
        ])}}"
    >
        Over 5.75 / 
        @if(!is_null($row->end_goals_overunder_over_575))
            {{$row->end_goals_overunder_over_575}}
        @elseif(!is_null($row->pre_goals_overunder_over_575))
            {{$row->pre_goals_overunder_over_575}}
        @endif
        => {{ $pattern->goals_overunder_over_575_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_55_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_55',
        ])}}"
    >
        Over 5.5 / 
        @if(!is_null($row->end_goals_overunder_over_55))
            {{$row->end_goals_overunder_over_55}}
        @elseif(!is_null($row->pre_goals_overunder_over_55))
            {{$row->pre_goals_overunder_over_55}}
        @endif
        => {{ $pattern->goals_overunder_over_55_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_525_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_525',
        ])}}"
    >
        Over 5.25 / 
        @if(!is_null($row->end_goals_overunder_over_525))
            {{$row->end_goals_overunder_over_525}}
        @elseif(!is_null($row->pre_goals_overunder_over_525))
            {{$row->pre_goals_overunder_over_525}}
        @endif
        => {{ $pattern->goals_overunder_over_525_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_50_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_50',
        ])}}"
    >
        Over 5.0 / 
        @if(!is_null($row->end_goals_overunder_over_50))
            {{$row->end_goals_overunder_over_50}}
        @elseif(!is_null($row->pre_goals_overunder_over_50))

            {{$row->pre_goals_overunder_over_50}}
        @endif
        => {{ $pattern->goals_overunder_over_50_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_475_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_475',
        ])}}"
    >
        Over 4.75 / 
        @if(!is_null($row->end_goals_overunder_over_475))
            {{$row->end_goals_overunder_over_475}}
        @elseif(!is_null($row->pre_goals_overunder_over_475))
            {{$row->pre_goals_overunder_over_475}}
        @endif
        => {{ $pattern->goals_overunder_over_475_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_45_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_45',
        ])}}"
    >
        Over 4.5 / 
        @if(!is_null($row->end_goals_overunder_over_45))
            {{$row->end_goals_overunder_over_45}}
        @elseif(!is_null($row->pre_goals_overunder_over_45))
            {{$row->pre_goals_overunder_over_45}}
        @endif
        => {{ $pattern->goals_overunder_over_45_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_425_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_425',
        ])}}"
    >
        Over 4.25 / 
        @if(!is_null($row->end_goals_overunder_over_425))
            {{$row->end_goals_overunder_over_425}}
        @elseif(!is_null($row->pre_goals_overunder_over_425))
            {{$row->pre_goals_overunder_over_425}}
        @endif
        => {{ $pattern->goals_overunder_over_425_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_40_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_40',
        ])}}"
    >
        Over 4.0 / 
        @if(!is_null($row->end_goals_overunder_over_40))
            {{$row->end_goals_overunder_over_40}}
        @elseif(!is_null($row->pre_goals_overunder_over_40))
            {{$row->pre_goals_overunder_over_40}}
        @endif
        => {{ $pattern->goals_overunder_over_40_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_375_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_375',
        ])}}"
    >
        Over 3.75 / 
        @if(!is_null($row->end_goals_overunder_over_375))
            {{$row->end_goals_overunder_over_375}}
        @elseif(!is_null($row->pre_goals_overunder_over_375))
            {{$row->pre_goals_overunder_over_375}}
        @endif
        => {{ $pattern->goals_overunder_over_375_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_35_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_35',
        ])}}"
    >
        Over 3.5 / 
        @if(!is_null($row->end_goals_overunder_over_35))
            {{$row->end_goals_overunder_over_35}}
        @elseif(!is_null($row->pre_goals_overunder_over_35))
            {{$row->pre_goals_overunder_over_35}}
        @endif
        => {{ $pattern->goals_overunder_over_35_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_325_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_325',
        ])}}"
    >
        Over 3.25 / 
        @if(!is_null($row->end_goals_overunder_over_325))
            {{$row->end_goals_overunder_over_325}}
        @elseif(!is_null($row->pre_goals_overunder_over_325))
            {{$row->pre_goals_overunder_over_325}}
        @endif
        => {{ $pattern->goals_overunder_over_325_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_30_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_30',
        ])}}"
    >
        Over 3.0 / 
        @if(!is_null($row->end_goals_overunder_over_30))
            {{$row->end_goals_overunder_over_30}}
        @elseif(!is_null($row->pre_goals_overunder_over_30))
            {{$row->pre_goals_overunder_over_30}}
        @endif
        => {{ $pattern->goals_overunder_over_30_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_275_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_275',
        ])}}"
    >
        Over 2.75 / 
        @if(!is_null($row->end_goals_overunder_over_275))
            {{$row->end_goals_overunder_over_275}}
        @elseif(!is_null($row->pre_goals_overunder_over_275))
            {{$row->pre_goals_overunder_over_275}}
        @endif
        => {{ $pattern->goals_overunder_over_275_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_25_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_25',
        ])}}"
    >
        Over 2.5 / 
        @if(!is_null($row->end_goals_overunder_over_25))
            {{$row->end_goals_overunder_over_25}}
        @elseif(!is_null($row->pre_goals_overunder_over_25))
            {{$row->pre_goals_overunder_over_25}}
        @endif
        => {{ $pattern->goals_overunder_over_25_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_225_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_225',
        ])}}"
    >
        Over 2.25 / 
        @if(!is_null($row->end_goals_overunder_over_225))
            {{$row->end_goals_overunder_over_225}}
        @elseif(!is_null($row->pre_goals_overunder_over_225))
            {{$row->pre_goals_overunder_over_225}}
        @endif
        => {{ $pattern->goals_overunder_over_225_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_20_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_20',
        ])}}"
    >
        Over 2.0 / 
        @if(!is_null($row->end_goals_overunder_over_20))

            {{$row->end_goals_overunder_over_20}}
        @elseif(!is_null($row->pre_goals_overunder_over_20))
            {{$row->pre_goals_overunder_over_20}}
        @endif
        => {{ $pattern->goals_overunder_over_20_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_175_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_175',
        ])}}"
    >
        Over 1.75 / 
        @if(!is_null($row->end_goals_overunder_over_175))
            {{$row->end_goals_overunder_over_175}}
        @elseif(!is_null($row->pre_goals_overunder_over_175))
            {{$row->pre_goals_overunder_over_175}}
        @endif
        => {{ $pattern->goals_overunder_over_175_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_15_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_15',
        ])}}"
    >
        Over 1.5 / 
        @if(!is_null($row->end_goals_overunder_over_15))
            {{$row->end_goals_overunder_over_15}}
        @elseif(!is_null($row->pre_goals_overunder_over_15))
            {{$row->pre_goals_overunder_over_15}}
        @endif
        => {{ $pattern->goals_overunder_over_15_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_125_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_125',
        ])}}"
    >
        Over 1.25 / 
        @if(!is_null($row->end_goals_overunder_over_125))
            {{$row->end_goals_overunder_over_125}}
        @elseif(!is_null($row->pre_goals_overunder_over_125))
            {{$row->pre_goals_overunder_over_125}}
        @endif
        => {{ $pattern->goals_overunder_over_125_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_10_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_10',
        ])}}"
    >
        Over 1.0 / 
        @if(!is_null($row->end_goals_overunder_over_10))
            {{$row->end_goals_overunder_over_10}}
        @elseif(!is_null($row->pre_goals_overunder_over_10))
            {{$row->pre_goals_overunder_over_10}}
        @endif
        => {{ $pattern->goals_overunder_over_10_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_075_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_075',
        ])}}"
    >
        Over 0.75 / 
        @if(!is_null($row->end_goals_overunder_over_075))
            {{$row->end_goals_overunder_over_075}}
        @elseif(!is_null($row->pre_goals_overunder_over_075))
            {{$row->pre_goals_overunder_over_075}}
        @endif
        => {{ $pattern->goals_overunder_over_075_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_over_05_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_over_05',
        ])}}"
    >
        Over 0.5 / 
        @if(!is_null($row->end_goals_overunder_over_05))
            {{$row->end_goals_overunder_over_05}}
        @elseif(!is_null($row->pre_goals_overunder_over_05))
            {{$row->pre_goals_overunder_over_05}}
        @endif
        => {{ $pattern->goals_overunder_over_05_perc * 100 }}%
    </a>
@endif

@if($pattern->goals_overunder_under_05_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_05',
        ])}}"
    >
        Under 0.5 / 
        @if(!is_null($row->end_goals_overunder_under_05))
            {{$row->end_goals_overunder_under_05}}
        @elseif(!is_null($row->pre_goals_overunder_under_05))
            {{$row->pre_goals_overunder_under_05}}
        @endif
        => {{ $pattern->goals_overunder_under_05_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_075_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_075',
        ])}}"
    >
        Under 0.75 / 
        @if(!is_null($row->end_goals_overunder_under_075))
            {{$row->end_goals_overunder_under_075}}
        @elseif(!is_null($row->pre_goals_overunder_under_075))
            {{$row->pre_goals_overunder_under_075}}
        @endif
        => {{ $pattern->goals_overunder_under_075_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_10_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_10',
        ])}}"
    >
        Under 1.0 / 
        @if(!is_null($row->end_goals_overunder_under_10))
            {{$row->end_goals_overunder_under_10}}
        @elseif(!is_null($row->pre_goals_overunder_under_10))
            {{$row->pre_goals_overunder_under_10}}
        @endif
        => {{ $pattern->goals_overunder_under_10_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_125_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_125',
        ])}}"
    >
        Under 1.25 / 
        @if(!is_null($row->end_goals_overunder_under_125))
            {{$row->end_goals_overunder_under_125}}
        @elseif(!is_null($row->pre_goals_overunder_under_125))
            {{$row->pre_goals_overunder_under_125}}
        @endif
        => {{ $pattern->goals_overunder_under_125_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_15_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_15',
        ])}}"
    >
        Under 1.5 / 
        @if(!is_null($row->end_goals_overunder_under_15))
            {{$row->end_goals_overunder_under_15}}
        @elseif(!is_null($row->pre_goals_overunder_under_15))
            {{$row->pre_goals_overunder_under_15}}
        @endif
        => {{ $pattern->goals_overunder_under_15_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_175_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_175',
        ])}}"
    >
        Under 1.75 / 
        @if(!is_null($row->end_goals_overunder_under_175))
            {{$row->end_goals_overunder_under_175}}
        @elseif(!is_null($row->pre_goals_overunder_under_175))
            {{$row->pre_goals_overunder_under_175}}
        @endif
        => {{ $pattern->goals_overunder_under_175_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_20_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_20',
        ])}}"
    >
        Under 2.0 / 
        @if(!is_null($row->end_goals_overunder_under_20))
            {{$row->end_goals_overunder_under_20}}
        @elseif(!is_null($row->pre_goals_overunder_under_20))
            {{$row->pre_goals_overunder_under_20}}
        @endif
        => {{ $pattern->goals_overunder_under_20_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_225_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_225',
        ])}}"
    >
        Under 2.25 / 
        @if(!is_null($row->end_goals_overunder_under_225))
            {{$row->end_goals_overunder_under_225}}
        @elseif(!is_null($row->pre_goals_overunder_under_225))
            {{$row->pre_goals_overunder_under_225}}
        @endif
        => {{ $pattern->goals_overunder_under_225_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_25_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_25',
        ])}}"
    >
        Under 2.5 / 
        @if(!is_null($row->end_goals_overunder_under_25))
            {{$row->end_goals_overunder_under_25}}
        @elseif(!is_null($row->pre_goals_overunder_under_25))
            {{$row->pre_goals_overunder_under_25}}
        @endif
        => {{ $pattern->goals_overunder_under_25_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_275_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_275',
        ])}}"
    >
        Under 2.75 / 
        @if(!is_null($row->end_goals_overunder_under_275))
            {{$row->end_goals_overunder_under_275}}
        @elseif(!is_null($row->pre_goals_overunder_under_275))
            {{$row->pre_goals_overunder_under_275}}
        @endif
        => {{ $pattern->goals_overunder_under_275_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_30_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_30',
        ])}}"
    >
        Under 3.0 / 
        @if(!is_null($row->end_goals_overunder_under_30))
            {{$row->end_goals_overunder_under_30}}
        @elseif(!is_null($row->pre_goals_overunder_under_30))
            {{$row->pre_goals_overunder_under_30}}
        @endif
        => {{ $pattern->goals_overunder_under_30_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_325_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_325',
        ])}}"
    >
        Under 3.25 / 
        @if(!is_null($row->end_goals_overunder_under_325))
            {{$row->end_goals_overunder_under_325}}

        @elseif(!is_null($row->pre_goals_overunder_under_325))
            {{$row->pre_goals_overunder_under_325}}
        @endif
        => {{ $pattern->goals_overunder_under_325_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_35_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_35',
        ])}}"
    >
        Under 3.5 / 
        @if(!is_null($row->end_goals_overunder_under_35))
            {{$row->end_goals_overunder_under_35}}
        @elseif(!is_null($row->pre_goals_overunder_under_35))
            {{$row->pre_goals_overunder_under_35}}
        @endif
        => {{ $pattern->goals_overunder_under_35_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_375_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_375',
        ])}}"
    >
        Under 3.75 / 
        @if(!is_null($row->end_goals_overunder_under_375))
            {{$row->end_goals_overunder_under_375}}
        @elseif(!is_null($row->pre_goals_overunder_under_375))
            {{$row->pre_goals_overunder_under_375}}
        @endif
        => {{ $pattern->goals_overunder_under_375_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_40_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_40',
        ])}}"
    >
        Under 4.0 / 
        @if(!is_null($row->end_goals_overunder_under_40))
            {{$row->end_goals_overunder_under_40}}
        @elseif(!is_null($row->pre_goals_overunder_under_40))
            {{$row->pre_goals_overunder_under_40}}
        @endif
        => {{ $pattern->goals_overunder_under_40_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_425_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_425',
        ])}}"
    >
        Under 4.25 / 
        @if(!is_null($row->end_goals_overunder_under_425))
            {{$row->end_goals_overunder_under_425}}
        @elseif(!is_null($row->pre_goals_overunder_under_425))
            {{$row->pre_goals_overunder_under_425}}
        @endif
        => {{ $pattern->goals_overunder_under_425_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_45_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_45',
        ])}}"
    >
        Under 4.5 / 
        @if(!is_null($row->end_goals_overunder_under_45))
            {{$row->end_goals_overunder_under_45}}
        @elseif(!is_null($row->pre_goals_overunder_under_45))
            {{$row->pre_goals_overunder_under_45}}
        @endif
        => {{ $pattern->goals_overunder_under_45_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_475_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_475',
        ])}}"
    >
        Under 4.75 / 
        @if(!is_null($row->end_goals_overunder_under_475))
            {{$row->end_goals_overunder_under_475}}
        @elseif(!is_null($row->pre_goals_overunder_under_475))
            {{$row->pre_goals_overunder_under_475}}
        @endif
        => {{ $pattern->goals_overunder_under_475_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_50_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_50',
        ])}}"
    >
        Under 5.0 / 
        @if(!is_null($row->end_goals_overunder_under_50))
            {{$row->end_goals_overunder_under_50}}
        @elseif(!is_null($row->pre_goals_overunder_under_50))
            {{$row->pre_goals_overunder_under_50}}
        @endif
        => {{ $pattern->goals_overunder_under_50_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_525_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_525',
        ])}}"
    >
        Under 5.25 / 
        @if(!is_null($row->end_goals_overunder_under_525))
            {{$row->end_goals_overunder_under_525}}
        @elseif(!is_null($row->pre_goals_overunder_under_525))
            {{$row->pre_goals_overunder_under_525}}
        @endif
        => {{ $pattern->goals_overunder_under_525_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_55_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_55',
        ])}}"
    >
        Under 5.5 / 
        @if(!is_null($row->end_goals_overunder_under_55))
            {{$row->end_goals_overunder_under_55}}
        @elseif(!is_null($row->pre_goals_overunder_under_55))
            {{$row->pre_goals_overunder_under_55}}
        @endif
        => {{ $pattern->goals_overunder_under_55_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_575_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_575',
        ])}}"
    >
        Under 5.75 / 
        @if(!is_null($row->end_goals_overunder_under_575))
            {{$row->end_goals_overunder_under_575}}
        @elseif(!is_null($row->pre_goals_overunder_under_575))
            {{$row->pre_goals_overunder_under_575}}
        @endif
        => {{ $pattern->goals_overunder_under_575_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_60_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_60',
        ])}}"
    >
        Under 6.0 / 
        @if(!is_null($row->end_goals_overunder_under_60))
            {{$row->end_goals_overunder_under_60}}
        @elseif(!is_null($row->pre_goals_overunder_under_60))
            {{$row->pre_goals_overunder_under_60}}
        @endif
        => {{ $pattern->goals_overunder_under_60_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_625_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,

            'odd' => '5_goalsoverunder_under_625',
        ])}}"
    >
        Under 6.25 / 
        @if(!is_null($row->end_goals_overunder_under_625))
            {{$row->end_goals_overunder_under_625}}
        @elseif(!is_null($row->pre_goals_overunder_under_625))
            {{$row->pre_goals_overunder_under_625}}
        @endif
        => {{ $pattern->goals_overunder_under_625_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_65_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_65',
        ])}}"
    >
        Under 6.5 / 
        @if(!is_null($row->end_goals_overunder_under_65))
            {{$row->end_goals_overunder_under_65}}
        @elseif(!is_null($row->pre_goals_overunder_under_65))
            {{$row->pre_goals_overunder_under_65}}
        @endif
        => {{ $pattern->goals_overunder_under_65_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_675_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_675',
        ])}}"
    >
        Under 6.75 / 
        @if(!is_null($row->end_goals_overunder_under_675))
            {{$row->end_goals_overunder_under_675}}
        @elseif(!is_null($row->pre_goals_overunder_under_675))
            {{$row->pre_goals_overunder_under_675}}
        @endif
        => {{ $pattern->goals_overunder_under_675_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_70_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_70',
        ])}}"
    >
        Under 7.0 / 
        @if(!is_null($row->end_goals_overunder_under_70))
            {{$row->end_goals_overunder_under_70}}
        @elseif(!is_null($row->pre_goals_overunder_under_70))
            {{$row->pre_goals_overunder_under_70}}
        @endif
        => {{ $pattern->goals_overunder_under_70_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_75_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_75',
        ])}}"
    >
        Under 7.5 / 
        @if(!is_null($row->end_goals_overunder_under_75))
            {{$row->end_goals_overunder_under_75}}
        @elseif(!is_null($row->pre_goals_overunder_under_75))
            {{$row->pre_goals_overunder_under_75}}
        @endif
        => {{ $pattern->goals_overunder_under_75_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_85_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_85',
        ])}}"
    >
        Under 8.5 / 
        @if(!is_null($row->end_goals_overunder_under_85))
            {{$row->end_goals_overunder_under_85}}
        @elseif(!is_null($row->pre_goals_overunder_under_85))
            {{$row->pre_goals_overunder_under_85}}
        @endif
        => {{ $pattern->goals_overunder_under_85_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder_under_95_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '5_goalsoverunder_under_95',
        ])}}"
    >
        Under 9.5 / 
        @if(!is_null($row->end_goals_overunder_under_95))
            {{$row->end_goals_overunder_under_95}}
        @elseif(!is_null($row->pre_goals_overunder_under_95))
            {{$row->pre_goals_overunder_under_95}}
        @endif
        => {{ $pattern->goals_overunder_under_95_perc * 100 }}%
    </a>
@endif

