@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')

    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                Data {!!$panel_name!!}
            </div>
            <div class="card-body">
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Account"   />
                                <x-html.th-content title="Reset at"   />
                                <x-html.th-content title="Active"   />
                                <x-html.th-content title="Counter"   />
                                <x-html.th-content title="Action" />
                                <x-html.th-content title="Updated at"   />
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-left">
                                        {{ $row->account }}
                                        <br/>
                                        <small>
                                            {{ $row->apikey }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                            $now = new DateTime();
                                            $date = new DateTime($row->reset_date_at);

                                            $hours =  $date->diff($now)->format("%h hours");

                                        ?>
                                        {{ $hours }}
                                    </td>
                                    <td class="text-center">
                                        @if($row->active == 1)
                                            <i class="fa-solid fa-toggle-on"></i>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        {{ $row->counter }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('Rapidapi.on', $row->id ) }}"
                                            class="btn btn-default btn-sm" >
                                            On
                                        </a>
                                        <a href="{{ route('Rapidapi.reset', $row->id ) }}"
                                            class="btn btn-default btn-sm" >
                                            Reset
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        {{ $row->updated_at }}
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
