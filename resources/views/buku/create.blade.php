@extends('layouts.main')
@section('title','SIMPUSDA KARIMUN')
@section('container')
<div class="container my-4">
  <main class="form-signin w-100 m-auto my-4">
    <div class="row justify-content-center">
      <div class="col-lg-6"><div class="card">
        <div class="card-body" style="background-color:#9EE1DE">
          <div class="card-body bg-white">
            <h5 class="text-center">Cari Buku</h5>
            <form class="form" action="/buku">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </form>
            <a href="{{url('login')}}" type="button" class="btn btn-sm btn-danger mb-3"><i class="fa fa-reply"></i>  Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection