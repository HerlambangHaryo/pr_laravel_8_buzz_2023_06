@if(!is_null($row->pre_corners_asian_handicap_home_min_65) && !is_null($row->pre_corners_asian_handicap_away_min_65) )
    @if( ($row->pre_corners_asian_handicap_home_min_65 + $row->pre_corners_asian_handicap_away_min_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -6.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_65 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -6.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +6.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_6) && !is_null($row->pre_corners_asian_handicap_away_min_6) )
    @if( ($row->pre_corners_asian_handicap_home_min_6 + $row->pre_corners_asian_handicap_away_min_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -6',
                        'odd' => $row->pre_corners_asian_handicap_home_min_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_6 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -6',
                        'odd' => $row->pre_corners_asian_handicap_away_min_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +6
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_55) && !is_null($row->pre_corners_asian_handicap_away_min_55) )
    @if( ($row->pre_corners_asian_handicap_home_min_55 + $row->pre_corners_asian_handicap_away_min_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -5.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_55 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -5.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +5.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_5) && !is_null($row->pre_corners_asian_handicap_away_min_5) )
    @if( ($row->pre_corners_asian_handicap_home_min_5 + $row->pre_corners_asian_handicap_away_min_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_5 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_45) && !is_null($row->pre_corners_asian_handicap_away_min_45) )
    @if( ($row->pre_corners_asian_handicap_home_min_45 + $row->pre_corners_asian_handicap_away_min_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -4.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_45,
                    ])}}"
                @endif
                target="_blank"

                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_45 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -4.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +4.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_4) && !is_null($row->pre_corners_asian_handicap_away_min_4) )
    @if( ($row->pre_corners_asian_handicap_home_min_4 + $row->pre_corners_asian_handicap_away_min_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -4',
                        'odd' => $row->pre_corners_asian_handicap_home_min_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_4 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -4',
                        'odd' => $row->pre_corners_asian_handicap_away_min_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +4
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_35) && !is_null($row->pre_corners_asian_handicap_away_min_35) )
    @if( ($row->pre_corners_asian_handicap_home_min_35 + $row->pre_corners_asian_handicap_away_min_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -3.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_35 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -3.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +3.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_3) && !is_null($row->pre_corners_asian_handicap_away_min_3) )
    @if( ($row->pre_corners_asian_handicap_home_min_3 + $row->pre_corners_asian_handicap_away_min_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -3',
                        'odd' => $row->pre_corners_asian_handicap_home_min_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_3 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -3',
                        'odd' => $row->pre_corners_asian_handicap_away_min_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +3
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_25) && !is_null($row->pre_corners_asian_handicap_away_min_25) )
    @if( ($row->pre_corners_asian_handicap_home_min_25 + $row->pre_corners_asian_handicap_away_min_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -2.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_25 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -2.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">

                        +2.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_2) && !is_null($row->pre_corners_asian_handicap_away_min_2) )
    @if( ($row->pre_corners_asian_handicap_home_min_2 + $row->pre_corners_asian_handicap_away_min_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -2',
                        'odd' => $row->pre_corners_asian_handicap_home_min_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_2 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -2',
                        'odd' => $row->pre_corners_asian_handicap_away_min_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +2
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_15) && !is_null($row->pre_corners_asian_handicap_away_min_15) )
    @if( ($row->pre_corners_asian_handicap_home_min_15 + $row->pre_corners_asian_handicap_away_min_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -1.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_15 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -1.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +1.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_min_1) && !is_null($row->pre_corners_asian_handicap_away_min_1) )
    @if( ($row->pre_corners_asian_handicap_home_min_1 + $row->pre_corners_asian_handicap_away_min_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -1',
                        'odd' => $row->pre_corners_asian_handicap_home_min_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_1 }}
            </a>
@if(!is_null($row->pre_corners_asian_handicap_home_min_05) && !is_null($row->pre_corners_asian_handicap_away_min_05) )
    @if( ($row->pre_corners_asian_handicap_home_min_05 + $row->pre_corners_asian_handicap_away_min_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -0.5',
                        'odd' => $row->pre_corners_asian_handicap_home_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_min_05 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -1',
                        'odd' => $row->pre_corners_asian_handicap_away_min_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +1
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_1 }}
            </a>
        </div>
    @endif
@endif

            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -0.5',
                        'odd' => $row->pre_corners_asian_handicap_away_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        +0.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_min_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_0) && !is_null($row->pre_corners_asian_handicap_away_plus_0) )
    @if( ($row->pre_corners_asian_handicap_home_plus_0 + $row->pre_corners_asian_handicap_away_plus_0) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +0',

                        'odd' => $row->pre_corners_asian_handicap_home_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_0 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +0',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -0
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_0 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_05) && !is_null($row->pre_corners_asian_handicap_away_plus_05) )
    @if( ($row->pre_corners_asian_handicap_home_plus_05 + $row->pre_corners_asian_handicap_away_plus_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +0.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_05 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +0.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -0.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_1) && !is_null($row->pre_corners_asian_handicap_away_plus_1) )
    @if( ($row->pre_corners_asian_handicap_home_plus_1 + $row->pre_corners_asian_handicap_away_plus_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +1',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_1 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +1',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -1
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_1 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_15) && !is_null($row->pre_corners_asian_handicap_away_plus_15) )
    @if( ($row->pre_corners_asian_handicap_home_plus_15 + $row->pre_corners_asian_handicap_away_plus_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +1.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_15 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +1.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -1.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_2) && !is_null($row->pre_corners_asian_handicap_away_plus_2) )
    @if( ($row->pre_corners_asian_handicap_home_plus_2 + $row->pre_corners_asian_handicap_away_plus_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +2',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_2 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +2',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_2,

                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -2
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_25) && !is_null($row->pre_corners_asian_handicap_away_plus_25) )
    @if( ($row->pre_corners_asian_handicap_home_plus_25 + $row->pre_corners_asian_handicap_away_plus_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +2.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_25 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +2.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -2.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_3) && !is_null($row->pre_corners_asian_handicap_away_plus_3) )
    @if( ($row->pre_corners_asian_handicap_home_plus_3 + $row->pre_corners_asian_handicap_away_plus_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +3',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_3 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +3',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -3
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_35) && !is_null($row->pre_corners_asian_handicap_away_plus_35) )
    @if( ($row->pre_corners_asian_handicap_home_plus_35 + $row->pre_corners_asian_handicap_away_plus_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +3.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_35 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +3.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -3.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_4) && !is_null($row->pre_corners_asian_handicap_away_plus_4) )
    @if( ($row->pre_corners_asian_handicap_home_plus_4 + $row->pre_corners_asian_handicap_away_plus_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +4',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_4 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +4',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -4
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_45) && !is_null($row->pre_corners_asian_handicap_away_plus_45) )
    @if( ($row->pre_corners_asian_handicap_home_plus_45 + $row->pre_corners_asian_handicap_away_plus_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +4.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_45 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +4.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -4.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_5) && !is_null($row->pre_corners_asian_handicap_away_plus_5) )
    @if( ($row->pre_corners_asian_handicap_home_plus_5 + $row->pre_corners_asian_handicap_away_plus_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_5 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_55) && !is_null($row->pre_corners_asian_handicap_away_plus_55) )
    @if( ($row->pre_corners_asian_handicap_home_plus_55 + $row->pre_corners_asian_handicap_away_plus_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +5.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_55 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +5.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -5.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_6) && !is_null($row->pre_corners_asian_handicap_away_plus_6) )
    @if( ($row->pre_corners_asian_handicap_home_plus_6 + $row->pre_corners_asian_handicap_away_plus_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +6',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_6 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +6',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -6
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_asian_handicap_home_plus_65) && !is_null($row->pre_corners_asian_handicap_away_plus_65) )
    @if( ($row->pre_corners_asian_handicap_home_plus_65 + $row->pre_corners_asian_handicap_away_plus_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_asian_handicap_home_plus_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +6.5',
                        'odd' => $row->pre_corners_asian_handicap_home_plus_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        Ah
                        <br/>
                {{ $row->pre_corners_asian_handicap_home_plus_65 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_asian_handicap_away_plus_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,

                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +6.5',
                        'odd' => $row->pre_corners_asian_handicap_away_plus_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                        -6.5
                        <br/>
                {{ $row->pre_corners_asian_handicap_away_plus_65 }}
            </a>
        </div>
    @endif
@endif




<br/>


@if(!is_null($row->end_corners_asian_handicap_home_min_65) && !is_null($row->end_corners_asian_handicap_away_min_65) )
    @if( ($row->end_corners_asian_handicap_home_min_65 + $row->end_corners_asian_handicap_away_min_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -6.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_65 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -6.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_6) && !is_null($row->end_corners_asian_handicap_away_min_6) )
    @if( ($row->end_corners_asian_handicap_home_min_6 + $row->end_corners_asian_handicap_away_min_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -6',
                        'odd' => $row->end_corners_asian_handicap_home_min_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_6 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -6',
                        'odd' => $row->end_corners_asian_handicap_away_min_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_55) && !is_null($row->end_corners_asian_handicap_away_min_55) )
    @if( ($row->end_corners_asian_handicap_home_min_55 + $row->end_corners_asian_handicap_away_min_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -5.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_55 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -5.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_5) && !is_null($row->end_corners_asian_handicap_away_min_5) )
    @if( ($row->end_corners_asian_handicap_home_min_5 + $row->end_corners_asian_handicap_away_min_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -5',
                        'odd' => $row->end_corners_asian_handicap_home_min_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_5 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -5',
                        'odd' => $row->end_corners_asian_handicap_away_min_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_45) && !is_null($row->end_corners_asian_handicap_away_min_45) )
    @if( ($row->end_corners_asian_handicap_home_min_45 + $row->end_corners_asian_handicap_away_min_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -4.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_45 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,

                        'betapi_id' => 56,
                        'value' => 'Away -4.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_4) && !is_null($row->end_corners_asian_handicap_away_min_4) )
    @if( ($row->end_corners_asian_handicap_home_min_4 + $row->end_corners_asian_handicap_away_min_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -4',
                        'odd' => $row->end_corners_asian_handicap_home_min_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_4 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -4',
                        'odd' => $row->end_corners_asian_handicap_away_min_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_35) && !is_null($row->end_corners_asian_handicap_away_min_35) )
    @if( ($row->end_corners_asian_handicap_home_min_35 + $row->end_corners_asian_handicap_away_min_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -3.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_35 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -3.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_3) && !is_null($row->end_corners_asian_handicap_away_min_3) )
    @if( ($row->end_corners_asian_handicap_home_min_3 + $row->end_corners_asian_handicap_away_min_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -3',
                        'odd' => $row->end_corners_asian_handicap_home_min_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_3 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -3',
                        'odd' => $row->end_corners_asian_handicap_away_min_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_25) && !is_null($row->end_corners_asian_handicap_away_min_25) )
    @if( ($row->end_corners_asian_handicap_home_min_25 + $row->end_corners_asian_handicap_away_min_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -2.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_25 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -2.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_2) && !is_null($row->end_corners_asian_handicap_away_min_2) )
    @if( ($row->end_corners_asian_handicap_home_min_2 + $row->end_corners_asian_handicap_away_min_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -2',
                        'odd' => $row->end_corners_asian_handicap_home_min_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">

                {{ $row->end_corners_asian_handicap_home_min_2 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -2',
                        'odd' => $row->end_corners_asian_handicap_away_min_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_15) && !is_null($row->end_corners_asian_handicap_away_min_15) )
    @if( ($row->end_corners_asian_handicap_home_min_15 + $row->end_corners_asian_handicap_away_min_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -1.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_15 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -1.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_min_1) && !is_null($row->end_corners_asian_handicap_away_min_1) )
    @if( ($row->end_corners_asian_handicap_home_min_1 + $row->end_corners_asian_handicap_away_min_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -1',
                        'odd' => $row->end_corners_asian_handicap_home_min_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_1 }}
            </a>
@if(!is_null($row->end_corners_asian_handicap_home_min_05) && !is_null($row->end_corners_asian_handicap_away_min_05) )
    @if( ($row->end_corners_asian_handicap_home_min_05 + $row->end_corners_asian_handicap_away_min_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home -0.5',
                        'odd' => $row->end_corners_asian_handicap_home_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_min_05 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -1',
                        'odd' => $row->end_corners_asian_handicap_away_min_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_1 }}
            </a>
        </div>
    @endif
@endif

            <a
                @if(!is_null($row->end_corners_asian_handicap_away_min_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away -0.5',
                        'odd' => $row->end_corners_asian_handicap_away_min_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_min_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_0) && !is_null($row->end_corners_asian_handicap_away_plus_0) )
    @if( ($row->end_corners_asian_handicap_home_plus_0 + $row->end_corners_asian_handicap_away_plus_0) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +0',
                        'odd' => $row->end_corners_asian_handicap_home_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_0 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_0))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +0',
                        'odd' => $row->end_corners_asian_handicap_away_plus_0,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_0 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_05) && !is_null($row->end_corners_asian_handicap_away_plus_05) )
    @if( ($row->end_corners_asian_handicap_home_plus_05 + $row->end_corners_asian_handicap_away_plus_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +0.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_05 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +0.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_1) && !is_null($row->end_corners_asian_handicap_away_plus_1) )
    @if( ($row->end_corners_asian_handicap_home_plus_1 + $row->end_corners_asian_handicap_away_plus_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +1',
                        'odd' => $row->end_corners_asian_handicap_home_plus_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_1 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_1))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +1',
                        'odd' => $row->end_corners_asian_handicap_away_plus_1,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_1 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_15) && !is_null($row->end_corners_asian_handicap_away_plus_15) )
    @if( ($row->end_corners_asian_handicap_home_plus_15 + $row->end_corners_asian_handicap_away_plus_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +1.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_15 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +1.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_2) && !is_null($row->end_corners_asian_handicap_away_plus_2) )
    @if( ($row->end_corners_asian_handicap_home_plus_2 + $row->end_corners_asian_handicap_away_plus_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +2',
                        'odd' => $row->end_corners_asian_handicap_home_plus_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_2 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_2))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +2',
                        'odd' => $row->end_corners_asian_handicap_away_plus_2,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_25) && !is_null($row->end_corners_asian_handicap_away_plus_25) )
    @if( ($row->end_corners_asian_handicap_home_plus_25 + $row->end_corners_asian_handicap_away_plus_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +2.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_25 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +2.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_25 }}
            </a>
        </div>

    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_3) && !is_null($row->end_corners_asian_handicap_away_plus_3) )
    @if( ($row->end_corners_asian_handicap_home_plus_3 + $row->end_corners_asian_handicap_away_plus_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +3',
                        'odd' => $row->end_corners_asian_handicap_home_plus_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_3 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_3))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +3',
                        'odd' => $row->end_corners_asian_handicap_away_plus_3,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_35) && !is_null($row->end_corners_asian_handicap_away_plus_35) )
    @if( ($row->end_corners_asian_handicap_home_plus_35 + $row->end_corners_asian_handicap_away_plus_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +3.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_35 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +3.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_4) && !is_null($row->end_corners_asian_handicap_away_plus_4) )
    @if( ($row->end_corners_asian_handicap_home_plus_4 + $row->end_corners_asian_handicap_away_plus_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +4',
                        'odd' => $row->end_corners_asian_handicap_home_plus_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_4 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_4))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +4',
                        'odd' => $row->end_corners_asian_handicap_away_plus_4,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_45) && !is_null($row->end_corners_asian_handicap_away_plus_45) )
    @if( ($row->end_corners_asian_handicap_home_plus_45 + $row->end_corners_asian_handicap_away_plus_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +4.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_45 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +4.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_5) && !is_null($row->end_corners_asian_handicap_away_plus_5) )
    @if( ($row->end_corners_asian_handicap_home_plus_5 + $row->end_corners_asian_handicap_away_plus_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_5 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_5))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,

                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_5,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_55) && !is_null($row->end_corners_asian_handicap_away_plus_55) )
    @if( ($row->end_corners_asian_handicap_home_plus_55 + $row->end_corners_asian_handicap_away_plus_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +5.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_55 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +5.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_6) && !is_null($row->end_corners_asian_handicap_away_plus_6) )
    @if( ($row->end_corners_asian_handicap_home_plus_6 + $row->end_corners_asian_handicap_away_plus_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +6',
                        'odd' => $row->end_corners_asian_handicap_home_plus_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_6 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_6))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +6',
                        'odd' => $row->end_corners_asian_handicap_away_plus_6,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_asian_handicap_home_plus_65) && !is_null($row->end_corners_asian_handicap_away_plus_65) )
    @if( ($row->end_corners_asian_handicap_home_plus_65 + $row->end_corners_asian_handicap_away_plus_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_asian_handicap_home_plus_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Home +6.5',
                        'odd' => $row->end_corners_asian_handicap_home_plus_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_home_plus_65 }}
            </a>
            <a
                @if(!is_null($row->end_corners_asian_handicap_away_plus_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 56,
                        'value' => 'Away +6.5',
                        'odd' => $row->end_corners_asian_handicap_away_plus_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                {{ $row->end_corners_asian_handicap_away_plus_65 }}
            </a>
        </div>
    @endif
@endif

