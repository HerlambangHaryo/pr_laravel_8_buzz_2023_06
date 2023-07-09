<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }} 
	 class="dark-mode">
<head>
	@include('template.'.$template.'.partial.head')

</head>
<body class="{{ (!empty($bodyClass)) ? $bodyClass : '' }}">
	<!-- BEGIN #app -->
	<div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}">
		@include('template.'.$template.'.partial.header')


        <x-studio_v30.sidebar-nav title="{!!$active_as!!}"/>

		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-12">							
						<x-studio_v30.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="{!!$view_file!!}" />
						<h1 class="page-header">
							{!!$panel_name!!}
						</h1>						
						<hr class="mb-4" />						
	    				@yield('content')
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->


		@includeWhen(!empty($footer), 'template.'.$template.'.partial.footer')
	</div>
	<!-- END #app -->

	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/highlight.js/highlight.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/js/demo/highlightjs.demo.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>
