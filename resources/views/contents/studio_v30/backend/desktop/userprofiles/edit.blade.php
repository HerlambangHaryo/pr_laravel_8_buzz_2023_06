@extends('templates.'.$template.'.form')

@section('title', $panel_name)

@section('content')   

    <form class="col-12" 
        action="{{ route($content.'.update', $id) }}" 
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

                        <!-- profile_photo_path -->
                            <div class="form-group row mb-3">
                                <label class="col-2 col-form-label">
                                    Photo
                                </label>
                                <div class="col-6">
                                    <input 
                                        id="Photo"
                                        type="file" 
                                        class="form-control form-control-lg mb-2"  
                                        name="profile_photo_path" 
                                    >
                                    
                                    
                                    <div class="card">
                                        <img    
                                            id="Photo_preview" 
                                            class="card-img-top" 
                                            src="{{ isset($data) ? Storage::url($data->profile_photo_path) : '' }}" 
                                            alt="Photo preview" /> 
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
        document.getElementById('Photo').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image_preview
                document.getElementById('Photo_preview').src = URL.createObjectURL(file)
            }
        } 
    </script>
@endsection
