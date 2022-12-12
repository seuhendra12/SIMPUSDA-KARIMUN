<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title','Dashboard')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/karimun.png">
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
      }
      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .circular-image {
       border: 1px solid #000000;
       width: 150px;
       height: 150px;
       overflow: hidden;
       border-radius: 50%; /* Tambahkan baris berikut */
     }
     .main-footer{
      bottom:0;
      left:-22px;
      position:fixed;
      right:0;
      z-index:1032
    }

    body {
      font-family: Cambria;
      background-color: #EDEAE3;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>
  @include('dashboard.layouts.header')
  <div class="container-fluid">
    <div class="row">
      @include('dashboard.layouts.sidebar')
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="my-4">
        </div>
        <div class="preloader">
          <div class="loading">
            <img src="/img/poi.gif" width="80">
            <p>Harap Tunggu ...</p>
          </div>
        </div>
        <div class="mb-5">
          @yield('container')
        </div>
        <div class="mt-3"></div>
      </main>
      <script>
        $(document).ready(function(){
          $(".preloader").fadeOut();
        })
      </script>
    </div>
  </div>
</div>
<footer class="main-footer fixed-bottom">
  <strong>Sistem Informasi Manajemen Perpustakaan Daerah Karimun | Copyright © {{ date("Y") }} @Seuhendra Setiawan</strong>
</footer>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
</body>
</html>
