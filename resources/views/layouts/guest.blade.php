<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            {{ trans('panel.site_title') }}
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CSS Files -->
        @vite(['resources/sass/app.scss'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('css/paper-dashboard.min.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>

    <body class="{{ $class }}">
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <!--<a class="navbar-brand" href="#pablo">{{ trans('panel.site_title') }}</a>-->
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link"> <i class="nc-icon nc-book-bookmark"></i>{{ __('Register') }} </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ route('login') }}" class="nav-link"> <i class="nc-icon nc-tap-01"></i>{{ __('Login') }} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper wrapper-full-page " style="background-image: url('{{ asset(($backgroundImagePath ?? "img/bg/fabio-mangione.jpg"))  }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="full-page section-image" filter-color="black">
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
        <!--   Core JS Files   -->
        @vite(['resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/paper-dashboard.min.js') }}" type="text/javascript" defer></script>

        @yield('scripts')
    </body>
</html>
