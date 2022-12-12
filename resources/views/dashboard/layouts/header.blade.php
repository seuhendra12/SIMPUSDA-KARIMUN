<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#438485">
  <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-center" style="background-color:#438485">
  SIMPUSDA KARIMUN</div>
  <button class="navbar-toggler ms-auto mb-2 mb-md-0 d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <marquee><h5 class="text-white mt-1"><img src="/img/karimun.png" width="20px">  DINAS PERPUSTAKAAN DAN KEARSIPAN DAERAH || SISTEM INFORMASI MANAJEMEN PERPUSTAKAAN DAERAH KARIMUN   <img src="/img/karimun.png" width="20px"></h5 class="text-white"></marquee>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="POST">
        @csrf
        <button class="btn text-white" type="submit"><i class="fa fa-sign-out-alt"></i>  Logout</button>
      </form>
    </div>
  </div>
</header>
