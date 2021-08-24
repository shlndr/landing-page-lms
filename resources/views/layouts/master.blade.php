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



    <!-- style CSS

        ============================================ -->

    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- responsive CSS

        ============================================ -->

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Notika icon CSS

        ============================================ -->

    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">

    <!-- modernizr JS

        ============================================ -->

    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>



    @yield('styles')

</head>



<body>

    <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->

        <!-- Start Header Top Area -->

        <div class="header-top-area" style="margin-bottom: 40px;">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8">

                        <!-- <div class="logo-area">

                            <a href="#">

                             <img src="{{ asset('frontend/images/logo.png') }}">

                            </a>

                        </div> -->

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-4 col-xs-4">

                        @guest

                        @else

                        <ul class="nav navbar-nav notika-top-nav">

                            <li>

                                <a class="dropdown-item" href="{{ route('logout') }}"

                                   onclick="event.preventDefault();

                                                 document.getElementById('logout-form').submit();">

                                    <img src="{{ asset('images/logout-32.ico') }} ">

                                </a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                    @csrf

                                </form>

                            </li>

                        </ul>

                            

                        @endguest

                    </div>

                </div>

            </div>

        </div>

        <!-- End Header Top Area -->

        @yield('content')

          <!-- Start Footer area-->

            <div class="footer-copyright-area" style="">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="footer-copy-right">

                                <p>{{ config('app.footer', 'LMS') }}</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- End Footer area-->

            <!-- jquery

                ============================================ -->

            <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

            <!-- bootstrap JS

                ============================================ -->

            <script src="{{ asset('js/bootstrap.min.js') }}"></script>



            @yield('scripts')

        </body>



        </html>