@if($pattern->both_teams_score_yes_perc >= 0.8)
    <a
        class="badge btts_yes"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '8_bothteamsscore_yes',
        ])}}"
    >
        Yes / 
        @if(!is_null($row->end_both_teams_score_yes))
            {{$row->end_both_teams_score_yes}}
        @elseif(!is_null($row->pre_both_teams_score_yes))
            {{$row->pre_both_teams_score_yes}}
        @endif
        => {{ $pattern->both_teams_score_yes_perc * 100 }}%
    </a>
@elseif($pattern->both_teams_score_no_perc >= 0.8)
    <a
        class="badge btts_no"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '8_bothteamsscore_no',
        ])}}"
    >
        No / 
        @if(!is_null($row->end_both_teams_score_no))
            {{$row->end_both_teams_score_no}}
        @elseif(!is_null($row->pre_both_teams_score_no))
            {{$row->pre_both_teams_score_no}}
        @endif
        => {{ $pattern->both_teams_score_no_perc * 100 }}%
    </a>
@endif