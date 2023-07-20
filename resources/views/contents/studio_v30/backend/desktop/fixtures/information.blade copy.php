@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
      
    <div class="row mb-2"> 
        <a href="{{route('Rapidapi.teams', $row->home_teamapi_id)}}">update</a>
    </div>
    <div class="row mb-2"> 
        <div class="col-12 mb-3">

            <div class="card border-0 text-white overflow-hidden"  >
                <!-- card-img -->
                <img src="{{$row->venue->image}}" class="card-img" />
            
                <!-- card-img-overlay -->
                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-50 rounded">
                    <!-- top content -->
                    <div class="flex-fill">
                        <div class="d-flex align-items-center">
                            <h6> 
                                {{$row->name}} 
                            </h6> 
                        </div>
                    </div>
                     
                    <div class="row d-flex justify-content-center"> 
                        
                        <div class="col-1">  
                            <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-center">
                                <img src="{{$row->home->logo}}" alt="" class="ms-100 mh-100">
                            </div>
                        </div> 
                        <div class="col-2">  
                            <br/>
                            <a    
                                href="{{route('Teams.show', $row->teams_homeapi_id )}}"
                                class=" "> 
                                {{ $row->home->name }} 
                            </a> 
                            <br/>
                            {{ $row->home_stats->form }}
                        </div> 
                        <div class="col-2 text-center">  
                            <br/>
                            <br/>
                            <small>
                                <a     
                                    class=" "> 
                                    {{ $row->venue->name }}
                                </a> 
                                    - {{ $row->venue->city }} 
                                <br/> 
                                {{ $row->tanggal }} {{ $row->jam }}
                                <br/>
                                <span class="badge bg-gray-800 "> 
                                    {{ $row->fixtureapi_id }}
                                </span>
                                <span class="badge bg-gray-800 "> 
                                    {{ $row->round }}
                                </span>
                                <br/>
                                <x-studio_v30.badge-fixture-status 
                                    link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore" 
                                    nama="{{ $row->fixture_status }}"/>  
                            </small> 
                        </div> 
                        <div class="col-2 text-end">  
                            <br/>
                            <a    
                                href="{{route('Teams.show', $row->teams_awayapi_id )}}"
                                class=" "> 
                                {{ $row->away->name }} 
                            </a> 
                            <br/>
                            {{ $row->away_stats->form }}
                        </div> 
                        <div class="col-1">  
                            <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-center">
                                <img src="{{$row->away->logo}}" alt="" class="ms-100 mh-100">
                            </div>
                        </div>  
                    </div>
   
                </div>
 
            </div>


            <div class="card mt-4">
                <div class="card-body">  
                    <div class="row d-flex justify-content-center">    
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->pre_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->pre_gou_pattern }} 
                            </span>
                        </div> 
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->end_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->end_gou_pattern }} 
                            </span>
                        </div> 
                        <div class="col-1 text-center"> 
                            <a   
                                href="{{route('Fixtures.setone', $row->id)}}" 
                                class=" "> 
                                One
                            </a> 
                        </div>
                        <div class="col-1 text-center">   
                            {{ $row->pre_response }}-{{ $row->end_response }}
                            <br/>
                            <a   
                                href="{{ route('Fixtures.information', [
                                        'leagueapi_id'      => $row->leagueapi_id,
                                        'season'            => $row->season,
                                        'fixtureapi_id'     => $row->fixtureapi_id,
                                    ])}}"
                                target="_blank"
                                class=" "> 
                                View
                            </a> 
                        </div>
                    </div> 
                </div>  
            </div>
 
            @include('contents.includes.pattern')

            @include('contents.includes.data_list_details') 

            @include('contents.includes.data_list_details_part_two') 
            
        </div>
    </div> 
@endsection
