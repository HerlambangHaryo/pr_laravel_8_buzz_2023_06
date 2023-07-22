<small> 
    <abbr class="initialism">
        Match Winner
    </abbr>  
</small>

@if($pattern->match_winner_home_perc >= 0.8)
    <a
        class="badge bg-primary"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '1_matchwinner_home',
        ])}}"
    >
        Home / 
        @if(!is_null($row->end_match_winner_home))
            {{$row->end_match_winner_home}}
        @elseif(!is_null($row->pre_match_winner_home))
            {{$row->pre_match_winner_home}}
        @endif
        => {{ $pattern->match_winner_home_perc * 100 }}%
    </a>
@elseif($pattern->match_winner_draw_perc >= 0.8)
    <a
        class="badge bg-gray-700"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '1_matchwinner_draw',
        ])}}"
    >
        Draw / 
        @if(!is_null($row->end_match_winner_draw))
            {{$row->end_match_winner_draw}}
        @elseif(!is_null($row->pre_match_winner_draw))
            {{$row->pre_match_winner_draw}}
        @endif
        => {{ $pattern->match_winner_draw_perc * 100 }}%
    </a>
@elseif($pattern->match_winner_away_perc >= 0.8)
    <a
        class="badge bg-warning"
        target="_blank"
        href="{{route('Patterns.odd',[
            'leagueapi_id' => $row->leagueapi_id,
            'season' => $row->season,
            'fixtureapi_id' => $row->fixtureapi_id,
            'odd' => '1_matchwinner_away',
        ])}}"
    >
        Away / 
        @if(!is_null($row->end_match_winner_away))
            {{$row->end_match_winner_away}}
        @elseif(!is_null($row->pre_match_winner_away))
            {{$row->pre_match_winner_away}}
        @endif
        => {{ $pattern->match_winner_away_perc * 100 }}%
    </a>
@endif