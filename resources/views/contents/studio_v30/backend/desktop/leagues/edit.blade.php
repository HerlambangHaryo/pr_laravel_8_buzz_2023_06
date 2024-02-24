@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')

    <form class="col-12"
        action="{{ route($content.'.update', $data->id ) }}"
        method="POST"   >
        @csrf
        @method('PUT')

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header
                view="{{ $view_file }}"
                panel="{{ $panel_name }}"/>
            <div class="card-body pb-4">
                <div class="row justify-content-md-center">
                    <div class="col-11">

                        <!-- country -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Country
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="country_name"
                                        value="{{ old('country_name', $data->country_name) }}"
                                    >
                                </div>
                            </div>

                        <!-- leagueapi_id -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Leagueapi id
                                </label>
                                <div class="col-2">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="leagueapi_id"
                                        value="{{ old('leagueapi_id', $data->leagueapi_id) }}"
                                    >
                                </div>
                            </div>

                        <!-- Name -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Name
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="name"
                                        value="{{ old('name', $data->name) }}"
                                    >
                                </div>
                            </div>

                        <!-- type -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Type
                                </label>
                                <div class="col-3">
                                    <select class="form-select"
                                        name="type">
                                        <option value="">
                                            Pilih Type
                                        </option>
                                        <option value="League"
                                            @if($data->type == 'League')
                                                selected
                                            @endif
                                        >
                                        League
                                        </option>
                                        <option value="Cup"
                                            @if($data->type == 'Cup')
                                                selected
                                            @endif
                                        >
                                            Cup
                                        </option>
                                    </select>
                                </div>
                            </div>

                        <!-- Name -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Tier
                                </label>
                                <div class="col-6">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        name="tier"
                                        value="{{ old('tier', $data->tier) }}"
                                    >
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <x-studio_v30.button-submit />
    </form>
@endsection
