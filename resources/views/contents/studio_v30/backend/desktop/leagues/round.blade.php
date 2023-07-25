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
                                <x-html.th-content title="Round" /> 
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
                                        {{ $row->round }}  
                                    </td>   
                                    <td class="text-center"> 
                                        <a  
                                            href="{{ route('Leagues.detailround',  
                                                [ 
                                                    'leagueapi_id'  => $leagueapi_id, 
                                                    'season'        => $season, 
                                                    'round'         => str_replace(' ', '_', $row->round)   
                                                ])
                                            }}" 
                                            class=" 
                                            ">
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
