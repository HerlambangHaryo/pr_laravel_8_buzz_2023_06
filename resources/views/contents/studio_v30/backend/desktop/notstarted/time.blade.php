@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
       
    <div class="row mb-4">
        {!! define_date('view') !!}
    </div>
    
    @include('contents.'.$template.'.backend.desktop.notstarted.data_list')
@endsection
