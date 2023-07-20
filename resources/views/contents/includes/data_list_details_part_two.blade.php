
<div class="row  d-flex justify-content-center"> 

    <div class="col-11 mb-4 mt-4"  >  
        <div class="row mb-2 d-flex justify-content-center">  
            <div class="col-2 text-center"> 
                <small> 
                    <abbr class="initialism">
                        Form
                    </abbr>  
                </small>  
                <br/>
                {{ $row->home_stats->form }}
                <br/>
                {{ $row->home_stats->home_goals_for_average }}:{{ $row->home_stats->home_goals_against_average }}
            </div> 
            <div class="col-5 text-center"> 
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
                        Form
                    </abbr>  
                </small>  
                <br/>
                {{ $row->away_stats->form }}
                <br/>
                {{ $row->away_stats->away_goals_for_average }}:{{ $row->away_stats->away_goals_against_average }}
            </div> 
        </div>
    </div>

    <div class="col-11 mb-4 mt-4"  >  
        <div class="row mb-2 d-flex justify-content-center"> 
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
    </div>

    <div class="col-11 mb-4 mt-4"  >  
        <div class="row mb-2 d-flex justify-content-center">  
            <div class="col-5 text-center"> 
                <small> 
                    <abbr class="initialism">
                        First Half Winner
                    </abbr>  
                </small> 
                <br/>
                @include('contents.includes.odd_matchwinner') 
            </div> 
        </div>
    </div>

    <div class="col-11 mb-4 mt-4"  >  
        <div class="row mb-2 d-flex justify-content-center">  
            <div class="col-5 text-center"> 
                <small> 
                    <abbr class="initialism">
                        Second Half Winner
                    </abbr>  
                </small> 
                <br/>
                @include('contents.includes.odd_matchwinner') 
            </div> 
        </div>
    </div>
 
</div>