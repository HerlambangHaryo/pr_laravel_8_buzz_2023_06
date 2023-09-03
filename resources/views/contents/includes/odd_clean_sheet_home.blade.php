<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_clean_sheet__home_yes))
            href="{{ route('Aryatips.tip',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 126,
                    'value' => 'clean_sheet__home_yes',
                    'odd' => $row->pre_clean_sheet__home_yes
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Yes
        <br/>
        {{ $row->pre_clean_sheet__home_yes }}
    </a>

    <a
        @if(!is_null($row->pre_clean_sheet__home_no))
            href="{{ route('Aryatips.tip',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 127,
                    'value' => 'clean_sheet__home_no',
                    'odd' => $row->pre_clean_sheet__home_no
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        No
        <br/>
        {{ $row->pre_clean_sheet__home_no }}
    </a>

</div>

<br/>

<div class="btn-group mt-2">
    <a
        @if(!is_null($row->end_clean_sheet__home_yes))
            href="{{ route('Mybets.datacreate',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 27,
                    'value' => 'clean_sheet__home_yes',
                    'odd' => $row->end_clean_sheet__home_yes
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        Yes
        <br/>
        {{ $row->end_clean_sheet__home_yes }}
    </a>

    <a
        @if(!is_null($row->end_clean_sheet__home_no))
            href="{{ route('Mybets.datacreate',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 27,
                    'value' => 'clean_sheet__home_no',
                    'odd' => $row->end_clean_sheet__home_no
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        No
        <br/>
        {{ $row->end_clean_sheet__home_no }}
    </a>

</div>
