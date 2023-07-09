<meta charset="utf-8" />
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="@yield('metaDescription')" />
<meta name="author" content="@yield('metaAuthor')" />
<meta name="keywords" content="@yield('metaKeywords')" />

@stack('metaTag')

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="{{ asset('/public/studio_v30') }}/assets/css/vendor.css" rel="stylesheet" />
<link href="{{ asset('/public/studio_v30') }}/assets/css/app.min.css" rel="stylesheet" /> 
<link href="{{ asset('/public/flag-icon') }}/css/flag-icon.css" rel="stylesheet" /> 
<!-- ================== END BASE CSS STYLE ================== --> 
{!! define_aboutapp('ico') !!}
@stack('css')
