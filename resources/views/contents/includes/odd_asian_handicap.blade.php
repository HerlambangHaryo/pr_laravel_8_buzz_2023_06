@if(!is_null($row->pre_asian_handicap_home_min_675) && !is_null($row->pre_asian_handicap_away_min_675) )
    @if( ($row->pre_asian_handicap_home_min_675 + $row->pre_asian_handicap_away_min_675) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_675',
                            'odd' => $row->pre_asian_handicap_home_min_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-6.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_675 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_675',
                            'odd' => $row->pre_asian_handicap_away_min_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-6.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_675 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_65) && !is_null($row->pre_asian_handicap_away_min_65) )
    @if( ($row->pre_asian_handicap_home_min_65 + $row->pre_asian_handicap_away_min_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_65',
                            'odd' => $row->pre_asian_handicap_home_min_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-6.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_65 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_65',
                            'odd' => $row->pre_asian_handicap_away_min_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-6.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_625) && !is_null($row->pre_asian_handicap_away_min_625) )
    @if( ($row->pre_asian_handicap_home_min_625 + $row->pre_asian_handicap_away_min_625) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_625',
                            'odd' => $row->pre_asian_handicap_home_min_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-6.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_625 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_625',
                            'odd' => $row->pre_asian_handicap_away_min_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-6.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_625 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_6) && !is_null($row->pre_asian_handicap_away_min_6) )
    @if( ($row->pre_asian_handicap_home_min_6 + $row->pre_asian_handicap_away_min_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_6',
                            'odd' => $row->pre_asian_handicap_home_min_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-6
                <br/>
                {{ $row->pre_asian_handicap_home_min_6 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_6',
                            'odd' => $row->pre_asian_handicap_away_min_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-6
                <br/>
                {{ $row->pre_asian_handicap_away_min_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_575) && !is_null($row->pre_asian_handicap_away_min_575) )
    @if( ($row->pre_asian_handicap_home_min_575 + $row->pre_asian_handicap_away_min_575) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_575',
                            'odd' => $row->pre_asian_handicap_home_min_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-5.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_575 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_575',
                            'odd' => $row->pre_asian_handicap_away_min_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-5.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_575 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_55) && !is_null($row->pre_asian_handicap_away_min_55) )
    @if( ($row->pre_asian_handicap_home_min_55 + $row->pre_asian_handicap_away_min_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_55',
                            'odd' => $row->pre_asian_handicap_home_min_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-5.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_55 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_55',
                            'odd' => $row->pre_asian_handicap_away_min_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-5.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_525) && !is_null($row->pre_asian_handicap_away_min_525) )
    @if( ($row->pre_asian_handicap_home_min_525 + $row->pre_asian_handicap_away_min_525) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_525',
                            'odd' => $row->pre_asian_handicap_home_min_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-5.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_525 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_525',
                            'odd' => $row->pre_asian_handicap_away_min_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-5.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_525 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_5) && !is_null($row->pre_asian_handicap_away_min_5) )
    @if( ($row->pre_asian_handicap_home_min_5 + $row->pre_asian_handicap_away_min_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_5',
                            'odd' => $row->pre_asian_handicap_home_min_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-5
                <br/>
                {{ $row->pre_asian_handicap_home_min_5 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_5',
                            'odd' => $row->pre_asian_handicap_away_min_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-5
                <br/>
                {{ $row->pre_asian_handicap_away_min_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_475) && !is_null($row->pre_asian_handicap_away_min_475) )
    @if( ($row->pre_asian_handicap_home_min_475 + $row->pre_asian_handicap_away_min_475) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_475',
                            'odd' => $row->pre_asian_handicap_home_min_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-4.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_475 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_475',
                            'odd' => $row->pre_asian_handicap_away_min_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-4.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_475 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_45) && !is_null($row->pre_asian_handicap_away_min_45) )
    @if( ($row->pre_asian_handicap_home_min_45 + $row->pre_asian_handicap_away_min_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_45',
                            'odd' => $row->pre_asian_handicap_home_min_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-4.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_45 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_45',
                            'odd' => $row->pre_asian_handicap_away_min_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-4.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_425) && !is_null($row->pre_asian_handicap_away_min_425) )
    @if( ($row->pre_asian_handicap_home_min_425 + $row->pre_asian_handicap_away_min_425) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_425',
                            'odd' => $row->pre_asian_handicap_home_min_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-4.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_425 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_425',
                            'odd' => $row->pre_asian_handicap_away_min_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-4.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_425 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_4) && !is_null($row->pre_asian_handicap_away_min_4) )
    @if( ($row->pre_asian_handicap_home_min_4 + $row->pre_asian_handicap_away_min_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_4',
                            'odd' => $row->pre_asian_handicap_home_min_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-4
                <br/>
                {{ $row->pre_asian_handicap_home_min_4 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_4',
                            'odd' => $row->pre_asian_handicap_away_min_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-4
                <br/>
                {{ $row->pre_asian_handicap_away_min_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_375) && !is_null($row->pre_asian_handicap_away_min_375) )
    @if( ($row->pre_asian_handicap_home_min_375 + $row->pre_asian_handicap_away_min_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_375',
                            'odd' => $row->pre_asian_handicap_home_min_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-3.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_375 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_375',
                            'odd' => $row->pre_asian_handicap_away_min_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-3.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_375 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_35) && !is_null($row->pre_asian_handicap_away_min_35) )
    @if( ($row->pre_asian_handicap_home_min_35 + $row->pre_asian_handicap_away_min_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_35',
                            'odd' => $row->pre_asian_handicap_home_min_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-3.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_35 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_35',
                            'odd' => $row->pre_asian_handicap_away_min_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-3.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_325) && !is_null($row->pre_asian_handicap_away_min_325) )
    @if( ($row->pre_asian_handicap_home_min_325 + $row->pre_asian_handicap_away_min_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_325',
                            'odd' => $row->pre_asian_handicap_home_min_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-3.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_325 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_325',
                            'odd' => $row->pre_asian_handicap_away_min_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-3.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_3) && !is_null($row->pre_asian_handicap_away_min_3) )
    @if( ($row->pre_asian_handicap_home_min_3 + $row->pre_asian_handicap_away_min_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_3',
                            'odd' => $row->pre_asian_handicap_home_min_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-3
                <br/>
                {{ $row->pre_asian_handicap_home_min_3 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_3',
                            'odd' => $row->pre_asian_handicap_away_min_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-3
                <br/>
                {{ $row->pre_asian_handicap_away_min_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_275) && !is_null($row->pre_asian_handicap_away_min_275) )
    @if( ($row->pre_asian_handicap_home_min_275 + $row->pre_asian_handicap_away_min_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_275',
                            'odd' => $row->pre_asian_handicap_home_min_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-2.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_275 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_275',
                            'odd' => $row->pre_asian_handicap_away_min_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-2.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_25) && !is_null($row->pre_asian_handicap_away_min_25) )
    @if( ($row->pre_asian_handicap_home_min_25 + $row->pre_asian_handicap_away_min_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_25',
                            'odd' => $row->pre_asian_handicap_home_min_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-2.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_25 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_25',
                            'odd' => $row->pre_asian_handicap_away_min_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-2.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_225) && !is_null($row->pre_asian_handicap_away_min_225) )
    @if( ($row->pre_asian_handicap_home_min_225 + $row->pre_asian_handicap_away_min_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_225',
                            'odd' => $row->pre_asian_handicap_home_min_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-2.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_225 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_225',
                            'odd' => $row->pre_asian_handicap_away_min_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-2.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_2) && !is_null($row->pre_asian_handicap_away_min_2) )
    @if( ($row->pre_asian_handicap_home_min_2 + $row->pre_asian_handicap_away_min_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_2',
                            'odd' => $row->pre_asian_handicap_home_min_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-2
                <br/>
                {{ $row->pre_asian_handicap_home_min_2 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_2',
                            'odd' => $row->pre_asian_handicap_away_min_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-2
                <br/>
                {{ $row->pre_asian_handicap_away_min_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_175) && !is_null($row->pre_asian_handicap_away_min_175) )
    @if( ($row->pre_asian_handicap_home_min_175 + $row->pre_asian_handicap_away_min_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_175',
                            'odd' => $row->pre_asian_handicap_home_min_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-1.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_175 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_175',
                            'odd' => $row->pre_asian_handicap_away_min_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-1.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_15) && !is_null($row->pre_asian_handicap_away_min_15) )
    @if( ($row->pre_asian_handicap_home_min_15 + $row->pre_asian_handicap_away_min_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_15',
                            'odd' => $row->pre_asian_handicap_home_min_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-1.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_15 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_15',
                            'odd' => $row->pre_asian_handicap_away_min_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-1.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_125) && !is_null($row->pre_asian_handicap_away_min_125) )
    @if( ($row->pre_asian_handicap_home_min_125 + $row->pre_asian_handicap_away_min_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_125',
                            'odd' => $row->pre_asian_handicap_home_min_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-1.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_125 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_125',
                            'odd' => $row->pre_asian_handicap_away_min_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-1.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_1) && !is_null($row->pre_asian_handicap_away_min_1) )
    @if( ($row->pre_asian_handicap_home_min_1 + $row->pre_asian_handicap_away_min_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_1',
                            'odd' => $row->pre_asian_handicap_home_min_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-1
                <br/>
                {{ $row->pre_asian_handicap_home_min_1 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_1',
                            'odd' => $row->pre_asian_handicap_away_min_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-1
                <br/>
                {{ $row->pre_asian_handicap_away_min_1 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_075) && !is_null($row->pre_asian_handicap_away_min_075) )
    @if( ($row->pre_asian_handicap_home_min_075 + $row->pre_asian_handicap_away_min_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_075',
                            'odd' => $row->pre_asian_handicap_home_min_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-0.75
                <br/>
                {{ $row->pre_asian_handicap_home_min_075 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_075',
                            'odd' => $row->pre_asian_handicap_away_min_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-0.75
                <br/>
                {{ $row->pre_asian_handicap_away_min_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_05) && !is_null($row->pre_asian_handicap_away_min_05) )
    @if( ($row->pre_asian_handicap_home_min_05 + $row->pre_asian_handicap_away_min_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_05',
                            'odd' => $row->pre_asian_handicap_home_min_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-0.5
                <br/>
                {{ $row->pre_asian_handicap_home_min_05 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_05',
                            'odd' => $row->pre_asian_handicap_away_min_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-0.5
                <br/>
                {{ $row->pre_asian_handicap_away_min_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_min_025) && !is_null($row->pre_asian_handicap_away_min_025) )
    @if( ($row->pre_asian_handicap_home_min_025 + $row->pre_asian_handicap_away_min_025) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_min_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_025',
                            'odd' => $row->pre_asian_handicap_home_min_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h-0.25
                <br/>
                {{ $row->pre_asian_handicap_home_min_025 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_min_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_025',
                            'odd' => $row->pre_asian_handicap_away_min_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a-0.25
                <br/>
                {{ $row->pre_asian_handicap_away_min_025 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_0) && !is_null($row->pre_asian_handicap_away_plus_0) )
    @if( ($row->pre_asian_handicap_home_plus_0 + $row->pre_asian_handicap_away_plus_0) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_0))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_0',
                            'odd' => $row->pre_asian_handicap_home_plus_0
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+0
                <br/>
                {{ $row->pre_asian_handicap_home_plus_0 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_0))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_0',
                            'odd' => $row->pre_asian_handicap_away_plus_0
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+0
                <br/>
                {{ $row->pre_asian_handicap_away_plus_0 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_025) && !is_null($row->pre_asian_handicap_away_plus_025) )
    @if( ($row->pre_asian_handicap_home_plus_025 + $row->pre_asian_handicap_away_plus_025) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_025',
                            'odd' => $row->pre_asian_handicap_home_plus_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+0.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_025 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_025',
                            'odd' => $row->pre_asian_handicap_away_plus_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+0.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_025 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_05) && !is_null($row->pre_asian_handicap_away_plus_05) )
    @if( ($row->pre_asian_handicap_home_plus_05 + $row->pre_asian_handicap_away_plus_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_05',
                            'odd' => $row->pre_asian_handicap_home_plus_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+0.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_05 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_05',
                            'odd' => $row->pre_asian_handicap_away_plus_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+0.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_075) && !is_null($row->pre_asian_handicap_away_plus_075) )
    @if( ($row->pre_asian_handicap_home_plus_075 + $row->pre_asian_handicap_away_plus_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_075',
                            'odd' => $row->pre_asian_handicap_home_plus_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+0.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_075 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_075',
                            'odd' => $row->pre_asian_handicap_away_plus_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+0.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_1) && !is_null($row->pre_asian_handicap_away_plus_1) )
    @if( ($row->pre_asian_handicap_home_plus_1 + $row->pre_asian_handicap_away_plus_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_1',
                            'odd' => $row->pre_asian_handicap_home_plus_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+1
                <br/>
                {{ $row->pre_asian_handicap_home_plus_1 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_1',
                            'odd' => $row->pre_asian_handicap_away_plus_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+1
                <br/>
                {{ $row->pre_asian_handicap_away_plus_1 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_125) && !is_null($row->pre_asian_handicap_away_plus_125) )
    @if( ($row->pre_asian_handicap_home_plus_125 + $row->pre_asian_handicap_away_plus_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_125',
                            'odd' => $row->pre_asian_handicap_home_plus_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+1.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_125 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_125',
                            'odd' => $row->pre_asian_handicap_away_plus_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+1.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_15) && !is_null($row->pre_asian_handicap_away_plus_15) )
    @if( ($row->pre_asian_handicap_home_plus_15 + $row->pre_asian_handicap_away_plus_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_15',
                            'odd' => $row->pre_asian_handicap_home_plus_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+1.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_15 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_15',
                            'odd' => $row->pre_asian_handicap_away_plus_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+1.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_175) && !is_null($row->pre_asian_handicap_away_plus_175) )
    @if( ($row->pre_asian_handicap_home_plus_175 + $row->pre_asian_handicap_away_plus_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_175',
                            'odd' => $row->pre_asian_handicap_home_plus_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+1.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_175 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_175',
                            'odd' => $row->pre_asian_handicap_away_plus_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+1.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_2) && !is_null($row->pre_asian_handicap_away_plus_2) )
    @if( ($row->pre_asian_handicap_home_plus_2 + $row->pre_asian_handicap_away_plus_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_2',
                            'odd' => $row->pre_asian_handicap_home_plus_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+2
                <br/>
                {{ $row->pre_asian_handicap_home_plus_2 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_2',
                            'odd' => $row->pre_asian_handicap_away_plus_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+2
                <br/>
                {{ $row->pre_asian_handicap_away_plus_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_225) && !is_null($row->pre_asian_handicap_away_plus_225) )
    @if( ($row->pre_asian_handicap_home_plus_225 + $row->pre_asian_handicap_away_plus_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_225',
                            'odd' => $row->pre_asian_handicap_home_plus_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+2.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_225 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_225',
                            'odd' => $row->pre_asian_handicap_away_plus_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+2.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_25) && !is_null($row->pre_asian_handicap_away_plus_25) )
    @if( ($row->pre_asian_handicap_home_plus_25 + $row->pre_asian_handicap_away_plus_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_25',
                            'odd' => $row->pre_asian_handicap_home_plus_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+2.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_25 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_25',
                            'odd' => $row->pre_asian_handicap_away_plus_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+2.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_275) && !is_null($row->pre_asian_handicap_away_plus_275) )
    @if( ($row->pre_asian_handicap_home_plus_275 + $row->pre_asian_handicap_away_plus_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_275',
                            'odd' => $row->pre_asian_handicap_home_plus_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+2.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_275 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_275',
                            'odd' => $row->pre_asian_handicap_away_plus_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+2.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_3) && !is_null($row->pre_asian_handicap_away_plus_3) )
    @if( ($row->pre_asian_handicap_home_plus_3 + $row->pre_asian_handicap_away_plus_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_3',
                            'odd' => $row->pre_asian_handicap_home_plus_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+3
                <br/>
                {{ $row->pre_asian_handicap_home_plus_3 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_3',
                            'odd' => $row->pre_asian_handicap_away_plus_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+3
                <br/>
                {{ $row->pre_asian_handicap_away_plus_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_325) && !is_null($row->pre_asian_handicap_away_plus_325) )
    @if( ($row->pre_asian_handicap_home_plus_325 + $row->pre_asian_handicap_away_plus_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_325',
                            'odd' => $row->pre_asian_handicap_home_plus_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+3.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_325 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_325',
                            'odd' => $row->pre_asian_handicap_away_plus_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+3.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_35) && !is_null($row->pre_asian_handicap_away_plus_35) )
    @if( ($row->pre_asian_handicap_home_plus_35 + $row->pre_asian_handicap_away_plus_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_35',
                            'odd' => $row->pre_asian_handicap_home_plus_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+3.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_35 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_35',
                            'odd' => $row->pre_asian_handicap_away_plus_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+3.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_375) && !is_null($row->pre_asian_handicap_away_plus_375) )
    @if( ($row->pre_asian_handicap_home_plus_375 + $row->pre_asian_handicap_away_plus_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_375',
                            'odd' => $row->pre_asian_handicap_home_plus_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+3.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_375 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_375',
                            'odd' => $row->pre_asian_handicap_away_plus_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+3.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_375 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_4) && !is_null($row->pre_asian_handicap_away_plus_4) )
    @if( ($row->pre_asian_handicap_home_plus_4 + $row->pre_asian_handicap_away_plus_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_4',
                            'odd' => $row->pre_asian_handicap_home_plus_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+4
                <br/>
                {{ $row->pre_asian_handicap_home_plus_4 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_4',
                            'odd' => $row->pre_asian_handicap_away_plus_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+4
                <br/>
                {{ $row->pre_asian_handicap_away_plus_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_425) && !is_null($row->pre_asian_handicap_away_plus_425) )
    @if( ($row->pre_asian_handicap_home_plus_425 + $row->pre_asian_handicap_away_plus_425) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_425',
                            'odd' => $row->pre_asian_handicap_home_plus_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+4.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_425 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_425',
                            'odd' => $row->pre_asian_handicap_away_plus_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+4.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_425 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_45) && !is_null($row->pre_asian_handicap_away_plus_45) )
    @if( ($row->pre_asian_handicap_home_plus_45 + $row->pre_asian_handicap_away_plus_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_45',
                            'odd' => $row->pre_asian_handicap_home_plus_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+4.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_45 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_45',
                            'odd' => $row->pre_asian_handicap_away_plus_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+4.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_475) && !is_null($row->pre_asian_handicap_away_plus_475) )
    @if( ($row->pre_asian_handicap_home_plus_475 + $row->pre_asian_handicap_away_plus_475) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_475',
                            'odd' => $row->pre_asian_handicap_home_plus_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+4.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_475 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_475',
                            'odd' => $row->pre_asian_handicap_away_plus_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+4.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_475 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_5) && !is_null($row->pre_asian_handicap_away_plus_5) )
    @if( ($row->pre_asian_handicap_home_plus_5 + $row->pre_asian_handicap_away_plus_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_5',
                            'odd' => $row->pre_asian_handicap_home_plus_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_5 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_5',
                            'odd' => $row->pre_asian_handicap_away_plus_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_525) && !is_null($row->pre_asian_handicap_away_plus_525) )
    @if( ($row->pre_asian_handicap_home_plus_525 + $row->pre_asian_handicap_away_plus_525) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_525',
                            'odd' => $row->pre_asian_handicap_home_plus_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+5.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_525 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_525',
                            'odd' => $row->pre_asian_handicap_away_plus_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+5.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_525 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_55) && !is_null($row->pre_asian_handicap_away_plus_55) )
    @if( ($row->pre_asian_handicap_home_plus_55 + $row->pre_asian_handicap_away_plus_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_55',
                            'odd' => $row->pre_asian_handicap_home_plus_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+5.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_55 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_55',
                            'odd' => $row->pre_asian_handicap_away_plus_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+5.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_575) && !is_null($row->pre_asian_handicap_away_plus_575) )
    @if( ($row->pre_asian_handicap_home_plus_575 + $row->pre_asian_handicap_away_plus_575) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_575',
                            'odd' => $row->pre_asian_handicap_home_plus_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+5.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_575 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_575',
                            'odd' => $row->pre_asian_handicap_away_plus_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+5.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_575 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_6) && !is_null($row->pre_asian_handicap_away_plus_6) )
    @if( ($row->pre_asian_handicap_home_plus_6 + $row->pre_asian_handicap_away_plus_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_6',
                            'odd' => $row->pre_asian_handicap_home_plus_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+6
                <br/>
                {{ $row->pre_asian_handicap_home_plus_6 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_6',
                            'odd' => $row->pre_asian_handicap_away_plus_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+6
                <br/>
                {{ $row->pre_asian_handicap_away_plus_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_625) && !is_null($row->pre_asian_handicap_away_plus_625) )
    @if( ($row->pre_asian_handicap_home_plus_625 + $row->pre_asian_handicap_away_plus_625) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_625',
                            'odd' => $row->pre_asian_handicap_home_plus_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+6.25
                <br/>
                {{ $row->pre_asian_handicap_home_plus_625 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_625',
                            'odd' => $row->pre_asian_handicap_away_plus_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+6.25
                <br/>
                {{ $row->pre_asian_handicap_away_plus_625 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_65) && !is_null($row->pre_asian_handicap_away_plus_65) )
    @if( ($row->pre_asian_handicap_home_plus_65 + $row->pre_asian_handicap_away_plus_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_65',
                            'odd' => $row->pre_asian_handicap_home_plus_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+6.5
                <br/>
                {{ $row->pre_asian_handicap_home_plus_65 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_65',
                            'odd' => $row->pre_asian_handicap_away_plus_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+6.5
                <br/>
                {{ $row->pre_asian_handicap_away_plus_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->pre_asian_handicap_home_plus_675) && !is_null($row->pre_asian_handicap_away_plus_675) )
    @if( ($row->pre_asian_handicap_home_plus_675 + $row->pre_asian_handicap_away_plus_675) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->pre_asian_handicap_home_plus_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_675',
                            'odd' => $row->pre_asian_handicap_home_plus_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                h+6.75
                <br/>
                {{ $row->pre_asian_handicap_home_plus_675 }}
            </a>
            <a
                @if(!is_null($row->pre_asian_handicap_away_plus_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_675',
                            'odd' => $row->pre_asian_handicap_away_plus_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-700 btn-sm text-white">
                a+6.75
                <br/>
                {{ $row->pre_asian_handicap_away_plus_675 }}
            </a>
        </div>
    @endif
@endif

<br/>

@if(!is_null($row->end_asian_handicap_home_min_675) && !is_null($row->end_asian_handicap_away_min_675) )
    @if( ($row->end_asian_handicap_home_min_675 + $row->end_asian_handicap_away_min_675) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_675',
                            'odd' => $row->end_asian_handicap_home_min_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-6.75
                <br/>
                {{ $row->end_asian_handicap_home_min_675 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_675',
                            'odd' => $row->end_asian_handicap_away_min_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-6.75
                <br/>
                {{ $row->end_asian_handicap_away_min_675 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_65) && !is_null($row->end_asian_handicap_away_min_65) )
    @if( ($row->end_asian_handicap_home_min_65 + $row->end_asian_handicap_away_min_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_65',
                            'odd' => $row->end_asian_handicap_home_min_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-6.5
                <br/>
                {{ $row->end_asian_handicap_home_min_65 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_65',
                            'odd' => $row->end_asian_handicap_away_min_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-6.5
                <br/>
                {{ $row->end_asian_handicap_away_min_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_625) && !is_null($row->end_asian_handicap_away_min_625) )
    @if( ($row->end_asian_handicap_home_min_625 + $row->end_asian_handicap_away_min_625) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_625',
                            'odd' => $row->end_asian_handicap_home_min_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-6.25
                <br/>
                {{ $row->end_asian_handicap_home_min_625 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_625',
                            'odd' => $row->end_asian_handicap_away_min_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-6.25
                <br/>
                {{ $row->end_asian_handicap_away_min_625 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_6) && !is_null($row->end_asian_handicap_away_min_6) )
    @if( ($row->end_asian_handicap_home_min_6 + $row->end_asian_handicap_away_min_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_6',
                            'odd' => $row->end_asian_handicap_home_min_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-6
                <br/>
                {{ $row->end_asian_handicap_home_min_6 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_6',
                            'odd' => $row->end_asian_handicap_away_min_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-6
                <br/>
                {{ $row->end_asian_handicap_away_min_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_575) && !is_null($row->end_asian_handicap_away_min_575) )
    @if( ($row->end_asian_handicap_home_min_575 + $row->end_asian_handicap_away_min_575) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_575',
                            'odd' => $row->end_asian_handicap_home_min_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-5.75
                <br/>
                {{ $row->end_asian_handicap_home_min_575 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_575',
                            'odd' => $row->end_asian_handicap_away_min_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-5.75
                <br/>
                {{ $row->end_asian_handicap_away_min_575 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_55) && !is_null($row->end_asian_handicap_away_min_55) )
    @if( ($row->end_asian_handicap_home_min_55 + $row->end_asian_handicap_away_min_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_55',
                            'odd' => $row->end_asian_handicap_home_min_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-5.5
                <br/>
                {{ $row->end_asian_handicap_home_min_55 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_55',
                            'odd' => $row->end_asian_handicap_away_min_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-5.5
                <br/>
                {{ $row->end_asian_handicap_away_min_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_525) && !is_null($row->end_asian_handicap_away_min_525) )
    @if( ($row->end_asian_handicap_home_min_525 + $row->end_asian_handicap_away_min_525) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_525',
                            'odd' => $row->end_asian_handicap_home_min_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-5.25
                <br/>
                {{ $row->end_asian_handicap_home_min_525 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_525',
                            'odd' => $row->end_asian_handicap_away_min_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-5.25
                <br/>
                {{ $row->end_asian_handicap_away_min_525 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_5) && !is_null($row->end_asian_handicap_away_min_5) )
    @if( ($row->end_asian_handicap_home_min_5 + $row->end_asian_handicap_away_min_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_5',
                            'odd' => $row->end_asian_handicap_home_min_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-5
                <br/>
                {{ $row->end_asian_handicap_home_min_5 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_5',
                            'odd' => $row->end_asian_handicap_away_min_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-5
                <br/>
                {{ $row->end_asian_handicap_away_min_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_475) && !is_null($row->end_asian_handicap_away_min_475) )
    @if( ($row->end_asian_handicap_home_min_475 + $row->end_asian_handicap_away_min_475) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_475',
                            'odd' => $row->end_asian_handicap_home_min_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-4.75
                <br/>
                {{ $row->end_asian_handicap_home_min_475 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_475',
                            'odd' => $row->end_asian_handicap_away_min_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-4.75
                <br/>
                {{ $row->end_asian_handicap_away_min_475 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_45) && !is_null($row->end_asian_handicap_away_min_45) )
    @if( ($row->end_asian_handicap_home_min_45 + $row->end_asian_handicap_away_min_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_45',
                            'odd' => $row->end_asian_handicap_home_min_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-4.5
                <br/>
                {{ $row->end_asian_handicap_home_min_45 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_45',
                            'odd' => $row->end_asian_handicap_away_min_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-4.5
                <br/>
                {{ $row->end_asian_handicap_away_min_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_425) && !is_null($row->end_asian_handicap_away_min_425) )
    @if( ($row->end_asian_handicap_home_min_425 + $row->end_asian_handicap_away_min_425) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_425',
                            'odd' => $row->end_asian_handicap_home_min_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-4.25
                <br/>
                {{ $row->end_asian_handicap_home_min_425 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_425',
                            'odd' => $row->end_asian_handicap_away_min_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-4.25
                <br/>
                {{ $row->end_asian_handicap_away_min_425 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_4) && !is_null($row->end_asian_handicap_away_min_4) )
    @if( ($row->end_asian_handicap_home_min_4 + $row->end_asian_handicap_away_min_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_4',
                            'odd' => $row->end_asian_handicap_home_min_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-4
                <br/>
                {{ $row->end_asian_handicap_home_min_4 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_4',
                            'odd' => $row->end_asian_handicap_away_min_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-4
                <br/>
                {{ $row->end_asian_handicap_away_min_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_375) && !is_null($row->end_asian_handicap_away_min_375) )
    @if( ($row->end_asian_handicap_home_min_375 + $row->end_asian_handicap_away_min_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_375',
                            'odd' => $row->end_asian_handicap_home_min_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-3.75
                <br/>
                {{ $row->end_asian_handicap_home_min_375 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_375',
                            'odd' => $row->end_asian_handicap_away_min_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-3.75
                <br/>
                {{ $row->end_asian_handicap_away_min_375 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_35) && !is_null($row->end_asian_handicap_away_min_35) )
    @if( ($row->end_asian_handicap_home_min_35 + $row->end_asian_handicap_away_min_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_35',
                            'odd' => $row->end_asian_handicap_home_min_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-3.5
                <br/>
                {{ $row->end_asian_handicap_home_min_35 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_35',
                            'odd' => $row->end_asian_handicap_away_min_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-3.5
                <br/>
                {{ $row->end_asian_handicap_away_min_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_325) && !is_null($row->end_asian_handicap_away_min_325) )
    @if( ($row->end_asian_handicap_home_min_325 + $row->end_asian_handicap_away_min_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_325',
                            'odd' => $row->end_asian_handicap_home_min_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-3.25
                <br/>
                {{ $row->end_asian_handicap_home_min_325 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_325',
                            'odd' => $row->end_asian_handicap_away_min_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-3.25
                <br/>
                {{ $row->end_asian_handicap_away_min_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_3) && !is_null($row->end_asian_handicap_away_min_3) )
    @if( ($row->end_asian_handicap_home_min_3 + $row->end_asian_handicap_away_min_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_3',
                            'odd' => $row->end_asian_handicap_home_min_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-3
                <br/>
                {{ $row->end_asian_handicap_home_min_3 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_3',
                            'odd' => $row->end_asian_handicap_away_min_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-3
                <br/>
                {{ $row->end_asian_handicap_away_min_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_275) && !is_null($row->end_asian_handicap_away_min_275) )
    @if( ($row->end_asian_handicap_home_min_275 + $row->end_asian_handicap_away_min_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_275',
                            'odd' => $row->end_asian_handicap_home_min_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-2.75
                <br/>
                {{ $row->end_asian_handicap_home_min_275 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_275',
                            'odd' => $row->end_asian_handicap_away_min_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-2.75
                <br/>
                {{ $row->end_asian_handicap_away_min_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_25) && !is_null($row->end_asian_handicap_away_min_25) )
    @if( ($row->end_asian_handicap_home_min_25 + $row->end_asian_handicap_away_min_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_25',
                            'odd' => $row->end_asian_handicap_home_min_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-2.5
                <br/>
                {{ $row->end_asian_handicap_home_min_25 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_25',
                            'odd' => $row->end_asian_handicap_away_min_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-2.5
                <br/>
                {{ $row->end_asian_handicap_away_min_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_225) && !is_null($row->end_asian_handicap_away_min_225) )
    @if( ($row->end_asian_handicap_home_min_225 + $row->end_asian_handicap_away_min_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_225',
                            'odd' => $row->end_asian_handicap_home_min_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-2.25
                <br/>
                {{ $row->end_asian_handicap_home_min_225 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_225',
                            'odd' => $row->end_asian_handicap_away_min_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-2.25
                <br/>
                {{ $row->end_asian_handicap_away_min_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_2) && !is_null($row->end_asian_handicap_away_min_2) )
    @if( ($row->end_asian_handicap_home_min_2 + $row->end_asian_handicap_away_min_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_2',
                            'odd' => $row->end_asian_handicap_home_min_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-2
                <br/>
                {{ $row->end_asian_handicap_home_min_2 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_2',
                            'odd' => $row->end_asian_handicap_away_min_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-2
                <br/>
                {{ $row->end_asian_handicap_away_min_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_175) && !is_null($row->end_asian_handicap_away_min_175) )
    @if( ($row->end_asian_handicap_home_min_175 + $row->end_asian_handicap_away_min_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_175',
                            'odd' => $row->end_asian_handicap_home_min_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-1.75
                <br/>
                {{ $row->end_asian_handicap_home_min_175 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_175',
                            'odd' => $row->end_asian_handicap_away_min_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-1.75
                <br/>
                {{ $row->end_asian_handicap_away_min_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_15) && !is_null($row->end_asian_handicap_away_min_15) )
    @if( ($row->end_asian_handicap_home_min_15 + $row->end_asian_handicap_away_min_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_15',
                            'odd' => $row->end_asian_handicap_home_min_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-1.5
                <br/>
                {{ $row->end_asian_handicap_home_min_15 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_15',
                            'odd' => $row->end_asian_handicap_away_min_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-1.5
                <br/>
                {{ $row->end_asian_handicap_away_min_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_125) && !is_null($row->end_asian_handicap_away_min_125) )
    @if( ($row->end_asian_handicap_home_min_125 + $row->end_asian_handicap_away_min_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_125',
                            'odd' => $row->end_asian_handicap_home_min_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-1.25
                <br/>
                {{ $row->end_asian_handicap_home_min_125 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_125',
                            'odd' => $row->end_asian_handicap_away_min_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-1.25
                <br/>
                {{ $row->end_asian_handicap_away_min_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_1) && !is_null($row->end_asian_handicap_away_min_1) )
    @if( ($row->end_asian_handicap_home_min_1 + $row->end_asian_handicap_away_min_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_1',
                            'odd' => $row->end_asian_handicap_home_min_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-1
                <br/>
                {{ $row->end_asian_handicap_home_min_1 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_1',
                            'odd' => $row->end_asian_handicap_away_min_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-1
                <br/>
                {{ $row->end_asian_handicap_away_min_1 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_075) && !is_null($row->end_asian_handicap_away_min_075) )
    @if( ($row->end_asian_handicap_home_min_075 + $row->end_asian_handicap_away_min_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_075',
                            'odd' => $row->end_asian_handicap_home_min_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-0.75
                <br/>
                {{ $row->end_asian_handicap_home_min_075 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_075',
                            'odd' => $row->end_asian_handicap_away_min_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-0.75
                <br/>
                {{ $row->end_asian_handicap_away_min_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_05) && !is_null($row->end_asian_handicap_away_min_05) )
    @if( ($row->end_asian_handicap_home_min_05 + $row->end_asian_handicap_away_min_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_05',
                            'odd' => $row->end_asian_handicap_home_min_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-0.5
                <br/>
                {{ $row->end_asian_handicap_home_min_05 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_05',
                            'odd' => $row->end_asian_handicap_away_min_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-0.5
                <br/>
                {{ $row->end_asian_handicap_away_min_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_min_025) && !is_null($row->end_asian_handicap_away_min_025) )
    @if( ($row->end_asian_handicap_home_min_025 + $row->end_asian_handicap_away_min_025) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_min_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_min_025',
                            'odd' => $row->end_asian_handicap_home_min_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h-0.25
                <br/>
                {{ $row->end_asian_handicap_home_min_025 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_min_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_min_025',
                            'odd' => $row->end_asian_handicap_away_min_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a-0.25
                <br/>
                {{ $row->end_asian_handicap_away_min_025 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_0) && !is_null($row->end_asian_handicap_away_plus_0) )
    @if( ($row->end_asian_handicap_home_plus_0 + $row->end_asian_handicap_away_plus_0) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_0))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_0',
                            'odd' => $row->end_asian_handicap_home_plus_0
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+0
                <br/>
                {{ $row->end_asian_handicap_home_plus_0 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_0))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_0',
                            'odd' => $row->end_asian_handicap_away_plus_0
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+0
                <br/>
                {{ $row->end_asian_handicap_away_plus_0 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_025) && !is_null($row->end_asian_handicap_away_plus_025) )
    @if( ($row->end_asian_handicap_home_plus_025 + $row->end_asian_handicap_away_plus_025) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_025',
                            'odd' => $row->end_asian_handicap_home_plus_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+0.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_025 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_025))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_025',
                            'odd' => $row->end_asian_handicap_away_plus_025
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+0.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_025 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_05) && !is_null($row->end_asian_handicap_away_plus_05) )
    @if( ($row->end_asian_handicap_home_plus_05 + $row->end_asian_handicap_away_plus_05) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_05',
                            'odd' => $row->end_asian_handicap_home_plus_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+0.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_05 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_05))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_05',
                            'odd' => $row->end_asian_handicap_away_plus_05
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+0.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_05 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_075) && !is_null($row->end_asian_handicap_away_plus_075) )
    @if( ($row->end_asian_handicap_home_plus_075 + $row->end_asian_handicap_away_plus_075) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_075',
                            'odd' => $row->end_asian_handicap_home_plus_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+0.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_075 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_075))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_075',
                            'odd' => $row->end_asian_handicap_away_plus_075
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+0.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_075 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_1) && !is_null($row->end_asian_handicap_away_plus_1) )
    @if( ($row->end_asian_handicap_home_plus_1 + $row->end_asian_handicap_away_plus_1) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_1',
                            'odd' => $row->end_asian_handicap_home_plus_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+1
                <br/>
                {{ $row->end_asian_handicap_home_plus_1 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_1))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_1',
                            'odd' => $row->end_asian_handicap_away_plus_1
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+1
                <br/>
                {{ $row->end_asian_handicap_away_plus_1 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_125) && !is_null($row->end_asian_handicap_away_plus_125) )
    @if( ($row->end_asian_handicap_home_plus_125 + $row->end_asian_handicap_away_plus_125) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_125',
                            'odd' => $row->end_asian_handicap_home_plus_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+1.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_125 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_125))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_125',
                            'odd' => $row->end_asian_handicap_away_plus_125
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+1.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_125 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_15) && !is_null($row->end_asian_handicap_away_plus_15) )
    @if( ($row->end_asian_handicap_home_plus_15 + $row->end_asian_handicap_away_plus_15) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_15',
                            'odd' => $row->end_asian_handicap_home_plus_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+1.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_15 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_15))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_15',
                            'odd' => $row->end_asian_handicap_away_plus_15
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+1.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_15 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_175) && !is_null($row->end_asian_handicap_away_plus_175) )
    @if( ($row->end_asian_handicap_home_plus_175 + $row->end_asian_handicap_away_plus_175) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_175',
                            'odd' => $row->end_asian_handicap_home_plus_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+1.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_175 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_175))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_175',
                            'odd' => $row->end_asian_handicap_away_plus_175
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+1.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_175 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_2) && !is_null($row->end_asian_handicap_away_plus_2) )
    @if( ($row->end_asian_handicap_home_plus_2 + $row->end_asian_handicap_away_plus_2) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_2',
                            'odd' => $row->end_asian_handicap_home_plus_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+2
                <br/>
                {{ $row->end_asian_handicap_home_plus_2 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_2))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_2',
                            'odd' => $row->end_asian_handicap_away_plus_2
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+2
                <br/>
                {{ $row->end_asian_handicap_away_plus_2 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_225) && !is_null($row->end_asian_handicap_away_plus_225) )
    @if( ($row->end_asian_handicap_home_plus_225 + $row->end_asian_handicap_away_plus_225) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_225',
                            'odd' => $row->end_asian_handicap_home_plus_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+2.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_225 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_225))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_225',
                            'odd' => $row->end_asian_handicap_away_plus_225
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+2.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_225 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_25) && !is_null($row->end_asian_handicap_away_plus_25) )
    @if( ($row->end_asian_handicap_home_plus_25 + $row->end_asian_handicap_away_plus_25) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_25',
                            'odd' => $row->end_asian_handicap_home_plus_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+2.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_25 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_25))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_25',
                            'odd' => $row->end_asian_handicap_away_plus_25
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+2.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_25 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_275) && !is_null($row->end_asian_handicap_away_plus_275) )
    @if( ($row->end_asian_handicap_home_plus_275 + $row->end_asian_handicap_away_plus_275) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_275',
                            'odd' => $row->end_asian_handicap_home_plus_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+2.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_275 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_275))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_275',
                            'odd' => $row->end_asian_handicap_away_plus_275
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+2.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_275 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_3) && !is_null($row->end_asian_handicap_away_plus_3) )
    @if( ($row->end_asian_handicap_home_plus_3 + $row->end_asian_handicap_away_plus_3) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_3',
                            'odd' => $row->end_asian_handicap_home_plus_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+3
                <br/>
                {{ $row->end_asian_handicap_home_plus_3 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_3))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_3',
                            'odd' => $row->end_asian_handicap_away_plus_3
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+3
                <br/>
                {{ $row->end_asian_handicap_away_plus_3 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_325) && !is_null($row->end_asian_handicap_away_plus_325) )
    @if( ($row->end_asian_handicap_home_plus_325 + $row->end_asian_handicap_away_plus_325) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_325',
                            'odd' => $row->end_asian_handicap_home_plus_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+3.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_325 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_325))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_325',
                            'odd' => $row->end_asian_handicap_away_plus_325
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+3.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_325 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_35) && !is_null($row->end_asian_handicap_away_plus_35) )
    @if( ($row->end_asian_handicap_home_plus_35 + $row->end_asian_handicap_away_plus_35) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_35',
                            'odd' => $row->end_asian_handicap_home_plus_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+3.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_35 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_35))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_35',
                            'odd' => $row->end_asian_handicap_away_plus_35
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+3.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_35 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_375) && !is_null($row->end_asian_handicap_away_plus_375) )
    @if( ($row->end_asian_handicap_home_plus_375 + $row->end_asian_handicap_away_plus_375) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_375',
                            'odd' => $row->end_asian_handicap_home_plus_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+3.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_375 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_375))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_375',
                            'odd' => $row->end_asian_handicap_away_plus_375
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+3.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_375 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_4) && !is_null($row->end_asian_handicap_away_plus_4) )
    @if( ($row->end_asian_handicap_home_plus_4 + $row->end_asian_handicap_away_plus_4) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_4',
                            'odd' => $row->end_asian_handicap_home_plus_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+4
                <br/>
                {{ $row->end_asian_handicap_home_plus_4 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_4))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_4',
                            'odd' => $row->end_asian_handicap_away_plus_4
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+4
                <br/>
                {{ $row->end_asian_handicap_away_plus_4 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_425) && !is_null($row->end_asian_handicap_away_plus_425) )
    @if( ($row->end_asian_handicap_home_plus_425 + $row->end_asian_handicap_away_plus_425) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_425',
                            'odd' => $row->end_asian_handicap_home_plus_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+4.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_425 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_425))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_425',
                            'odd' => $row->end_asian_handicap_away_plus_425
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+4.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_425 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_45) && !is_null($row->end_asian_handicap_away_plus_45) )
    @if( ($row->end_asian_handicap_home_plus_45 + $row->end_asian_handicap_away_plus_45) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_45',
                            'odd' => $row->end_asian_handicap_home_plus_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+4.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_45 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_45))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_45',
                            'odd' => $row->end_asian_handicap_away_plus_45
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+4.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_45 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_475) && !is_null($row->end_asian_handicap_away_plus_475) )
    @if( ($row->end_asian_handicap_home_plus_475 + $row->end_asian_handicap_away_plus_475) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_475',
                            'odd' => $row->end_asian_handicap_home_plus_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+4.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_475 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_475))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_475',
                            'odd' => $row->end_asian_handicap_away_plus_475
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+4.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_475 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_5) && !is_null($row->end_asian_handicap_away_plus_5) )
    @if( ($row->end_asian_handicap_home_plus_5 + $row->end_asian_handicap_away_plus_5) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_5',
                            'odd' => $row->end_asian_handicap_home_plus_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+5
                <br/>
                {{ $row->end_asian_handicap_home_plus_5 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_5))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_5',
                            'odd' => $row->end_asian_handicap_away_plus_5
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+5
                <br/>
                {{ $row->end_asian_handicap_away_plus_5 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_525) && !is_null($row->end_asian_handicap_away_plus_525) )
    @if( ($row->end_asian_handicap_home_plus_525 + $row->end_asian_handicap_away_plus_525) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_525',
                            'odd' => $row->end_asian_handicap_home_plus_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+5.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_525 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_525))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_525',
                            'odd' => $row->end_asian_handicap_away_plus_525
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+5.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_525 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_55) && !is_null($row->end_asian_handicap_away_plus_55) )
    @if( ($row->end_asian_handicap_home_plus_55 + $row->end_asian_handicap_away_plus_55) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_55',
                            'odd' => $row->end_asian_handicap_home_plus_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+5.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_55 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_55))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_55',
                            'odd' => $row->end_asian_handicap_away_plus_55
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+5.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_55 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_575) && !is_null($row->end_asian_handicap_away_plus_575) )
    @if( ($row->end_asian_handicap_home_plus_575 + $row->end_asian_handicap_away_plus_575) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_575',
                            'odd' => $row->end_asian_handicap_home_plus_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+5.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_575 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_575))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_575',
                            'odd' => $row->end_asian_handicap_away_plus_575
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+5.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_575 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_6) && !is_null($row->end_asian_handicap_away_plus_6) )
    @if( ($row->end_asian_handicap_home_plus_6 + $row->end_asian_handicap_away_plus_6) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_6',
                            'odd' => $row->end_asian_handicap_home_plus_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+6
                <br/>
                {{ $row->end_asian_handicap_home_plus_6 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_6))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_6',
                            'odd' => $row->end_asian_handicap_away_plus_6
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+6
                <br/>
                {{ $row->end_asian_handicap_away_plus_6 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_625) && !is_null($row->end_asian_handicap_away_plus_625) )
    @if( ($row->end_asian_handicap_home_plus_625 + $row->end_asian_handicap_away_plus_625) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_625',
                            'odd' => $row->end_asian_handicap_home_plus_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+6.25
                <br/>
                {{ $row->end_asian_handicap_home_plus_625 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_625))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_625',
                            'odd' => $row->end_asian_handicap_away_plus_625
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+6.25
                <br/>
                {{ $row->end_asian_handicap_away_plus_625 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_65) && !is_null($row->end_asian_handicap_away_plus_65) )
    @if( ($row->end_asian_handicap_home_plus_65 + $row->end_asian_handicap_away_plus_65) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_65',
                            'odd' => $row->end_asian_handicap_home_plus_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+6.5
                <br/>
                {{ $row->end_asian_handicap_home_plus_65 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_65))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_65',
                            'odd' => $row->end_asian_handicap_away_plus_65
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+6.5
                <br/>
                {{ $row->end_asian_handicap_away_plus_65 }}
            </a>
        </div>
    @endif
@endif

@if(!is_null($row->end_asian_handicap_home_plus_675) && !is_null($row->end_asian_handicap_away_plus_675) )
    @if( ($row->end_asian_handicap_home_plus_675 + $row->end_asian_handicap_away_plus_675) < 4 )
        <div class="btn-group mt-2">
            <a
                @if(!is_null($row->end_asian_handicap_home_plus_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_home_plus_675',
                            'odd' => $row->end_asian_handicap_home_plus_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                h+6.75
                <br/>
                {{ $row->end_asian_handicap_home_plus_675 }}
            </a>
            <a
                @if(!is_null($row->end_asian_handicap_away_plus_675))
                    href="{{ route('Aryatips.tip',
                        [
                            'leagueapi_id' => $row->leagueapi_id,
                            'season' => $row->season,
                            'fixtureapi_id' => $row->fixtureapi_id,
                            'betapi_id' => 4,
                            'value' => 'asian_handicap_away_plus_675',
                            'odd' => $row->end_asian_handicap_away_plus_675
                        ])
                    }}"
                @endif
                target="_blank"
                class="btn bg-gray-800 btn-sm text-white">
                a+6.75
                <br/>
                {{ $row->end_asian_handicap_away_plus_675 }}
            </a>
        </div>
    @endif
@endif
