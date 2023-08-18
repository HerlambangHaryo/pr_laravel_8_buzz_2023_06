<div class="row mb-1">
    <div class="col-12 text-center">
        <div class="btn-group">
            <a
                href="{{ route('Leagues.today',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'today')
                    active
                @endif
                ">
                Today
            </a>
            <a
                href="{{ route('Leagues.notstarted',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'notstarted')
                    active
                @endif
                ">
                Not Started
            </a>
            <a
                href="{{ route('Leagues.matchfinished',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'matchfinished')
                    active
                @endif
                ">
                Match Finished
            </a>
            <a
                href="{{ route('Leagues.standings',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standings')
                    active
                @endif
                ">
                Standings
            </a>
            <a
                href="{{ route('Leagues.standing_corners',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standing_corners')
                    active
                @endif
                ">
                Corners
            </a>
            <a
                href="{{ route('Leagues.standing_cards',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standing_cards')
                    active
                @endif
                ">
                Cards
            </a>
            <a
                href="{{ route('Leagues.pecheck',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'pecheck')
                    active
                @endif
                ">
                PE Check
            </a>
            <a
                href="{{ route('Leagues.pattern_odd',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'pattern_odd')
                    active
                @endif
                ">
                Pattern Odd
            </a>
            <a
                href="{{ route('Leagues.pattern_preend',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'pattern_preend')
                    active
                @endif
                ">
                Pattern PreEnd
            </a>
        </div>
    </div>
</div>

<div class="row mb-4">
    {!! define_date('view') !!}
</div>
