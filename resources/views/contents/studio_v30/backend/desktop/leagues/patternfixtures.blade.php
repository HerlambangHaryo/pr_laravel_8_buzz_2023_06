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
                                <x-html.th-content title="Season"   />  
                                <x-html.th-content title="Fixtureapi_id"   />  
                                <x-html.th-content-width title="Action" width="15%" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $loop->iteration }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->leagueapi_id }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->season }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->fixtureapi_id }}  
                                    </td>    
                                    <td class="text-center">  
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
