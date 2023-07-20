<div class="row d-flex justify-content-center text-center mt-4">
    <div>Pattern</div>
 
    <div class="col-6"> 
        total {{ $pattern->total_fixtures }}
    </div> 
    <div class="col-6"> 
        total {{ $row->preend->total_fixtures }}
    </div>
</div>
<div class="row d-flex justify-content-center text-center mt-4">
    <div class="col-11">
        @include('contents.includes.pattern.1_matchwinner')  
        @include('contents.includes.pattern.2_homeaway')  
        @include('contents.includes.pattern.3_secondhalfwinner')  
        @include('contents.includes.pattern.4_asianhandicap')  
        @include('contents.includes.pattern.5_goalsoverunder')  
        @include('contents.includes.pattern.6_goalsoverunderfirsthalf')  
        @include('contents.includes.pattern.7_htftdouble')  
        @include('contents.includes.pattern.8_bothteamsscore')  
        @include('contents.includes.pattern.11_highestscoringhalf')  
        @include('contents.includes.pattern.12_doublechance')  
        @include('contents.includes.pattern.13_firsthalfwinner')  
        @include('contents.includes.pattern.14_teamtoscorefirst')  
        @include('contents.includes.pattern.15_teamtoscorelast')  
        @include('contents.includes.pattern.16_total_home')  
        @include('contents.includes.pattern.17_total_away')  
        @include('contents.includes.pattern.19_asianhandicapfirsthalf')  
        @include('contents.includes.pattern.20_doublechance_firsthalf')  
        @include('contents.includes.pattern.21_oddeven')  
        @include('contents.includes.pattern.24_resultsbothteamsscore')  
        @include('contents.includes.pattern.25_resulttotalgoals')  
        @include('contents.includes.pattern.26_goalsoverunder_secondhalf')  
        @include('contents.includes.pattern.27_cleansheet_home')  
        @include('contents.includes.pattern.28_cleansheet_away')  
        @include('contents.includes.pattern.32_winbothhalves')  
        @include('contents.includes.pattern.34_bothteamsscore_firsthalf')  
        @include('contents.includes.pattern.35_bothteamstoscore_secondhalf')  
        @include('contents.includes.pattern.36_wintonil')  
        @include('contents.includes.pattern.38_exactgoalsnumber')  
        @include('contents.includes.pattern.39_towineitherhalf')  
        @include('contents.includes.pattern.40_hometeamexactgoalsnumber')  
        @include('contents.includes.pattern.41_awayteamexactgoalsnumber')  
        @include('contents.includes.pattern.42_secondhalfexactgoalsnumber')  
        @include('contents.includes.pattern.45_cornersoverunder')  
        @include('contents.includes.pattern.46_exactgoalsnumber_firsthalf')  
        @include('contents.includes.pattern.48_toscoreinbothhalvesbyteams')  
        @include('contents.includes.pattern.49_totalgoalsbothteamstoscore')  
        @include('contents.includes.pattern.52_halftimeresultbothteamsscore')  
        @include('contents.includes.pattern.55_corners1x2')  
        @include('contents.includes.pattern.56_cornersasianhandicap')  
        @include('contents.includes.pattern.57_homecornersoverunder')  
        @include('contents.includes.pattern.58_awaycornersoverunder')  
        @include('contents.includes.pattern.73_bothteamstoscore1sthalf_2ndhalf')  
        @include('contents.includes.pattern.74_10overunder')  
        @include('contents.includes.pattern.75_lastcorner')  
        @include('contents.includes.pattern.76_firstcorner')  
        @include('contents.includes.pattern.79_cardseuropeanhandicap')  
        @include('contents.includes.pattern.80_cardsoverunder')  
        @include('contents.includes.pattern.81_cardsasianhandicap')  
        @include('contents.includes.pattern.82_hometeamtotalcards')  
        @include('contents.includes.pattern.83_awayteamtotalcards')  
        @include('contents.includes.pattern.86_rcard')  
        @include('contents.includes.pattern.91_totalgoals3way')  
        @include('contents.includes.pattern.97_firstgoalmethod')  
        @include('contents.includes.pattern.99_toscoreapenalty')  
        @include('contents.includes.pattern.100_tomissapenalty')  
    </div>

</div>