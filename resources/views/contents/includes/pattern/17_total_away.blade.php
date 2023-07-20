@if($pattern->total_away_over_65_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_over_65',
        ])}}"
    >
        Over 6.5 / 
        @if(!is_null($row->end_total_away_over_65))
            {{$row->end_total_away_over_65}}
        @elseif(!is_null($row->pre_total_away_over_65))
            {{$row->pre_total_away_over_65}}
        @endif
        => {{ $pattern->total_away_over_65_perc * 100 }}%
    </a>
@elseif($pattern->total_away_over_55_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_over_55',
        ])}}"
    >
        Over 5.5 / 
        @if(!is_null($row->end_total_away_over_55))
            {{$row->end_total_away_over_55}}
        @elseif(!is_null($row->pre_total_away_over_55))
            {{$row->pre_total_away_over_55}}
        @endif
        => {{ $pattern->total_away_over_55_perc * 100 }}%
    </a>
@elseif($pattern->total_away_over_45_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_over_45',
        ])}}"
    >
        Over 4.5 / 
        @if(!is_null($row->end_total_away_over_45))
            {{$row->end_total_away_over_45}}
        @elseif(!is_null($row->pre_total_away_over_45))
            {{$row->pre_total_away_over_45}}
        @endif
        => {{ $pattern->total_away_over_45_perc * 100 }}%
    </a>
@elseif($pattern->total_away_over_35_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_over_35',
        ])}}"
    >
        Over 3.5 / 
        @if(!is_null($row->end_total_away_over_35))
            {{$row->end_total_away_over_35}}
        @elseif(!is_null($row->pre_total_away_over_35))
            {{$row->pre_total_away_over_35}}
        @endif
        => {{ $pattern->total_away_over_35_perc * 100 }}%
    </a>
@elseif($pattern->total_away_over_25_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_over_25',
        ])}}"
    >
        Over 2.5 / 
        @if(!is_null($row->end_total_away_over_25))
            {{$row->end_total_away_over_25}}
        @elseif(!is_null($row->pre_total_away_over_25))
            {{$row->pre_total_away_over_25}}
        @endif
        => {{ $pattern->total_away_over_25_perc * 100 }}%
    </a>
@elseif($pattern->total_away_over_15_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_over_15',
        ])}}"
    >
        Over 1.5 / 
        @if(!is_null($row->end_total_away_over_15))
            {{$row->end_total_away_over_15}}
        @elseif(!is_null($row->pre_total_away_over_15))
            {{$row->pre_total_away_over_15}}
        @endif
        => {{ $pattern->total_away_over_15_perc * 100 }}%
    </a>
@endif

@if($pattern->total_away_under_15_perc >= 0.8)
    <a
        class="mb-1 badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_under_15',
        ])}}"
    >
        Under 1.5 / 
        @if(!is_null($row->end_total_away_under_15))
            {{$row->end_total_away_under_15}}
        @elseif(!is_null($row->pre_total_away_under_15))
            {{$row->pre_total_away_under_15}}
        @endif
        => {{ $pattern->total_away_under_15_perc * 100 }}%
    </a>
@elseif($pattern->total_away_under_25_perc >= 0.8)
    <a
        class="mb-1 badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_under_25',
        ])}}"
    >
        Under 2.5 / 
        @if(!is_null($row->end_total_away_under_25))
            {{$row->end_total_away_under_25}}
        @elseif(!is_null($row->pre_total_away_under_25))
            {{$row->pre_total_away_under_25}}
        @endif
        => {{ $pattern->total_away_under_25_perc * 100 }}%
    </a>
@elseif($pattern->total_away_under_35_perc >= 0.8)
    <a
        class="mb-1 badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_under_35',
        ])}}"
    >
        Under 3.5 / 
        @if(!is_null($row->end_total_away_under_35))
            {{$row->end_total_away_under_35}}
        @elseif(!is_null($row->pre_total_away_under_35))
            {{$row->pre_total_away_under_35}}
        @endif
        => {{ $pattern->total_away_under_35_perc * 100 }}%
    </a>
@elseif($pattern->total_away_under_45_perc >= 0.8)
    <a
        class="mb-1 badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_under_45',
        ])}}"
    >
        Under 4.5 / 
        @if(!is_null($row->end_total_away_under_45))
            {{$row->end_total_away_under_45}}
        @elseif(!is_null($row->pre_total_away_under_45))
            {{$row->pre_total_away_under_45}}
        @endif
        => {{ $pattern->total_away_under_45_perc * 100 }}%
    </a>
@elseif($pattern->total_away_under_55_perc >= 0.8)
    <a
        class="mb-1 badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_under_55',
        ])}}"
    >
        Under 5.5 / 
        @if(!is_null($row->end_total_away_under_55))
            {{$row->end_total_away_under_55}}
        @elseif(!is_null($row->pre_total_away_under_55))
            {{$row->pre_total_away_under_55}}
        @endif
        => {{ $pattern->total_away_under_55_perc * 100 }}%
    </a>
@elseif($pattern->total_away_under_65_perc >= 0.8)
    <a
        class="mb-1 badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '17_total_away_under_65',
        ])}}"
    >
        Under 6.5 / 
        @if(!is_null($row->end_total_away_under_65))
            {{$row->end_total_away_under_65}}
        @elseif(!is_null($row->pre_total_away_under_65))
            {{$row->pre_total_away_under_65}}
        @endif
        => {{ $pattern->total_away_under_65_perc * 100 }}%
    </a>
@endif