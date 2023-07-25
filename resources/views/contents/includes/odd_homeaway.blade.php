<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_homeaway_home))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 4,
                'value' => 'Home',
                'odd' => $row->pre_homeaway_home,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Home
        <br/>
        {{ $row->pre_homeaway_home }}
    </a>
    <a
        @if(!is_null($row->pre_homeaway_away))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 5,
                'value' => 'Away',
                'odd' => $row->pre_homeaway_away,
            ])}}"
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
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 4,
                'value' => 'Home',
                'odd' => $row->end_homeaway_home,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_homeaway_home }}
    </a>
    <a
        @if(!is_null($row->end_homeaway_away))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 5,
                'value' => 'Away',
                'odd' => $row->end_homeaway_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_homeaway_away }}
    </a>
</div>