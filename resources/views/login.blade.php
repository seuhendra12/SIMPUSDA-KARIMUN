@extends('layouts.main')
@section('title','SIMPUSDA KARIMUN')
@section('container')
<div class="container my-4">
  <main class="form-signin w-100 m-auto my-4">
    <form method="POST" action="/login">
      <div class="row justify-content-center">
        <div class="col-lg-5"><div class="card">
          <div class="card-body" style="background-color:#9EE1DE">
            <center><img class="mb-3" src="/img/karimun.png" alt="logo PNP" width="100"></center>
            @if(session()->has('errorLogin'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <i class="fa fa-exclamation-triangle"></i>  {{session('errorLogin')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              </div>
              @endif
              <h5 class="text-center mb-3">SISTEM INFORMASI MANAJEMEN<br>PERPUSTAKAAN DAERAH KARIMUN</h5>
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" autofocus>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-2 mb-3" type="submit">Sign in</button>
              <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a  href="/pengunjung/create" class="btn btn-success" style="width: 210px;" type="button"><i class="fa fa-users"></i>   Data Kunjungan</a>
                <a href="{{url('buku')}}/create" class="btn btn-danger" style="width: 210px;"type="button"><i class="fa fa-book"></i>   Data Buku</a>
              </div>
            </div>
          </div>
        </form>
      </main>
    </div>
    @endsection