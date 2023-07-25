<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_match_winner_home))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 1,
                'value' => 'Home',
                'odd' => $row->pre_match_winner_home,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Home
        <br/>
        {{ $row->pre_match_winner_home }}
    </a>
    <a
        @if(!is_null($row->pre_match_winner_draw))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 2,
                'value' => 'Draw',
                'odd' => $row->pre_match_winner_draw,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Draw
        <br/>
        {{ $row->pre_match_winner_draw }}
    </a>
    <a
        @if(!is_null($row->pre_match_winner_away))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 3,
                'value' => 'Away',
                'odd' => $row->pre_match_winner_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Away
        <br/>
        {{ $row->pre_match_winner_away }}
    </a>
</div>


<br/>


<div class="btn-group mt-2">
    <a
        @if(!is_null($row->end_match_winner_home))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 1,
                'value' => 'Home',
                'odd' => $row->end_match_winner_home,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_match_winner_home }}
    </a>
    <a
        @if(!is_null($row->end_match_winner_draw))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 2,
                'value' => 'Draw',
                'odd' => $row->end_match_winner_draw,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_match_winner_draw }}
    </a>
    <a
        @if(!is_null($row->end_match_winner_away))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 3,
                'value' => 'Away',
                'odd' => $row->end_match_winner_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_match_winner_away }}
    </a>
</div>