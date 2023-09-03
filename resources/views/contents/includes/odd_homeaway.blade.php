<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_homeaway_home))
            href="{{ route('Aryatips.tip',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 2,
                    'value' => 'homeaway_home',
                    'odd' => $row->pre_homeaway_home
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Home
        <br/>
        {{ $row->pre_homeaway_home }}
    </a>

    <a
        @if(!is_null($row->pre_homeaway_away))
            href="{{ route('Aryatips.tip',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 2,
                    'value' => 'homeaway_away',
                    'odd' => $row->pre_homeaway_away
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Away
        <br/>
        {{ $row->pre_homeaway_away }}
    </a>

</div>

<br/>

<div class="btn-group mt-2">
    <a
        @if(!is_null($row->end_homeaway_home))
            href="{{ route('Mybets.datacreate',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 2,
                    'value' => 'homeaway_home',
                    'odd' => $row->end_homeaway_home
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        Home
        <br/>
        {{ $row->end_homeaway_home }}
    </a>

    <a
        @if(!is_null($row->end_homeaway_away))
            href="{{ route('Mybets.datacreate',
                [
                    'leagueapi_id' => $row->leagueapi_id,
                    'season' => $row->season,
                    'fixtureapi_id' => $row->fixtureapi_id,
                    'betapi_id' => 2,
                    'value' => 'homeaway_away',
                    'odd' => $row->end_homeaway_away
                ])
            }}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        Away
        <br/>
        {{ $row->end_homeaway_away }}
    </a>

</div>
