@if(!is_null($row->pre_cards_overunder_over_25) && !is_null($row->pre_cards_overunder_under_25) )
    @if( ($row->pre_cards_overunder_over_25 + $row->pre_cards_overunder_under_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_overunder_over_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 2.5',
                        'odd' => $row->pre_cards_overunder_over_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_cards_overunder_over_25 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_overunder_under_25))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 2.5',
                        'odd' => $row->pre_cards_overunder_under_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    2.5
                    <br/>
                    {{ $row->pre_cards_overunder_under_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_overunder_over_35) && !is_null($row->pre_cards_overunder_under_35) )
    @if( ($row->pre_cards_overunder_over_35 + $row->pre_cards_overunder_under_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_overunder_over_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 3.5',
                        'odd' => $row->pre_cards_overunder_over_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_cards_overunder_over_35 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_overunder_under_35))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 3.5',
                        'odd' => $row->pre_cards_overunder_under_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    3.5
                    <br/>
                    {{ $row->pre_cards_overunder_under_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_overunder_over_45) && !is_null($row->pre_cards_overunder_under_45) )
    @if( ($row->pre_cards_overunder_over_45 + $row->pre_cards_overunder_under_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_overunder_over_45))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 4.5',
                        'odd' => $row->pre_cards_overunder_over_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_cards_overunder_over_45 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_overunder_under_45))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 4.5',
                        'odd' => $row->pre_cards_overunder_under_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    4.5
                    <br/>
                    {{ $row->pre_cards_overunder_under_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_overunder_over_55) && !is_null($row->pre_cards_overunder_under_55) )
    @if( ($row->pre_cards_overunder_over_55 + $row->pre_cards_overunder_under_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_overunder_over_55))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 5.5',
                        'odd' => $row->pre_cards_overunder_over_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_cards_overunder_over_55 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_overunder_under_55))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 5.5',
                        'odd' => $row->pre_cards_overunder_under_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    5.5
                    <br/>
                    {{ $row->pre_cards_overunder_under_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_overunder_over_65) && !is_null($row->pre_cards_overunder_under_65) )
    @if( ($row->pre_cards_overunder_over_65 + $row->pre_cards_overunder_under_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_overunder_over_65))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 6.5',
                        'odd' => $row->pre_cards_overunder_over_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_cards_overunder_over_65 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_overunder_under_65))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,

                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 6.5',
                        'odd' => $row->pre_cards_overunder_under_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    6.5
                    <br/>
                    {{ $row->pre_cards_overunder_under_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_cards_overunder_over_75) && !is_null($row->pre_cards_overunder_under_75) )
    @if( ($row->pre_cards_overunder_over_75 + $row->pre_cards_overunder_under_75) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_cards_overunder_over_75))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 7.5',
                        'odd' => $row->pre_cards_overunder_over_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    ou
                    <br/>
                    {{ $row->pre_cards_overunder_over_75 }}
            </a>
            <a
                @if(!is_null($row->pre_cards_overunder_under_75))
                    href="{{route('Mybets.datacreateanalysis',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 7.5',
                        'odd' => $row->pre_cards_overunder_under_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                    7.5
                    <br/>
                    {{ $row->pre_cards_overunder_under_75 }}
            </a>
        </div>
    @endif
@endif


<br/>


@if(!is_null($row->end_cards_overunder_over_25) && !is_null($row->end_cards_overunder_under_25) )
    @if( ($row->end_cards_overunder_over_25 + $row->end_cards_overunder_under_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_overunder_over_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 2.5',
                        'odd' => $row->end_cards_overunder_over_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_over_25 }}
            </a>
            <a
                @if(!is_null($row->end_cards_overunder_under_25))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 2.5',
                        'odd' => $row->end_cards_overunder_under_25,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_under_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_cards_overunder_over_35) && !is_null($row->end_cards_overunder_under_35) )
    @if( ($row->end_cards_overunder_over_35 + $row->end_cards_overunder_under_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_overunder_over_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 3.5',
                        'odd' => $row->end_cards_overunder_over_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_over_35 }}
            </a>
            <a
                @if(!is_null($row->end_cards_overunder_under_35))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 3.5',
                        'odd' => $row->end_cards_overunder_under_35,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_under_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_cards_overunder_over_45) && !is_null($row->end_cards_overunder_under_45) )
    @if( ($row->end_cards_overunder_over_45 + $row->end_cards_overunder_under_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_overunder_over_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 4.5',
                        'odd' => $row->end_cards_overunder_over_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_over_45 }}
            </a>
            <a
                @if(!is_null($row->end_cards_overunder_under_45))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 4.5',
                        'odd' => $row->end_cards_overunder_under_45,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_under_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_cards_overunder_over_55) && !is_null($row->end_cards_overunder_under_55) )
    @if( ($row->end_cards_overunder_over_55 + $row->end_cards_overunder_under_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_overunder_over_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 5.5',
                        'odd' => $row->end_cards_overunder_over_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_over_55 }}
            </a>
            <a
                @if(!is_null($row->end_cards_overunder_under_55))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 5.5',
                        'odd' => $row->end_cards_overunder_under_55,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_under_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_cards_overunder_over_65) && !is_null($row->end_cards_overunder_under_65) )
    @if( ($row->end_cards_overunder_over_65 + $row->end_cards_overunder_under_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_overunder_over_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 6.5',
                        'odd' => $row->end_cards_overunder_over_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_over_65 }}
            </a>
            <a
                @if(!is_null($row->end_cards_overunder_under_65))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 6.5',
                        'odd' => $row->end_cards_overunder_under_65,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_under_65 }}
            </a>
        </div>
    @endif
@endif


@if(!is_null($row->end_cards_overunder_over_75) && !is_null($row->end_cards_overunder_under_75) )
    @if( ($row->end_cards_overunder_over_75 + $row->end_cards_overunder_under_75) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_cards_overunder_over_75))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Over 7.5',
                        'odd' => $row->end_cards_overunder_over_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_over_75 }}
            </a>
            <a
                @if(!is_null($row->end_cards_overunder_under_75))
                    href="{{route('Mybets.datacreate',[
                        'leagueapi_id' => $row->leagueapi_id,
                        'season' => $row->season,
                        'fixtureapi_id' => $row->fixtureapi_id,
                        'betapi_id' => 80,
                        'value' => 'Under 7.5',
                        'odd' => $row->end_cards_overunder_under_75,
                    ])}}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                    {{ $row->end_cards_overunder_under_75 }}
            </a>
        </div>
    @endif
@endif

