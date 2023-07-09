<!DOCTYPE html>
<html 
	lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}  
	class="{!! define_aboutapp('mode') !!}">
    <head>
		@include('templates.'.$template.'.partial.head')  
    </head>
    <body 
        class="pace-done theme-{!! define_aboutapp('color') !!}" 
        data-bs-spy='scroll' 
        data-bs-target='#sidebar-bootstrap' 
        data-bs-offset='200'>

        <!-- BEGIN #app -->
		<div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}"> 

            <!-- BEGIN #header -->
			@include('templates.'.$template.'.partial.header')
            <!-- END #header -->
            
            <!-- BEGIN #sidebar -->
			<x-studio_v30.sidebar-nav title="{!!$active_as!!}"/>
            <!-- END #sidebar -->
            
            <!-- BEGIN #content -->
            <div id="content" class="app-content">
                <!-- BEGIN container -->
                <div class="container">
                    <!-- BEGIN row -->
                    <div class="row justify-content-center">
                        <!-- BEGIN col-12 -->
						<div class="col-xl-12">			
							<x-studio_v30.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="{!!$view_file!!}" />	
	
							@include('contents.includes.flash_message') 

		    				@yield('content')			
                            
                        </div>
                        <!-- END col-12 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END container -->
            </div>
            <!-- END #content -->
             
            
			@includeWhen(!empty($footer), 'templates.'.$template.'.partial.footer')
        </div>
        <!-- END #app -->

		@include('templates.'.$template.'.partial.scroll-top-btn')
        
		@include('templates.'.$template.'.partial.scripts')	 
        
    </body>
</html>
