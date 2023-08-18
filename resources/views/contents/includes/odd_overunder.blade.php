@if(!is_null($row->pre_goals_overunder_over_05) && !is_null($row->pre_goals_overunder_under_05) )
    @if( ($row->pre_goals_overunder_over_05 + $row->pre_goals_overunder_under_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_05))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 0.5',
                        'odd' => $row->pre_goals_overunder_over_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_05 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_05))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 0.5',
                        'odd' => $row->pre_goals_overunder_under_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    0.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_075) && !is_null($row->pre_goals_overunder_under_075) )
    @if( ($row->pre_goals_overunder_over_075 + $row->pre_goals_overunder_under_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 0.75',
                        'odd' => $row->pre_goals_overunder_over_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_075 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 0.75',
                        'odd' => $row->pre_goals_overunder_under_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    0.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_10) && !is_null($row->pre_goals_overunder_under_10) )
    @if( ($row->pre_goals_overunder_over_10 + $row->pre_goals_overunder_under_10) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_10))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.0',
                        'odd' => $row->pre_goals_overunder_over_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_10 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_10))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.0',
                        'odd' => $row->pre_goals_overunder_under_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_10 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_125) && !is_null($row->pre_goals_overunder_under_125) )
    @if( ($row->pre_goals_overunder_over_125 + $row->pre_goals_overunder_under_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.25',
                        'odd' => $row->pre_goals_overunder_over_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_125 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.25',
                        'odd' => $row->pre_goals_overunder_under_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.25
                    <br/>
                    {{ $row->pre_goals_overunder_under_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_15) && !is_null($row->pre_goals_overunder_under_15) )
    @if( ($row->pre_goals_overunder_over_15 + $row->pre_goals_overunder_under_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_15))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.5',
                        'odd' => $row->pre_goals_overunder_over_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_15 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_15))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.5',
                        'odd' => $row->pre_goals_overunder_under_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_175) && !is_null($row->pre_goals_overunder_under_175) )
    @if( ($row->pre_goals_overunder_over_175 + $row->pre_goals_overunder_under_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.75',
                        'odd' => $row->pre_goals_overunder_over_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_175 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.75',
                        'odd' => $row->pre_goals_overunder_under_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_20) && !is_null($row->pre_goals_overunder_under_20) )
    @if( ($row->pre_goals_overunder_over_20 + $row->pre_goals_overunder_under_20) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_20))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 2.0',
                        'odd' => $row->pre_goals_overunder_over_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_20 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_20))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.0',
                        'odd' => $row->pre_goals_overunder_under_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_20 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_225) && !is_null($row->pre_goals_overunder_under_225) )
    @if( ($row->pre_goals_overunder_over_225 + $row->pre_goals_overunder_under_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 2.25',
                        'odd' => $row->pre_goals_overunder_over_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_225 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.25',
                        'odd' => $row->pre_goals_overunder_under_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.25
                    <br/>
                    {{ $row->pre_goals_overunder_under_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_25) && !is_null($row->pre_goals_overunder_under_25) )
    @if( ($row->pre_goals_overunder_over_25 + $row->pre_goals_overunder_under_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 2.5',
                        'odd' => $row->pre_goals_overunder_over_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_25 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.5',
                        'odd' => $row->pre_goals_overunder_under_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_275) && !is_null($row->pre_goals_overunder_under_275) )
    @if( ($row->pre_goals_overunder_over_275 + $row->pre_goals_overunder_under_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,

                        'value' => 'Over 2.75',
                        'odd' => $row->pre_goals_overunder_over_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_275 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.75',
                        'odd' => $row->pre_goals_overunder_under_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_30) && !is_null($row->pre_goals_overunder_under_30) )
    @if( ($row->pre_goals_overunder_over_30 + $row->pre_goals_overunder_under_30) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_30))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.0',
                        'odd' => $row->pre_goals_overunder_over_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_30 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_30))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.0',
                        'odd' => $row->pre_goals_overunder_under_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_30 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_325) && !is_null($row->pre_goals_overunder_under_325) )
    @if( ($row->pre_goals_overunder_over_325 + $row->pre_goals_overunder_under_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_325))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.25',
                        'odd' => $row->pre_goals_overunder_over_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_325 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_325))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.25',
                        'odd' => $row->pre_goals_overunder_under_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.25
                    <br/>
                    {{ $row->pre_goals_overunder_under_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_35) && !is_null($row->pre_goals_overunder_under_35) )
    @if( ($row->pre_goals_overunder_over_35 + $row->pre_goals_overunder_under_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.5',
                        'odd' => $row->pre_goals_overunder_over_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_35 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.5',
                        'odd' => $row->pre_goals_overunder_under_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_375) && !is_null($row->pre_goals_overunder_under_375) )
    @if( ($row->pre_goals_overunder_over_375 + $row->pre_goals_overunder_under_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_375))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.75',
                        'odd' => $row->pre_goals_overunder_over_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_375 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_375))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.75',
                        'odd' => $row->pre_goals_overunder_under_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_375 }}
            </a>
        </div>
    @endif
@endif


@if(!is_null($row->pre_goals_overunder_over_40) && !is_null($row->pre_goals_overunder_under_40) )
    @if( ($row->pre_goals_overunder_over_40 + $row->pre_goals_overunder_under_40) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_40))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.0',
                        'odd' => $row->pre_goals_overunder_over_40,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_40 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_40))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.0',
                        'odd' => $row->pre_goals_overunder_under_40,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_40 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_425) && !is_null($row->pre_goals_overunder_under_425) )
    @if( ($row->pre_goals_overunder_over_425 + $row->pre_goals_overunder_under_425) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_425))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.25',
                        'odd' => $row->pre_goals_overunder_over_425,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_425 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_425))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.25',
                        'odd' => $row->pre_goals_overunder_under_425,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.25
                    <br/>
                    {{ $row->pre_goals_overunder_under_425 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_45) && !is_null($row->pre_goals_overunder_under_45) )
    @if( ($row->pre_goals_overunder_over_45 + $row->pre_goals_overunder_under_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_45))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.5',
                        'odd' => $row->pre_goals_overunder_over_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_45 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_45))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.5',
                        'odd' => $row->pre_goals_overunder_under_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_475) && !is_null($row->pre_goals_overunder_under_475) )
    @if( ($row->pre_goals_overunder_over_475 + $row->pre_goals_overunder_under_475) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_475))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.75',
                        'odd' => $row->pre_goals_overunder_over_475,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_475 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_475))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.75',
                        'odd' => $row->pre_goals_overunder_under_475,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_475 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_50) && !is_null($row->pre_goals_overunder_under_50) )
    @if( ($row->pre_goals_overunder_over_50 + $row->pre_goals_overunder_under_50) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_50))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.0',
                        'odd' => $row->pre_goals_overunder_over_50,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_50 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_50))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.0',
                        'odd' => $row->pre_goals_overunder_under_50,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_50 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_525) && !is_null($row->pre_goals_overunder_under_525) )
    @if( ($row->pre_goals_overunder_over_525 + $row->pre_goals_overunder_under_525) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_525))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.25',
                        'odd' => $row->pre_goals_overunder_over_525,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_525 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_525))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.25',
                        'odd' => $row->pre_goals_overunder_under_525,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.25
                    <br/>
                    {{ $row->pre_goals_overunder_under_525 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_55) && !is_null($row->pre_goals_overunder_under_55) )
    @if( ($row->pre_goals_overunder_over_55 + $row->pre_goals_overunder_under_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_55))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.5',
                        'odd' => $row->pre_goals_overunder_over_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_55 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_55))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.5',
                        'odd' => $row->pre_goals_overunder_under_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_575) && !is_null($row->pre_goals_overunder_under_575) )
    @if( ($row->pre_goals_overunder_over_575 + $row->pre_goals_overunder_under_575) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_575))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.75',
                        'odd' => $row->pre_goals_overunder_over_575,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_575 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_575))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.75',
                        'odd' => $row->pre_goals_overunder_under_575,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_575 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_60) && !is_null($row->pre_goals_overunder_under_60) )
    @if( ($row->pre_goals_overunder_over_60 + $row->pre_goals_overunder_under_60) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_60))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 6.0',
                        'odd' => $row->pre_goals_overunder_over_60,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_60 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_60))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.0',
                        'odd' => $row->pre_goals_overunder_under_60,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_60 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_625) && !is_null($row->pre_goals_overunder_under_625) )
    @if( ($row->pre_goals_overunder_over_625 + $row->pre_goals_overunder_under_625) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_625))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,

                        'value' => 'Over 6.25',
                        'odd' => $row->pre_goals_overunder_over_625,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_625 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_625))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.25',
                        'odd' => $row->pre_goals_overunder_under_625,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.25
                    <br/>
                    {{ $row->pre_goals_overunder_under_625 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_65) && !is_null($row->pre_goals_overunder_under_65) )
    @if( ($row->pre_goals_overunder_over_65 + $row->pre_goals_overunder_under_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_65))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 6.5',
                        'odd' => $row->pre_goals_overunder_over_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_65 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_65))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.5',
                        'odd' => $row->pre_goals_overunder_under_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_675) && !is_null($row->pre_goals_overunder_under_675) )
    @if( ($row->pre_goals_overunder_over_675 + $row->pre_goals_overunder_under_675) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_675))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 6.75',
                        'odd' => $row->pre_goals_overunder_over_675,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_675 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_675))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.75',
                        'odd' => $row->pre_goals_overunder_under_675,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.75
                    <br/>
                    {{ $row->pre_goals_overunder_under_675 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_70) && !is_null($row->pre_goals_overunder_under_70) )
    @if( ($row->pre_goals_overunder_over_70 + $row->pre_goals_overunder_under_70) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_70))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 7.0',
                        'odd' => $row->pre_goals_overunder_over_70,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_70 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_70))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 7.0',
                        'odd' => $row->pre_goals_overunder_under_70,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.0
                    <br/>
                    {{ $row->pre_goals_overunder_under_70 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_75) && !is_null($row->pre_goals_overunder_under_75) )
    @if( ($row->pre_goals_overunder_over_75 + $row->pre_goals_overunder_under_75) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_75))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 7.5',
                        'odd' => $row->pre_goals_overunder_over_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_75 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_75))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 7.5',
                        'odd' => $row->pre_goals_overunder_under_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_75 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_85) && !is_null($row->pre_goals_overunder_under_85) )

    @if( ($row->pre_goals_overunder_over_85 + $row->pre_goals_overunder_under_85) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_85))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 8.5',
                        'odd' => $row->pre_goals_overunder_over_85,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_85 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_85))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 8.5',
                        'odd' => $row->pre_goals_overunder_under_85,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    8.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_85 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_over_95) && !is_null($row->pre_goals_overunder_under_95) )
    @if( ($row->pre_goals_overunder_over_95 + $row->pre_goals_overunder_under_95) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_over_95))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 9.5',
                        'odd' => $row->pre_goals_overunder_over_95,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_over_95 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_under_95))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 9.5',
                        'odd' => $row->pre_goals_overunder_under_95,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    9.5
                    <br/>
                    {{ $row->pre_goals_overunder_under_95 }}
            </a>
        </div>
    @endif
@endif

<br/>

@if(!is_null($row->end_goals_overunder_over_05) && !is_null($row->end_goals_overunder_under_05) )
    @if( ($row->end_goals_overunder_over_05 + $row->end_goals_overunder_under_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_05))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 0.5',
                        'odd' => $row->end_goals_overunder_over_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_05 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_05))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 0.5',
                        'odd' => $row->end_goals_overunder_under_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    0.5
                    <br/>
                    {{ $row->end_goals_overunder_under_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_075) && !is_null($row->end_goals_overunder_under_075) )
    @if( ($row->end_goals_overunder_over_075 + $row->end_goals_overunder_under_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 0.75',
                        'odd' => $row->end_goals_overunder_over_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_075 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 0.75',
                        'odd' => $row->end_goals_overunder_under_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    0.75
                    <br/>
                    {{ $row->end_goals_overunder_under_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_10) && !is_null($row->end_goals_overunder_under_10) )
    @if( ($row->end_goals_overunder_over_10 + $row->end_goals_overunder_under_10) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_10))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.0',
                        'odd' => $row->end_goals_overunder_over_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_10 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_10))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.0',
                        'odd' => $row->end_goals_overunder_under_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.0
                    <br/>
                    {{ $row->end_goals_overunder_under_10 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_125) && !is_null($row->end_goals_overunder_under_125) )
    @if( ($row->end_goals_overunder_over_125 + $row->end_goals_overunder_under_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.25',
                        'odd' => $row->end_goals_overunder_over_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_125 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.25',
                        'odd' => $row->end_goals_overunder_under_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.25
                    <br/>
                    {{ $row->end_goals_overunder_under_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_15) && !is_null($row->end_goals_overunder_under_15) )
    @if( ($row->end_goals_overunder_over_15 + $row->end_goals_overunder_under_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_15))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.5',
                        'odd' => $row->end_goals_overunder_over_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_15 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_15))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.5',
                        'odd' => $row->end_goals_overunder_under_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.5
                    <br/>
                    {{ $row->end_goals_overunder_under_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_175) && !is_null($row->end_goals_overunder_under_175) )
    @if( ($row->end_goals_overunder_over_175 + $row->end_goals_overunder_under_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 1.75',
                        'odd' => $row->end_goals_overunder_over_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_175 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 1.75',
                        'odd' => $row->end_goals_overunder_under_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.75
                    <br/>
                    {{ $row->end_goals_overunder_under_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_20) && !is_null($row->end_goals_overunder_under_20) )
    @if( ($row->end_goals_overunder_over_20 + $row->end_goals_overunder_under_20) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_20))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 2.0',
                        'odd' => $row->end_goals_overunder_over_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_20 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_20))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.0',
                        'odd' => $row->end_goals_overunder_under_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.0
                    <br/>
                    {{ $row->end_goals_overunder_under_20 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_225) && !is_null($row->end_goals_overunder_under_225) )
    @if( ($row->end_goals_overunder_over_225 + $row->end_goals_overunder_under_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 2.25',
                        'odd' => $row->end_goals_overunder_over_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_225 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.25',
                        'odd' => $row->end_goals_overunder_under_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.25
                    <br/>
                    {{ $row->end_goals_overunder_under_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_25) && !is_null($row->end_goals_overunder_under_25) )
    @if( ($row->end_goals_overunder_over_25 + $row->end_goals_overunder_under_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 2.5',
                        'odd' => $row->end_goals_overunder_over_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_25 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.5',
                        'odd' => $row->end_goals_overunder_under_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.5
                    <br/>
                    {{ $row->end_goals_overunder_under_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_275) && !is_null($row->end_goals_overunder_under_275) )
    @if( ($row->end_goals_overunder_over_275 + $row->end_goals_overunder_under_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,

                        'value' => 'Over 2.75',
                        'odd' => $row->end_goals_overunder_over_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_275 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 2.75',
                        'odd' => $row->end_goals_overunder_under_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.75
                    <br/>
                    {{ $row->end_goals_overunder_under_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_30) && !is_null($row->end_goals_overunder_under_30) )
    @if( ($row->end_goals_overunder_over_30 + $row->end_goals_overunder_under_30) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_30))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.0',
                        'odd' => $row->end_goals_overunder_over_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_30 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_30))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.0',
                        'odd' => $row->end_goals_overunder_under_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.0
                    <br/>
                    {{ $row->end_goals_overunder_under_30 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_325) && !is_null($row->end_goals_overunder_under_325) )
    @if( ($row->end_goals_overunder_over_325 + $row->end_goals_overunder_under_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_325))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.25',
                        'odd' => $row->end_goals_overunder_over_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_325 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_325))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.25',
                        'odd' => $row->end_goals_overunder_under_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.25
                    <br/>
                    {{ $row->end_goals_overunder_under_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_35) && !is_null($row->end_goals_overunder_under_35) )
    @if( ($row->end_goals_overunder_over_35 + $row->end_goals_overunder_under_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.5',
                        'odd' => $row->end_goals_overunder_over_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_35 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.5',
                        'odd' => $row->end_goals_overunder_under_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.5
                    <br/>
                    {{ $row->end_goals_overunder_under_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_375) && !is_null($row->end_goals_overunder_under_375) )
    @if( ($row->end_goals_overunder_over_375 + $row->end_goals_overunder_under_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_375))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 3.75',
                        'odd' => $row->end_goals_overunder_over_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_375 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_375))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 3.75',
                        'odd' => $row->end_goals_overunder_under_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.75
                    <br/>
                    {{ $row->end_goals_overunder_under_375 }}
            </a>
        </div>
    @endif
@endif


@if(!is_null($row->end_goals_overunder_over_40) && !is_null($row->end_goals_overunder_under_40) )
    @if( ($row->end_goals_overunder_over_40 + $row->end_goals_overunder_under_40) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_40))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.0',
                        'odd' => $row->end_goals_overunder_over_40,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_40 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_40))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.0',
                        'odd' => $row->end_goals_overunder_under_40,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.0
                    <br/>
                    {{ $row->end_goals_overunder_under_40 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_425) && !is_null($row->end_goals_overunder_under_425) )
    @if( ($row->end_goals_overunder_over_425 + $row->end_goals_overunder_under_425) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_425))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.25',
                        'odd' => $row->end_goals_overunder_over_425,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_425 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_425))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.25',
                        'odd' => $row->end_goals_overunder_under_425,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.25
                    <br/>
                    {{ $row->end_goals_overunder_under_425 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_45) && !is_null($row->end_goals_overunder_under_45) )
    @if( ($row->end_goals_overunder_over_45 + $row->end_goals_overunder_under_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_45))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.5',
                        'odd' => $row->end_goals_overunder_over_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_45 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_45))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.5',
                        'odd' => $row->end_goals_overunder_under_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.5
                    <br/>
                    {{ $row->end_goals_overunder_under_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_475) && !is_null($row->end_goals_overunder_under_475) )
    @if( ($row->end_goals_overunder_over_475 + $row->end_goals_overunder_under_475) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_475))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 4.75',
                        'odd' => $row->end_goals_overunder_over_475,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_475 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_475))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 4.75',
                        'odd' => $row->end_goals_overunder_under_475,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.75
                    <br/>
                    {{ $row->end_goals_overunder_under_475 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_50) && !is_null($row->end_goals_overunder_under_50) )
    @if( ($row->end_goals_overunder_over_50 + $row->end_goals_overunder_under_50) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_50))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.0',
                        'odd' => $row->end_goals_overunder_over_50,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_50 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_50))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.0',
                        'odd' => $row->end_goals_overunder_under_50,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.0
                    <br/>
                    {{ $row->end_goals_overunder_under_50 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_525) && !is_null($row->end_goals_overunder_under_525) )
    @if( ($row->end_goals_overunder_over_525 + $row->end_goals_overunder_under_525) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_525))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.25',
                        'odd' => $row->end_goals_overunder_over_525,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_525 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_525))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.25',
                        'odd' => $row->end_goals_overunder_under_525,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.25
                    <br/>
                    {{ $row->end_goals_overunder_under_525 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_55) && !is_null($row->end_goals_overunder_under_55) )
    @if( ($row->end_goals_overunder_over_55 + $row->end_goals_overunder_under_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_55))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.5',
                        'odd' => $row->end_goals_overunder_over_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_55 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_55))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.5',
                        'odd' => $row->end_goals_overunder_under_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.5
                    <br/>
                    {{ $row->end_goals_overunder_under_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_575) && !is_null($row->end_goals_overunder_under_575) )
    @if( ($row->end_goals_overunder_over_575 + $row->end_goals_overunder_under_575) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_575))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 5.75',
                        'odd' => $row->end_goals_overunder_over_575,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_575 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_575))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 5.75',
                        'odd' => $row->end_goals_overunder_under_575,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.75
                    <br/>
                    {{ $row->end_goals_overunder_under_575 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_60) && !is_null($row->end_goals_overunder_under_60) )
    @if( ($row->end_goals_overunder_over_60 + $row->end_goals_overunder_under_60) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_60))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 6.0',
                        'odd' => $row->end_goals_overunder_over_60,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_60 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_60))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.0',
                        'odd' => $row->end_goals_overunder_under_60,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.0
                    <br/>
                    {{ $row->end_goals_overunder_under_60 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_625) && !is_null($row->end_goals_overunder_under_625) )
    @if( ($row->end_goals_overunder_over_625 + $row->end_goals_overunder_under_625) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_625))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,

                        'value' => 'Over 6.25',
                        'odd' => $row->end_goals_overunder_over_625,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_625 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_625))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.25',
                        'odd' => $row->end_goals_overunder_under_625,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.25
                    <br/>
                    {{ $row->end_goals_overunder_under_625 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_65) && !is_null($row->end_goals_overunder_under_65) )
    @if( ($row->end_goals_overunder_over_65 + $row->end_goals_overunder_under_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_65))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 6.5',
                        'odd' => $row->end_goals_overunder_over_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_65 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_65))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.5',
                        'odd' => $row->end_goals_overunder_under_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.5
                    <br/>
                    {{ $row->end_goals_overunder_under_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_675) && !is_null($row->end_goals_overunder_under_675) )
    @if( ($row->end_goals_overunder_over_675 + $row->end_goals_overunder_under_675) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_675))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 6.75',
                        'odd' => $row->end_goals_overunder_over_675,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_675 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_675))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 6.75',
                        'odd' => $row->end_goals_overunder_under_675,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.75
                    <br/>
                    {{ $row->end_goals_overunder_under_675 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_70) && !is_null($row->end_goals_overunder_under_70) )
    @if( ($row->end_goals_overunder_over_70 + $row->end_goals_overunder_under_70) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_70))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 7.0',
                        'odd' => $row->end_goals_overunder_over_70,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_70 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_70))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 7.0',
                        'odd' => $row->end_goals_overunder_under_70,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.0
                    <br/>
                    {{ $row->end_goals_overunder_under_70 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_75) && !is_null($row->end_goals_overunder_under_75) )
    @if( ($row->end_goals_overunder_over_75 + $row->end_goals_overunder_under_75) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_75))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 7.5',
                        'odd' => $row->end_goals_overunder_over_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_75 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_75))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 7.5',
                        'odd' => $row->end_goals_overunder_under_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.5
                    <br/>
                    {{ $row->end_goals_overunder_under_75 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_85) && !is_null($row->end_goals_overunder_under_85) )

    @if( ($row->end_goals_overunder_over_85 + $row->end_goals_overunder_under_85) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_85))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 8.5',
                        'odd' => $row->end_goals_overunder_over_85,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_85 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_85))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 8.5',
                        'odd' => $row->end_goals_overunder_under_85,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    8.5
                    <br/>
                    {{ $row->end_goals_overunder_under_85 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_over_95) && !is_null($row->end_goals_overunder_under_95) )
    @if( ($row->end_goals_overunder_over_95 + $row->end_goals_overunder_under_95) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_over_95))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Over 9.5',
                        'odd' => $row->end_goals_overunder_over_95,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->end_goals_overunder_over_95 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_under_95))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 5,
                        'value' => 'Under 9.5',
                        'odd' => $row->end_goals_overunder_under_95,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    9.5
                    <br/>
                    {{ $row->end_goals_overunder_under_95 }}
            </a>
        </div>
    @endif
@endif

