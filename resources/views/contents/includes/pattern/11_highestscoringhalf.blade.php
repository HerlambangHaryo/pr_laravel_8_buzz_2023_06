@if($pattern->highest_scoring_half_first_perc >= 0.8)
    <a
        class="badge None"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '11_highestscoringhalf_1st_half',
        ])}}"
    >
        1st Half / 
        @if(!is_null($row->end_highest_scoring_half_first))
            {{$row->end_highest_scoring_half_first}}
        @elseif(!is_null($row->pre_highest_scoring_half_first))
            {{$row->pre_highest_scoring_half_first}}
        @endif
        => {{ $pattern->highest_scoring_half_first_perc * 100 }}%
    </a>
@elseif($pattern->highest_scoring_half_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '11_highestscoringhalf_draw',
        ])}}"
    >
        Draw / 
        @if(!is_null($row->end_highest_scoring_half_draw))
            {{$row->end_highest_scoring_half_draw}}
        @elseif(!is_null($row->pre_highest_scoring_half_draw))
            {{$row->pre_highest_scoring_half_draw}}
        @endif
        => {{ $pattern->highest_scoring_half_draw_perc * 100 }}%
    </a>
@elseif($pattern->highest_scoring_half_second_perc >= 0.8)
    <a
        class="badge None"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '11_highestscoringhalf_2nd_half',
        ])}}"
    >
        2nd Half / 
        @if(!is_null($row->end_highest_scoring_half_second))
            {{$row->end_highest_scoring_half_second}}
        @elseif(!is_null($row->pre_highest_scoring_half_second))
            {{$row->pre_highest_scoring_half_second}}
        @endif
        => {{ $pattern->highest_scoring_half_second_perc * 100 }}%
    </a>
@endif