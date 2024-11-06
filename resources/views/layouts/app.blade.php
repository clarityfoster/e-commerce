<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/favicons/shop.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar">
        <span class="toggle"><i class="bi bi-list"></i></span>
        <a class="logo" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="nav-item1">
            <li><a href="" class="nav-items">Men</a> </li> 
            <li><a href="" class="nav-items">Women</a></li>
            <li><a href="" class="nav-items">Kids</a></li>
            <li><a href="" class="nav-items">Accessories</a></li>
            <li class="toggle-cross"><i class="bi bi-x-lg"></i></li>
            <li class="nav-items heart">
                <a href=""><i class="bi bi-heart"></i></a>
            </li>
            <li class="nav-items dropdown profile">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="dropdown-item go-to-acc" href="{{ route('account') }}">Go to account</a>
                        </li>
                        <li>
                            <a class="dropdown-item logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </li>
        </ul>
        <ul class="nav-item2">
            <li class="nav-items">
                <a href=""><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-items heart1">
                <a href=""><i class="bi bi-heart"></i></a>
            </li>
            <li class="nav-items">
                <a href=""><i class="bi bi-bag"></i></a>
            </li>
            <li class="nav-items profile1 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="dropdown-item go-to-acc" href="{{ route('account') }}">Go to account</a>
                        </li>
                        <li>
                            <a class="dropdown-item logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </li>
        </ul>
    </nav>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
<script>
    const toggle = document.querySelector('.toggle');
    const navItem = document.querySelector('.nav-item1');
    const close = document.querySelector('.toggle-cross');
    toggle.addEventListener('click', function(event) {
        event.preventDefault();
        navItem.classList.add('active');
    })
    close.addEventListener('click', function(event) {
        event.preventDefault();
        navItem.classList.remove('active');
    })
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function(e) {
        e.preventDefault();
        if(window.scrollY > 50) {
            navbar.classList.add('bac');
        } else {
            navbar.classList.remove('bac');
        }
    })
</script>