<div class="row d-flex justify-content-center mt-3">   
    <div class="col-5 text-center text-yellow"> 
        <small> 
            <abbr class="initialism">
                Cards
            </abbr>  
            <br/>
            <abbr class="initialism">
                {{ $row->yellow_cards_home + $row->red_cards_home}} - {{ $row->yellow_cards_away + $row->red_cards_away }}  
            </abbr>  
        </small>  
    </div>  
</div> 