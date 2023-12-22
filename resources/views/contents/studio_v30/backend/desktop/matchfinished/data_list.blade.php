

    @forelse ($data as $row)
        <div class="row mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            {{ $row->tanggal }}
                            <abbr class="initialism">
                                {{ $row->jam }}
                            </abbr>
                            <br/>
                            <span class="badge bg-gray-800 mt-2 ">
                                {{ $row->round }}
                            </span>
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
                        <div class="col-10">
                            <div class="row">

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
                                    {{ $row->statistic->total_shots_home }}
                                    <br/>
                                    {{ $row->statistic->total_shots_away }}
                                    <br/>
                                    <i class="fas fa-shoe-prints"></i>
                                </div>
                                <div class="col-1 text-center">
                                    {{ $row->statistic->shots_on_goal_home }}
                                    <br/>
                                    {{ $row->statistic->shots_on_goal_away }}
                                    <br/>
                                    <i class="far fa-dot-circle text-teal"></i>
                                </div>
                                <div class="col-1 text-center">
                                    {{ $row->statistic->expected_goals_home }}
                                    <br/>
                                    {{ $row->statistic->expected_goals_away }}
                                    <br/>
                                    <i class="fas fa-superscript"></i>
                                </div>

                                <div class="col-1 text-center">
                                    {{ $row->statistic->corner_kicks_home }}
                                    <br/>
                                    {{ $row->statistic->corner_kicks_away }}
                                    <br/>
                                    <i class="fas fa-drafting-compass text-indigo"></i>
                                </div>

                                <div class="col-1 text-center">
                                    {{ $row->statistic->offsides_home }}
                                    <br/>
                                    {{ $row->statistic->offsides_away }}
                                    <br/>
                                    <i class="fas fa-user-slash text-gray-500"></i>
                                </div>
                                <div class="col-1 text-center">
                                    {{ $row->statistic->fouls_home }}
                                    <br/>
                                    {{ $row->statistic->fouls_away }}
                                    <br/>
                                    <i class="far fa-window-close text-yellow"></i>
                                </div>

                                <div class="col-1 text-center">
                                    {{ $row->statistic->yellow_cards_home }}
                                    <br/>
                                    {{ $row->statistic->yellow_cards_away }}
                                    <br/>
                                    <i class="fas fa-square text-warning"></i>
                                </div>
                                <div class="col-1 text-center">
                                    {{ $row->statistic->red_cards_home }}
                                    <br/>
                                    {{ $row->statistic->red_cards_away }}
                                    <br/>
                                    <i class="fas fa-square text-danger"></i>
                                </div>
                            </div>
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
                            <a
                                href="{{ route('Fixtures.preend', [
                                        'leagueapi_id'      => $row->leagueapi_id,
                                        'season'            => $row->season,
                                        'fixtureapi_id'     => $row->fixtureapi_id,
                                    ])}}"
                                target="_blank"
                                class=" ">
                                Pre End
                            </a>
                        </div>
                        <div class="col-1 text-center">
                            <a
                                href="{{ route('Fixtures.preend_four', [
                                        'leagueapi_id'      => $row->leagueapi_id,
                                        'season'            => $row->season,
                                        'fixtureapi_id'     => $row->fixtureapi_id,
                                    ])}}"
                                target="_blank"
                                class=" ">
                                Pre End 4
                            </a>
                        </div>
                        <div class="col-1 text-center">
                            <a
                                href="{{ route('Fixtures.preend', [
                                        'leagueapi_id'      => $row->leagueapi_id,
                                        'season'            => $row->season,
                                        'fixtureapi_id'     => $row->fixtureapi_id,
                                    ])}}"
                                target="_blank"
                                class=" ">
                                Only End
                            </a>
                        </div>
                        <div class="col-1 text-center">
                            <a
                                href="{{ route('Fixtures.preend_four', [
                                        'leagueapi_id'      => $row->leagueapi_id,
                                        'season'            => $row->season,
                                        'fixtureapi_id'     => $row->fixtureapi_id,
                                    ])}}"
                                target="_blank"
                                class=" ">
                                Only End 4
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
