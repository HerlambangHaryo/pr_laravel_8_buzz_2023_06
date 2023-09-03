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
                    <table  class="table myTable ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="ID." width="10%" />
                                <x-html.th-content title="Player" />
                                <x-html.th-content title="Rating" />
                                <x-html.th-content title="Team" />
                                <x-html.th-content-width title="Action" width="15%" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($goalkeeper as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->playerapi_id }}
                                    </td>
                                    <td class="text-left">
                                        {{ $row->player->name }}

                                    </td>
                                    <td class="text-center">
                                        {{ $row->player->squad->team->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->rating }}
                                    </td>
                                    <td class="text-left">
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
                    <table  class="table myTable ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="ID." width="10%" />
                                <x-html.th-content title="Player" />
                                <x-html.th-content title="Rating" />
                                <x-html.th-content title="Team" />
                                <x-html.th-content-width title="Action" width="15%" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($defender as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->playerapi_id }}
                                    </td>
                                    <td class="text-left">
                                        {{ $row->player->name }}

                                    </td>
                                    <td class="text-center">
                                        {{ $row->player->squad->team->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->rating }}
                                    </td>
                                    <td class="text-left">
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
                    <table  class="table myTable ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="ID." width="10%" />
                                <x-html.th-content title="Player" />
                                <x-html.th-content title="Rating" />
                                <x-html.th-content title="Team" />
                                <x-html.th-content-width title="Action" width="15%" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($midfielder as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->playerapi_id }}
                                    </td>
                                    <td class="text-left">
                                        {{ $row->player->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->player->squad->team->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->rating }}
                                    </td>
                                    <td class="text-left">
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
                    <table  class="table myTable ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="ID." width="10%" />
                                <x-html.th-content title="Player" />
                                <x-html.th-content title="Rating" />
                                <x-html.th-content title="Team" />
                                <x-html.th-content-width title="Action" width="15%" />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($attacker as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->playerapi_id }}
                                    </td>
                                    <td class="text-left">
                                        {{ $row->player->name }}

                                    </td>
                                    <td class="text-center">
                                        {{ $row->player->squad->team->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->rating }}
                                    </td>
                                    <td class="text-left">
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
