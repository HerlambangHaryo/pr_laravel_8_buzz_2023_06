@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
     
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Data {!!$panel_name!!}
                    </div>
                    <div class="col-6 text-end"> 
                        <x-studio_v30.button-create content="{{$content}}" /> 
                    </div>
                </div>
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content-width title="No." width="10%" /> 
                                <x-html.th-content title="leagueapi_id"   />  
                                <x-html.th-content title="season"   />  
                                <x-html.th-content title="fixtureapi_id" />
                                <x-html.th-content title="betsapi_id" />
                                <x-html.th-content title="value" /> 
                                <x-html.th-content title="odd" />
                                <x-html.th-content title="investment" />
                                <x-html.th-content title="return" />
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
                                        {{ $row->betsapi_id }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->value }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->odd }}  
                                    </td>   
                                    <td class="text-center">  
                                        {{ $row->investment }}  
                                    </td>   
                                    <td class="text-center">  
                                        {{ $row->return_investment }}  
                                    </td>   
                                    <td class="text-center">  
                                        {{ $row->investment }}  
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
