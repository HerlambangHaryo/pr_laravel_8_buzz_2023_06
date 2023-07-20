@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
     
    @include('contents.studio_v30.backend.desktop.leagues.pre_sub_head') 
     

    @include('contents.'.$template.'.backend.desktop.notstarted.data_list')
@endsection
