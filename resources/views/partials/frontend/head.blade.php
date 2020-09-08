<head>
    <title>{{ $name }}</title>
    {{-- meta info --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="N/A" />
    {{-- favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/company/'. $logo) }}">
    {{-- stylesheets --}}
    <link href="{{ asset('frontend/css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- animation-effect -->
    {{-- <link href="{{ asset('frontend/css/animate.min.css') }}" rel="stylesheet"> --}}
    {{-- flex slider  --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}" type="text/css" media="screen" />
    <!---pop-up-box---->
    <link href="{{ asset('frontend/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-font-->
	<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

    @yield('styles')
</head>