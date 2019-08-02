<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>{{ config('app.name', 'LiBreeze') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">

        <!-- Let browser know website is optimized for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="57x57" href="/storage/def_img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/storage/def_img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/storage/def_img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/storage/def_img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/storage/def_img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/storage/def_img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/storage/def_img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/storage/def_img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/storage/def_img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/storage/def_img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/storage/def_img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/storage/def_img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/storage/def_img/favicon-16x16.png">
        <link rel="manifest" href="/storage/def_img/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/storage/def_img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class="bg-primary text-white">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
            @include('inc.commonNav')
            @yield('content') 
            
            <footer class="mastfoot mt-auto">
                {{-- <div class="inner">
                    <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                </div> --}}
            </footer>
        </div>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/init.js') }}"></script>
    </body>
</html>