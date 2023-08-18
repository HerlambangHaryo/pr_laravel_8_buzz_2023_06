<div class="btn-group mt-2">
    <a
        @if(!is_null($row->pre_double_chance_home_draw))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 216,
                'value' => 'Home/Draw',
                'odd' => $row->pre_double_chance_home_draw,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Home/Draw
        <br/>
        {{ $row->pre_double_chance_home_draw }}
    </a>
    <a
        @if(!is_null($row->pre_double_chance_home_away))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 217,
                'value' => 'Home/Away',
                'odd' => $row->pre_double_chance_home_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Home/Away
        <br/>
        {{ $row->pre_double_chance_home_away }}
    </a>
    <a
        @if(!is_null($row->pre_double_chance_draw_away))
            href="{{route('Mybets.datacreateanalysis',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 218,
                'value' => 'Draw/Away',
                'odd' => $row->pre_double_chance_draw_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-700 btn-sm text-white">
        Draw/Away
        <br/>
        {{ $row->pre_double_chance_draw_away }}
    </a>
</div>

<br/>


<div class="btn-group mt-2">
    <a
        @if(!is_null($row->end_double_chance_home_draw))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 216,
                'value' => 'Home/Draw',
                'odd' => $row->end_double_chance_home_draw,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_double_chance_home_draw }}
    </a>
    <a
        @if(!is_null($row->end_double_chance_home_away))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 217,
                'value' => 'Home/Away',
                'odd' => $row->end_double_chance_home_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_double_chance_home_away }}
    </a>
    <a
        @if(!is_null($row->end_double_chance_draw_away))
            href="{{route('Mybets.datacreate',[
                'leagueapi_id' => $row->leagueapi_id,
                'season' => $row->season,
                'fixtureapi_id' => $row->fixtureapi_id,
                'betsapi_id' => 218,
                'value' => 'Draw/Away',
                'odd' => $row->end_double_chance_draw_away,
            ])}}"
        @endif
        target="_blank"
        class="btn bg-gray-800 btn-sm text-white">
        {{ $row->end_double_chance_draw_away }}
    </a>
</div>
