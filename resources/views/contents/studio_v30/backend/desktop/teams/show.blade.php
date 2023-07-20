@extends('templates.'.$template.'.three_column')

@section('title', $panel_name)

@section('content')    
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-9 -->
        <div class="col-xl-9">
            <!-- BEGIN #Team -->
            <div id="Team" class="mb-5">  
                <h4> 
                    <i class="fas fa-desktop fa-fw"></i>
                    Team
                </h4>
                <div class="row mb-3">
                    <div class="col-6"> 
                        <p>Update 
                        <a href="{{route('Rapidapi.teams', $data->teamapi_id)}}">{{$data->name}}</a>
                        information and settings.</p>  
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>

                <div class="card border-0 text-white overflow-hidden"  >
                    <!-- card-img -->
                    <img src="{{$data->venue->image}}" class="card-img" />
                
                    <!-- card-img-overlay -->
                    <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-50 rounded">
                        <!-- top content -->
                        <div class="flex-fill">
                            <div class="d-flex align-items-center">
                                <h6>
                                    <a href="{{route('Rapidapi.teams', $data->teamapi_id)}}">
                                        {{$data->name}}
                                    </a>
                                </h6> 
                            </div>
                        </div>
                        
                        <!-- bottom-content -->
                        <div>
                            <a href="#" class="text-white text-decoration-none d-flex align-items-center">
                                <div class="bg-gradient-white w-45px h-45px rounded-3 d-flex align-items-center justify-content-center">
                                    <img src="{{$data->logo}}" alt="" class="ms-100 mh-100">
                                </div>
                                <div class="ms-3">
                                    <div class="fw-600">
                                        {{$data->venue->name}} 
                                    </div>
                                    <div class="fs-13px">
                                        <i class="fas fa-map-marker-alt"></i> {{$data->venue->address}}, {{$data->venue->city}} 
                                        
                                        <i class="fas fa-shield-alt ms-4"></i> {{$data->code}}
                                        
                                        <i class="fas fa-school ms-4"></i> {{$data->founded}}
                                        <i class="fas fa-users ms-4"></i>  {{$data->venue->capacity}} 
                                        <i class="fas fa-water ms-4"></i>  {{$data->venue->surface}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

 
 
            </div>
            <!-- END #Team -->
              
             
        </div>
        <!-- END col-9-->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3">
            <!-- BEGIN #sidebar-bootstrap -->
            <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                <nav class="nav">
                    <a class="nav-link" href="#Team" data-bs-toggle="scroll-to">Team</a>   
                </nav>
            </nav>
            <!-- END #sidebar-bootstrap -->
        </div>
        <!-- END col-3 -->
    </div>
    <!-- END row -->
@endsection
