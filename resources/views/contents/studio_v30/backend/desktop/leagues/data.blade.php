@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')

    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Data {!!$panel_name!!}
                    </div>
                    <div class="col-6 text-end">
                        <x-studio_v30.button-create content="{{$content}}" />
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Logo"   />
                                <x-html.th-content title="Country"   />
                                <x-html.th-content title="League" />
                                <x-html.th-content title="Bookm" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->leagueapi_id }}
                                    </td>
                                    <td class="text-left">
                                        <!-- card-img -->
                                            <img
                                                width="100%"
                                                src="{{ $row->logo }}"
                                                alt="">
                                    </td>
                                    <td class="text-start">
                                        {{ $row->country_name }}
                                    </td>
                                    <td class="text-start">
                                        {{ $row->name }}
                                    </td>
                                    <td class="text-center">
                                        @if($row->bookmakersapi_id == 11)
                                            <span class="badge bg-primary" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 8)
                                            <span class="badge bg-success" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 6)
                                            <span class="badge bg-success" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 2)
                                            <span class="badge bg-danger" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 28)
                                            <span class="badge bg-warning" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 1)
                                            <span class="badge bg-warning" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 7)
                                            <span class="badge bg-primary" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 21)
                                            <span class="badge bg-primary" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @elseif($row->bookmakersapi_id == 24)
                                            <span class="badge bg-primary" >
                                                {{ $row->bookmakers_name }}
                                            </span>
                                        @else
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 8,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            Bet365
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 11,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            1xBet
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 2,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            Marathon
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 27,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            NordicBet
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 28,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            ComeOn
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 6,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            Bwin
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 1,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            10Bet
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 7,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            William
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 21,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            888Sport
                                                        </a>
                                                        <a href="{{ route('Leagues.setbookmakers_league',
                                                                        [
                                                                            'bookmakersapi_id'  => 24,
                                                                            'leagueapi_id'      => $row->leagueapi_id
                                                                        ]
                                                                    ) }}"
                                                            class="btn btn-default btn-sm" >
                                                            Betway
                                                        </a>


                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
@endsection
