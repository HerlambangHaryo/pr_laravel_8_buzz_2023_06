@if($pattern->result_total_goals_home_over_35_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_home/over_35',
        ])}}"
    >
        Home/Over 3.5 / 
        @if(!is_null($row->end_result_total_goals_home_over_35))
            {{$row->end_result_total_goals_home_over_35}}
        @elseif(!is_null($row->pre_result_total_goals_home_over_35))
            {{$row->pre_result_total_goals_home_over_35}}
        @endif
        => {{ $pattern->result_total_goals_home_over_35_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_draw_over_35_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_draw/over_35',
        ])}}"
    >
        Draw/Over 3.5 / 
        @if(!is_null($row->end_result_total_goals_draw_over_35))
            {{$row->end_result_total_goals_draw_over_35}}
        @elseif(!is_null($row->pre_result_total_goals_draw_over_35))
            {{$row->pre_result_total_goals_draw_over_35}}
        @endif
        => {{ $pattern->result_total_goals_draw_over_35_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_away_over_35_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_away/over_35',
        ])}}"
    >
        Away/Over 3.5 / 
        @if(!is_null($row->end_result_total_goals_away_over_35))
            {{$row->end_result_total_goals_away_over_35}}
        @elseif(!is_null($row->pre_result_total_goals_away_over_35))
            {{$row->pre_result_total_goals_away_over_35}}
        @endif
        => {{ $pattern->result_total_goals_away_over_35_perc * 100 }}%
    </a>
@endif

@if($pattern->result_total_goals_home_under_35_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_home/under_35',
        ])}}"
    >
        Home/Under 3.5 / 
        @if(!is_null($row->end_result_total_goals_home_under_35))
            {{$row->end_result_total_goals_home_under_35}}
        @elseif(!is_null($row->pre_result_total_goals_home_under_35))
            {{$row->pre_result_total_goals_home_under_35}}
        @endif
        => {{ $pattern->result_total_goals_home_under_35_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_draw_under_35_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_draw/under_35',
        ])}}"
    >
        Draw/Under 3.5 / 
        @if(!is_null($row->end_result_total_goals_draw_under_35))
            {{$row->end_result_total_goals_draw_under_35}}
        @elseif(!is_null($row->pre_result_total_goals_draw_under_35))
            {{$row->pre_result_total_goals_draw_under_35}}
        @endif
        => {{ $pattern->result_total_goals_draw_under_35_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_away_under_35_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_away/under_35',
        ])}}"
    >
        Away/Under 3.5 / 
        @if(!is_null($row->end_result_total_goals_away_under_35))
            {{$row->end_result_total_goals_away_under_35}}
        @elseif(!is_null($row->pre_result_total_goals_away_under_35))
            {{$row->pre_result_total_goals_away_under_35}}
        @endif
        => {{ $pattern->result_total_goals_away_under_35_perc * 100 }}%
    </a>
@endif

@if($pattern->result_total_goals_home_over_25_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_home/over_25',
        ])}}"
    >
        Home/Over 2.5 / 
        @if(!is_null($row->end_result_total_goals_home_over_25))
            {{$row->end_result_total_goals_home_over_25}}
        @elseif(!is_null($row->pre_result_total_goals_home_over_25))
            {{$row->pre_result_total_goals_home_over_25}}
        @endif
        => {{ $pattern->result_total_goals_home_over_25_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_draw_over_25_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_draw/over_25',
        ])}}"
    >
        Draw/Over 2.5 / 
        @if(!is_null($row->end_result_total_goals_draw_over_25))
            {{$row->end_result_total_goals_draw_over_25}}
        @elseif(!is_null($row->pre_result_total_goals_draw_over_25))
            {{$row->pre_result_total_goals_draw_over_25}}
        @endif
        => {{ $pattern->result_total_goals_draw_over_25_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_away_over_25_perc >= 0.8)
    <a
        class="badge bg-success"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_away/over_25',
        ])}}"
    >
        Away/Over 2.5 / 
        @if(!is_null($row->end_result_total_goals_away_over_25))
            {{$row->end_result_total_goals_away_over_25}}
        @elseif(!is_null($row->pre_result_total_goals_away_over_25))
            {{$row->pre_result_total_goals_away_over_25}}
        @endif
        => {{ $pattern->result_total_goals_away_over_25_perc * 100 }}%
    </a>
@endif

@if($pattern->result_total_goals_home_under_25_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_home/under_25',
        ])}}"
    >
        Home/Under 2.5 / 
        @if(!is_null($row->end_result_total_goals_home_under_25))
            {{$row->end_result_total_goals_home_under_25}}
        @elseif(!is_null($row->pre_result_total_goals_home_under_25))
            {{$row->pre_result_total_goals_home_under_25}}
        @endif
        => {{ $pattern->result_total_goals_home_under_25_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_draw_under_25_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_draw/under_25',
        ])}}"
    >
        Draw/Under 2.5 / 
        @if(!is_null($row->end_result_total_goals_draw_under_25))
            {{$row->end_result_total_goals_draw_under_25}}
        @elseif(!is_null($row->pre_result_total_goals_draw_under_25))
            {{$row->pre_result_total_goals_draw_under_25}}

        @endif
        => {{ $pattern->result_total_goals_draw_under_25_perc * 100 }}%
    </a>
@elseif($pattern->result_total_goals_away_under_25_perc >= 0.8)
    <a
        class="badge bg-danger"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '25_resulttotalgoals_away/under_25',
        ])}}"
    >
        Away/Under 2.5 / 
        @if(!is_null($row->end_result_total_goals_away_under_25))
            {{$row->end_result_total_goals_away_under_25}}
        @elseif(!is_null($row->pre_result_total_goals_away_under_25))
            {{$row->pre_result_total_goals_away_under_25}}
        @endif
        => {{ $pattern->result_total_goals_away_under_25_perc * 100 }}%
    </a>
@endif
