<meta charset="utf-8" />
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<!-- ================== BEGIN core-css ================== -->
<link href="{{ asset('/public/studio_v30') }}/assets/css/vendor.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/css/app.min.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/plugins/flag-icon/css/flag-icon.min.css" rel="stylesheet" />
<!-- ================== END core-css ================== -->
{!! define_aboutapp('ico') !!}
@stack('css')
