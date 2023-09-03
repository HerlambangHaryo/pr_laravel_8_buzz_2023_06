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
                href="{{ route('Leagues.standing',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season,
                        'stats'        => 'Goals'
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standing')
                    active
                @endif
                ">
                Standings
            </a>
            <a
                href="{{ route('Leagues.standing',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season,
                        'stats'        => 'Corners'
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standing')
                    active
                @endif
                ">
                Corners
            </a>
            <a
                href="{{ route('Leagues.standing',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season,
                        'stats'        => 'Shots'
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standing')
                    active
                @endif
                ">
                Shots
            </a>
            <a
                href="{{ route('Leagues.standing',
                    [
                        'leagueapi_id'  => $leagueapi_id,
                        'season'        => $season,
                        'stats'        => 'Fouls'
                    ])
                }}"
                class="btn btn-sm btn-secondary
                @if($panel_name == 'standing')
                    active
                @endif
                ">
                Fouls
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
