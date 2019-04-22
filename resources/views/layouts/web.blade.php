<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @guest
    <style type="text/css">
        #header {
            position: absolute; 
            top: 0; 
            z-index: 0; 
            /*background-image: url('{{ asset('img/header.jpg')  }}'); */
            background-repeat: no-repeat; 
            background-size: cover; 
            width:100%; 
            height: auto; 
            min-height: 100%;
            max-height: auto;
            min-width: 100%;    
        }
        @media screen and (max-height: 90vh) { /* Hacemos la búsqueda y si coincide modificamos las propiedades de la imagen */
            #header {
                height: 110vh;
            }
        }
        .header h1 {
            font-size: 4.5em;
        }
        #card {
            position: relative;
            top: 80vh;
            left: 3%;
            right: 3%;
            width: 94% !important;
            height: auto !important;
            
            z-index: 1;
            margin-bottom: 35em;
            
        }
        footer #footer {
            position: relative; 
        }
    </style>
    @endguest
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md fixed-top navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @guest
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('web.session') }}">{{ __('Asesoramiento') }}</a>
                                </li>
                            @endguest
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdownHelp" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Ayuda <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownHelp">
                                        <a class="dropdown-item" href="{{ route('web.faq') }}">
                                            FAQ
                                        </a>
                                        <a class="dropdown-item" href="{{ route('web.contact-us') }}">
                                            Contactanos
                                        </a>
                                        <a class="dropdown-item disabled" href="#">
                                            Acerca de..
                                        </a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('web.account') }}">
                                            Configuración de cuenta
                                        </a>
                                        <a class="dropdown-item disabled" href="#" >
                                            Mi ayudador
                                        </a>
                                        <a class="dropdown-item disabled" href="#" >
                                            Cambiar mi ayudador
                                        </a>
                                        <a class="dropdown-item" href="{{ url('configuracion-de-cuenta#info-personal') }}">
                                            Información personal
                                        </a>
                                        <a class="dropdown-item" href="{{ url('configuracion-de-cuenta#photo-profile') }}">
                                            Actualizar foto
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar session') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            
            @yield('header')
        </header>

        <main>
            @yield('content')
        </main>

        @guest
        <footer class="text-muted mt-4" >
            <div class="container" id="footer">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
          </div>
        </footer>
        @endguest
    </div>
</body>
</html>
