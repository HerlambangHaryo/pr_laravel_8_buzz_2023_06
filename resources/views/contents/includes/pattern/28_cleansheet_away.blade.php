@if($pattern->clean_sheet__away_no_perc >= 0.8)
    <a
        class="badge csa_no"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '28_cleansheet_away_no',
        ])}}"
    >
        No / 
        @if(!is_null($row->end_clean_sheet__away_no))
            {{$row->end_clean_sheet__away_no}}
        @elseif(!is_null($row->pre_clean_sheet__away_no))
            {{$row->pre_clean_sheet__away_no}}
        @endif
        => {{ $pattern->clean_sheet__away_no_perc * 100 }}%
    </a>
@elseif($pattern->clean_sheet__away_yes_perc >= 0.8)
    <a
        class="badge csa_yes"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '28_cleansheet_away_yes',
        ])}}"
    >
        Yes / 
        @if(!is_null($row->end_clean_sheet__away_yes))
            {{$row->end_clean_sheet__away_yes}}
        @elseif(!is_null($row->pre_clean_sheet__away_yes))
            {{$row->pre_clean_sheet__away_yes}}
        @endif
        => {{ $pattern->clean_sheet__away_yes_perc * 100 }}%
    </a>
@endif