<div class="btn-group mt-2">
    <a
    @if(!is_null($row->pre_both_teams_score_yes))
        href="{{route('Mybets.datacreateanalysis',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'betsapi_id' => 130,
            'value' => 'Yes',
            'odd' => $row->pre_both_teams_score_yes,
        ])}}"
    @endif
    target="_blank"
    class="btn bg-gray-700 btn-sm text-white">
        Yes
        <br/>
        {{ $row->pre_both_teams_score_yes }}
    </a>
    <a
    @if(!is_null($row->pre_both_teams_score_no))
        href="{{route('Mybets.datacreateanalysis',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'betsapi_id' => 131,
            'value' => 'No',
            'odd' => $row->pre_both_teams_score_no,
        ])}}"
    @endif
    target="_blank"
    class="btn bg-gray-700 btn-sm text-white">
        No
        <br/>
        {{ $row->pre_both_teams_score_no }}
    </a>
</div>

<br/>


<div class="btn-group mt-2">
    <a
    @if(!is_null($row->end_both_teams_score_yes))
        href="{{route('Mybets.datacreate',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'betsapi_id' => 131,
            'value' => 'Yes',
            'odd' => $row->end_both_teams_score_yes,
        ])}}"
    @endif
    target="_blank"
    class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_both_teams_score_yes }}
    </a>
    <a
    @if(!is_null($row->end_both_teams_score_no))
        href="{{route('Mybets.datacreate',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'betsapi_id' => 131,
            'value' => 'No',
            'odd' => $row->end_both_teams_score_no,
        ])}}"
    @endif
    target="_blank"
    class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_both_teams_score_no }}
    </a>
</div>