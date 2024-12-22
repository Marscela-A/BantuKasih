<style>
    .navbar-border{
        border-bottom: 3px solid #AF0000;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top bg-white navbar-border py-3">
  <div class="container-fluid px-5">
    
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 25px;">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="{{route('donasi.kategori', 'disabilitas')}}">Disabilitas</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="{{route('donasi.kategori', 'bencana alam')}}">Bencana Alam</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="{{route('donasi.kategori', 'panti asuhan')}}">Panti Asuhan</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="{{route('aboutus')}}">Tentang Kami</a>
            </li>
        </ul>

        <form class="d-flex mx-3" role="search" action="{{route('search')}}" method="GET">
            <input class="form-control me-2" type="search" name="search"placeholder="Search" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>


        <a class="nav-link" href="{{route('profile')}}">
            <img src="{{ asset('img/profile.png') }}" alt="Profile" class="profile-logo me-2" style="height: 35px;">
        </a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{__('message.language') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('setLocale', 'id') }}">{{ __('message.indonesia') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('setLocale', 'en') }}">{{ __('message.english') }}</a></li>
                </ul>
            </li>
        </ul>

    </div>

  </div>
</nav>