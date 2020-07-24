<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ config('app.name', 'Blogger') }}</title> --}}
    <title>Copperplanet</title>
    <meta name="Description" content="Zambias premium software service provider. We work with our clients to provide IT and Software solutions to optimize and enhance their
                business.">

    <meta name="KeyWords"
        content="copperplanet, zambia, hosting, websites, games, lusaka, emails, web development, applications, react, laravel, ecommerce, online shopping, database, server, backend, frontend, customer service">
    {{-- Meta tags --}}
    <meta property="og:title" content="CopperPlanet - Home">
    <meta property="og:image" content="{{asset('img/pic2.jpg')}}">
    <meta property="og:description" content="Zambias premium software service provider. We work with our clients to provide IT and Software solutions to optimize and enhance their
                business.">
    <meta property="og:url" content="{{route('home')}}">
    <meta name="twitter:card" content="summary_large_image">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ed211401f8.js" crossorigin="anonymous"></script>
</head>

<body>


    @yield('content')

    {{-- @include('inc.notification') --}}
    <!--Bootstrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!--Bootstrap Scripts End -->
    @yield('scripts')
</body>

</html>