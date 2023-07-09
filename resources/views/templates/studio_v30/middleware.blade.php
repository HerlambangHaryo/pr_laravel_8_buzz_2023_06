<!DOCTYPE html>
<html 
	lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}  
	class="{!! define_aboutapp('mode') !!}">
    <head>
		@include('templates.studio_v30.partial.head')  
    </head>
	<body class="pace-done theme-{!! define_aboutapp('color') !!}">  
        <!-- BEGIN #app -->
        <div id="app" class="app app-full-height app-without-header">
            <!-- BEGIN login -->
            <div class="login">
                <!-- BEGIN login-content -->
                <div class="login-content"> 					
                    @yield('content') 
                </div>
                <!-- END login-content -->
            </div>
            <!-- END login -->
            
		    @include('templates.studio_v30.partial.scroll-top-btn') 
        </div>
        <!-- END #app -->
        
		@include('templates.studio_v30.partial.scripts')	 
    </body>
</html>
