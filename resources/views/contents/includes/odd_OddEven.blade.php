<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_oddeven_odd))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 289,
                'value' => 'Odd',
                'odd' => $row->pre_oddeven_odd,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Odd
        <br/>
        {{ $row->pre_oddeven_odd }}
    </a>
    <a
        @if(!is_null($row->pre_oddeven_even))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 290,
                'value' => 'Even',
                'odd' => $row->pre_oddeven_even,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Even
        <br/>
        {{ $row->pre_oddeven_even }}
    </a>
</div>

<br/>


<div class="btn-group mt-2">
    <a
        @if(!is_null($row->end_oddeven_odd))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 289,
                'value' => 'Odd',
                'odd' => $row->end_oddeven_odd,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_oddeven_odd }}
    </a>
    <a
        @if(!is_null($row->end_oddeven_even))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 290,
                'value' => 'Even',
                'odd' => $row->end_oddeven_even,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_oddeven_even }}
    </a>
</div>
