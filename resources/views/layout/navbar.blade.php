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
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Donasi</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Donor</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Kegiatan Sosial</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

  </div>
</nav>