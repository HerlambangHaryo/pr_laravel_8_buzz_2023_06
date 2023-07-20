<div class="row mt-2 d-flex justify-content-center text-center">  

    <div class="col-2">
        <small>
            <a
                href="{{ route('Patterns.pre_only', [
                        'leagueapi_id'      => $row->leagueapi_id,
                        'season'            => $row->season,
                        'fixtureapi_id'     => $row->fixtureapi_id,
                    ])}}"
                target="_blank"
            >
                Pre Only
            </a> 
        </small>

        {{ dump($pattern) }}
    </div>
    <div class="col-2">
        <small>
            <a
                href=""
            >
                Pre Only Mirror
            </a> 
        </small>
        {{ dump($pattern_mirror) }}
    </div>
    <div class="col-2">
        <small>
            <a
                href="{{ route('Patterns.end_only', [
                        'leagueapi_id'      => $row->leagueapi_id,
                        'season'            => $row->season,
                        'fixtureapi_id'     => $row->fixtureapi_id,
                    ])}}"
                target="_blank"
            >
                End Only
            </a> 
        </small>
    </div>
    <div class="col-2">
        <small>
            <a
                href=""
            >
                End Only Mirror
            </a> 
        </small>
    </div>
    <div class="col-2">
        <small>
            <a
                href="{{ route('Patterns.pre_end', [
                        'leagueapi_id'      => $row->leagueapi_id,
                        'season'            => $row->season,
                        'fixtureapi_id'     => $row->fixtureapi_id
                    ])}}"
                target="_blank"
            >
                Pre End
            </a> 
        </small>
    </div>
    <div class="col-2">
        <small>
            <a
                href=""
            >
                Pre End Mirror
            </a> 
        </small>
    </div>

</div>