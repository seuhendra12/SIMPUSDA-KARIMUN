@extends('dashboard.layouts.main')
@section('title','Detail Data Anggota')
@section('container')
<div class="col">
  <div class="row">
    <div class="col-sm-6">
      <h3>Halaman Detail Data Anggota</h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Detail Data Anggota</li>
      </ol>
    </div><!-- /.col -->
  </div>
  <div>
    <div class="row justify-content-center">
      <div class="card mb-3 col-sm-6">
        <div class="card-body text-center">
          <img src="{{url('img/user.png')}}" class="card-img-top align-center" alt="..." style="width:200px">
        </div>
        <table class="table">
          <tr>
            <td>Nomor Anggota</td>
            <td>:</td>
            <td>{{$anggotas->nomor_anggota}}</td>
          </tr>
          <tr>
            <td>Nama Anggota</td>
            <td>:</td>
            <td>{{$anggotas->nama}}</td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{$anggotas->nik}}</td>
          </tr>
          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$anggotas->tempat_lahir}}, {{date('d F Y', strtotime($anggotas->tanggal_lahir))}}</td>
          </tr> 
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$anggotas->jenis_kelamin}}</td>
          </tr>
          <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td>{{$anggotas->no_telp}}</td>
          </tr>
          <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{$anggotas->pekerjaan->nama}}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$anggotas->alamat}}</td>
          </tr>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-2">
          <a href="{{url('anggota-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection