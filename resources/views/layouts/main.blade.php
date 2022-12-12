<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title','SIMPUSDA KARIMUN')</title>
    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/sticky-footer-navbar.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/fontawesome/css/all.min.css')}}" />
    <link rel="shortcut icon" href="{{url('/img/karimun.png')}}">
    <link rel="stylesheet" href="{{url('/css/adminlte.min.css')}}">
    <script src="{{url('/js/jquery-2.2.1.min.js')}}"></script>
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
      body { 
        font-family: Cambria;
        background-image: url('/img/perpustakaan.png');
        background-size: 100%;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <!-- Fixed navbar -->
      <div class="navbar mt-auto py-3 fixed-top " style="background-color:#9EE1DE">
      </div>
    </header>

    <!-- Begin page content -->
    <div class="preloader">
      <div class="loading">
        <img src="/img/poi.gif" width="80">
        <p>Harap Tunggu ...</p>
      </div>
    </div>
    <main class="flex-shrink-0">
      @yield('container')
    </main>
    <script>
      $(document).ready(function(){
        $(".preloader").fadeOut();
      })
    </script>
    <div class="mt-auto py-3 fixed-bottom"style="background-color:#9EE1DE">
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
