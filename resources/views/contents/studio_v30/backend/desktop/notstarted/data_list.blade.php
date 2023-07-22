

<div class="row mb-2">
    @forelse ($data as $row)     
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">  
                    <div class="row"> 
                        <div class="col-1"> 
                            {{ $loop->iteration }}
                        </div>  
                        <div class="col-1">   
                            {{ $row->league->country->name }} 
                            <br/>
                            {{ $row->league->name }}  
                            {{ $row->season }} 
                        </div>  
                        <div class="col-1 text-center"> 
                            {{ $row->tanggal }}
                            <br/>
                            <abbr class="initialism">
                                {{ $row->jam }}
                            </abbr> 
                            <span class="badge bg-gray-900 mt-2 "> 
                                {{ $row->fixtureapi_id }}
                            </span>
                        </div> 
                        <div class="col-2"> 
                            @if(!is_null($row->venueapi_id))
                            <a   
                                href="{{ route('Venues.show',  $row->venueapi_id  ) }}"
                                class=" "> 
                                {{ $row->venue->name }} 
                            </a> 
                            @else
                                {{ $row->venue->name }} 
                            @endif
                            <br/>
                            <span class="badge bg-gray-800 mt-2 "> 
                                {{ $row->round }}
                            </span>
                        </div>  
                        <div class="col-3">
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
                        </div> 
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->pre_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->pre_gou_pattern }} 
                            </span>
                            <br/> 
                            <br/> 
                            <a 
                                href="javascript:void(0)"
                                data-fixtureapi_id="{{ $row->fixtureapi_id }}"
                                data-leagueapi_id="{{ $row->leagueapi_id }}"
                                data-season="{{ $row->season }}"

                                data-pre_ah_pattern="{{ $row->pre_ah_pattern }}"
                                data-pre_ah_pattern_mirror="{{ $row->pre_ah_pattern_mirror }}"
                                data-pre_gou_pattern="{{ $row->pre_gou_pattern }}"

                                data-end_ah_pattern="{{ $row->pre_ah_pattern }}"
                                data-end_ah_pattern_mirror="{{ $row->pre_ah_pattern_mirror }}"
                                data-end_gou_pattern="{{ $row->pre_gou_pattern }}"
                                data-pattern="only"
                                class="my-button"
                                id="append_only_{{ $row->fixtureapi_id }}"> 
                                Tf-Only:
                            </a> 
                            <br/>
                            <a 
                                href="javascript:void(0)"
                                data-fixtureapi_id="{{ $row->fixtureapi_id }}"
                                data-leagueapi_id="{{ $row->leagueapi_id }}"
                                data-season="{{ $row->season }}"

                                data-pre_ah_pattern="{{ $row->pre_ah_pattern }}"
                                data-pre_ah_pattern_mirror="{{ $row->pre_ah_pattern_mirror }}"
                                data-pre_gou_pattern="{{ $row->pre_gou_pattern }}"

                                data-end_ah_pattern="{{ $row->end_ah_pattern }}"
                                data-end_ah_pattern_mirror="{{ $row->end_ah_pattern_mirror }}"
                                data-end_gou_pattern="{{ $row->end_gou_pattern }}"
                                data-pattern="preend"
                                class="my-button"
                                id="append_preend_{{ $row->fixtureapi_id }}"> 
                                Tf-PreEnd:
                            </a> 
                        </div> 
                        <div class="col-1 text-center"> 
                            <a    
                                href="{{route('Fixtures.setoneye', $row->id )}}"
                                class=" "> 
                                On Eye
                            </a>  
                            <br/>
                            <a    
                                href="{{route('Fixtures.setone', $row->id )}}"
                                class=" "> 
                                One
                            </a>  
                        </div>
                        <div class="col-1 text-center">   
                            {{ $row->pre_response }}-{{ $row->end_response }}
                            <br/>
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
                            <br/>
                            <small>
                                {{ $row->pre_odd_updated_at  }}
                            </small>
                            <br/>
                            <small>
                                {{ $row->updated_at  }}
                            </small>
                        </div>
                    </div> 
                </div>  
            </div>
  
            @include('contents.includes.data_list_details') 
            
        </div>
        @empty 
            
    @endforelse  
</div> 

@push('scripts')
    <script> 
        $(document).ready(function() {
            // my-button
            $('.my-button').on('click', function(e) {
                e.preventDefault(); 

                var fixtureapi_id       = $(this).data('fixtureapi_id');
                var leagueapi_id        = $(this).data('leagueapi_id');
                var season              = $(this).data('season');
                var pattern              = $(this).data('pattern');
                
                var pre_ah_pattern              = $(this).data('pre_ah_pattern');
                var pre_ah_pattern_mirror              = $(this).data('pre_ah_pattern_mirror');
                var pre_gou_pattern              = $(this).data('pre_gou_pattern');

                var end_ah_pattern              = $(this).data('end_ah_pattern');
                var end_ah_pattern_mirror              = $(this).data('end_ah_pattern_mirror');
                var end_gou_pattern              = $(this).data('end_gou_pattern');

                // alert("fixtureapi_id ID: " + fixtureapi_id);
                // alert("leagueapi_id ID: " + leagueapi_id);
                // alert("season ID: " + season);

                // alert("pre_ah_pattern_mirror ID: " + pre_ah_pattern_mirror);


                // alert("pre_ah_pattern ID: " + pre_ah_pattern);
                // alert("pre_gou_pattern ID: " + pre_gou_pattern);
                // alert("end_ah_pattern ID: " + end_ah_pattern);
                // alert("end_gou_pattern ID: " + end_gou_pattern);
                // append data
                // var newContent = "<p>New content appended!</p>";
                // $('#append'+buttonId).append(newContent); 

                $.ajax({
                    url: "{{ route('Ajax.data') }}",
                    type: "GET",
                    data: {
                        fixtureapi_id: fixtureapi_id, 
                        leagueapi_id: leagueapi_id, 
                        season: season, 
                        pattern: pattern, 

                        pre_ah_pattern: pre_ah_pattern, 
                        pre_ah_pattern_mirror: pre_ah_pattern_mirror, 
                        pre_gou_pattern: pre_gou_pattern, 

                        end_ah_pattern: end_ah_pattern, 
                        end_ah_pattern_mirror: end_ah_pattern_mirror, 
                        end_gou_pattern: end_gou_pattern, 
                    },
                    success: function(response) {
                        // Process the response 
                        $('#append_'+pattern+'_'+fixtureapi_id).append(response.foox );
                        // alert(response.foox)
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // Handle the error scenario
                    }
                }); 
            });
 
        });
    </script>
@endpush