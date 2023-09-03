@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')

    @include('contents.studio_v30.backend.desktop.leagues.pre_sub_head')

    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="btn-group">
                <a
                    href="{{ route('Players.roundratings',
                        [
                            'leagueapi_id'  => $leagueapi_id,
                            'season'        => $season,
                            'round'         => $round
                        ])
                    }}"
                    class="btn btn-sm btn-secondary ">
                    Player Round Ratings
                </a>
                <a
                    href="{{ route('Players.anytimegoalscorers',
                        [
                            'leagueapi_id'  => $leagueapi_id,
                            'season'        => $season,
                            'round'         => $round
                        ])
                    }}"
                    class="btn btn-sm btn-secondary ">
                    Anytime Goal Scorers
                </a>
                <a
                    href="{{ route('Players.playertobebooked',
                        [
                            'leagueapi_id'  => $leagueapi_id,
                            'season'        => $season,
                            'round'         => $round
                        ])
                    }}"
                    class="btn btn-sm btn-secondary ">
                    To be Booked
                </a>
            </div>
        </div>
    </div>

    @include('contents.'.$template.'.backend.desktop.matchfinished.data_list')
@endsection
