<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }} 
	 class="dark-mode">
<head>
	@include('template.'.$template.'.partial.head')

	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
	<!-- ================== END page-css ================== -->

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

	@include('template.'.$template.'.partial.scroll-top-btn')


	@include('template.'.$template.'.partial.scripts')

	
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/highlight.js/highlight.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/js/demo/highlightjs.demo.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
	<script src="{{ asset('/public/studio_v30') }}/assets/js/demo/table-plugins.demo.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>
