@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
      
    <div class="row mb-4">
        {!! define_date('view_end') !!}
    </div>
    
    @include('contents.'.$template.'.backend.desktop.matchfinished.data_list')
@endsection
