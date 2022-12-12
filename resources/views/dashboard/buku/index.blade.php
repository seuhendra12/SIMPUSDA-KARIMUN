@extends('dashboard.layouts.main')
@section('title','Data Buku')
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
            <h3>Halaman Buku</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="background-color: #EDEAE3">
              <li class="breadcrumb-item"><a href="{{url ('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Buku</li>
            </ol>
          </div><!-- /.col -->
        </div>
        <div>
          <a href="{{url('buku-dashboard')}}/create" class="btn" style="background-color: #4682B4;color: white;"><i class="fa fa-pencil-alt"></i>  Tambah Data</a>
          <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Buku</h3>

                  <div class="card-tools">
                    <form class="form" action="/buku-dashboard">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" id="search" placeholder="Search" value="{{ request('search') }}">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                    <!-- Start kode untuk form pencarian -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                    @endif
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap text-center">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Cover</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    @forelse ($bukus as $buku)
                    <tbody>
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$buku->judul}}</td>
                        <td>{{$buku->kategori->nama}}</td>
                        <td><img src="{{ asset('/images/'.$buku->file_upload) }}" width="30px"></td>
                        <td>
                          <a href="buku-dashboard/{{$buku->id}}/edit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                          <form action="/buku-dashboard/{{$buku->id}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data ?')"><i class="fa fa-trash"></i></button>
                          </form>
                          <a href="buku-dashboard/{{$buku->id}}" class="btn btn-sm" style="background-color: #4682B4;color: white;"><i class="fa fa-eye"></i></a>
                        </td>
                      </tr>
                      @empty
                      <td colspan="6" class="text-center">Tidak ada data...</td>
                    </tbody>
                    @endforelse
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{$bukus ->links('pagination::bootstrap-5')}}
      @endsection