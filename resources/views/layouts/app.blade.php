<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    .navbar-border{
        border-bottom: 3px solid #AF0000;
    }
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg fixed-top bg-white navbar-border py-3">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 25px;">
                </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="{{ route('donasi.kategori', 'disabilitas') }}">Disabilitas</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="{{ route('donasi.kategori', 'bencana alam') }}">Bencana Alam</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="{{ route('donasi.kategori', 'panti asuhan') }}">Panti Asuhan</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="{{ route('aboutus') }}">Tentang Kami</a>
                    </li>
                </ul>
                <form class="d-flex mx-3" role="search" action="{{route('search')}}" method="GET">
                    <input class="form-control me-2" type="search" name="search"placeholder="Search" aria-label="Search" required>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">{{ __('Masuk') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>