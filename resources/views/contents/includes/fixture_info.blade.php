<div class="row d-flex justify-content-center mb-2">
    <div class="col-1">
        <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-center">
            <img src="{{$row_fixture->home->logo}}" alt="" class="ms-100 mh-100">
        </div>
    </div>
    <div class="col-2">
        <br/>
        <a
            class=" ">
            {{ $row_fixture->home->name }}
        </a>
        <br/>
        {{ $row_fixture->home_stats->form }}
        <br/>
        <br/>
        <h1 class="text-yellow">
            {{ $row_fixture->goals_home }}
        </h1>
        {{ $row_fixture->score_halftime_home }}
        <br/>
        {{ $row_fixture->score_secondtime_home }}
    </div>
    <div class="col-2 text-center">
        <br/>
        <br/>
        <small>
            <a
                class=" ">
                {{ $row_fixture->venue->name }}
            </a>
                - {{ $row_fixture->venue->city }}, {{ $row_fixture->venue->country }}
            <br/>
            {{ $row_fixture->tanggal }} {{ $row_fixture->jam }}
            <br/>
            <span class="badge bg-gray-800 ">
                {{ $row_fixture->fixtureapi_id }}
            </span>
            <span class="badge bg-gray-800 ">
                {{ $row_fixture->round }}
            </span>
            <br/>
            <x-studio_v30.badge-fixture-status
                link="https://www.google.com/search?client=firefox-b-d&q={!! $row_fixture->home->name !!}+vs+{!! $row_fixture->away->name !!}+flashscore"
                nama="{{ $row_fixture->fixture_status }}"/>
            <a
                href="{{route('Fixtures.setoneye', $row_fixture->id )}}">
                On Eye
            </a>
            <a
                href="{{route('Fixtures.setone', $row_fixture->id )}}">
                One
            </a>
        </small>
    </div>
    <div class="col-2 text-end">
        <br/>
        <a
            class=" ">
            {{ $row_fixture->away->name }}
        </a>
        <br/>
        {{ $row_fixture->away_stats->form }}
        <br/>
        <br/>
        <h1 class="text-yellow">
            {{ $row_fixture->goals_away }}
        </h1>
        {{ $row_fixture->score_halftime_away }}
        <br/>
        {{ $row_fixture->score_secondtime_away }}
    </div>
    <div class="col-1 d-flex justify-content-end">
        <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex justify-content-end">
            <img src="{{$row_fixture->away->logo}}" alt="" class="ms-100 mh-100">
        </div>
    </div>
</div>
