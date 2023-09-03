@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')

    <?php
        $row_fixture    = $row;
        $row_venue      = $row->venue;
    ?>
    <div class="row mb-2">
        <div class="col-6">
            <a href="{{route('Rapidapi.teams', $row->teams_homeapi_id)}}">update</a>
        </div>
        <div class="col-6 text-end">
            {{ (microtime(true) - LARAVEL_START) }}
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 mb-3">
            <div class="card border-0 text-white overflow-hidden"  style="max-height: 350px" >
                <!-- card-img -->
                {!! define_venue($row_venue->venueapi_id, $row_venue->image) !!}

                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded">

                    @include('contents.includes.fixture_menu')
                    @include('contents.includes.fixture_info')

                    <div class="row d-flex justify-content-center text-center mt-1">

                        <div class="col-1">
                            <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-start">
                                <img src="{{ $row->statistic->coach_home->image }}" alt="" class="ms-100 mh-100">
                            </div>
                        </div>
                        <div class="col-2">
                            {{ $row->statistic->coach_home->name }}
                            <br/>
                            {{ $row->statistic->lineups_formation_home }}
                        </div>
                        <div class="col-1">
                            <br/>
                            <small>
                                {{ $row->referee }}
                            </small>
                        </div>
                        <div class="col-2">
                            {{ $row->statistic->coach_away->name }}
                            <br/>
                            {{ $row->statistic->lineups_formation_away }}
                        </div>
                        <div class="col-1">
                            <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-end">
                                <img src="{{ $row->statistic->coach_away->image }}" alt="" class="ms-100 mh-100">
                            </div>
                        </div>
                    </div>



                </div>
            </div>


            <div id="datatable" class="mt-3 mb-5">
                <div class="card">
                    <div class="card-header">
                        Data Only Pre
                    </div>
                    <div class="card-body">
                        <div>
                            <table id="datatableDefault" class="table  ">
                                <thead class=" ">
                                    <tr>
                                        <x-html.th-content-width title="No." width="10%" />
                                        <x-html.th-content title="Date"   />
                                        <x-html.th-content title="Leagues"   />
                                        <x-html.th-content title="Teams"   />
                                        <x-html.th-content title="Goals"   />
                                        <x-html.th-content title="1st"   />
                                        <x-html.th-content title="2nd"   />
                                        <x-html.th-content title="Pre" />
                                        <x-html.th-content title="End"   />
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($data as $row)
                                        <tr>
                                            <td class="text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="text-left">
                                                {{ $row->tanggal }}
                                                <br/>
                                                <abbr class="initialism">
                                                    {{ $row->jam }}
                                                </abbr>
                                                @if($row->league->bookmakersapi_id == 11)
                                                    <span class="badge bg-primary  ">
                                                        {{ $row->league->bookmakers_name }}
                                                    </span>
                                                @elseif($row->league->bookmakersapi_id == 8)
                                                    <span class="badge bg-success  ">
                                                        {{ $row->league->bookmakers_name }}
                                                    </span>
                                                @endif
                                                <span class="badge bg-gray-900 mt-2 ">
                                                    {{ $row->fixtureapi_id }}
                                                </span>
                                            </td>
                                            <td>
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
                                            </td>
                                            <td>
                                                <a
                                                    class=" ">
                                                    {{ $row->home->name }}
                                                </a>
                                                <br/>
                                                <a
                                                    class=" ">
                                                    {{ $row->away->name }}
                                                </a>
                                                <br/>
                                                <x-studio_v30.badge-fixture-status
                                                            link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore"
                                                            nama="{{ $row->fixture_status }}"/>
                                            </td>
                                            <td class="text-center">
                                                {{ $row->goals_home }}
                                                <br/>
                                                {{ $row->goals_away }}
                                            </td>
                                            <td class="text-center">
                                                {{ $row->score_halftime_home }}
                                                <br/>
                                                {{ $row->score_halftime_away }}
                                            </td>
                                            <td class="text-center">
                                                {{ $row->score_secondtime_home }}
                                                <br/>
                                                {{ $row->score_secondtime_away }}
                                            </td>
                                            <td>
                                                <span class="badge bg-gray-900">
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-gray-900">
                                                </span>
                                            </td>
                                        </tr>
                                        @empty

                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
