@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
     
    @include('contents.studio_v30.backend.desktop.leagues.pre_sub_head') 
      
    <div class="alert alert-secondary text-center">
        <strong>Alert!</strong> this data from <strong>Football_pattern_from</strong>.  
    </div>

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
                                <x-html.th-content title="Pre ah"   />  
                                <x-html.th-content title="Pre gou"   />  
                                <x-html.th-content title="End ah"   />  
                                <x-html.th-content title="End gou"   />   
                                <x-html.th-content title="Count" />  
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
                                        {{ $row->pre_ah_pattern }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->pre_gou_pattern }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->end_ah_pattern }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->end_gou_pattern }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->total_fixtures }}  
                                    </td>  
                                    <td class="text-center">  
                                        
                                        <a 
                                            href="{{route('Leagues.patternfixtures', [
                                                    'leagueapi_id'      => $leagueapi_id,
                                                    'season'            => $season,
                                                    'pre_ah_pattern'    => $row->pre_ah_pattern,
                                                    'pre_gou_pattern'   => $row->pre_gou_pattern,
                                                    'end_ah_pattern'    => $row->end_ah_pattern,
                                                    'end_gou_pattern'   => $row->end_gou_pattern,
                                                ])}}" 
                                            > 
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
