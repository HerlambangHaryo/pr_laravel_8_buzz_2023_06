@extends('templates.'.$template.'.three_column')

@section('title', $panel_name)

@section('content')    
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-9 -->
        <div class="col-xl-9">
            <!-- BEGIN #App -->
            <div id="App" class="mb-5">  
                <h4> 
                    <i class="fas fa-desktop fa-fw"></i>
                    App
                </h4>
                <div class="row mb-3">
                    <div class="col-6">
                        <p>Update your general account information and settings.</p> 
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>

                <div class="card">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Name</div>
                                <div class="text-gray-600">
                                    {{ $data->name }}
                                </div>
                            </div>
                            <div class="w-100px">
                                <a 
                                    href="{{ route('AboutApp.edit', $data->id ) }}" 
                                    class="btn btn-default w-100px">
                                    <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
                                    Edit
                                </a>
                            </div>
                        </div> 
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Domain</div>
                                <div class="text-gray-600">
                                    {{ $data->domain }}
                                </div>
                            </div>
                            <div class="w-100px"> 
                            </div>
                        </div> 
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    Logo
                                </div>
                                <div class="text-gray-600"> 
                                    <img 
                                        src="{{ asset('/storage/app/public/aboutapp/'.$data->logo) }}" 
                                        alt="" 
                                        class="ms-50 mh-50"> 
                                </div>
                            </div>
                            <div class=" "> 
                            </div>
                        </div> 
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    ico
                                </div>
                                <div class="text-gray-600"> 
                                    <img 
                                        src="{{ asset('/storage/app/public/aboutapp/'.$data->ico) }}" 
                                        alt="" 
                                        class="ms-50 mh-50">  
                                        
                                </div>
                            </div>
                            <div class=" "> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END #App -->
            
            <!-- BEGIN #Theme -->
            <div id="Theme" class="mb-5">
                <h4>
                    <i class="fas fa-palette fa-fw"></i> 
                    Theme
                </h4>
                <div class="row mb-3">
                    <div class="col-6">
                        <p>Update your User Interface and settings.</p>
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>

                <div class="card">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Theme</div>
                                <div class="text-gray-600 d-flex align-items-center"> 
                                    {{ $data->theme }}
                                </div> 
                            </div>
                            <div class="w-100px">
                                <a 
                                    href="{{ route('AboutTheme.edit', $data->id ) }}" 
                                    class="btn btn-default w-100px">
                                    <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
                                    Edit
                                </a>
                            </div>
                        </div> 
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill"> 
                                <div>Mode</div>
                                <div class="text-gray-600 d-flex align-items-center"> 
                                    {{ $data->mode }}
                                </div> 
                            </div>
                            <div> 
                            </div>
                        </div> 
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill"> 
                                <div>Color</div>
                                <div class="text-gray-600 d-flex align-items-center"> 
                                    {{ $data->color }}
                                </div>
                            </div>
                            <div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END #Theme -->

            <!-- BEGIN #LifeCycle -->
            <div id="LifeCycle" class="mb-5">
                <h4>
                    <i class="fas fa-sync-alt fa-fw"></i> 
                    LifeCycle
                </h4>
                <div class="row mb-3">
                    <div class="col-6">
                        <p>Enable or disable stage of application.</p>
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>

                <div class="card">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    Life Cycle 
                                </div>
                                <div class="text-gray-600 d-flex align-items-center">
                                    @if($data->lifecycle == 0)
                                        <i class="fa fa-circle fs-8px fa-fw text-dark me-1"></i> Development
                                    @elseif($data->lifecycle == 1)
                                        <i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Production
                                    @endif 
                                </div>
                            </div>
                            <div class="w-100px">
                                @if($data->lifecycle == 0)
                                    <a 
                                        href="{{ route('AboutLifecycle.setcycle',  'Prod' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-off text-dark"></i>
                                    </a> 
                                @elseif($data->lifecycle == 1)
                                    <a 
                                        href="{{ route('AboutLifecycle.setcycle',  'Dev' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-on text-success"></i>
                                    </a> 
                                @endif
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END #LifeCycle -->

            

            <!-- BEGIN #Auth -->
            <div id="Auth" class="mb-5">
                <h4>
                    <i class="fas fa-sync-alt fa-fw"></i> 
                    Auth
                </h4>
                <div class="row mb-3">
                    <div class="col-6">
                        <p>Enable or disable stage of application.</p>
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>

                <div class="card">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    Google
                                </div>
                                <div class="text-gray-600 d-flex align-items-center">
                                    @if($data->auth_google == 0)
                                        <i class="fa fa-circle fs-8px fa-fw text-dark me-1"></i> No
                                    @elseif($data->auth_google == 1)
                                        <i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Active
                                    @endif 
                                </div>
                            </div>
                            <div class="w-100px">
                                @if($data->auth_google == 0)
                                    <a 
                                        href="{{ route('AboutAuth.setgoogle',  'Yes' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-off text-dark"></i>
                                    </a> 
                                @elseif($data->auth_google == 1)
                                    <a 
                                        href="{{ route('AboutAuth.setgoogle',  'No' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-on text-success"></i>
                                    </a> 
                                @endif
                            </div>
                        </div> 
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    Github
                                </div>
                                <div class="text-gray-600 d-flex align-items-center">
                                    @if($data->auth_github == 0)
                                        <i class="fa fa-circle fs-8px fa-fw text-dark me-1"></i> No
                                    @elseif($data->auth_github == 1)
                                        <i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Active
                                    @endif 
                                </div>
                            </div>
                            <div class="w-100px">
                                @if($data->auth_github == 0)
                                    <a 
                                        href="{{ route('AboutAuth.setgithub',  'Yes' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-off text-dark"></i>
                                    </a> 
                                @elseif($data->auth_github == 1)
                                    <a 
                                        href="{{ route('AboutAuth.setgithub',  'No' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-on text-success"></i>
                                    </a> 
                                @endif
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END #Auth -->

            

            <!-- BEGIN #UIUX -->
            <div id="UIUX" class="mb-5">
                <h4>
                    <i class="fas fa-sync-alt fa-fw"></i> 
                    UIUX
                </h4>
                <div class="row mb-3">
                    <div class="col-6">
                        <p>Enable or disable stage of application.</p>
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">  
                    </div> 
                </div>
                
                <div class="card">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    Mobile
                                </div>
                                <div class="text-gray-600 d-flex align-items-center">
                                    @if($data->uiux_mobile == 0)
                                        <i class="fa fa-circle fs-8px fa-fw text-dark me-1"></i> No
                                    @elseif($data->uiux_mobile == 1)
                                        <i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Active
                                    @endif 
                                </div>
                            </div>
                            <div class="w-100px">
                                @if($data->uiux_mobile == 0)
                                    <a 
                                        href="{{ route('AboutUiux.setmobile',  'Yes' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-off text-dark"></i>
                                    </a> 
                                @elseif($data->uiux_mobile == 1)
                                    <a 
                                        href="{{ route('AboutUiux.setmobile',  'No' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-on text-success"></i>
                                    </a> 
                                @endif
                            </div>
                        </div> 
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>
                                    Tablet
                                </div>
                                <div class="text-gray-600 d-flex align-items-center">
                                    @if($data->uiux_tablet == 0)
                                        <i class="fa fa-circle fs-8px fa-fw text-dark me-1"></i> No
                                    @elseif($data->uiux_tablet == 1)
                                        <i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Active
                                    @endif 
                                </div>
                            </div>
                            <div class="w-100px">
                                @if($data->uiux_tablet == 0)
                                    <a 
                                        href="{{ route('AboutUiux.settablet',  'Yes' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-off text-dark"></i>
                                    </a> 
                                @elseif($data->uiux_tablet == 1)
                                    <a 
                                        href="{{ route('AboutUiux.settablet',  'No' ) }}" 
                                        class="btn btn-outline-link w-100px">
                                        <i class="fas fa-2x fa-toggle-on text-success"></i>
                                    </a> 
                                @endif
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- END #UIUX -->
             
        </div>
        <!-- END col-9-->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3">
            <!-- BEGIN #sidebar-bootstrap -->
            <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                <nav class="nav">
                    <a class="nav-link" href="#App" data-bs-toggle="scroll-to">App</a>
                    <a class="nav-link" href="#Theme" data-bs-toggle="scroll-to">Theme</a> 
                    <a class="nav-link" href="#LifeCycle" data-bs-toggle="scroll-to">LifeCycle</a>  
                    <a class="nav-link" href="#Auth" data-bs-toggle="scroll-to">Auth</a>  
                    <a class="nav-link" href="#UIUX" data-bs-toggle="scroll-to">UIUX</a>  
                </nav>
            </nav>
            <!-- END #sidebar-bootstrap -->
        </div>
        <!-- END col-3 -->
    </div>
    <!-- END row -->
@endsection
