 

<div class="row mb-2">
    @forelse ($data as $row)     
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">  
                    <div class="row"> 
                        <div class="col-1"> 
                            {{ $loop->iteration }}
                        </div> 
                        <div class="col-1 text-center"> 
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
                        </div> 
                        <div class="col-2"> 
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
                        </div> 
                        <div class="col-2">
                            {{ $row->home->name }} 
                            <br/>
                            {{ $row->away->name }} 
                            <br/>
                            <x-studio_v30.badge-fixture-status 
                                        link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore" 
                                        nama="{{ $row->fixture_status }}"/>  
                        </div> 
                        <div class="col-1 text-center"> 
                            {{ $row->goals_home }} 
                            <br/>
                            {{ $row->goals_away }} 
                        </div> 
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->pre_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->pre_gou_pattern }} 
                            </span>
                        </div> 
                        <div class="col-2">
                            <span class="badge bg-gray-900">
                                {{ $row->end_ah_pattern }} 
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->end_gou_pattern }} 
                            </span>
                        </div>  
                        <div class="col-1 text-center">  
                            {{ $row->pre_response }}-{{ $row->end_response }}
                            <br/>
                            <a 
                                href="javascript:void(0)"
                                data-fixtureapi_id="{{ $row->fixtureapi_id }}"
                                data-leagueapi_id="{{ $row->leagueapi_id }}"
                                data-season="{{ $row->season }}"
                                class="my-button"> 
                                View
                            </a> 
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
            $('.my-button').on('click', function(e) {
                e.preventDefault(); 

                var fixtureapi_id       = $(this).data('fixtureapi_id');
                var leagueapi_id     = $(this).data('leagueapi_id');
                var season              = $(this).data('season');

                alert("fixtureapi_id ID: " + fixtureapi_id);
                alert("leagueapi_id ID: " + leagueapi_id);
                alert("season ID: " + season);

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
                    },
                    success: function(response) {
                        // Process the response 
                        $('#append'+fixtureapi_id).append(response.foox );
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