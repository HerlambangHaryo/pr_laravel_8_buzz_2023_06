@if($pattern->clean_sheet__home_no_perc >= 0.8)
    <a
        class="badge csh_no"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '27_cleansheet_home_no',
        ])}}"
    >
        No / 
        @if(!is_null($row->end_clean_sheet__home_no))
            {{$row->end_clean_sheet__home_no}}
        @elseif(!is_null($row->pre_clean_sheet__home_no))
            {{$row->pre_clean_sheet__home_no}}
        @endif
        => {{ $pattern->clean_sheet__home_no_perc * 100 }}%
    </a>
@elseif($pattern->clean_sheet__home_yes_perc >= 0.8)
    <a
        class="badge csh_yes"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '27_cleansheet_home_yes',
        ])}}"
    >
        Yes / 
        @if(!is_null($row->end_clean_sheet__home_yes))
            {{$row->end_clean_sheet__home_yes}}
        @elseif(!is_null($row->pre_clean_sheet__home_yes))
            {{$row->pre_clean_sheet__home_yes}}
        @endif
        => {{ $pattern->clean_sheet__home_yes_perc * 100 }}%
    </a>
@endif