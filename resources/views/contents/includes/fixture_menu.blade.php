
<div class="row d-flex justify-content-center mt-4 mb-4"> 
    <div class="btn-group col-10 text-center justify-content-center ">
        <a   
            href="{{ route('Fixtures.information', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Information
        </a>  
        <a   
            href="{{ route('Fixtures.statistics', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Statistics
        </a>   
        <a   
            href="{{ route('Fixtures.headtohead', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Head 2 Head
        </a>  
        <a   
            href="{{ route('Fixtures.players', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Players
        </a>   
        <a   
            href="{{ route('Fixtures.prepre', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Pre Pre
        </a>   
        <a   
            href="{{ route('Fixtures.preend', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Pre End
        </a> 
        <a   
            href="{{ route('Fixtures.endend', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            End End
        </a> 
        <a   
            href="{{ route('Fixtures.otherpattern', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Other Pattern
        </a> 
        <a   
            href="{{ route('Fixtures.dataonlypre', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Only Pre
        </a>   
        <a   
            href="{{ route('Fixtures.datapreend', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Data PreEnd
        </a>   
        <a   
            href="{{ route('Fixtures.dataonlyend', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}" 
            class="ms-2 me-2"
            >
            Only End
        </a>   
    </div> 
</div> 