@extends('dashboard.layouts.main')
@section('title','Detail Buku')
@section('container')
<div class="col">
  <div class="row">
    <div class="col-sm-6">
      <h3>Halaman Detail Buku</h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
        <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Detail Buku</li>
      </ol>
    </div><!-- /.col -->
  </div>
  <div>
    <div class="row justify-content-center">
      <div class="card mb-3 col-sm-6">
        <div class="card-body text-center">
          <img src="{{asset('/images/'.$bukus->file_upload)}}" class="card-img-top align-center" alt="..." style="width:200px">
        </div>
        <table class="table">
          <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td>{{$bukus->judul}}</td>
          </tr>
          <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>{{$bukus->pengarang}}</td>
          </tr>
          <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td>{{$bukus->penerbit}}</td>
          </tr>
          <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td>{{$bukus->tahun}}</td>
          </tr>
          <tr>
            <td>ISBN</td>
            <td>:</td>
            <td>{{$bukus->isbn}}</td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>{{$bukus->kategori->nama}}</td>
          </tr>
          <tr>
            <td>Klasifikasi</td>
            <td>:</td>
            <td>{{$bukus->klasifikasi}}</td>
          </tr>
          <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td>{{$bukus->jumlah}}</td>
          </tr>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-2">
          <a href="{{url('buku-dashboard')}}" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i>  Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection