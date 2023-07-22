@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
      
    <div class="row mb-1">
        <div class="col-12 text-center"> 
            <div class="btn-group">
                <a  
                    href="{{ route($content.'.clear') }}"
                    class="btn btn-sm btn-secondary">
                    Clear
                </a>     
            </div>
        </div>  
    </div> 

    <div class="row mb-4">
        {!! define_date('view_end') !!}
    </div>
    
    @include('contents.'.$template.'.backend.desktop.matchfinished.data_list')
@endsection
