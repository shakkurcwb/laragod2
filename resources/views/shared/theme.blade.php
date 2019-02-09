<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LaraGod') }}</title>

        <link href="{{ asset('img/favicon.144x144.png') }}" rel="apple-touch-icon" type="image/png" sizes="144x144">
        <link href="{{ asset('img/favicon.114x114.png') }}" rel="apple-touch-icon" type="image/png" sizes="114x114">
        <link href="{{ asset('img/favicon.72x72.png') }}" rel="apple-touch-icon" type="image/png" sizes="72x72">
        <link href="{{ asset('img/favicon.57x57.png') }}" rel="apple-touch-icon" type="image/png">
        <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
        
        <link rel="stylesheet" href="{{ asset('css/lib/font-awesome/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/separate/vendor/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/separate/vendor/tags_editor.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('styles')

    </head>

    <body class="@auth with-side-menu {{ Request::user()->meta->theme ?? '' }} @endauth">

        @auth

            <header class="site-header"> @include('shared.nav') </header>

            <div class="mobile-menu-left-overlay"></div>
            <nav class="side-menu"> @include('shared.side') </nav>

            <div class="page-content">
                <header class="page-content-header"> @yield('header') </header>
                @yield('content')
            </div>

        @else

            <div class="page-center">
                <div class="page-center-in"> @yield('content') </div>
            </div>

        @endauth

        <script src="{{ asset('js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/lib/popper/popper.min.js') }}"></script>
        <script src="{{ asset('js/lib/tether/tether.min.js') }}"></script>
        <script src="{{ asset('js/lib/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/plugins.min.js') }}"></script>

        <script src="{{ asset('js/lib/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('js/lib/jquery-tag-editor/jquery.caret.min.js') }}"></script>
        <script src="{{ asset('js/lib/jquery-tag-editor/jquery.tag-editor.min.js') }}"></script>
        
        <script src="{{ asset('js/app.js') }}"></script>

        @yield('scripts')

    </body>
    
</html>