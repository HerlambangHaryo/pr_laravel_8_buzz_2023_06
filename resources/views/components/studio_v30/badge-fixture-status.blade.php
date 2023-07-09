@if($nama == "Match Finished" || $nama == "Match Finished Ended")
    <a  href="{{$link}}" 
        class="badge bg-dark mt-2" target="_blank" >  
        {{ $nama }}  
    </a>  
@elseif($nama == "Not Started")
    <a  href="{{$link}}" 
        class="badge bg-danger mt-2" target="_blank" >  
        {{ $nama }}  
    </a>  
@else
    <a  href="{{$link}}" 
        class="badge bg-warning mt-2" target="_blank" >  
        {{ $nama }}  
    </a>  
@endif