@if(!is_null($row->pre_cards_asian_handicap_home_min_05) && !is_null($row->pre_cards_asian_handicap_away_min_05) )
    @if( ($row->pre_cards_asian_handicap_home_min_05 + $row->pre_cards_asian_handicap_away_min_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_asian_handicap_home_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Home -0.5',
                        'odd' => $row->pre_cards_asian_handicap_home_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_cards_asian_handicap_home_min_05 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_asian_handicap_away_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Away -0.5',
                        'odd' => $row->pre_cards_asian_handicap_away_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +0.5
                        <br/>
                {{ $row->pre_cards_asian_handicap_away_min_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_asian_handicap_home_plus_0) && !is_null($row->pre_cards_asian_handicap_away_plus_0) )
    @if( ($row->pre_cards_asian_handicap_home_plus_0 + $row->pre_cards_asian_handicap_away_plus_0) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_asian_handicap_home_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Home +0',
                        'odd' => $row->pre_cards_asian_handicap_home_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_cards_asian_handicap_home_plus_0 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_asian_handicap_away_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Away +0',
                        'odd' => $row->pre_cards_asian_handicap_away_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -0
                        <br/>
                {{ $row->pre_cards_asian_handicap_away_plus_0 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_asian_handicap_home_plus_05) && !is_null($row->pre_cards_asian_handicap_away_plus_05) )
    @if( ($row->pre_cards_asian_handicap_home_plus_05 + $row->pre_cards_asian_handicap_away_plus_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_asian_handicap_home_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Home +0.5',
                        'odd' => $row->pre_cards_asian_handicap_home_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_cards_asian_handicap_home_plus_05 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_asian_handicap_away_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Away +0.5',
                        'odd' => $row->pre_cards_asian_handicap_away_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -0.5
                        <br/>
                {{ $row->pre_cards_asian_handicap_away_plus_05 }}
            </a>
        </div>
    @endif
@endif
<br/>


@if(!is_null($row->end_cards_asian_handicap_home_min_05) && !is_null($row->end_cards_asian_handicap_away_min_05) )
    @if( ($row->end_cards_asian_handicap_home_min_05 + $row->end_cards_asian_handicap_away_min_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_asian_handicap_home_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Home -0.5',
                        'odd' => $row->end_cards_asian_handicap_home_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_cards_asian_handicap_home_min_05 }}
            </a>
            <a
                @if(!is_null($row->end_cards_asian_handicap_away_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Away -0.5',
                        'odd' => $row->end_cards_asian_handicap_away_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_cards_asian_handicap_away_min_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_cards_asian_handicap_home_plus_0) && !is_null($row->end_cards_asian_handicap_away_plus_0) )
    @if( ($row->end_cards_asian_handicap_home_plus_0 + $row->end_cards_asian_handicap_away_plus_0) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_asian_handicap_home_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Home +0',
                        'odd' => $row->end_cards_asian_handicap_home_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_cards_asian_handicap_home_plus_0 }}
            </a>
            <a
                @if(!is_null($row->end_cards_asian_handicap_away_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Away +0',
                        'odd' => $row->end_cards_asian_handicap_away_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_cards_asian_handicap_away_plus_0 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_cards_asian_handicap_home_plus_05) && !is_null($row->end_cards_asian_handicap_away_plus_05) )
    @if( ($row->end_cards_asian_handicap_home_plus_05 + $row->end_cards_asian_handicap_away_plus_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_asian_handicap_home_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Home +0.5',
                        'odd' => $row->end_cards_asian_handicap_home_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_cards_asian_handicap_home_plus_05 }}
            </a>
            <a
                @if(!is_null($row->end_cards_asian_handicap_away_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 81,
                        'value' => 'Away +0.5',
                        'odd' => $row->end_cards_asian_handicap_away_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_cards_asian_handicap_away_plus_05 }}
            </a>
        </div>
    @endif
@endif
