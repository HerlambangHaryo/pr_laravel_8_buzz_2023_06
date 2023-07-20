@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
      
    <div class="row mb-2"> 
        <div class="col-6">
            <a href="{{route('Rapidapi.teams', $row->teams_homeapi_id)}}">update</a>    
        </div>
        <div class="col-6 text-end">
            {{ (microtime(true) - LARAVEL_START) }} 
        </div>
    </div>
    <div class="row mb-2"> 
        <div class="col-12 mb-3">
            <div class="card border-0 text-white overflow-hidden"  > 
                <!-- card-img -->
                <img src="{{$row->venue->image}}" class="card-img" />
                 
                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded"> 
 
                    @include('contents.includes.fixture_menu') 
                    @include('contents.includes.fixture_info')  
 

                    <div class="row d-flex justify-content-center text-center mt-1">
                        <div class="col-6 mt-1">
                            Home
                            <br/>

                            
                            @forelse ($home as $row)
                                    {{$row->player->playerapi_id}}
                                    {{$row->player->name}}--
                                    {{$row->rating}}x
                                    <br/>
                                @empty 
                            @endforelse    
                        </div>
                        <div class="col-6 mt-1">
                            Away
                            <br/>

                            
                            @forelse ($away as $row)
                                    {{$row->player->playerapi_id}}
                                    {{$row->player->name}}--
                                    {{$row->rating}}x
                                    <br/>
                                @empty 
                            @endforelse   
                        </div>
                    </div>

                </div>
            </div>
  
        </div>
    </div> 
@endsection
