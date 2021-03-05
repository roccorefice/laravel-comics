<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>

            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset("img/logo.png") }}" alt="" srcset="">
                    </a>
                    <a class="navbar-brand" href="#">CHARACTERS</a>
                    <a class="navbar-brand" href="{{ route('guestcomic') }}">COMICS</a>
                    <a class="navbar-brand" href="#">MOVIES</a>
                    <a class="navbar-brand" href="#">TV</a>
                    <a class="navbar-brand" href="#">GAMES</a>
                    <a class="navbar-brand" href="#">VIDEOS</a>
                    <a class="navbar-brand" href="#">NEWS</a>
                    <a class="navbar-brand" href="#">SHOP</a>
    
    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
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
                                    <input type="search" name="" id="" value="Search" class="search">
                                    <i class="fas fa-search"></i>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main >
            {{-- <div class="container"> --}}
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                        
                    </div>
                    
                </div>
            {{-- </div> --}}
        </main>

        <footer>
            <div class="blu_ban">
                <ul class="list-unstyled">
                      <a href=""><li>DIGITAL COMICS</li></a>
                      <a href=""><li>DC MERCHANDISE</li></a>
                      <a href=""><li>PRINT SUBSCRIPTIONS</li></a>
                      <a href=""><li>COMIC SHOP LOCATOR</li></a>
                </ul>
          </div>
          <div class="footer">
              <div class="footer_content container_local">
                  <div class="lists ">
                      
                      <ul>
                          <li>DC COMICS</li>
                          <li>Characters</li>
                          <li>Comics</li>
                          <li>Movies</li>
                          <li>TV</li>
                          <li>Games</li>
                          <li>Videos</li>
                          <li>News</li>
                          <li>
                              <ul>
                                  <li>SHOP</li>
                                  <li>Shop DC</li>
                                  <li>Shop Dc Collectibles</li>
                              </ul>
                          </li>
                      </ul>

                      <ul>
                          <li>DC</li>
                          <li>Terms of Use</li>
                          <li>Privacy Policy</li>
                          <li>Advertising</li>
                          <li>jobs</li>
                          <li>Subsciptions</li>
                          <li>Talent Workshop</li>
                          <li>CPSC Certificates</li>
                          <li>Ratings</li>
                          <li>Shop</li>
                          <li>Contacts us</li>
                      </ul>

                      <ul>
                        <li>SITIES</li>
                        <li>DC</li>
                        <li>MAD magazine</li>
                        <li>DC Kids</li>
                        <li>DC Universe</li>
                        <li>DC Shop</li>
                    </ul>
                  </div>
                   <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="">noted here.</a>  All rights reserved. 
                     <br> <a href="">Cookies Settings</a> </p>
              </div>
          </div>

          <div class="grey_ban ">
              <div class="container_local d_flex">
                  <div class="footer_btn">
                      <button>SIGN UP NOW!</button>
                  </div>
                  <div class="social">
                      <a href="">FOLLOW US</a>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-periscope"></i>


                  </div>
              </div>
          </div>
        </footer>
    </div>
</body>
</html>
