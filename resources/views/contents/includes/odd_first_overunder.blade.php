@if(!is_null($row->pre_goals_overunder_first_half_over_05) && !is_null($row->pre_goals_overunder_first_half_under_05) )
    @if( ($row->pre_goals_overunder_first_half_over_05 + $row->pre_goals_overunder_first_half_under_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_05))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 0.5',
                        'odd' => $row->pre_goals_overunder_first_half_over_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_05 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_05))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 0.5',
                        'odd' => $row->pre_goals_overunder_first_half_under_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    0.5
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_075) && !is_null($row->pre_goals_overunder_first_half_under_075) )
    @if( ($row->pre_goals_overunder_first_half_over_075 + $row->pre_goals_overunder_first_half_under_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 0.75',
                        'odd' => $row->pre_goals_overunder_first_half_over_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_075 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 0.75',
                        'odd' => $row->pre_goals_overunder_first_half_under_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    0.75
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_10) && !is_null($row->pre_goals_overunder_first_half_under_10) )
    @if( ($row->pre_goals_overunder_first_half_over_10 + $row->pre_goals_overunder_first_half_under_10) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_10))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.0',
                        'odd' => $row->pre_goals_overunder_first_half_over_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_10 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_10))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.0',
                        'odd' => $row->pre_goals_overunder_first_half_under_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.0
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_10 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_125) && !is_null($row->pre_goals_overunder_first_half_under_125) )
    @if( ($row->pre_goals_overunder_first_half_over_125 + $row->pre_goals_overunder_first_half_under_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.25',
                        'odd' => $row->pre_goals_overunder_first_half_over_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_125 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.25',
                        'odd' => $row->pre_goals_overunder_first_half_under_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.25
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_15) && !is_null($row->pre_goals_overunder_first_half_under_15) )
    @if( ($row->pre_goals_overunder_first_half_over_15 + $row->pre_goals_overunder_first_half_under_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_15))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.5',
                        'odd' => $row->pre_goals_overunder_first_half_over_15,

                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_15 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_15))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.5',
                        'odd' => $row->pre_goals_overunder_first_half_under_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.5
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_175) && !is_null($row->pre_goals_overunder_first_half_under_175) )
    @if( ($row->pre_goals_overunder_first_half_over_175 + $row->pre_goals_overunder_first_half_under_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.75',
                        'odd' => $row->pre_goals_overunder_first_half_over_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_175 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.75',
                        'odd' => $row->pre_goals_overunder_first_half_under_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    1.75
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_20) && !is_null($row->pre_goals_overunder_first_half_under_20) )
    @if( ($row->pre_goals_overunder_first_half_over_20 + $row->pre_goals_overunder_first_half_under_20) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_20))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.0',
                        'odd' => $row->pre_goals_overunder_first_half_over_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_20 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_20))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.0',
                        'odd' => $row->pre_goals_overunder_first_half_under_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.0
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_20 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_225) && !is_null($row->pre_goals_overunder_first_half_under_225) )
    @if( ($row->pre_goals_overunder_first_half_over_225 + $row->pre_goals_overunder_first_half_under_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.25',
                        'odd' => $row->pre_goals_overunder_first_half_over_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_225 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.25',
                        'odd' => $row->pre_goals_overunder_first_half_under_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.25
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_25) && !is_null($row->pre_goals_overunder_first_half_under_25) )
    @if( ($row->pre_goals_overunder_first_half_over_25 + $row->pre_goals_overunder_first_half_under_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.5',
                        'odd' => $row->pre_goals_overunder_first_half_over_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_25 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.5',
                        'odd' => $row->pre_goals_overunder_first_half_under_25,

                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.5
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_275) && !is_null($row->pre_goals_overunder_first_half_under_275) )
    @if( ($row->pre_goals_overunder_first_half_over_275 + $row->pre_goals_overunder_first_half_under_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.75',
                        'odd' => $row->pre_goals_overunder_first_half_over_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_275 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.75',
                        'odd' => $row->pre_goals_overunder_first_half_under_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.75
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_30) && !is_null($row->pre_goals_overunder_first_half_under_30) )
    @if( ($row->pre_goals_overunder_first_half_over_30 + $row->pre_goals_overunder_first_half_under_30) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_30))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.0',
                        'odd' => $row->pre_goals_overunder_first_half_over_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_30 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_30))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.0',
                        'odd' => $row->pre_goals_overunder_first_half_under_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.0
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_30 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_325) && !is_null($row->pre_goals_overunder_first_half_under_325) )
    @if( ($row->pre_goals_overunder_first_half_over_325 + $row->pre_goals_overunder_first_half_under_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_325))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.25',
                        'odd' => $row->pre_goals_overunder_first_half_over_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_325 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_325))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.25',
                        'odd' => $row->pre_goals_overunder_first_half_under_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.25
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_35) && !is_null($row->pre_goals_overunder_first_half_under_35) )
    @if( ($row->pre_goals_overunder_first_half_over_35 + $row->pre_goals_overunder_first_half_under_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.5',
                        'odd' => $row->pre_goals_overunder_first_half_over_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_35 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.5',
                        'odd' => $row->pre_goals_overunder_first_half_under_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.5
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_goals_overunder_first_half_over_375) && !is_null($row->pre_goals_overunder_first_half_under_375) )
    @if( ($row->pre_goals_overunder_first_half_over_375 + $row->pre_goals_overunder_first_half_under_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_over_375))
                    href="{{route('Mybets.datacreateanalysis',[

                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.75',
                        'odd' => $row->pre_goals_overunder_first_half_over_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_over_375 }}
            </a>
            <a
                @if(!is_null($row->pre_goals_overunder_first_half_under_375))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.75',
                        'odd' => $row->pre_goals_overunder_first_half_under_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.75
                    <br/>
                    {{ $row->pre_goals_overunder_first_half_under_375 }}
            </a>
        </div>
    @endif
@endif


<br/>


@if(!is_null($row->end_goals_overunder_first_half_over_05) && !is_null($row->end_goals_overunder_first_half_under_05) )
    @if( ($row->end_goals_overunder_first_half_over_05 + $row->end_goals_overunder_first_half_under_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 0.5',
                        'odd' => $row->end_goals_overunder_first_half_over_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_05 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_05))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 0.5',
                        'odd' => $row->end_goals_overunder_first_half_under_05,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_075) && !is_null($row->end_goals_overunder_first_half_under_075) )
    @if( ($row->end_goals_overunder_first_half_over_075 + $row->end_goals_overunder_first_half_under_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_075))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 0.75',
                        'odd' => $row->end_goals_overunder_first_half_over_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_075 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_075))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 0.75',
                        'odd' => $row->end_goals_overunder_first_half_under_075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_10) && !is_null($row->end_goals_overunder_first_half_under_10) )
    @if( ($row->end_goals_overunder_first_half_over_10 + $row->end_goals_overunder_first_half_under_10) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_10))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.0',
                        'odd' => $row->end_goals_overunder_first_half_over_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_10 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_10))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.0',
                        'odd' => $row->end_goals_overunder_first_half_under_10,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_10 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_125) && !is_null($row->end_goals_overunder_first_half_under_125) )
    @if( ($row->end_goals_overunder_first_half_over_125 + $row->end_goals_overunder_first_half_under_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_125))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.25',
                        'odd' => $row->end_goals_overunder_first_half_over_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_125 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_125))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.25',
                        'odd' => $row->end_goals_overunder_first_half_under_125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_15) && !is_null($row->end_goals_overunder_first_half_under_15) )
    @if( ($row->end_goals_overunder_first_half_over_15 + $row->end_goals_overunder_first_half_under_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.5',
                        'odd' => $row->end_goals_overunder_first_half_over_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_15 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_15))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,

                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.5',
                        'odd' => $row->end_goals_overunder_first_half_under_15,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_175) && !is_null($row->end_goals_overunder_first_half_under_175) )
    @if( ($row->end_goals_overunder_first_half_over_175 + $row->end_goals_overunder_first_half_under_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_175))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 1.75',
                        'odd' => $row->end_goals_overunder_first_half_over_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_175 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_175))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 1.75',
                        'odd' => $row->end_goals_overunder_first_half_under_175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_20) && !is_null($row->end_goals_overunder_first_half_under_20) )
    @if( ($row->end_goals_overunder_first_half_over_20 + $row->end_goals_overunder_first_half_under_20) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_20))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.0',
                        'odd' => $row->end_goals_overunder_first_half_over_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_20 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_20))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.0',
                        'odd' => $row->end_goals_overunder_first_half_under_20,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_20 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_225) && !is_null($row->end_goals_overunder_first_half_under_225) )
    @if( ($row->end_goals_overunder_first_half_over_225 + $row->end_goals_overunder_first_half_under_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_225))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.25',
                        'odd' => $row->end_goals_overunder_first_half_over_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_225 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_225))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.25',
                        'odd' => $row->end_goals_overunder_first_half_under_225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_25) && !is_null($row->end_goals_overunder_first_half_under_25) )
    @if( ($row->end_goals_overunder_first_half_over_25 + $row->end_goals_overunder_first_half_under_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.5',
                        'odd' => $row->end_goals_overunder_first_half_over_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_25 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.5',
                        'odd' => $row->end_goals_overunder_first_half_under_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_275) && !is_null($row->end_goals_overunder_first_half_under_275) )
    @if( ($row->end_goals_overunder_first_half_over_275 + $row->end_goals_overunder_first_half_under_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_275))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 2.75',

                        'odd' => $row->end_goals_overunder_first_half_over_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_275 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_275))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 2.75',
                        'odd' => $row->end_goals_overunder_first_half_under_275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_30) && !is_null($row->end_goals_overunder_first_half_under_30) )
    @if( ($row->end_goals_overunder_first_half_over_30 + $row->end_goals_overunder_first_half_under_30) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_30))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.0',
                        'odd' => $row->end_goals_overunder_first_half_over_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_30 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_30))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.0',
                        'odd' => $row->end_goals_overunder_first_half_under_30,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_30 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_325) && !is_null($row->end_goals_overunder_first_half_under_325) )
    @if( ($row->end_goals_overunder_first_half_over_325 + $row->end_goals_overunder_first_half_under_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_325))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.25',
                        'odd' => $row->end_goals_overunder_first_half_over_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_325 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_325))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.25',
                        'odd' => $row->end_goals_overunder_first_half_under_325,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_35) && !is_null($row->end_goals_overunder_first_half_under_35) )
    @if( ($row->end_goals_overunder_first_half_over_35 + $row->end_goals_overunder_first_half_under_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.5',
                        'odd' => $row->end_goals_overunder_first_half_over_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_35 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.5',
                        'odd' => $row->end_goals_overunder_first_half_under_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_goals_overunder_first_half_over_375) && !is_null($row->end_goals_overunder_first_half_under_375) )
    @if( ($row->end_goals_overunder_first_half_over_375 + $row->end_goals_overunder_first_half_under_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_goals_overunder_first_half_over_375))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Over 3.75',
                        'odd' => $row->end_goals_overunder_first_half_over_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_over_375 }}
            </a>
            <a
                @if(!is_null($row->end_goals_overunder_first_half_under_375))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 6,
                        'value' => 'Under 3.75',
                        'odd' => $row->end_goals_overunder_first_half_under_375,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_goals_overunder_first_half_under_375 }}
            </a>
        </div>
    @endif
@endif

