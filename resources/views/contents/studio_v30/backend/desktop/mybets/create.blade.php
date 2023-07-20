@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')   

    <form class="col-12"  
        action="{{ route($content.'.store' ) }}"  
        method="POST"   > 
        @csrf     

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/>  
            <div class="card-body pb-4">      
                <div class="row justify-content-md-center">     
                    <div class="col-11"> 

                        <!-- investment -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    investment 
                                </label>
                                <div class="col-4">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="investment"  
                                    >
                                </div>
                            </div>  

                        <!-- leagueapi_id -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    leagueapi_id 
                                </label>
                                <div class="col-3">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="leagueapi_id" 
                                        value="{{ $leagueapi_id }}" 
                                    >
                                </div>
                            </div>  

                        <!-- season -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    season 
                                </label>
                                <div class="col-2">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="season" 
                                        value="{{ $season }}" 
                                    >
                                </div>
                            </div>  
 
                        <!-- fixtureapi_id -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    fixtureapi_id 
                                </label>
                                <div class="col-3">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="fixtureapi_id" 
                                        value="{{ $fixtureapi_id }}" 
                                    >
                                </div>
                            </div>  
  
                        <!-- betsapi_id -->
                        <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    betsapi_id 
                                </label>
                                <div class="col-2">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="betsapi_id" 
                                        value="{{ $betsapi_id }}" 
                                    >
                                </div>
                            </div>  

                        <!-- value -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    value 
                                </label>
                                <div class="col-2">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="value" 
                                        value="{{ $value }}" 
                                    >
                                </div>
                            </div>  
 
                        <!-- betsapi_ioddd -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    odd 
                                </label>
                                <div class="col-2">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="odd" 
                                        value="{{ $odd }}" 
                                    >
                                </div>
                            </div>  
  

                    </div> 
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection
