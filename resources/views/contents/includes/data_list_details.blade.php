 
<div class="row d-flex justify-content-center mt-3">   
    <div class="col-4 text-center"> 
        <small> 
            <abbr class="initialism">
                Match Winner
            </abbr>   
        </small> 
        <br/>
        @include('contents.includes.odd_matchwinner') 
    </div>  
    <div class="col-2 text-center"> 
        <small> 
            <abbr class="initialism">
                Home/Away
            </abbr>   
        </small> 
        <br/>
        @include('contents.includes.odd_homeaway') 
    </div>  
    <div class="col-4 text-center"> 
        <small> 
            <abbr class="initialism">
                Double Chance
            </abbr>   
        </small> 
        <br/>
        @include('contents.includes.odd_double_chance') 
    </div>  
</div> 
 
@include('contents.includes.goals_summary') 

<div class="row d-flex justify-content-center mt-3">  
    <div class="col-5 text-center"> 
        <small> 
            <abbr class="initialism">
                Asian Handicap
            </abbr>  
        </small>
        <br/>
        @include('contents.includes.odd_asian_handicap') 
    </div> 
    <div class="col-2 text-center">
        <small> 
            <abbr class="initialism">
                BTTS
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_btts') 
    </div>  
    <div class="col-5 text-center"> 
        <small> 
            <abbr class="initialism">
                Over Under
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_overunder') 
    </div>   
</div> 

<div class="row d-flex justify-content-center mt-3">   
    <div class="col-2 text-center"> 
        <small> 
            <abbr class="initialism">
                Clean Sheet - Home
            </abbr>   
        </small> 
        <br/>
        @include('contents.includes.odd_clean_sheet_home') 
    </div>  
    <div class="col-2 text-center"> 
        <small> 
            <abbr class="initialism">
                Clean Sheet - Away
            </abbr>   
        </small> 
        <br/>
        @include('contents.includes.odd_clean_sheet_away') 
    </div>  
</div> 

<div class="row d-flex justify-content-center mt-3">  
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Result Both Teams to Score - Yes
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_results_both_teams_score_yes') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Result Both Teams to Score - No
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_results_both_teams_score_no') 
    </div>   
</div> 

<div class="row d-flex justify-content-center mt-3 ">  
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Result/Total Goals - u25
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_results_total_goals_u25') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Result/Total Goals - o25
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_results_total_goals_o25') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Result/Total Goals - u35
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_results_total_goals_u35') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Result/Total Goals - o35
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_results_total_goals_o35') 
    </div>   
</div> 

@include('contents.includes.goals_summary') 

<div class="row d-flex justify-content-center mt-3 ">  
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Win To Nil
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_win_to_nil') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                To Win Either Half
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_to_win_either_half') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Win Both Halves
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_win_both_halves') 
    </div>   
    <div class="col-3 text-center"> 
        <small> 
            <abbr class="initialism">
                Odd/Even
            </abbr>  
        </small> 
        <br/>
        @include('contents.includes.odd_OddEven') 
    </div>   
</div> 

@include('contents.includes.first_goals_summary') 

<div class="row d-flex justify-content-center mt-3 ">  
    <div class="col-6 text-center">   
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <small> 
                    <abbr class="initialism">
                        First Half Winner
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_first_half_winner')  
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <small> 
                    <abbr class="initialism">
                        First Handicap
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_first_handicap')  
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <small> 
                    <abbr class="initialism">
                        First Overunder
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_first_overunder')  
            </div>
        </div>
    </div>   
    <div class="col-6 text-center">  
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <small> 
                    <abbr class="initialism">
                        Second Half Winner
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_second_half_winner')  
            </div>
        </div>
    </div>    
</div> 
 

<div class="row d-flex justify-content-center mt-3 mb-4">  
    <div class="col-6 text-center">  
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <small> 
                    <abbr class="initialism">
                        Corners Winner
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_corners_winner')  
            </div>
        </div>
        
        @include('contents.includes.corners_summary') 

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <small> 
                    <abbr class="initialism">
                        Corners Handicap
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_corners_handicap')  
            </div>
            <div class="col-6">
                <small> 
                    <abbr class="initialism">
                        Corners Overunder
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_corners_overunder')  
            </div>
        </div>
    </div>   
    <div class="col-6 text-center"> 
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <small> 
                    <abbr class="initialism">
                        Red Cards {{ $row->red_cards_home}} - {{ $row->red_cards_away }}  
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_red_cards')  
            </div>
        </div>

        @include('contents.includes.cards_summary') 
 
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <small> 
                    <abbr class="initialism">
                        Cards Handicap
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_cards_handicap')  
            </div>
            <div class="col-6">
                <small> 
                    <abbr class="initialism">
                        Cards Overunder
                    </abbr>  
                </small> 
                <br/> 
                @include('contents.includes.odd_cards_overunder')  
            </div>
        </div>
    </div>   
</div> 