

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
                        </div>
                        <div class="col-1">
                            <i class="flag-icon flag-icon-{{ strtolower($row->league->country->code) }} "
                                title="{{ strtolower($row->league->country->code) }}"
                                id="{{ strtolower($row->league->country->code) }}"></i>
                            {{ $row->league->country->name }}
                        </div>
                        <div class="col-5">
                            {{ $row->league->name }}  -
                            {{ $row->season }}
                        </div>
                        <div class="col-1 text-center">
                            @if($row->league->bookmakersapi_id == 11)
                                <span class="badge bg-primary  ">
                                    {{ $row->league->bookmakers_name }}
                                </span>
                            @elseif($row->league->bookmakersapi_id == 8)
                                <span class="badge bg-success  ">
                                    {{ $row->league->bookmakers_name }}
                                </span>
                            @elseif($row->bookmakersapi_id == 2)
                                <span class="badge bg-danger" >
                                    {{ $row->bookmakers_name }}
                                </span>
                            @endif
                        </div>
                        <div class="col-1 text-center">
                            <span class="badge bg-gray-900 ">
                                {{ $row->fixtureapi_id }}
                            </span>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->pre_response }}-{{ $row->end_response }}
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
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <small>
                                {{ $row->venue->name }}
                                <br/>
                                <abbr class="initialism">
                                    {{ $row->venue->city }}
                                </abbr>
                            </small>
                            <br/>
                            <span class="badge bg-gray-800 mt-2 ">
                                {{ $row->round }}
                            </span>
                        </div>
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
                            {{ $row->goals_home }}
                            <br/>
                            {{ $row->goals_away }}
                            <br/>
                            <i class="far fa-futbol"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->corner_kicks_home }}
                            <br/>
                            {{ $row->corner_kicks_away }}
                            <br/>
                            <i class="fas fa-flag-checkered"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->yellow_cards_home }}
                            <br/>
                            {{ $row->yellow_cards_away }}
                            <br/>
                            <i class="fas fa-square text-warning"></i>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->red_cards_home }}
                            <br/>
                            {{ $row->red_cards_away }}
                            <br/>
                            <i class="fas fa-square text-danger"></i>
                        </div>
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->odd->pre_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->pre_gou_pattern }}
                            </span>

                            <br/>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->end_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->end_gou_pattern }}
                            </span>
                        </div>
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->odd->pre_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->pre_gou_pattern_4 }}
                            </span>

                            <br/>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->end_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->odd->end_gou_pattern_4 }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @empty

    @endforelse
