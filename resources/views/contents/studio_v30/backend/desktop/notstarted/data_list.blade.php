

<div class="row mb-2">
    @forelse ($data as $row)
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            {{ $row->tanggal }}
                            <abbr class="initialism">
                                {{ $row->jam }}
                            </abbr>
                            <span class="badge bg-gray-800 mt-2 ">
                                {{ $row->fixtureapi_id }}
                            </span>
                        </div>
                        <div class="col-2">
                            <i class="flag-icon flag-icon-{{ strtolower($row->league->country->code) }} "
                                title="{{ strtolower($row->league->country->code) }}"
                                id="{{ strtolower($row->league->country->code) }}"></i>
                            {{ $row->league->country->name }}
                        </div>
                        <div class="col-4">
                            #{{ $row->league->leagueapi_id }}
                            {{ $row->league->name }}  -
                            {{ $row->season }}
                        </div>
                        <div class="col-4">
                            <small>
                                {{ $row->venue->name }},
                                <abbr class="initialism">
                                    {{ $row->venue->city }}
                                </abbr>
                            </small>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-2">
                            <span class="badge bg-gray-800 mt-2 ">
                                {{ $row->round }}
                            </span>
                        </div>
                        <div class="col-1">
                            <span class="badge bg-gray-900  mt-2 ">
                                {{ $row->fixtureapi_id }}
                            </span>
                        </div>
                        <div class="col-1">
                            @if($row->league->bookmakersapi_id == 11)
                                <span class="badge bg-primary  mt-2  ">
                                    {{ $row->league->bookmakers_name }}
                                </span>
                            @elseif($row->league->bookmakersapi_id == 8)
                                <span class="badge bg-success mt-2  ">
                                    {{ $row->league->bookmakers_name }}
                                </span>
                            @elseif($row->bookmakersapi_id == 2)
                                <span class="badge bg-danger mt-2" >
                                    {{ $row->bookmakers_name }}
                                </span>
                            @elseif($row->bookmakersapi_id == 28)
                                <span class="badge bg-warning mt-2" >
                                    {{ $row->bookmakers_name }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <a
                                href="{{route('Teams.show', $row->teams_homeapi_id )}}"
                                class=" ">
                                {{ $row->home->name }}
                            </a>
                            <br/>
                            <a
                                href="{{route('Teams.show', $row->teams_awayapi_id )}}"
                                class=" ">
                                {{ $row->away->name }}
                            </a>
                            <br/>
                            <x-studio_v30.badge-fixture-status
                                        link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore"
                                        nama="{{ $row->fixture_status }}"/>
                        </div>
                        <div class="col-1 text-center">
                            [{{ $row->home_stats->rank }}]
                            <br/>
                            [{{ $row->away_stats->rank }}]
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->goals_home }}
                            <br/>
                            {{ $row->goals_away }}
                            <br/>
                            <i class="far fa-futbol text-success"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->pre_avg_goals_home }}
                            <br/>
                            {{ $row->pre_avg_goals_away }}
                            <br/>
                            <i class="far fa-futbol text-success"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->pre_avg_handicap }}
                            <br/>
                            {{ $row->pre_avg_overunder }}
                            <br/>
                            <i class="far fa-futbol text-success"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->statistic->total_shots_avg_home }}
                            <br/>
                            {{ $row->statistic->total_shots_avg_away }}
                            <br/>
                            <i class="fas fa-shoe-prints"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->statistic->shots_on_goal_avg_home }}
                            <br/>
                            {{ $row->statistic->shots_on_goal_avg_away }}
                            <br/>
                            <i class="far fa-dot-circle text-teal"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->statistic->expected_goals_avg_home }}
                            <br/>
                            {{ $row->statistic->expected_goals_avg_away }}
                            <br/>
                            <i class="fas fa-superscript"></i>
                        </div>

                        <div class="col-1 text-center">
                            {{ $row->statistic->corner_kicks_avg_home }}
                            <br/>
                            {{ $row->statistic->corner_kicks_avg_away }}
                            <hr/>
                            {{ $row->statistic->corner_kicks_avg_home + $row->statistic->corner_kicks_avg_away }}
                            <br/>
                            <i class="fas fa-drafting-compass text-indigo"></i>
                        </div>

                        <div class="col-1 text-center">
                            {{ $row->statistic->offsides_avg_home }}
                            <br/>
                            {{ $row->statistic->offsides_avg_away }}
                            <br/>
                            <i class="fas fa-user-slash text-gray-500"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->statistic->fouls_avg_home }}
                            <br/>
                            {{ $row->statistic->fouls_avg_away }}
                            <hr/>
                            {{ $row->statistic->fouls_avg_home + $row->statistic->fouls_avg_away }}
                            <br/>
                            <i class="far fa-window-close text-yellow"></i>
                        </div>

                        <div class="col-1 text-center">
                            {{ $row->statistic->yellow_cards_avg_home }}
                            <br/>
                            {{ $row->statistic->yellow_cards_avg_away }}
                            <br/>
                            <i class="fas fa-square text-warning"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->statistic->red_cards_avg_home }}
                            <br/>
                            {{ $row->statistic->red_cards_avg_away }}
                            <br/>
                            <i class="fas fa-square text-danger"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center mt-2">
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->odd->pre_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->pre_gou_pattern }}
                            </span>
                        </div>
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->odd->end_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->end_gou_pattern }}
                            </span>
                        </div>
                        <div class="col-2">
                            <span class="badge bg-gray-800">
                                {{ $row->odd->pre_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-800">
                                {{ $row->odd->pre_gou_pattern_4 }}
                            </span>
                        </div>
                        <div class="col-2">
                            <span class="badge bg-gray-800">
                                {{ $row->odd->end_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-800">
                                {{ $row->odd->end_gou_pattern_4 }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="row d-flex justify-content-end">
                        <div class="col-1 text-center">

                            @if($row->eye->status == 1)
                                <i class="far fa-eye"></i>
                            @else
                                <a
                                    href="{{route('Fixtures.setoneye', $row->id )}}"
                                    class=" ">
                                    On Eye
                                </a>
                            @endif
                        </div>
                        <div class="col-1 text-center">
                            <a
                                href="{{route('Fixtures.setone', $row->id )}}"
                                class=" ">
                                One
                            </a>
                        </div>
                        <div class="col-1 text-center">
                            <a
                                href="{{ route('Fixtures.information', [
                                        'leagueapi_id'      => $row->leagueapi_id,
                                        'season'            => $row->season,
                                        'fixtureapi_id'     => $row->fixtureapi_id,
                                    ])}}"
                                target="_blank"
                                class=" ">
                                View
                            </a>
                        </div>
                    </div>
                    <small class=" text-primary">
                        @foreach($row->arya as $row2)
                            {{ $row2->value }}
                            {{ $row2->odd }}
                            <br/>
                        @endforeach
                    </small>
                </div>
            </div>


        </div>
        @empty

    @endforelse
</div>
