@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
     
    <div class="row mb-2">
        @forelse ($data as $row)     
            <div class="col-2 mb-3">
                <div class="card">
                    <div class="card-body"> 
                        <small>  
                            <i class="flag-icon flag-icon-{{ strtolower($row->country->code) }} " 
                                title="{{ strtolower($row->country->code) }}" 
                                id="{{ strtolower($row->country->code) }}"></i>
                            <a  href="{{ route('Countries.leagues', $row->country_name ) }}" 
                                class=" "> 
                                {{ $row->country_name }}
                            </a>  
                        </small>
                    </div>  
                </div>
            </div>
            @empty 
                
        @endforelse  
    </div> 
@endsection
