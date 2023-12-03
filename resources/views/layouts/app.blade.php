<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Al Perú')</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" sizes="32x32" />
    <meta name="robots" content="index,follow" />
    <meta name="description" content="@yield('description', config('app.description'))" />
    <meta name="keywords" content="@yield('keywords', config('app.keywords'))" />
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.author') }}" />
    <meta name="application-name" content="@yield('title', config('app.name'))">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,300i,400,600,600i,700,800&display=swap" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- <base href="http://planeatec.com/portafolio/al-peru/"> -->
    <!-- <base href="http://localhost/al-peru/"> -->

    @yield('var_helpers','')
</head>
<body>
    <div id="app">
			@include('shared-home.navbar')
        <main class="">
            @yield('content')
        </main>
    </div>
		@include('shared-home.footer-info')

		<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--Fancybox-->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script> -->
    @yield('script', '')

</body>
</html>
