@extends('dashboard.layouts.main')
@section('title','Data Transaksi')
@section('container')
@if(session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fa fa-check"></i>  {{session('pesan')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </div>
  @elseif(session()->has('hapus'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fa fa-check"></i>  {{session('hapus')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </div>
    @elseif(session()->has('update'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <i class="fa fa-check"></i>  {{session('update')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </div>
      @endif
      <div class="col">
        <div class="row">
          <div class="col-sm-6">
            <h3>Halaman Transaksi</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
              <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div><!-- /.col -->
        </div>
        <a href="{{url('transaksi-dashboard')}}/create" class="btn" style="background-color: #4682B4;color: white;"><i class="fa fa-pencil-alt"></i>  Tambah Data</a>
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
                <div class="card-tools">
                  <form class="form" action="/transaksi-dashboard">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" id="search" placeholder="Search" value="{{ request('search') }}">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Judul Buku</th>
                      <th>Status</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  @forelse ($transaksis as $transaksi)
                  <tbody>
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$transaksi->anggota->nama ??''}}</td>
                      <td>{{$transaksi->buku->judul ??''}}</td>
                      <td>
                         @if($transaksi->tgl_dikembalikan == null)
                                <a href="transaksi-dashboard/{{$transaksi->id}}/edit" class="badge badge-primary">Pengembalian</a>
                            @else
                                <p class="badge badge-success">Dikembalikan</p>
                            @endif
                      </td>
                      <td>
                        <form action="/transaksi-dashboard/{{$transaksi->id}}" method="post" class="d-inline">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data ?')"><i class="fa fa-trash"></i></button>
                        </form>
                        <a href="transaksi-dashboard/{{$transaksi->id}}" class="btn btn-sm" style="background-color: #4682B4;color: white;"><i class="fa fa-eye"></i></a>
                      </td>
                    </tr>
                    @empty
                    <td colspan="5" class="text-center">Data Tidak Ada</td>
                  </tbody>
                  @endforelse
                </table>
              </div>
              {{$transaksis ->links('pagination::bootstrap-5')}}
              @endsection