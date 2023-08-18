@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')

    <?php
        $row_fixture    = $row->fixture;
        $row_venue      = $row->venue;
    ?>
    <div class="row mb-2">
        <div class="col-6">
            <a href="{{route('Rapidapi.teams', $row_fixture->teams_homeapi_id)}}">update</a>
        </div>
        <div class="col-6 text-end">
            {{ (microtime(true) - LARAVEL_START) }}
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 mb-3">
            <div class="card border-0 text-white overflow-hidden"  style="max-height: 400px" >
                <!-- card-img -->
                {!! define_venue($row_venue->venueapi_id, $row_venue->image) !!}

                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded">

                    @include('contents.includes.fixture_menu')

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
                        <div class="col-2 mt-1">
                            <span class="badge bg-gray-800">
                                {{ $row->pre_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-800">
                                {{ $row->pre_gou_pattern_4 }}
                            </span>
                        </div>
                        <div class="col-2  mt-1">
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
                        <div class="col-2  mt-1">
                            <span class="badge bg-gray-800">
                                {{ $row->end_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-800">
                                {{ $row->end_gou_pattern_4 }}
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            @include('contents.includes.data_list_details')
        </div>
    </div>
@endsection
