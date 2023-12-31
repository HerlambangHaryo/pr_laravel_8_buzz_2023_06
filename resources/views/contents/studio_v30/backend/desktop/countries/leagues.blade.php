@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')
    <div class="row mb-4">
        <div class="col-12 text-center ">
            <i class="flag-icon flag-icon-{{ strtolower($data_country->code) }} "
                title="{{ strtolower($data_country->code) }}"
                id="{{ strtolower($data_country->code) }}"></i>
                {{ $data_country->name }}
        </div>
    </div>

    <div class="row">
    @forelse ($data as $row)
        <div class="col-3">
            <div class="card mb-3 flex-1">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">
                                #{{ $row->leagueapi_id }}
                                {{ $row->name }}
                            </h5>
                            <div>
                                {{ $row->type }} - {{ $row->season }}
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="flex-grow-1">
                            @if($row->bookmakersapi_id == 11)
                                <span class="badge bg-primary  ">
                                    {{ $row->bookmakers_name }}
                                </span>
                            @elseif($row->bookmakersapi_id == 8)
                                <span class="badge bg-success  ">
                                    {{ $row->bookmakers_name }}
                                </span>
                            @endif
                            <a
                                href="{{ route('Leagues.notstarted',
                                    [
                                        'leagueapi_id'  => $row->leagueapi_id,
                                        'season'        => $row->season
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
        @empty

    @endforelse
    </div>
@endsection
