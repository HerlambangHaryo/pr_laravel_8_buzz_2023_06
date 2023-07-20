
<div class="row d-flex justify-content-center mb-2"> 
    
    <div class="col-1">  
        <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-center">
            <img src="{{$row->home->logo}}" alt="" class="ms-100 mh-100">
        </div>
    </div> 
    <div class="col-2">  
        <br/>
        <a    
            href="{{route('Teams.show', $row->teams_homeapi_id )}}"
            class=" "> 
            {{ $row->home->name }} 
        </a> 
        <br/>
        {{ $row->home_stats->form }}
        <br/>
        <br/>
        <h1 class="text-yellow">
            {{ $row->goals_home }}
        </h1> 
        {{ $row->score_halftime_home }}
        <br/>
        {{ $row->score_secondtime_home }}
    </div> 
    <div class="col-2 text-center">  
        <br/>
        <br/>
        <small>
            <a     
                class=" "> 
                {{ $row->venue->name }}
            </a> 
                - {{ $row->venue->city }}, {{ $row->venue->country }} 
            <br/> 
            {{ $row->tanggal }} {{ $row->jam }}
            <br/>
            <span class="badge bg-gray-800 "> 
                {{ $row->fixtureapi_id }}
            </span>
            <span class="badge bg-gray-800 "> 
                {{ $row->round }}
            </span>
            <br/>
            <x-studio_v30.badge-fixture-status 
                link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore" 
                nama="{{ $row->fixture_status }}"/>  
            <a 
                href="{{route('Fixtures.setoneye', $row->id )}}">
                On Eye
            </a>
            <a 
                href="{{route('Fixtures.setone', $row->id )}}">
                One
            </a>
        </small> 
    </div> 
    <div class="col-2 text-end">  
        <br/>
        <a    
            href="{{route('Teams.show', $row->teams_awayapi_id )}}"
            class=" "> 
            {{ $row->away->name }} 
        </a> 
        <br/>
        {{ $row->away_stats->form }}
        <br/>
        <br/>
        <h1 class="text-yellow">
            {{ $row->goals_away }}
        </h1> 
        {{ $row->score_halftime_away }}
        <br/>
        {{ $row->score_secondtime_away }}
    </div> 
    <div class="col-1 d-flex justify-content-end">  
        <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex justify-content-end">
            <img src="{{$row->away->logo}}" alt="" class="ms-100 mh-100">
        </div>
    </div>  
</div>  