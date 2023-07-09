@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
     
    <div class="row mb-2">
        @forelse ($data as $row)     
            <div class="col-2 mb-3">
                <div class="card">
                    <div class="card-body">  
                        <small>
                            <a  href="{{ route('Countries.leagues', $row->country ) }}" 
                                class=" "> 
                                {{ $row->country }}
                            </a> 
                        </small>
                    </div>  
                </div>
            </div>
            @empty 
                
        @endforelse  
    </div> 
@endsection
