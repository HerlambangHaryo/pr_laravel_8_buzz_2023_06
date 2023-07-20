@if($pattern->goals_overunder__second_half_over_375_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_375',
        ])}}"
    >
        Over 3.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_375))
            {{$row->end_goals_overunder__second_half_over_375}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_375))
            {{$row->pre_goals_overunder__second_half_over_375}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_375_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_35_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_35',
        ])}}"
    >
        Over 3.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_35))
            {{$row->end_goals_overunder__second_half_over_35}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_35))
            {{$row->pre_goals_overunder__second_half_over_35}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_35_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_325_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_325',
        ])}}"
    >
        Over 3.25 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_325))
            {{$row->end_goals_overunder__second_half_over_325}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_325))
            {{$row->pre_goals_overunder__second_half_over_325}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_325_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_30_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_30',
        ])}}"
    >
        Over 3.0 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_30))
            {{$row->end_goals_overunder__second_half_over_30}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_30))
            {{$row->pre_goals_overunder__second_half_over_30}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_30_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_275_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_275',
        ])}}"
    >
        Over 2.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_275))
            {{$row->end_goals_overunder__second_half_over_275}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_275))
            {{$row->pre_goals_overunder__second_half_over_275}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_275_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_25_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_25',
        ])}}"
    >
        Over 2.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_25))
            {{$row->end_goals_overunder__second_half_over_25}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_25))
            {{$row->pre_goals_overunder__second_half_over_25}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_25_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_225_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_225',
        ])}}"
    >
        Over 2.25 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_225))
            {{$row->end_goals_overunder__second_half_over_225}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_225))
            {{$row->pre_goals_overunder__second_half_over_225}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_225_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_20_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_20',
        ])}}"
    >
        Over 2.0 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_20))
            {{$row->end_goals_overunder__second_half_over_20}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_20))
            {{$row->pre_goals_overunder__second_half_over_20}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_20_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_175_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_175',
        ])}}"
    >
        Over 1.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_175))
            {{$row->end_goals_overunder__second_half_over_175}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_175))
            {{$row->pre_goals_overunder__second_half_over_175}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_175_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_15_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_15',
        ])}}"
    >
        Over 1.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_15))
            {{$row->end_goals_overunder__second_half_over_15}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_15))
            {{$row->pre_goals_overunder__second_half_over_15}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_15_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_125_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_125',

        ])}}"
    >
        Over 1.25 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_125))
            {{$row->end_goals_overunder__second_half_over_125}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_125))
            {{$row->pre_goals_overunder__second_half_over_125}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_125_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_10_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_10',
        ])}}"
    >
        Over 1.0 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_10))
            {{$row->end_goals_overunder__second_half_over_10}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_10))
            {{$row->pre_goals_overunder__second_half_over_10}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_10_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_075_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_075',
        ])}}"
    >
        Over 0.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_075))
            {{$row->end_goals_overunder__second_half_over_075}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_075))
            {{$row->pre_goals_overunder__second_half_over_075}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_075_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_over_05_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_over_05',
        ])}}"
    >
        Over 0.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_over_05))
            {{$row->end_goals_overunder__second_half_over_05}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_over_05))
            {{$row->pre_goals_overunder__second_half_over_05}}
        @endif
        => {{ $pattern->goals_overunder__second_half_over_05_perc * 100 }}%
    </a>
@endif

@if($pattern->goals_overunder__second_half_under_05_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_05',
        ])}}"
    >
        Under 0.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_05))
            {{$row->end_goals_overunder__second_half_under_05}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_05))
            {{$row->pre_goals_overunder__second_half_under_05}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_05_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_075_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_075',
        ])}}"
    >
        Under 0.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_075))
            {{$row->end_goals_overunder__second_half_under_075}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_075))
            {{$row->pre_goals_overunder__second_half_under_075}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_075_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_10_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_10',
        ])}}"
    >
        Under 1.0 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_10))
            {{$row->end_goals_overunder__second_half_under_10}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_10))
            {{$row->pre_goals_overunder__second_half_under_10}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_10_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_125_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_125',
        ])}}"
    >
        Under 1.25 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_125))
            {{$row->end_goals_overunder__second_half_under_125}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_125))
            {{$row->pre_goals_overunder__second_half_under_125}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_125_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_15_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_15',
        ])}}"
    >
        Under 1.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_15))
            {{$row->end_goals_overunder__second_half_under_15}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_15))
            {{$row->pre_goals_overunder__second_half_under_15}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_15_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_175_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_175',
        ])}}"
    >
        Under 1.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_175))
            {{$row->end_goals_overunder__second_half_under_175}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_175))
            {{$row->pre_goals_overunder__second_half_under_175}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_175_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_20_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_20',
        ])}}"
    >
        Under 2.0 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_20))
            {{$row->end_goals_overunder__second_half_under_20}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_20))
            {{$row->pre_goals_overunder__second_half_under_20}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_20_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_225_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_225',
        ])}}"
    >
        Under 2.25 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_225))
            {{$row->end_goals_overunder__second_half_under_225}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_225))
            {{$row->pre_goals_overunder__second_half_under_225}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_225_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_25_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_25',
        ])}}"
    >
        Under 2.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_25))
            {{$row->end_goals_overunder__second_half_under_25}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_25))
            {{$row->pre_goals_overunder__second_half_under_25}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_25_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_275_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_275',
        ])}}"
    >
        Under 2.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_275))
            {{$row->end_goals_overunder__second_half_under_275}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_275))
            {{$row->pre_goals_overunder__second_half_under_275}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_275_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_30_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,

            'odd' => '26_goalsoverunder_secondhalf_under_30',
        ])}}"
    >
        Under 3.0 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_30))
            {{$row->end_goals_overunder__second_half_under_30}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_30))
            {{$row->pre_goals_overunder__second_half_under_30}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_30_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_325_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_325',
        ])}}"
    >
        Under 3.25 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_325))
            {{$row->end_goals_overunder__second_half_under_325}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_325))
            {{$row->pre_goals_overunder__second_half_under_325}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_325_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_35_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_35',
        ])}}"
    >
        Under 3.5 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_35))
            {{$row->end_goals_overunder__second_half_under_35}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_35))
            {{$row->pre_goals_overunder__second_half_under_35}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_35_perc * 100 }}%
    </a>
@elseif($pattern->goals_overunder__second_half_under_375_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '26_goalsoverunder_secondhalf_under_375',
        ])}}"
    >
        Under 3.75 / 
        @if(!is_null($row->end_goals_overunder__second_half_under_375))
            {{$row->end_goals_overunder__second_half_under_375}}
        @elseif(!is_null($row->pre_goals_overunder__second_half_under_375))
            {{$row->pre_goals_overunder__second_half_under_375}}
        @endif
        => {{ $pattern->goals_overunder__second_half_under_375_perc * 100 }}%
    </a>
@endif
