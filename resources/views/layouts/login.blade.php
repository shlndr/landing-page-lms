<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LMS') }}</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <!-- Notika icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    
        @yield('content')
          <!-- jquery
              ============================================ -->
          <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
          <!-- bootstrap JS
              ============================================ -->
          <script src="{{ asset('js/bootstrap.min.js') }}"></script>
          <!-- <script src="{{ asset('js/main.js') }}"></script> -->

          </script>
        </body>

        </html>