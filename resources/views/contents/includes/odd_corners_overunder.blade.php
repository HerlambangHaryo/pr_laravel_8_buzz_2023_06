@if(!is_null($row->pre_corners_over_under_over_700) && !is_null($row->pre_corners_under_under_under_700) )
    @if( ($row->pre_corners_over_under_over_700 + $row->pre_corners_under_under_under_700) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_700))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7',
                        'odd' => $row->pre_corners_over_under_over_700,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_700 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_700))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7',
                        'odd' => $row->pre_corners_over_under_under_700,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7
                    <br/>
                    {{ $row->pre_corners_over_under_under_700 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_725) && !is_null($row->pre_corners_under_under_under_725) )
    @if( ($row->pre_corners_over_under_over_725 + $row->pre_corners_under_under_under_725) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_725))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7.25',
                        'odd' => $row->pre_corners_over_under_over_725,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_725 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_725))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7.25',
                        'odd' => $row->pre_corners_over_under_under_725,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.25
                    <br/>
                    {{ $row->pre_corners_over_under_under_725 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_750) && !is_null($row->pre_corners_under_under_under_750) )
    @if( ($row->pre_corners_over_under_over_750 + $row->pre_corners_under_under_under_750) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_750))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7.5',
                        'odd' => $row->pre_corners_over_under_over_750,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_750 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_750))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7.5',
                        'odd' => $row->pre_corners_over_under_under_750,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.5
                    <br/>
                    {{ $row->pre_corners_over_under_under_750 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_775) && !is_null($row->pre_corners_under_under_under_775) )
    @if( ($row->pre_corners_over_under_over_775 + $row->pre_corners_under_under_under_775) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_775))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7.75',
                        'odd' => $row->pre_corners_over_under_over_775,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_775 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_775))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7.75',
                        'odd' => $row->pre_corners_over_under_under_775,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.75
                    <br/>
                    {{ $row->pre_corners_over_under_under_775 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_800) && !is_null($row->pre_corners_under_under_under_800) )
    @if( ($row->pre_corners_over_under_over_800 + $row->pre_corners_under_under_under_800) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_800))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8',
                        'odd' => $row->pre_corners_over_under_over_800,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_800 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_800))

                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8',
                        'odd' => $row->pre_corners_over_under_under_800,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    8
                    <br/>
                    {{ $row->pre_corners_over_under_under_800 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_825) && !is_null($row->pre_corners_under_under_under_825) )
    @if( ($row->pre_corners_over_under_over_825 + $row->pre_corners_under_under_under_825) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_825))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8.25',
                        'odd' => $row->pre_corners_over_under_over_825,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_825 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_825))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8.25',
                        'odd' => $row->pre_corners_over_under_under_825,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    8.25
                    <br/>
                    {{ $row->pre_corners_over_under_under_825 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_850) && !is_null($row->pre_corners_under_under_under_850) )
    @if( ($row->pre_corners_over_under_over_850 + $row->pre_corners_under_under_under_850) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_850))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8.5',
                        'odd' => $row->pre_corners_over_under_over_850,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_850 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_850))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8.5',
                        'odd' => $row->pre_corners_over_under_under_850,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    8.5
                    <br/>
                    {{ $row->pre_corners_over_under_under_850 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_875) && !is_null($row->pre_corners_under_under_under_875) )
    @if( ($row->pre_corners_over_under_over_875 + $row->pre_corners_under_under_under_875) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_875))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8.75',
                        'odd' => $row->pre_corners_over_under_over_875,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_875 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_875))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8.75',
                        'odd' => $row->pre_corners_over_under_under_875,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    8.75
                    <br/>
                    {{ $row->pre_corners_over_under_under_875 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_900) && !is_null($row->pre_corners_under_under_under_900) )
    @if( ($row->pre_corners_over_under_over_900 + $row->pre_corners_under_under_under_900) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_900))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9',
                        'odd' => $row->pre_corners_over_under_over_900,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_900 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_900))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9',
                        'odd' => $row->pre_corners_over_under_under_900,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    9
                    <br/>
                    {{ $row->pre_corners_over_under_under_900 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_925) && !is_null($row->pre_corners_under_under_under_925) )
    @if( ($row->pre_corners_over_under_over_925 + $row->pre_corners_under_under_under_925) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_925))

                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9.25',
                        'odd' => $row->pre_corners_over_under_over_925,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_925 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_925))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9.25',
                        'odd' => $row->pre_corners_over_under_under_925,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    9.25
                    <br/>
                    {{ $row->pre_corners_over_under_under_925 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_950) && !is_null($row->pre_corners_under_under_under_950) )
    @if( ($row->pre_corners_over_under_over_950 + $row->pre_corners_under_under_under_950) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_950))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9.5',
                        'odd' => $row->pre_corners_over_under_over_950,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_950 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_950))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9.5',
                        'odd' => $row->pre_corners_over_under_under_950,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    9.5
                    <br/>
                    {{ $row->pre_corners_over_under_under_950 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_975) && !is_null($row->pre_corners_under_under_under_975) )
    @if( ($row->pre_corners_over_under_over_975 + $row->pre_corners_under_under_under_975) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_975))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9.75',
                        'odd' => $row->pre_corners_over_under_over_975,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_975 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_975))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9.75',
                        'odd' => $row->pre_corners_over_under_under_975,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    9.75
                    <br/>
                    {{ $row->pre_corners_over_under_under_975 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1000) && !is_null($row->pre_corners_under_under_under_1000) )
    @if( ($row->pre_corners_over_under_over_1000 + $row->pre_corners_under_under_under_1000) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1000))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10',
                        'odd' => $row->pre_corners_over_under_over_1000,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1000 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1000))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10',
                        'odd' => $row->pre_corners_over_under_under_1000,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    10
                    <br/>
                    {{ $row->pre_corners_over_under_under_1000 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1025) && !is_null($row->pre_corners_under_under_under_1025) )
    @if( ($row->pre_corners_over_under_over_1025 + $row->pre_corners_under_under_under_1025) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1025))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10.25',
                        'odd' => $row->pre_corners_over_under_over_1025,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1025 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1025))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,

                        'betsapi_id' => 45,
                        'value' => 'Under 10.25',
                        'odd' => $row->pre_corners_over_under_under_1025,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    10.25
                    <br/>
                    {{ $row->pre_corners_over_under_under_1025 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1050) && !is_null($row->pre_corners_under_under_under_1050) )
    @if( ($row->pre_corners_over_under_over_1050 + $row->pre_corners_under_under_under_1050) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1050))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10.5',
                        'odd' => $row->pre_corners_over_under_over_1050,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1050 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1050))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10.5',
                        'odd' => $row->pre_corners_over_under_under_1050,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    10.5
                    <br/>
                    {{ $row->pre_corners_over_under_under_1050 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1075) && !is_null($row->pre_corners_under_under_under_1075) )
    @if( ($row->pre_corners_over_under_over_1075 + $row->pre_corners_under_under_under_1075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10.75',
                        'odd' => $row->pre_corners_over_under_over_1075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1075 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1075))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10.75',
                        'odd' => $row->pre_corners_over_under_under_1075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    10.75
                    <br/>
                    {{ $row->pre_corners_over_under_under_1075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1100) && !is_null($row->pre_corners_under_under_under_1100) )
    @if( ($row->pre_corners_over_under_over_1100 + $row->pre_corners_under_under_under_1100) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1100))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11',
                        'odd' => $row->pre_corners_over_under_over_1100,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1100 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1100))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11',
                        'odd' => $row->pre_corners_over_under_under_1100,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    11
                    <br/>
                    {{ $row->pre_corners_over_under_under_1100 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1125) && !is_null($row->pre_corners_under_under_under_1125) )
    @if( ($row->pre_corners_over_under_over_1125 + $row->pre_corners_under_under_under_1125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11.25',
                        'odd' => $row->pre_corners_over_under_over_1125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1125 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1125))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11.25',
                        'odd' => $row->pre_corners_over_under_under_1125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    11.25
                    <br/>
                    {{ $row->pre_corners_over_under_under_1125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1150) && !is_null($row->pre_corners_under_under_under_1150) )
    @if( ($row->pre_corners_over_under_over_1150 + $row->pre_corners_under_under_under_1150) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1150))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,

                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11.5',
                        'odd' => $row->pre_corners_over_under_over_1150,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1150 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1150))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11.5',
                        'odd' => $row->pre_corners_over_under_under_1150,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    11.5
                    <br/>
                    {{ $row->pre_corners_over_under_under_1150 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1175) && !is_null($row->pre_corners_under_under_under_1175) )
    @if( ($row->pre_corners_over_under_over_1175 + $row->pre_corners_under_under_under_1175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11.75',
                        'odd' => $row->pre_corners_over_under_over_1175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1175 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1175))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11.75',
                        'odd' => $row->pre_corners_over_under_under_1175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    11.75
                    <br/>
                    {{ $row->pre_corners_over_under_under_1175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1200) && !is_null($row->pre_corners_under_under_under_1200) )
    @if( ($row->pre_corners_over_under_over_1200 + $row->pre_corners_under_under_under_1200) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1200))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12',
                        'odd' => $row->pre_corners_over_under_over_1200,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1200 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1200))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12',
                        'odd' => $row->pre_corners_over_under_under_1200,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    12
                    <br/>
                    {{ $row->pre_corners_over_under_under_1200 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1225) && !is_null($row->pre_corners_under_under_under_1225) )
    @if( ($row->pre_corners_over_under_over_1225 + $row->pre_corners_under_under_under_1225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12.25',
                        'odd' => $row->pre_corners_over_under_over_1225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1225 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1225))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12.25',
                        'odd' => $row->pre_corners_over_under_under_1225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    12.25
                    <br/>
                    {{ $row->pre_corners_over_under_under_1225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1250) && !is_null($row->pre_corners_under_under_under_1250) )
    @if( ($row->pre_corners_over_under_over_1250 + $row->pre_corners_under_under_under_1250) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1250))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12.5',
                        'odd' => $row->pre_corners_over_under_over_1250,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1250 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1250))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12.5',
                        'odd' => $row->pre_corners_over_under_under_1250,

                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    12.5
                    <br/>
                    {{ $row->pre_corners_over_under_under_1250 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_corners_over_under_over_1275) && !is_null($row->pre_corners_under_under_under_1275) )
    @if( ($row->pre_corners_over_under_over_1275 + $row->pre_corners_under_under_under_1275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_corners_over_under_over_1275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12.75',
                        'odd' => $row->pre_corners_over_under_over_1275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_corners_over_under_over_1275 }}
            </a>
            <a
                @if(!is_null($row->pre_corners_over_under_under_1275))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12.75',
                        'odd' => $row->pre_corners_over_under_under_1275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    12.75
                    <br/>
                    {{ $row->pre_corners_over_under_under_1275 }}
            </a>
        </div>
    @endif
@endif


<br/>


@if(!is_null($row->end_corners_over_under_over_700) && !is_null($row->end_corners_under_under_under_700) )
    @if( ($row->end_corners_over_under_over_700 + $row->end_corners_under_under_under_700) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_700))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7',
                        'odd' => $row->end_corners_over_under_over_700,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_700 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_700))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7',
                        'odd' => $row->end_corners_over_under_under_700,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_700 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_725) && !is_null($row->end_corners_under_under_under_725) )
    @if( ($row->end_corners_over_under_over_725 + $row->end_corners_under_under_under_725) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_725))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7.25',
                        'odd' => $row->end_corners_over_under_over_725,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_725 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_725))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7.25',
                        'odd' => $row->end_corners_over_under_under_725,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_725 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_750) && !is_null($row->end_corners_under_under_under_750) )
    @if( ($row->end_corners_over_under_over_750 + $row->end_corners_under_under_under_750) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_750))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7.5',
                        'odd' => $row->end_corners_over_under_over_750,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_750 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_750))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7.5',
                        'odd' => $row->end_corners_over_under_under_750,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_750 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_775) && !is_null($row->end_corners_under_under_under_775) )
    @if( ($row->end_corners_over_under_over_775 + $row->end_corners_under_under_under_775) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_775))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 7.75',
                        'odd' => $row->end_corners_over_under_over_775,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_775 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_775))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 7.75',
                        'odd' => $row->end_corners_over_under_under_775,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_775 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_800) && !is_null($row->end_corners_under_under_under_800) )
    @if( ($row->end_corners_over_under_over_800 + $row->end_corners_under_under_under_800) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_800))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8',
                        'odd' => $row->end_corners_over_under_over_800,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_800 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_800))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8',
                        'odd' => $row->end_corners_over_under_under_800,
                    ])}}"
                @endif

                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_800 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_825) && !is_null($row->end_corners_under_under_under_825) )
    @if( ($row->end_corners_over_under_over_825 + $row->end_corners_under_under_under_825) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_825))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8.25',
                        'odd' => $row->end_corners_over_under_over_825,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_825 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_825))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8.25',
                        'odd' => $row->end_corners_over_under_under_825,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_825 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_850) && !is_null($row->end_corners_under_under_under_850) )
    @if( ($row->end_corners_over_under_over_850 + $row->end_corners_under_under_under_850) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_850))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8.5',
                        'odd' => $row->end_corners_over_under_over_850,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_850 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_850))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8.5',
                        'odd' => $row->end_corners_over_under_under_850,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_850 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_875) && !is_null($row->end_corners_under_under_under_875) )
    @if( ($row->end_corners_over_under_over_875 + $row->end_corners_under_under_under_875) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_875))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 8.75',
                        'odd' => $row->end_corners_over_under_over_875,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_875 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_875))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 8.75',
                        'odd' => $row->end_corners_over_under_under_875,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_875 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_900) && !is_null($row->end_corners_under_under_under_900) )
    @if( ($row->end_corners_over_under_over_900 + $row->end_corners_under_under_under_900) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_900))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9',
                        'odd' => $row->end_corners_over_under_over_900,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_900 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_900))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9',
                        'odd' => $row->end_corners_over_under_under_900,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_900 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_925) && !is_null($row->end_corners_under_under_under_925) )
    @if( ($row->end_corners_over_under_over_925 + $row->end_corners_under_under_under_925) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_925))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9.25',
                        'odd' => $row->end_corners_over_under_over_925,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_925 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_925))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,

                        'value' => 'Under 9.25',
                        'odd' => $row->end_corners_over_under_under_925,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_925 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_950) && !is_null($row->end_corners_under_under_under_950) )
    @if( ($row->end_corners_over_under_over_950 + $row->end_corners_under_under_under_950) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_950))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9.5',
                        'odd' => $row->end_corners_over_under_over_950,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_950 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_950))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9.5',
                        'odd' => $row->end_corners_over_under_under_950,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_950 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_975) && !is_null($row->end_corners_under_under_under_975) )
    @if( ($row->end_corners_over_under_over_975 + $row->end_corners_under_under_under_975) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_975))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 9.75',
                        'odd' => $row->end_corners_over_under_over_975,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_975 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_975))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 9.75',
                        'odd' => $row->end_corners_over_under_under_975,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_975 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1000) && !is_null($row->end_corners_under_under_under_1000) )
    @if( ($row->end_corners_over_under_over_1000 + $row->end_corners_under_under_under_1000) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1000))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10',
                        'odd' => $row->end_corners_over_under_over_1000,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1000 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1000))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10',
                        'odd' => $row->end_corners_over_under_under_1000,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1000 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1025) && !is_null($row->end_corners_under_under_under_1025) )
    @if( ($row->end_corners_over_under_over_1025 + $row->end_corners_under_under_under_1025) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1025))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10.25',
                        'odd' => $row->end_corners_over_under_over_1025,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1025 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1025))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10.25',
                        'odd' => $row->end_corners_over_under_under_1025,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1025 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1050) && !is_null($row->end_corners_under_under_under_1050) )
    @if( ($row->end_corners_over_under_over_1050 + $row->end_corners_under_under_under_1050) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1050))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10.5',
                        'odd' => $row->end_corners_over_under_over_1050,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1050 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1050))
                    href="{{route('Mybets.datacreate',[

                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10.5',
                        'odd' => $row->end_corners_over_under_under_1050,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1050 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1075) && !is_null($row->end_corners_under_under_under_1075) )
    @if( ($row->end_corners_over_under_over_1075 + $row->end_corners_under_under_under_1075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1075))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 10.75',
                        'odd' => $row->end_corners_over_under_over_1075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1075 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1075))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 10.75',
                        'odd' => $row->end_corners_over_under_under_1075,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1100) && !is_null($row->end_corners_under_under_under_1100) )
    @if( ($row->end_corners_over_under_over_1100 + $row->end_corners_under_under_under_1100) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1100))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11',
                        'odd' => $row->end_corners_over_under_over_1100,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1100 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1100))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11',
                        'odd' => $row->end_corners_over_under_under_1100,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1100 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1125) && !is_null($row->end_corners_under_under_under_1125) )
    @if( ($row->end_corners_over_under_over_1125 + $row->end_corners_under_under_under_1125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1125))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11.25',
                        'odd' => $row->end_corners_over_under_over_1125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1125 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1125))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11.25',
                        'odd' => $row->end_corners_over_under_under_1125,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1150) && !is_null($row->end_corners_under_under_under_1150) )
    @if( ($row->end_corners_over_under_over_1150 + $row->end_corners_under_under_under_1150) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1150))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11.5',
                        'odd' => $row->end_corners_over_under_over_1150,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1150 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1150))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11.5',
                        'odd' => $row->end_corners_over_under_under_1150,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1150 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1175) && !is_null($row->end_corners_under_under_under_1175) )
    @if( ($row->end_corners_over_under_over_1175 + $row->end_corners_under_under_under_1175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1175))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 11.75',
                        'odd' => $row->end_corners_over_under_over_1175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">

                    {{ $row->end_corners_over_under_over_1175 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1175))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 11.75',
                        'odd' => $row->end_corners_over_under_under_1175,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1200) && !is_null($row->end_corners_under_under_under_1200) )
    @if( ($row->end_corners_over_under_over_1200 + $row->end_corners_under_under_under_1200) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1200))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12',
                        'odd' => $row->end_corners_over_under_over_1200,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1200 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1200))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12',
                        'odd' => $row->end_corners_over_under_under_1200,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1200 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1225) && !is_null($row->end_corners_under_under_under_1225) )
    @if( ($row->end_corners_over_under_over_1225 + $row->end_corners_under_under_under_1225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1225))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12.25',
                        'odd' => $row->end_corners_over_under_over_1225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1225 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1225))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12.25',
                        'odd' => $row->end_corners_over_under_under_1225,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1250) && !is_null($row->end_corners_under_under_under_1250) )
    @if( ($row->end_corners_over_under_over_1250 + $row->end_corners_under_under_under_1250) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1250))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12.5',
                        'odd' => $row->end_corners_over_under_over_1250,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1250 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1250))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12.5',
                        'odd' => $row->end_corners_over_under_under_1250,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1250 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_corners_over_under_over_1275) && !is_null($row->end_corners_under_under_under_1275) )
    @if( ($row->end_corners_over_under_over_1275 + $row->end_corners_under_under_under_1275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_corners_over_under_over_1275))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Over 12.75',
                        'odd' => $row->end_corners_over_under_over_1275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_over_1275 }}
            </a>
            <a
                @if(!is_null($row->end_corners_over_under_under_1275))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betsapi_id' => 45,
                        'value' => 'Under 12.75',
                        'odd' => $row->end_corners_over_under_under_1275,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_corners_over_under_under_1275 }}
            </a>
        </div>
    @endif
@endif

