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
    <div class="row mb-2">
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
                        <div class="col-2 mt-1">
                            <span class="badge bg-gray-900">
                                {{ $row->pre_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->pre_gou_pattern }}
                            </span>
                        </div>
                        <div class="col-4  mt-1">
                        </div>
                        <div class="col-2  mt-1">
                            <span class="badge bg-gray-900">
                                {{ $row->end_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->end_gou_pattern }}
                            </span>
                        </div>
                    </div>

                    <?php
                        $pattern = $row->prepre;
                    ?>
                    @include('contents.includes.data_pattern')

                    <?php
                        $pattern = $row->prepre_mirror;
                    ?>
                    @include('contents.includes.data_pattern')

                </div>
            </div>

        </div>
    </div>
@endsection
