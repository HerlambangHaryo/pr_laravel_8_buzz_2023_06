@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')   

    <form class="col-12" 
        action="{{ route($content.'.update', $data->id ) }}" 
        method="POST"   
        > 
        @csrf   
        @method('PUT')  

        <div class="card mb-4">
            <x-studio_v30.general-form-card-header 
                view="{{ $view_file }}"  
                panel="{{ $panel_name }}"/>  
            <div class="card-body pb-4">      
                <div class="row justify-content-md-center">     
                    <div class="col-11">  
                        <!-- theme -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Theme
                                </label>
                                <div class="col-4"> 
                                    <select class="form-select"
                                        name="theme"> 
                                        <option value="Studio_v30" selected>Studio_v30
                                        </option>  
                                    </select>  
 
                                </div>
                            </div>  

                        <!-- mode -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Mode
                                </label>
                                <div class="col-4">
                                    <select class="form-select"
                                        name="mode"> 
                                        <option value="">
                                            Pilih Mode
                                        </option>  
                                        <option value="dark-mode" 
                                            @if($data->mode == 'dark-mode')  
                                                selected
                                            @endif  
                                        >
                                            dark-mode
                                        </option>  
                                    </select>   
                                </div>
                            </div> 


                        <!-- color -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Color
                                </label>
                                <div class="col-4">
                                    <select class="form-select"
                                        name="color"> 
                                        <option value="">
                                            Pilih Color
                                        </option>  
                                        <option value="red" 
                                            @if($data->color == 'red')  
                                                selected
                                            @endif  
                                        >
                                            Red
                                        </option>  
                                        <option value="pink" 
                                            @if($data->color == 'pink')  
                                                selected
                                            @endif  
                                        >
                                            Pink
                                        </option>  
                                        <option value="orange" 
                                            @if($data->color == 'orange')  
                                                selected
                                            @endif  
                                        >
                                            Orange
                                        </option> 
                                        <option value="yellow" 
                                            @if($data->color == 'yellow')  
                                                selected
                                            @endif  
                                        >
                                            Yellow
                                        </option> 
                                        <option value="lime" 
                                            @if($data->color == 'lime')  
                                                selected
                                            @endif  
                                        >
                                            Lime
                                        </option> 
                                        <option value="green" 
                                            @if($data->color == 'green')  
                                                selected
                                            @endif  
                                        >
                                            Green
                                        </option> 
                                        <option value="teal" 
                                            @if($data->color == 'teal')  
                                                selected
                                            @endif  
                                        >
                                            Teal
                                        </option> 
                                        <option value="cyan" 
                                            @if($data->color == 'cyan')  
                                                selected
                                            @endif  
                                        >
                                            Cyan
                                        </option> 
                                        <option value="Blue" 
                                            @if($data->color == 'Blue')  
                                                selected
                                            @endif  
                                        >
                                            Blue
                                        </option> 
                                        <option value="purple" 
                                            @if($data->color == 'purple')  
                                                selected
                                            @endif  
                                        >
                                            Purple
                                        </option> 
                                        <option value="indigo" 
                                            @if($data->color == 'indigo')  
                                                selected
                                            @endif  
                                        >
                                            Indigo
                                        </option> 
                                        <option value="gray" 
                                            @if($data->color == 'gray')  
                                                selected
                                            @endif  
                                        >
                                            Gray
                                        </option> 
                                    </select>   
                                </div>
                            </div> 
                    </div> 
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
@endsection
