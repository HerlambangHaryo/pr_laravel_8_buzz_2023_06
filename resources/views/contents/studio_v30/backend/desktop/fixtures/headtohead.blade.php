@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')

    <div class="row mb-2">
        <div class="col-6">
            <a href="{{route('Rapidapi.teams', $row->teams_homeapi_id)}}">update</a>
        </div>
        <div class="col-6 text-end">
            {{ (microtime(true) - LARAVEL_START) }}
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card border-0 text-white overflow-hidden"  >
                <!-- card-img -->
                {!! define_venue($row->venueapi_id, $row->venue->image) !!}

                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded">

                    @include('contents.includes.fixture_menu')

                    <?php
                        $row_fixture = $row;
                    ?>
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

                    @include('contents.includes.fixture_stats')

                </div>
            </div>

        </div>
    </div>
@endsection
