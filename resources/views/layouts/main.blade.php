<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amalfi Terminal</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/navigation.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/footer.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/heroku-ui.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Nunito:300,400,700,800,900" rel="stylesheet">
    @yield('stylesheets')
</head>

<body>

<div id="app">
    @include('layouts.header')

    <div class="page-content">@yield('content')</div>

    @include('layouts.footer')
</div>

<script src="{{ URL::asset('js/navigation.js') }}"></script>
<script src="{{ URL::asset('js/heroku-lib.js') }}"></script>
@yield('scripts')
</body>
</html>