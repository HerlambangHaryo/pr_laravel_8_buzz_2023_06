@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
     
    <div class="row mb-1">
        <div class="col-12 text-center"> 
            <div class="btn-group">
                <a  
                    href="{{ route('Notstarted.index') }}"
                    class="btn btn-sm btn-secondary">
                    Notstarted
                </a>  
                <a  
                    class="btn btn-sm btn-secondary">
                    League Group
                </a>  
                <a  
                    class="btn btn-sm btn-secondary">
                    Time Group
                </a>   
                <a  
                    class="btn btn-sm btn-secondary">
                    One
                </a> 
                <a  
                    class="btn btn-sm btn-secondary">
                    Clear
                </a> 
            </div>
        </div>  
    </div> 

    <div class="row mb-4">
        {!! define_date('view') !!}
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
                                <a 
                                    href="{{route('Leagues.notstarted',[
                                            'leagueapi_id'  => $row->leagueapi_id,
                                            'season'        => $row->season,
                                        ])}}"
                                    class="badge bg-gray-900 "> 
                                    {{ $row->league->country }}
                                </a>
                                <br/>
                                {{ $row->league->name }}
                                <br/>
                                {{ $row->season }}
                            </div> 
                            <div class="col-1 text-center"> 
                                {{ $row->tanggal }}
                                <br/>
                                <span class="badge bg-gray-900 "> 
                                    {{ $row->fixtureapi_id }}
                                </span>
                            </div>
                            <div class="col-1"> 
                                {{ $row->jam }}
                            </div>
                            <div class="col-3">
                                {{ $row->home->name }} 
                                <br/>
                                {{ $row->away->name }} 
                                <br/>
                                <x-studio_v30.badge-fixture-status 
                                            link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore" 
                                            nama="{{ $row->fixture_status }}"/>  
                            </div> 
                            <div class="col-2">
                                <span class="badge bg-gray-900">
                                    {{ $row->pre_ah_pattern }} 
                                </span>
                                <br/>
                                <span class="badge bg-gray-900">
                                    {{ $row->pre_gou_pattern }} 
                                </span>
                            </div> 
                            <div class="col-1 text-center"> 
                                <a   
                                    href="{{ route($content.'.leagues', [
                                            'leagueapi_id'  => $row->leagueapi_id,
                                            'season'        => $row->season,
                                        ]) }}"
                                    class=" "> 
                                    One
                                </a> 
                            </div>
                            <div class="col-1 text-center"> 
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
