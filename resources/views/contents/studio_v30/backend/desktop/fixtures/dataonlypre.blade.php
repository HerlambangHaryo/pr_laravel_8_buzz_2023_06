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
            <div class="card border-0 text-white overflow-hidden"  style="max-height: 350px" > 
                <!-- card-img -->
                {!! define_venue($row->venueapi_id, $row->venue->image) !!} 
                 
                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded"> 
 
                    @include('contents.includes.fixture_menu') 
                    @include('contents.includes.fixture_info')  

                    <div class="row d-flex justify-content-center text-center mt-1">
                        <div class="col-2 mt-1">
                            <span class="badge bg-gray-900">
                                {{ $row->pre_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->pre_gou_pattern }} 
                            </span>
                        </div> 
                        <div class="col-4  mt-1"> 
                        </div> 
                        <div class="col-2  mt-1">
                            <span class="badge bg-gray-900">
                                {{ $row->end_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->end_gou_pattern }} 
                            </span>
                        </div> 
                    </div> 
                    
  
                </div>
            </div>
 

            <div class="card mt-2"> 
                
                <div id="datatable" class="mb-5">
                    <div class="card">
                        <div class="card-header">
                            Data Only Pre
                        </div>
                        <div class="card-body">      
                            <div>
                                <table id="datatableDefault" class="table  ">
                                    <thead class=" ">
                                        <tr>               
                                            <x-html.th-content-width title="No." width="10%" />
                                            <x-html.th-content title="Date"   />  
                                            <x-html.th-content title="Leagues"   /> 
                                            <x-html.th-content title="Teams"   /> 
                                            <x-html.th-content title="Goals"   /> 
                                            <x-html.th-content title="Pre" />
                                            <x-html.th-content title="End"   /> 
                                        </tr>
                                    </thead>
                                    <tbody>   

                                        @forelse ($data as $row)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="text-left">  
                                                    {{ $row->tanggal }}
                                                    <br/>
                                                    <abbr class="initialism">
                                                        {{ $row->jam }}
                                                    </abbr>  
                                                    @if($row->league->bookmakersapi_id == 11)
                                                        <span class="badge bg-primary  ">
                                                            {{ $row->league->bookmakers_name }}   
                                                        </span>
                                                    @elseif($row->league->bookmakersapi_id == 8)
                                                        <span class="badge bg-success  ">
                                                            {{ $row->league->bookmakers_name }}   
                                                        </span>
                                                    @endif  
                                                    <span class="badge bg-gray-900 mt-2 "> 
                                                        {{ $row->fixtureapi_id }}
                                                    </span>
                                                </td>   
                                                <td> 
                                                    <small>
                                                        {{ $row->venue->name }} 
                                                        <br/>
                                                        <abbr class="initialism">
                                                            {{ $row->venue->city }} 
                                                        </abbr>  
                                                    </small>
                                                    <br/>
                                                    <span class="badge bg-gray-800 mt-2 "> 
                                                        {{ $row->round }}
                                                    </span>
                                                </td>
                                                <td> 
                                                    <a    
                                                        href="{{route('Teams.show', $row->teams_homeapi_id )}}"
                                                        class=" "> 
                                                        {{ $row->home->name }} 
                                                    </a> 
                                                    <br/>
                                                    <a    
                                                        href="{{route('Teams.show', $row->teams_awayapi_id )}}"
                                                        class=" "> 
                                                        {{ $row->away->name }} 
                                                    </a>  
                                                    <br/>
                                                    <x-studio_v30.badge-fixture-status 
                                                                link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore" 
                                                                nama="{{ $row->fixture_status }}"/>  
                                                </td>
                                                <td class="text-center"> 
                                                    {{ $row->goals_home }} 
                                                    <br/>
                                                    {{ $row->goals_away }} 
                                                </td>
                                                <td> 
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->pre_ah_pattern }} 
                                                    </span>
                                                    <br/>
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->pre_gou_pattern }} 
                                                    </span>
                                                </td>
                                                <td> 
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->end_ah_pattern }} 
                                                    </span>
                                                    <br/>
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->end_gou_pattern }} 
                                                    </span>
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
            </div>
  
        </div>
    </div> 
@endsection
