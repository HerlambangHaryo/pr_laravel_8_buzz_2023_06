<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_rcard_yes))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 708,
                'value' => 'Yes',
                'odd' => $row->pre_rcard_yes,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Yes
        <br/>
        {{ $row->pre_rcard_yes }}
    </a>
    <a
        @if(!is_null($row->pre_rcard_no))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 709,
                'value' => 'No',
                'odd' => $row->pre_rcard_no,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        No
        <br/>
        {{ $row->pre_rcard_no }}
    </a>
</div>

<br/>


<div class="btn-group mt-2">
    <a
        @if(!is_null($row->end_rcard_yes))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 708,
                'value' => 'Yes',
                'odd' => $row->end_rcard_yes,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_rcard_yes }}
    </a>
    <a
        @if(!is_null($row->end_rcard_no))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 709,
                'value' => 'No',
                'odd' => $row->end_rcard_no,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_rcard_no }}
    </a>
</div>