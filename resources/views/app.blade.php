<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('css/header.css') }}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/global.css') }}">
        <link rel="stylesheet" href="{{asset('css/fonts.css') }}">
        <link rel="stylesheet" href="{{asset('css/sidebar.css') }}">
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <link rel="stylesheet" href="{{asset('css/property-listing.css') }}">
        <link rel="stylesheet" href="{{asset('css/my-profile.css') }}">


        <link rel="stylesheet" href=" https://pro.fontawesome.com/releases/v5.10.0/css/all.css">





        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
