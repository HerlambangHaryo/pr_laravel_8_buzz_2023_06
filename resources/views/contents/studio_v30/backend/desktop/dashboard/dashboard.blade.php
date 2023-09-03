@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')

<div class="row mb-4">
    <div class="col-12 text-center">
        <div class="btn-group">
            <a
                href="{{ route('Players.today_ags') }}"
                class="btn btn-sm btn-secondary ">
                Anytime Goal Scorers
            </a>
            <a
                href="{{ route('Players.today_ptbb') }}"
                class="btn btn-sm btn-secondary ">
                To be Booked
            </a>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-3">
        <div class="card mb-3 flex-1">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">
                            #39 Premier League
                        </h5>
                        <div>
                            League - 2023
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="flex-grow-1">
                        <a
                            href="{{ route('Leagues.notstarted',
                                [
                                    'leagueapi_id'  => 39,
                                    'season'        => 2023
                                ])
                            }}"
                            class=" " >
                            View
                        </a>
                    </div>
                </div>
            </div>
            <!-- END card-body -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3">
        <!-- BEGIN card -->
        <div class="card mb-3 flex-1">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">
                            <a href="{{ route('Reports.undone') }}"
                                class=" ">
                                Undone recalibration
                            </a>
                        </h5>
                    </div>
                    <a
                        id="undone_ajax"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        class="text-muted ms-2">
                            <i class="fa fa-redo"></i>
                    </a>
                </div>

                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h3 class="mb-1" id="undone"></h3>
                    </div>
                    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa fa-user fa-lg text-primary"></i>
                    </div>
                </div>
            </div>
            <!-- END card-body -->
        </div>
        <!-- END card -->
    </div>
    <div class="col-3">
        <!-- BEGIN card -->
        <div class="card mb-3 flex-1">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">
                            <a href="{{ route('Mybets.index') }}"
                                class=" ">
                                Pattern Only
                            </a>
                        </h5>
                    </div>
                    <a
                        id="pattern_only_ajax"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        class="text-muted ms-2">
                            <i class="fa fa-redo"></i>
                    </a>
                </div>

                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h3 class="mb-1" id="pattern_only"></h3>
                    </div>
                    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa fa-user fa-lg text-primary"></i>
                    </div>
                </div>
            </div>
            <!-- END card-body -->
        </div>
        <!-- END card -->
    </div>
    <div class="col-3">
        <!-- BEGIN card -->
        <div class="card mb-3 flex-1">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">
                            <a href="{{ route('Mybets.index') }}"
                                class=" ">
                                Pattern End
                            </a>
                        </h5>
                    </div>
                    <a
                        id="pattern_from_ajax"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        class="text-muted ms-2">
                            <i class="fa fa-redo"></i>
                    </a>
                </div>

                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h3 class="mb-1" id="pattern_from"></h3>
                    </div>
                    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa fa-user fa-lg text-primary"></i>
                    </div>
                </div>
            </div>
            <!-- END card-body -->
        </div>
        <!-- END card -->
    </div>
    <div class="col-3">
        <!-- BEGIN card -->
        <div class="card mb-3 flex-1">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">
                            <a href="{{ route('Mybets.index') }}"
                                class=" ">
                                Investment
                            </a>
                        </h5>
                    </div>
                    <a href="#" data-bs-toggle="dropdown" class="text-muted ms-2"><i class="fa fa-redo"></i></a>
                </div>

                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h3 class="mb-1">184,593</h3>
                    </div>
                    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa fa-user fa-lg text-primary"></i>
                    </div>
                </div>
            </div>
            <!-- END card-body -->
        </div>
        <!-- END card -->
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="row">
            <div class="col-4">
                <!-- BEGIN card -->
                <div class="card mb-3 overflow-hidden fs-13px border-0 bg-blue">
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                            Today's fixtures
                        </h5>
                        <h3 class="text-white mt-n1">
                        </h3>
                        <div>
                            <a href="{{ route('Reports.undone') }}"
                                class="text-white d-flex align-items-center text-decoration-none">
                                View report
                                <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN card-body -->
                </div>
                <!-- END card -->
            </div>
            <div class="col-4">
                <!-- BEGIN card -->
                <div class="card mb-3 overflow-hidden fs-13px border-0 bg-blue">
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                            Pre 3
                        </h5>
                        <h3 class="text-white mt-n1">
                        </h3>
                        <div>
                            <a href="{{ route('Reports.undone') }}"
                                class="text-white d-flex align-items-center text-decoration-none">
                                View report
                                <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN card-body -->
                </div>
                <!-- END card -->
            </div>
            <div class="col-4">
                <!-- BEGIN card -->
                <div class="card mb-3 overflow-hidden fs-13px border-0 bg-blue">
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                            Non-Pre
                        </h5>
                        <h3 class="text-white mt-n1">
                        </h3>
                        <div>
                            <a href="{{ route('Reports.undone') }}"
                                class="text-white d-flex align-items-center text-decoration-none">
                                View report
                                <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN card-body -->
                </div>
                <!-- END card -->
            </div>
        </div>


        <div class="row">
            <div class="col-4">
                <!-- BEGIN card -->
                <div class="card mb-3 overflow-hidden fs-13px border-0 ">
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                            Yesterday's Fxs
                        </h5>
                        <h3 class="text-white mt-n1">
                        </h3>
                        <div>
                            <a href="{{ route('Reports.undone') }}"
                                class="text-white d-flex align-items-center text-decoration-none">
                                View report
                                <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN card-body -->
                </div>
                <!-- END card -->
            </div>
            <div class="col-4">
                <!-- BEGIN card -->
                <div class="card mb-3 overflow-hidden fs-13px border-0 ">
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                            End 3
                        </h5>
                        <h3 class="text-white mt-n1">
                        </h3>
                        <div>
                            <a href="{{ route('Reports.undone') }}"
                                class="text-white d-flex align-items-center text-decoration-none">
                                View report
                                <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN card-body -->
                </div>
                <!-- END card -->
            </div>
            <div class="col-4">
                <!-- BEGIN card -->
                <div class="card mb-3 overflow-hidden fs-13px border-0 ">
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                            Non-end
                        </h5>
                        <h3 class="text-white mt-n1">
                        </h3>
                        <div>
                            <a href="{{ route('Reports.undone') }}"
                                class="text-white d-flex align-items-center text-decoration-none">
                                View report
                                <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                            </a>
                        </div>
                    </div>
                    <!-- BEGIN card-body -->
                </div>
                <!-- END card -->
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="row">
            <div class="col-8">
                <!-- BEGIN card -->
                <div class="card mb-3 flex-1">
                    <!-- BEGIN card-body -->
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h5 class="mb-1">
                                    <a href="{{ route('Mybets.index') }}"
                                        class=" ">
                                        Investment
                                    </a>
                                </h5>
                                <div>Store user account registration</div>
                            </div>
                            <a href="#" data-bs-toggle="dropdown" class="text-muted ms-2"><i class="fa fa-redo"></i></a>
                            <a href="#" data-bs-toggle="dropdown" class="text-muted ms-2"><i class="fa fa-redo"></i></a>
                            <a href="#" data-bs-toggle="dropdown" class="text-muted ms-2"><i class="fa fa-redo"></i></a>
                        </div>

                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h3 class="mb-1">184,593</h3>
                                <div class="text-success fw-600 fs-13px">
                                    <i class="fa fa-caret-up"></i> +3.59%
                                </div>
                            </div>
                            <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa fa-user fa-lg text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END card-body -->
                </div>
                <!-- END card -->
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            // my-button
            $('#pattern_from_ajax').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('Ajax.pattern_from') }}",
                    type: "GET",
                    success: function(response) {
                        // Process the response
                        $('#pattern_from').append(response.foox );
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // Handle the error scenario
                    }
                });
            });

            // my-button
            $('#pattern_only_ajax').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('Ajax.pattern_only') }}",
                    type: "GET",
                    success: function(response) {
                        // Process the response
                        $('#pattern_only').append(response.foox );
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // Handle the error scenario
                    }
                });
            });

            // my-button
            $('#undone_ajax').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('Ajax.undone') }}",
                    type: "GET",
                    success: function(response) {
                        // Process the response
                        $('#undone').append(response.foox );
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // Handle the error scenario
                    }
                });
            });

        });
    </script>
@endpush
