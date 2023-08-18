@extends('templates.'.$template.'.three_column')

@section('title', $panel_name)

@section('content')
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-9 -->
        <div class="col-9">
            <!-- BEGIN #Team -->
            <div id="Team" class="mb-5">
                <h4>
                    <i class="fas fa-desktop fa-fw"></i>
                    Team
                </h4>
                <div class="row mb-3">
                    <div class="col-6">
                        <p>Update
                        <a href="{{route('Rapidapi.teams', $data->teamapi_id)}}">{{$data->name}}</a>
                        information and settings.</p>
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">
                    </div>
                </div>

                <div class="card border-0 text-white overflow-hidden"  >
                    <!-- card-img -->
                    <img src="{{$data->venue->image}}" class="card-img" />

                    <!-- card-img-overlay -->
                    <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-50 rounded">
                        <!-- top content -->
                        <div class="flex-fill">
                            <div class="d-flex align-items-center">
                                <h6>
                                    <a href="{{route('Rapidapi.teams', $data->teamapi_id)}}">
                                        {{$data->name}}
                                    </a>
                                </h6>
                            </div>
                        </div>

                        <!-- bottom-content -->
                        <div>
                            <a href="#" class="text-white text-decoration-none d-flex align-items-center">
                                <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-center">
                                    <img src="{{$data->logo}}" alt="" class="ms-100 mh-100">
                                </div>
                                <div class="ms-3">
                                    <div class="fw-600">
                                        {{$data->venue->name}}
                                    </div>
                                    <div class="fs-13px">
                                        <i class="fas fa-map-marker-alt"></i> {{$data->venue->address}}, {{$data->venue->city}}

                                        <i class="fas fa-shield-alt ms-4"></i> {{$data->code}}

                                        <i class="fas fa-school ms-4"></i> {{$data->founded}}
                                        <i class="fas fa-users ms-4"></i>  {{$data->venue->capacity}}
                                        <i class="fas fa-water ms-4"></i>  {{$data->venue->surface}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
            <!-- END #Team -->


            <!-- BEGIN #Fixtures -->
            <div id="Fixtures" class="mb-5">
                <h4>
                    <i class="fas fa-desktop fa-fw"></i>
                    Fixtures
                </h4>
                <div class="card">
                    @forelse($fixtures as $row)
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    {{ $row->tanggal }}
                                </div>
                                <div class="col-2">
                                    <i class="flag-icon flag-icon-{{ strtolower($row->league->country->code) }} "
                                        title="{{ strtolower($row->league->country->code) }}"
                                        id="{{ strtolower($row->league->country->code) }}"></i>
                                    {{ $row->league->country->name }}
                                </div>
                                <div class="col-3">
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
                                    @endif
                                </div>
                                <div class="col-1 text-center">
                                    <span class="badge bg-gray-900 ">
                                        {{ $row->fixtureapi_id }}
                                    </span>
                                </div>
                                <div class="col-1 text-center">
                                    <a
                                        href="{{route('Fixtures.setoneye', $row->id )}}"
                                        class=" ">
                                        On Eye
                                    </a>
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
                        </div>
                        <div class="widget-reminder">
                            <div class="widget-reminder-item">
                                <div class="widget-reminder-time">
                                    {{ $row->jam }}
                                </div>
                                <div class="widget-reminder-divider bg-success"></div>
                                <div class="widget-reminder-content">
                                    <div class="row">
                                        <div class="col-10">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty

                    @endforelse
                </div>
            </div>
            <!-- END #Fixtures -->



            <!-- BEGIN #Results -->
            <div id="Results" class="mb-5">
                <h4>
                    <i class="fas fa-desktop fa-fw"></i>
                    Results
                </h4>
                <div class="card">
                    @forelse($result as $row)
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    {{ $row->tanggal }}
                                </div>
                                <div class="col-2">
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
                                    @endif
                                </div>
                                <div class="col-1 text-center">
                                    <span class="badge bg-gray-900 ">
                                        {{ $row->fixtureapi_id }}
                                    </span>
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
                        <div class="widget-reminder">
                            <div class="widget-reminder-item">
                                <div class="widget-reminder-time">
                                    {{ $row->jam }}
                                </div>
                                <div class="widget-reminder-divider bg-success"></div>
                                <div class="widget-reminder-content">
                                    <div class="row">
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
                                        </div>
                                        <div class="col-8">
                                            {{ $row->goals_home }}
                                            <br/>
                                            {{ $row->goals_away }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty

                    @endforelse
                </div>
            </div>
            <!-- END #Results -->


            <!-- BEGIN #Squads -->
            <div id="Squads" class="mb-5">
                <h4>
                    <i class="fas fa-desktop fa-fw"></i>
                    Squads
                </h4>
                <div class="row">
                    @forelse($player_squad as $row)
                        <div class="col-2 mb-3">
                            <div class="card border-0 text-white overflow-hidden" style="max-height: 250px">
                                <!-- card-img -->
                                <img src="{{ $row->player->photo }}" class="card-img" />

                                <!-- card-img-overlay -->
                                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-20 rounded">
                                    <!-- top content -->
                                    <div class="flex-fill">
                                    <div class="d-flex align-items-center">
                                        <h6>
                                            {{ $row->player->position }}
                                        </h6>
                                        <div class="dropdown ms-auto">
                                        <a href="#" class="text-white" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            ...
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <!-- bottom-content -->
                                    <div>
                                        <a href="#" class="text-white text-decoration-none d-flex align-items-center">
                                            <div class="ms-3">
                                                <div class="fw-600">
                                                    {{ $row->player->name }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    @empty

                    @endforelse
                </div>
            </div>
            <!-- END #Squads -->



        </div>
        <!-- END col-9-->
        <!-- BEGIN col-3 -->
        <div class="col-3">
            <!-- BEGIN #sidebar-bootstrap -->
            <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                <nav class="nav">
                    <a class="nav-link" href="#Team" data-bs-toggle="scroll-to">Team</a>
                    <a class="nav-link" href="#Fixtures" data-bs-toggle="scroll-to">Fixtures</a>
                    <a class="nav-link" href="#Results" data-bs-toggle="scroll-to">Results</a>
                    <a class="nav-link" href="#Squads" data-bs-toggle="scroll-to">Squads</a>
                </nav>
            </nav>
            <!-- END #sidebar-bootstrap -->
        </div>
        <!-- END col-3 -->
    </div>
    <!-- END row -->
@endsection
