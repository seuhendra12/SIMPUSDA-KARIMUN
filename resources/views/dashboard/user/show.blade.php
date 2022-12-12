@extends('dashboard.layouts.main')
@section('title','Pengaturan Akun')
@section('container')
@if(session()->has('update'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fa fa-check"></i>  {{session('update')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</div>
@endif
<div class="col">
  <div class="row">
    <div class="col-sm-6">
      <h3>Halaman Akun User</h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Akun User</li>
      </ol>
    </div><!-- /.col -->
  </div>
  <div>
    <div class="row justify-content-center">
      <div class="card mb-3 col-sm-6">
        <div class="card-body text-center">
          <img src="{{url('img/user.png')}}" class="card-img-top align-center" alt="..." style="width:200px">
        </div>
        <table class="table bordered-0">
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{Auth::user()->nama}}</td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{Auth::user()->username}}</td>
          </tr>
          <tr>
            <td>Level</td>
            <td>:</td>
            <td>{{Auth::user()->level}}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{Auth::user()->email}}</td>
          </tr>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-2">
          <a href="{{url('login-dashboard')}}/{{Auth::user()->id}}/edit" class="btn btn-sm btn-success"><i class="fa fa-edit"></i>  Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection