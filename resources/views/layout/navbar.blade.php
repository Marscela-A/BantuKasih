<style>
    .navbar-border{
        border-bottom: 3px solid #AF0000;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top bg-white navbar-border py-3">
  <div class="container-fluid px-5">
    
    <a class="navbar-brand">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 25px;">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                    Donasi
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Disabilitas</a></li>
                    <li><a class="dropdown-item" href="#">Bencana Alam</a></li>
                    <li><a class="dropdown-item" href="#">Panti Asuhan</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                    Donor
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Darah</a></li>
                    <li><a class="dropdown-item" href="#">Organ</a></li>
                </ul>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
            </li>
        </ul>

        <form class="d-flex mx-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>


        <a class="nav-link" href="">
            <img src="{{ asset('img/profile.png') }}" alt="Profile" class="profile-logo me-2" style="height: 35px;">
        </a>

    </div>

  </div>
</nav>