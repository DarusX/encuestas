<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                
                @include('layouts.navbar')

            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @yield('content')

            </div>
        </div>

    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(".navbar-brand").click(function(event){
            event.preventDefault();
            $(".sidebar").toggleClass("hidden-xs");
        });
    </script>
</body>
</html>
