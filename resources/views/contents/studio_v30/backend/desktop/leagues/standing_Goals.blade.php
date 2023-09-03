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
                                <x-html.th-content-width title="R" width="10%" /> 
                                <x-html.th-content title="Logo"   />  
                                <x-html.th-content title="Teams"   />  
                                <x-html.th-content title="MP"   />  
                                <x-html.th-content title="W"   />  
                                <x-html.th-content title="D"   />  
                                <x-html.th-content title="L"   />  
                                <x-html.th-content title="G"   />  
                                <x-html.th-content title="Gd"   />  
                                <x-html.th-content title="PTS"   />   
                                <x-html.th-content title="mp" /> 
                                <x-html.th-content title="w" /> 
                                <x-html.th-content title="d" /> 
                                <x-html.th-content title="l" /> 
                                <x-html.th-content title="g" />  
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        <small>
                                        {{ $row->rank  }}    
                                        </small>
                                    </td> 
                                    <td class="text-center">  
                                        <img src="{{ $row->team->logo }}" alt="" width="40px"> 
                                    </td> 
                                    <td class="text-center">  
                                         
                                        <a    
                                            href="{{route('Teams.show', $row->team->teamapi_id )}}"
                                            class=" "> 
                                            <small>
                                                {{ $row->team->name }} 
                                            </small>
                                        </a> 
                                        <br/>
                                        <small> 
                                            {{ $row->form }}   
                                        </small>
                                    </td> 
                                    <td class="text-center">   
                                        <small>
                                            {{ $row->played }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">  
                                        <small> 
                                        {{ $row->win }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->draw }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->lose }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->goals_for }}:{{ $row->goals_againts }} 
                                        </small>
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->goals_diff }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->points }}  
                                        </small>
                                    </td>  
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->home_played }}  
                                        </small>

                                        <hr/>

                                        <small>
                                        {{ $row->away_played }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">  
                                        <small>
                                            {{ $row->home_win }}  
                                        </small>

                                        <hr/>

                                        <small>
                                            {{ $row->away_win }}  
                                        </small>
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->home_draw }}  
                                        </small>

                                        <hr/>
                                        <small>
                                        {{ $row->away_draw }}  
                                        </small>

                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->home_lose }}  
                                        </small>

                                        <hr/>
                                        <small>
                                        {{ $row->away_lose }}  
                                        </small>
                                        
                                    </td>   
                                    <td class="text-center">   
                                        <small>
                                        {{ $row->home_goals_for }}:{{ $row->home_goals_againts }} 
                                        </small>

                                        <hr/>
                                        <small>
                                        {{ $row->away_goals_for }}:{{ $row->away_goals_againts }} 
                                        </small>

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
