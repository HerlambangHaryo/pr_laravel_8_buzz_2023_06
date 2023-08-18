

<div class="row mb-2">
    @forelse ($data as $row)
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-1">
                            {{ $loop->iteration }}
                        </div>
                        <div class="col-1">
                            <i class="flag-icon flag-icon-{{ strtolower($row->league->country->code) }} "
                                title="{{ strtolower($row->league->country->code) }}"
                                id="{{ strtolower($row->league->country->code) }}"></i>
                            {{ $row->league->country->name }}
                        </div>
                        <div class="col-4">
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
                            @elseif($row->league->bookmakersapi_id == 2)
                                <span class="badge bg-danger  ">
                                    {{ $row->league->bookmakers_name }}
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
                        <div class="col-1 text-center">
                            {{ $row->tanggal }}
                            <br/>
                            <abbr class="initialism">
                                {{ $row->jam }}
                            </abbr>
                            <span class="badge bg-gray-900 mt-2 ">
                                {{ $row->fixtureapi_id }}
                            </span>
                        </div>
                        <div class="col-2">
                            @if(!is_null($row->venueapi_id))
                            <a
                                href="{{ route('Venues.show',  $row->venueapi_id  ) }}"
                                class=" ">
                                {{ $row->venue->name }}
                            </a>
                            @else
                                {{ $row->venue->name }}
                            @endif
                            <br/>
                            <span class="badge bg-gray-800 mt-2 ">
                                {{ $row->round }}
                            </span>
                        </div>
                        <div class="col-3">
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
                        <div class="col-1 text-center">
                            <a
                                href="{{route('Fixtures.setoneye', $row->id )}}"
                                class=" ">
                                On Eye
                            </a>
                            <br/>
                            <a
                                href="{{route('Fixtures.setone', $row->id )}}"
                                class=" ">
                                One
                            </a>
                        </div>
                        <div class="col-1 text-center">
                            {{ $row->pre_response }}-{{ $row->end_response }}
                            <br/>
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
                            <br/>
                            <small>
                                {{ $row->pre_odd_updated_at  }}
                            </small>
                            <br/>
                            <small>
                                {{ $row->updated_at  }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        @empty

    @endforelse
</div>
