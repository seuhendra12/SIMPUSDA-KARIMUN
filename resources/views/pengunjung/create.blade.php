@extends('layouts.main')
@section('title','SIMPUSDA KARIMUN')
@section('container')
<div class="container my-4">
  <main class="form-signin w-100 m-auto my-4">
    <form method="POST" action="/pengunjung">
      <div class="row justify-content-center">
        <div class="col-lg-5"><div class="card">
          <div class="card-body" style="background-color:#9EE1DE">
            @if(session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="fa fa-check"></i>  {{session('pesan')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </div>
            @endif
              <h5 class="text-center mb-3">SILAHKAN ISI DAFTAR PENGUNJUNG</h5>
              @csrf
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="nama" id="floatingInput" placeholder="name@example.com" autofocus>
                <label for="floatingInput">Nama Pengunjung</label>
              </div>
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="keperluan" id="floatingPassword" placeholder="Password">
                <label for="floatingInput">Keperluan</label>
              </div>
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="no_telp" id="floatingPassword" placeholder="Password">
                <label for="floatingInput">No Telepon</label>
              </div>
              <div class="form-floating mt-3 mb-3">
                <input type="date" class="form-control" name="tanggal" id="floatingPassword" placeholder="Password">
                <label for="floatingInput">Tanggal</label>
              </div>
              <div class="text-center">
              <a href="{{url('login')}}" class="btn btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
              <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Submit</button>
              <a href="{{url('pengunjung')}}" class="btn" style="background-color: #4682B4;color: white;"><i class="fa fa-eye"></i>  Data</a>
              </div>
            </div>
          </div>
        </form>
      </main>
    </div>
    @endsection