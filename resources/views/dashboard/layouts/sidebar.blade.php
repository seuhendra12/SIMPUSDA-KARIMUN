<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar bg-dark text-white collapse">
  <div class="position-sticky pt-3">
    <div>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pb-2 d-flex">
        <div class="image mt-2">
          <img src="/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block text-white" href="{{ url('login-dashboard') }}/{{Auth::user()->id}}">{{Auth::user()->nama}}</a>
          {{Auth::user()->level}}
        </div>
      </div>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted text-uppercase">
          <span class="text-white">Menu</span>
        </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class=" nav-link {{ Request::is('dashboard')?'active' : 'text-white' }} " aria-current="page" href="{{ url('dashboard') }}">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('transaksi-dashboard')? 'active' : 'text-white' }}" href="{{ url('transaksi-dashboard') }}">
          <span data-feather="repeat" class="align-text-bottom"></span>
          Transaksi
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('buku-dashboard')? 'active' : 'text-white' }}" href="{{ url('buku-dashboard') }}">
          <span data-feather="book" class="align-text-bottom"></span>
          Data Buku
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('anggota-dashboard')? 'active' : 'text-white'}}" href="{{ url('anggota-dashboard') }}">
          <span data-feather="users" class="align-text-bottom"></span>
          Data Anggota
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('pengunjung-dashboard')? 'active' : 'text-white' }}" href="{{ url('pengunjung-dashboard') }}">
          <span data-feather="users" class="align-text-bottom"></span>
          Data Pengunjung
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('inventaris-dashboard')? 'active' : 'text-white' }}" href="{{ url('inventaris-dashboard') }}">
          <span data-feather="server" class="align-text-bottom"></span>
          Data Inventaris
        </a>
      </li>
    </ul>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted text-uppercase">
          <span class="text-white">Laporan</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('anggota')? 'active' : 'text-white' }}" target="_blank" href="{{url('laporan_anggota')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Anggota
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('buku')? 'active' : 'text-white' }}" target="_blank" href="{{url('laporan_buku')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pengunjung')? 'active' : 'text-white' }}" target="_blank" href="{{url('laporan_pengunjung')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Pengunjung
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('transaksi')? 'active' : 'text-white' }}" target="_blank" href="{{url('laporan_transaksi')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Transaksi
            </a>
          </li>
        </ul>
  </div>
</nav>
