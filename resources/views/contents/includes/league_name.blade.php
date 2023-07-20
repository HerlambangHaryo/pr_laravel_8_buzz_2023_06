<div class="row mb-4">
    <div class="col-12 text-center ">  
        <i class="flag-icon flag-icon-{{ strtolower($league->country->code) }} " 
            title="{{ strtolower($league->country->code) }}" 
            id="{{ strtolower($league->country->code) }}"></i>  
        <a   
            href="{{ route('Leagues.notstarted', [
                    'leagueapi_id'  => $league->leagueapi_id,
                    'season'        => $season,
                ]) }}">
            {{ $league->country->name }} 
            {{ $league->name }}  
            {{ $season }} 
        </a> 
    </div>
</div>