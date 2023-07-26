
<div id="datatable" class="mt-3 mb-5">
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
                            <x-html.th-content title="Pre Home" />
                            <x-html.th-content title="Pre Draw" />
                            <x-html.th-content title="Pre Away" /> 
                            <x-html.th-content title="End Home" />
                            <x-html.th-content title="End Draw" />
                            <x-html.th-content title="End Away" /> 
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
                                <td class="text-center"> 
                                    <small >
                                        {{ $row->pre_match_winner_home }} 
                                    </small> 
                                </td>
                                <td class="text-center"> 
                                    <small >
                                        {{ $row->pre_match_winner_draw }} 
                                    </small> 
                                </td>
                                <td class="text-center"> 
                                    <small >
                                        {{ $row->pre_match_winner_away }} 
                                    </small> 
                                </td>
                                <td class="text-center"> 
                                    <small >
                                        {{ $row->end_match_winner_home }} 
                                    </small> 
                                </td>
                                <td class="text-center"> 
                                    <small >
                                        {{ $row->end_match_winner_draw }} 
                                    </small> 
                                </td>
                                <td class="text-center"> 
                                    <small >
                                        {{ $row->end_match_winner_away }} 
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