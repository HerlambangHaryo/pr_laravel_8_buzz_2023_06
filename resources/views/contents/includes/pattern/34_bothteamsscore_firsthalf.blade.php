@if($pattern->both_teams_score__first_half_yes_perc >= 0.8)
    <a
        class="badge None"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '34_bothteamsscore_firsthalf_yes',
        ])}}"
    >
        Yes / 
        @if(!is_null($row->end_both_teams_score__first_half_yes))
            {{$row->end_both_teams_score__first_half_yes}}
        @elseif(!is_null($row->pre_both_teams_score__first_half_yes))
            {{$row->pre_both_teams_score__first_half_yes}}
        @endif
        => {{ $pattern->both_teams_score__first_half_yes_perc * 100 }}%
    </a>
@elseif($pattern->both_teams_score__first_half_no_perc >= 0.8)
    <a
        class="badge None"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '34_bothteamsscore_firsthalf_no',
        ])}}"
    >
        No / 
        @if(!is_null($row->end_both_teams_score__first_half_no))
            {{$row->end_both_teams_score__first_half_no}}
        @elseif(!is_null($row->pre_both_teams_score__first_half_no))
            {{$row->pre_both_teams_score__first_half_no}}
        @endif
        => {{ $pattern->both_teams_score__first_half_no_perc * 100 }}%
    </a>
@endif
