@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
   
<div class="col-4">
    <!-- BEGIN card -->
    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange">  
        <!-- BEGIN card-body -->
        <div class="card-body position-relative">
            <h5 class="text-white text-opacity-80 mb-3 fs-16px">
                Undone recalibration new pattern
            </h5>
            <h3 class="text-white mt-n1">
                {{ number_format($undone,0,",",".") }} 
            </h3> 
            <div>
                <a href="{{ route('Reports.undone') }}" 
                    class="text-white d-flex align-items-center text-decoration-none">
                    View report 
                    <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i>
                </a>
            </div>
        </div>
        <!-- BEGIN card-body -->
    </div>
    <!-- END card --> 
</div>


@endsection
