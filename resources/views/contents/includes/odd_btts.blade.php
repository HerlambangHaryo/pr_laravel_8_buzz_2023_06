<div>
    <span class="badge bg-gray-700 mt-2" > 
        yes no
        <br/>
        {{ $row->pre_both_teams_score_yes }} - {{ $row->pre_both_teams_score_no }}
    </span>  
</div>
  
<div>
    <span class="badge bg-gray-800 mt-2" > 
        yes no
    </span> 

    <br/>

    <small>
        <a    
            href="google.com"
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_both_teams_score_yes }}
        </a> 
    </small>
    <small>
        <a    
            href="google.com"
            target="_blank"
            class=" ms-2 me-2">  
            {{ $row->end_both_teams_score_no }}
        </a> 
    </small> 
</div>