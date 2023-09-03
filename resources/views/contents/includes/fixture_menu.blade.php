
<div class="row d-flex justify-content-center mt-4 ">
    <div class="btn-group col-10 text-center justify-content-center ">
        <a
            href="{{ route('Leagues.matchfinished', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'Leagues')
                    text-black
                @endif
                ">
            League
        </a>
        <a
            href="{{ route('Fixtures.information', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'information')
                    text-black
                @endif
                ">
            Information
        </a>
        <a
            href="{{ route('Fixtures.statistics', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'statistics')
                    text-black
                @endif
                ">
            Statistics
        </a>
        <a
            href="{{ route('Fixtures.headtohead', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'headtohead')
                    text-black
                @endif
                ">
            Head 2 Head
        </a>
        <a
            href="{{ route('Fixtures.players', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'players')
                    text-black
                @endif
                ">
            Players
        </a>
    </div>
</div>

<div class="row d-flex justify-content-center mb-4">
    <div class="btn-group col-10 text-center justify-content-center ">
        <a
            href="{{ route('Fixtures.onlypre', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'onlypre')
                    text-black
                @endif
                ">
            Only Pre
        </a>
        <a
            href="{{ route('Fixtures.prepre', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'prepre')
                    text-black
                @endif
                ">
            Pre Pre
        </a>
        <a
            href="{{ route('Fixtures.onlyend', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'onlyend')
                    text-black
                @endif
                ">
            Only End
        </a>
        <a
            href="{{ route('Fixtures.preend', [
                    'leagueapi_id'      => $row->leagueapi_id,
                    'season'            => $row->season,
                    'fixtureapi_id'     => $row->fixtureapi_id,
                ])}}"
            class="p-2 rounded
                @if($view_file == 'preend')
                    text-black
                @endif
                ">
            Pre End
        </a>
    </div>
</div>
