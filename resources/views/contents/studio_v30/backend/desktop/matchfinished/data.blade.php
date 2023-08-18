@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')

    <div class="row mb-1">
        <div class="col-12 text-center">
            <div class="btn-group">
                <a
                    href="{{ route('Notstarted.index') }}"
                    class="btn btn-sm btn-secondary">
                    League
                </a>
                <a
                    href="{{ route('Notstarted.timegroup') }}"
                    class="btn btn-sm btn-secondary">
                    Time
                </a>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        {!! define_date('view_end_0') !!}
    </div>

    <div class="row mb-2">
        @forelse ($data as $row)
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                {{ $loop->iteration }}
                            </div>
                            <div class="col-2">
                                <i class="flag-icon flag-icon-{{ strtolower($row->league->country->code) }} "
                                    title="{{ strtolower($row->league->country->code) }}"
                                    id="{{ strtolower($row->league->country->code) }}"></i>
                                <a

                                    class="btn btn-link">
                                    {{ $row->league->country->name }}
                                </a>
                            </div>
                            <div class="col-3">
                                <abbr class="initialism">
                                    #{{ $row->leagueapi_id }}
                                </abbr>
                                <a
                                    href="{{route('Leagues.notstarted', [
                                            'leagueapi_id'  => $row->leagueapi_id,
                                            'season'        => $row->season,
                                        ])}}"
                                    class="btn btn-link">
                                        {{ $row->league->name }}
                                </a>
                            </div>
                            <div class="col-1 ">
                                {{ $row->season }}
                            </div>
                            <div class="col-2 text-center">
                                @if($row->league->bookmakersapi_id == 11)
                                    <span class="badge bg-primary" >
                                        {{ $row->league->bookmakers_name }}
                                    </span>
                                @elseif($row->league->bookmakersapi_id == 8)
                                    <span class="badge bg-success" >
                                        {{ $row->league->bookmakers_name }}
                                    </span>
                                @elseif($row->league->bookmakersapi_id == 2)
                                    <span class="badge bg-danger" >
                                        {{ $row->league->bookmakers_name }}
                                    </span>
                                @endif
                            </div>
                            <div class="col-1 text-center">
                                {!! $row->league->star !!}
                            </div>
                            <div class="col-1 text-center">
                                ({{ $row->counter }})
                            </div>
                            <div class="col-1  text-center">
                                <a
                                    href="{{ route($content.'.leagues', [
                                            'leagueapi_id'  => $row->leagueapi_id,
                                            'season'        => $row->season,
                                        ]) }}"
                                    class=" ">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty

        @endforelse
    </div>
@endsection
