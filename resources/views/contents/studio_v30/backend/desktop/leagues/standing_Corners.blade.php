@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')

    @include('contents.studio_v30.backend.desktop.leagues.pre_sub_head')

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
                                <x-html.th-content-width title="R" width="10%" />
                                <x-html.th-content title="Logo"   />
                                <x-html.th-content title="Teams"   />
                                <x-html.th-content title="MP"   />
                                <x-html.th-content title="Total"   />
                                <x-html.th-content title="Min"   />
                                <x-html.th-content title="Avg"   />
                                <x-html.th-content title="Max"   />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        <small>
                                        {{ $row->rank  }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ $row->team->logo }}" alt="" width="40px">
                                    </td>
                                    <td class="text-center">

                                        <a
                                            href="{{route('Teams.show', $row->team->teamapi_id )}}"
                                            class=" ">
                                            <small>
                                                {{ $row->team->name }}
                                            </small>
                                        </a>
                                        <br/>
                                        <small>
                                            {{ $row->form }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <small>
                                            {{ $row->played }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <small>
                                        {{ $row->corner_kicks_total }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <small>
                                        {{ $row->corner_kicks_min }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <small>
                                        {{ $row->corner_kicks_avg }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <small>
                                        {{ $row->corner_kicks_max }}
                                        </small>
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
