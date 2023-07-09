<!DOCTYPE html>
<html 
	lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}  
	class="{!! define_aboutapp('mode') !!}">
	<head>
		@include('templates.'.$template.'.partial.head')  
	</head>
	<body class="pace-done theme-{!! define_aboutapp('color') !!}">  
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
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-12">				
							<x-studio_v30.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="{!!$view_file!!}" />	
	
							@include('contents.includes.flash_message')

		    				@yield('content')
						</div>			
					</div>
				</div>
			</div>
			<!-- END #content --> 
			
			@includeWhen(!empty($footer), 'templates.'.$template.'.partial.footer')

		</div>
		<!-- END #app -->

		@include('templates.'.$template.'.partial.scroll-top-btn')


		@include('templates.'.$template.'.partial.scripts')	 
		
	</body>
</html>
