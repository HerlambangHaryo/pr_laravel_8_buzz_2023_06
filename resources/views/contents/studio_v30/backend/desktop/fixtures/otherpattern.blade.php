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
                                            <x-html.th-content title="Pre" />
                                            <x-html.th-content title="End"   /> 
                                            <x-html.th-content title="Counter"   /> 
                                        </tr>
                                    </thead>
                                    <tbody>   

                                        @forelse ($data0 as $row)
                                            <tr> 
                                                <td class="text-center"> 
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->pre_ah_pattern }} 
                                                    </span>
                                                    <br/>
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->pre_gou_pattern }} 
                                                    </span>
                                                </td>
                                                <td class="text-center"> 
                                                    <span class="badge bg-gray-700">
                                                        {{ $row->end_ah_pattern }} 
                                                    </span>
                                                    <br/>
                                                    <span class="badge bg-gray-700">
                                                        {{ $row->end_gou_pattern }} 
                                                    </span>
                                                </td>
                                                <td class="text-center"> 
                                                    {{ $row->counter }}  
                                                </td>
                                            </tr>
                                            @empty 
                                                
                                        @endforelse     
                                        @forelse ($data1 as $row)
                                            <tr> 
                                                <td class="text-center"> 
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->pre_ah_pattern }} 
                                                    </span>
                                                    <br/>
                                                    <span class="badge bg-gray-900">
                                                        {{ $row->pre_gou_pattern }} 
                                                    </span>
                                                </td>
                                                <td class="text-center"> 
                                                    <span class="badge bg-gray-700">
                                                        {{ $row->end_ah_pattern }} 
                                                    </span>
                                                    <br/>
                                                    <span class="badge bg-gray-700">
                                                        {{ $row->end_gou_pattern }} 
                                                    </span>
                                                </td>
                                                <td class="text-center"> 
                                                    {{ $row->counter }}  
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
