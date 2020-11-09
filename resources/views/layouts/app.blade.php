<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DORYS drepanocytose</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <!-- ******************** Header Starts Here ******************* -->
    <header>
        <div class="container-fluid header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-dv">

                        <a href="/"><img src="/storage/{{setting('site.logo')}}" alt=""></a>

                </div>
            </div>
        </div>

     <!-- ******************** Nav Starts Here ******************* -->

        <div id="menu-jk" class="headwe-nav container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 nav-div">
                       <nav class="navbar navbar-expand-lg navbar-light">
                           <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{ __("language") }}
                            </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                <div id="app">
                               <li class="nav-item">
                                <a href="{{ route(Route::currentRouteName(), 'en') }}" class="nav-link">EN</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route(Route::currentRouteName(), 'fr') }}" class="nav-link">FR</a>
                            </li> <li class="nav-item">
                                <a href="{{ route(Route::currentRouteName(), 'pt') }}" class="nav-link">PT</a>
                            </li>
                                     <li class="nav-item">
                                        <language-switcher
                                            locale="{{ app()->getLocale() }}"
                                            link-fr="{{ route('welcome', 'fr') }}"
                                            link-en="{{ route('welcome', 'en') }}"
                                             link-pt="{{ route('welcome', 'pt') }}"


                                        ></language-switcher>
                                    </li>



                                </div>

                          </div>

                        </ul></div>

                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>


                          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                              <li class="nav-item active">
                                <a class="nav-link" href="{{route('welcome',app()->getLocale()) }}">{{__("drepanocytose")}} </a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="{{route('dorys',app()->getLocale()) }}" >{{ __("Dorys") }}</a>
                              </li>

                            {{-- <a class="nav-link " href="{{route('topic',app()->getLocale()) }}"  >patients</a> --}}

                               <li class="nav-item">
                                <a class="nav-link " href="{{route('congrè',app()->getLocale()) }}" ><p>{{ __("congrès") }}</p></a>
                              </li>
                               {{-- <li class="nav-item">
                                <a class="nav-link " href="{{route('login',app()->getLocale()) }} " >espace membre</a>
                              </li> --}}
                               <li class="nav-item">
                                <a class="nav-link " href="{{route('contacter',app()->getLocale()) }} " >{{ __("Contactez nous") }}</a>
                              </li>
                            </ul>

                          </div>
<div>
    @guest

    @if (Route::has('login'))

    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('congrè', app()->getLocale()) }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('topic', app()->getLocale()) }}">

                {{ __('creer un topic') }}
            </a>
            <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>


        </div>
    </li>
@endguest
</div>
                        </nav>
                                            </div>
                    <div class="col-lg-3 d-none d-lg-block social-div">
                        <ul class="ulright">
                            <li>
                              <a href="https://www.facebook.com/dorys.asso"> <i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                              <a href="https://twitter.com/DORYS_Drepano"> <i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                            <li>
                                <i class="fab fa-pinterest-square"></i>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </header>
    <main class="py-4">
        @yield('content')
 </main>
    <div class="footer-ablove">

    </div>
    <footer class="container-fluid footer-cont">
        <div class="container">
            <div class="footer-top row">
                <div class="col-md-6 foot-logo">
                    <h1>{{ __(" DORYS ") }}</h1>
                    <p>{{ __("association de lutte contre la drépanocytose") }}</p>
                </div>
                <div class="col-md-6 foot-addr">

                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 1a place des Orprhelins
                            67000 Strasbourg France</li>
                        <li><i class="fas fa-mobile-alt"></i>  00 33 (0) 6 68 51 90 68  </li>
                        <li><i class="far fa-envelope"></i> dorys.asso@gmail.com</li>
                    </ul>
                </div>
            </div>



        </div>
    </footer>

     <div class="copy">
        <div class="container">
            <a href="">2020 &copy; All Rights Reserved | Designed and Developed by LYNDA ALGANI</a>

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i>
                    <span>dorys.asso@gmail.com</span></a>
               <a href=""><i class="fab fa-pinterest-p"></i></a>
                <a href="https://twitter.com/DORYS_Drepano"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/dorys.asso"><i class="fab fa-facebook-f"></i></a>
        </span>
        </div>

    </div>

</body>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="/js/script.js"></script>
{{--
    <script src="{{asset('js/app.js')}}" defer></script> --}}
</html>
