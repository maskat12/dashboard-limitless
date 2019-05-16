<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Global stylesheets -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="/limitless/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS Files -->
	<script src="/limitless/js/main/jquery.min.js"></script>
	<script src="/limitless/js/main/bootstrap.bundle.min.js"></script>
	<script src="/limitless/js/plugins/loaders/blockui.min.js"></script>
	<script src="/limitless/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="/limitless/js/plugins/visualization/c3/c3.min.js"></script>
	<script src="/limitless/js/plugins/visualization/d3/d3.min.js"></script>
    
    <!-- /Core Js Files -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/assets/js/app.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')
    <div class="page-content">
        @if(isset($menu))
            <!-- Main sidebar -->
            @include('layouts.sidebar')
            <!-- /main sidebar -->
        @endif
        <div class="content-wrapper">
            @yield('content')
        </div>
	</div>
    @include('layouts.footer')
    @yield('javascript')
</body>
</html>
