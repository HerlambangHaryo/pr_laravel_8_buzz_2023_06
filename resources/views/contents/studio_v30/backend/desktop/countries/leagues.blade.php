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
                                <x-html.th-first /> 
                                <x-html.th-content title="League"   />  
                                <x-html.th-content title="Season"   />  
                                <x-html.th-content title="Type"   />   
                                <x-html.th-content title="Bookmakers"   />  
                                <x-html.th-last />  
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->leagueapi_id }}
                                    </td> 
                                    <td class="text-left">   
                                        {{ $row->name }}  
                                    </td>  
                                    <td class="text-center">
                                        {{ $row->season }}
                                    </td>  
                                    <td class="text-center">
                                        {{ $row->type }}  
                                    </td> 
                                    <td class="text-center">
                                        @if($row->bookmakersapi_id == 11)
                                            <span class="badge bg-primary  ">
                                                {{ $row->bookmakers_name }}   
                                            </span>
                                        @elseif($row->bookmakersapi_id == 8)
                                            <span class="badge bg-success  ">
                                                {{ $row->bookmakers_name }}   
                                            </span>
                                        @endif  
                                    </td> 
                                    <td class="text-center">  
                                        <a href="{{ route('Leagues.notstarted',  
                                                [ 
                                                    'leagueapi_id'  => $row->leagueapi_id, 
                                                    'season'        => $row->season
                                                ])
                                            }}" 
                                            class="btn btn-default btn-sm" >
                                            View  
                                        </a>     
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
