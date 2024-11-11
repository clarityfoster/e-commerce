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
            @if (!Request::routeIs('allProducts'))
                <li><a href="{{ route('allProducts') }}" class="nav-items">All Products</a> </li>
            @endif
            @foreach ($gender as $gender)
                <li>
                    <a href="{{ route('gender', ['id' => $gender->id]) }}" class="nav-items">
                        {{ $gender->gender }}
                    </a>
                </li>
            @endforeach
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
                <a href="{{ route('showWish') }}"><i class="bi bi-heart"></i></a>
            </li>
            <li class="nav-items">
                <a href="{{ route('showCart') }}" class="position-relative">
                    <i class="bi bi-bag"></i>
                    @if ($totalQuantity > 0)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger">
                            {{ $totalQuantity }}
                        </span>
                    @endif
                </a>
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
        <div class="search-box">
            <div class="search-content">
                <h3 class="search-title">What're you looking for?</h3>
                <form action="" class="search-form">
                    @csrf
                    <input type="text" class="search-input" placeholder="Search products">
                    <button type="submit" class="search-btn"><i class="bi bi-search"></i></button>
                </form>
                <span class="search-close"><i class="bi bi-x-lg fs-4"></i></span>
            </div>
        </div>
    </nav>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
            if (window.scrollY > 50) {
                navbar.classList.add('bac');
            } else {
                navbar.classList.remove('bac');
            }
        })
        const openSearch = document.querySelector('.bi.bi-search');
        const searchBox = document.querySelector('.search-box');
        const closeSearch = document.querySelector('.search-close');

        openSearch.addEventListener('click', function(event) {
            event.preventDefault();
            searchBox.classList.add('open');
        });

        closeSearch.addEventListener('click', function(event) {
            event.preventDefault();
            searchBox.classList.remove('open');
        });
    })
</script>
