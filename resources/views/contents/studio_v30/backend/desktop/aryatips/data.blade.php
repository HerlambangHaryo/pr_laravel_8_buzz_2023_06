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
                                <x-html.th-content title="League"   />
                                <x-html.th-content title="Match"   />
                                <x-html.th-content title="Betid" />
                                <x-html.th-content title="Value" />
                                <x-html.th-content title="Odd" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->id }}
                                    </td>
                                    <td class="text-left">
                                        <i class="flag-icon flag-icon-{{ strtolower($row->fixture->league->country->code) }} "
                                            title="{{ strtolower($row->fixture->league->country->code) }}"
                                            id="{{ strtolower($row->fixture->league->country->code) }}"></i>
                                        {{ $row->fixture->league->country->name }}
                                        <br/>
                                        <a
                                            href="{{ route('Anytimegoalscorers.league', $row->leagueapi_id ) }}"
                                            class=" ">
                                            #{{ $row->leagueapi_id }}
                                            {{ $row->fixture->league->name }}  -
                                            {{ $row->season }}
                                        </a>
                                        <br/>
                                        {{ $row->fixtureapi_id }}
                                    </td>
                                    <td class="text-center">
                                        <a
                                            href="{{route('Teams.show', $row->fixture->teams_homeapi_id )}}"
                                            class=" ">
                                            {{ $row->fixture->home->name }}
                                        </a>
                                        <br/>
                                        <a
                                            href="{{route('Teams.show', $row->fixture->teams_awayapi_id )}}"
                                            class=" ">
                                            {{ $row->fixture->away->name }}
                                        </a>
                                        <br/>
                                        <x-studio_v30.badge-fixture-status
                                            link="https://www.google.com/search?client=firefox-b-d&q={!! $row->fixture->home->name !!}+vs+{!! $row->fixture->away->name !!}+flashscore"
                                            nama="{{ $row->fixture->fixture_status }}"/>
                                    </td>
                                    <td class="text-center">
                                        {{ $row->bet->bet }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->value }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->odd }}
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
