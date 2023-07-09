@if($nama == "Match Finished" || $nama == "Match Finished Ended")
    <a  href="{{$link}}" 
        class="badge bg-dark" target="_blank" >  
        {{ $nama }}  
    </a>  
@elseif($nama == "Not Started")
    <a  href="{{$link}}" 
        class="badge bg-danger" target="_blank" >  
        {{ $nama }}  
    </a>  
@else
    <a  href="{{$link}}" 
        class="badge bg-warning" target="_blank" >  
        {{ $nama }}  
    </a>  
@endif