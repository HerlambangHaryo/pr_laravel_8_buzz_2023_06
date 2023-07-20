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
                                <x-html.th-content title="Pre"   />  
                                <x-html.th-content title="End"   />  
                                <x-html.th-content title="Fixture Status" /> 
                                <x-html.th-content title="Season" /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $loop->iteration }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->pre_response }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->end_response }}  
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->fixture_status }}  
                                    </td>   
                                    <td class="text-center">  
                                        {{ $row->season }}  
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
