@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')   

    <form class="col-12" 
        action="{{ route($content.'.update', $data->id ) }}" 
        method="POST"  
        enctype="multipart/form-data"
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
                        <!-- form -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Name
                                </label>
                                <div class="col-8">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="name"
                                        value="{{ old('name', $data->name) }}" 
                                    >
                                </div>
                            </div>  


                        <!-- form -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Domain
                                </label>
                                <div class="col-8">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg"  
                                        name="domain"
                                        value="{{ old('domain', $data->domain) }}" 
                                    >
                                </div>
                            </div>  
                        <!-- Logo -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Logo
                                </label>
                                <div class="col-6">
                                    <input 
                                        id="logo"
                                        type="file" 
                                        class="form-control form-control-lg mb-2"  
                                        name="logo" 
                                    >
                                    
                                    
                                    <div class="card">
                                        <img    
                                            id="logo_preview" 
                                            class="card-img-top" 
                                            src="{{ isset($data) ? Storage::url($data->logo) : '' }}" 
                                            alt="Logo preview" /> 
                                    </div>

                                </div>
                            </div>    

                        <!-- ico -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    ico
                                </label>
                                <div class="col-6">
                                    <input 
                                        id="ico"
                                        type="file" 
                                        class="form-control form-control-lg mb-2"  
                                        name="ico" 
                                    >
                                    
                                    <div class="card">
                                        <img    
                                            id="ico_preview" 
                                            class="card-img-top" 
                                            src="{{ isset($data) ? Storage::url($data->ico) : '' }}" 
                                            alt="ico preview" /> 
                                    </div>
                                </div>
                            </div>    
                    </div> 
                </div> 
            </div>            
        </div> 
 
        <x-studio_v30.button-submit />
    </form>
    <script>
        // create onchange event listener for featured_image input
        document.getElementById('logo').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image_preview
                document.getElementById('logo_preview').src = URL.createObjectURL(file)
            }
        }
        // create onchange event listener for featured_image input
        document.getElementById('ico').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image_preview
                document.getElementById('ico_preview').src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
