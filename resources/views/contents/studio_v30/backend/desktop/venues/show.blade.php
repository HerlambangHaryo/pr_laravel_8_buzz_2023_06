@extends('templates.'.$template.'.three_column')

@section('title', $panel_name)

@section('content')    
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-9 -->
        <div class="col-xl-9">
            <!-- BEGIN #Venue -->
            <div id="Venue" class="mb-5">  
                <h4> 
                    <i class="fas fa-desktop fa-fw"></i>
                    Venue
                </h4>
                <div class="row mb-3">
                    <div class="col-6"> 
                        <p>Update 
                        <a href="{{route('Rapidapi.venues', $data->venueapi_id)}}">{{$data->name}}</a>
                        information and settings.</p>  
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>

                <div class="card border-0 text-white overflow-hidden"  >
                    <!-- card-img -->
                    <img src="{{$data->image}}" class="card-img" />
                
                    <!-- card-img-overlay -->
                    <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-50 rounded">
                        <!-- top content -->
                        <div class="flex-fill">
                            <div class="d-flex align-items-center">
                                <h6>
                                    <a href="{{route('Rapidapi.venues', $data->venueapi_id)}}">
                                        {{$data->name}}
                                    </a>
                                </h6> 
                            </div>
                        </div>
                         
                    </div>
                </div>

 
 
            </div>
            <!-- END #Venue -->
              
             
        </div>
        <!-- END col-9-->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3">
            <!-- BEGIN #sidebar-bootstrap -->
            <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                <nav class="nav">
                    <a class="nav-link" href="#Venue" data-bs-toggle="scroll-to">Venue</a>   
                </nav>
            </nav>
            <!-- END #sidebar-bootstrap -->
        </div>
        <!-- END col-3 -->
    </div>
    <!-- END row -->
@endsection
