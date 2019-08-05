<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/storage/cover_image/logo.ico" />

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        html{
            scroll-behavior: smooth;
        }

    </style>
</head>
<body>
    <div id="app">
    @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        </div>
        <div class="container" style="margin-top: 3%;">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2019 Alok.Blog, Inc. &middot; <a href="#" target="_blank">Privacy</a> &middot; <a href="#" target="_blank">Terms & Condition</a></p>
            </footer>  
        </div>
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
